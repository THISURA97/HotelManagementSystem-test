@extends('master')

@section('content')

<style>
#myInput {
  background-image: url('../search.png'); /* Add a search icon to input */
  background-position: 10px 12px; /* Position the search icon */
  background-repeat: no-repeat; /* Do not repeat the icon image */
  width: 30%; /* Full-width */
  font-size: 20px; /* Increase font-size */
  padding: 12px 20px 12px 40px; /* Add some padding */
  border: 1px solid #ddd; /* Add a grey border */
  margin-bottom: 12px; /* Add some space below the input */
  border-radius:4px;
}

body{
/*background-image: linear-gradient(to right, #20c4d6, #043136);*/
background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url("../dashboard1.jpg");
    height: 90vh;
    background-size: cover;
    background-position: center;
    font-family: sans-serif;
}
.col-md-12 h1{
    margin: 0 0 30px;
    padding: 0;
    color: #fff;
    font-family: sans-serif;
}
#exportButton{
    margin-bottom: 20px;
    margin-right:0px;
}
#exportButton1{
    margin-bottom: 20px;
    margin-right:-300px;
}
.btn btn-primary{

    font-size: 30px;
}

</style>

    <div class="row">
        <div class="col-md-12">
        <br/>
        <h1 align="center">Stock Details</h1>
        <br/>
        @if($message = Session::get('Successful'))
        <div class="alert alert-success">
            <p>{{$message}}</p>
        </div>

        @endif

        <div align = "left">
            <a href="{{route('stocks.create')}}" class="btn btn-primary"><span class="fa fa-file-pdf-o" style="font-size: 20px "></span>Add</a>
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">
            <div align = "right">
            <a href = "{{ route('pdfview',['download'=>'pdf']) }}" button id="exportButton1" class="btn btn-lg btn-danger clearfix" style="margin-left:300px"><span class="fa fa-file-pdf-o"></span> Export to PDF</a></button>
            <a href = "{{ url('/dash') }}" button id="exportButton" class="btn btn-lg btn-primary clearfix" style="margin-left:300px"><span class="fa fa-file-pdf-o"></span> Home</a></button>
        </div>
        </div>





        <table class="table table-striped table-dark" id="myTable" style="font-size: 15px">
            <tr id="row">
                    <th>Product ID</th>
                    <th>Section</th>
                    <th>Category</th>
                    <th>Product</th>
                    <th>Stock Size</th>
                    <th>Assigned Quantity</th>
                    <th>Edit</th>
                    <th>Delete</th>

            </tr>
            @foreach($stocks as $stk)
            <tr>
                <td>{{$stk['product_id']}}</td>
                <td>{{$stk['section']}}</td>
                <td>{{$stk['category']}}</td>
                <td>{{$stk['product']}}</td>
                <td >{{$stk['total_stock']}}</td>
                <td style="width: 80px">{{$stk['total_assign']}}</td>
                <td><a type="button" class="btn btn-success" href="{{action('StockController@edit',$stk['id'])}}" style="font-size: 15px">Edit</a></td>
                <td>
                    <form method="post" class="delete_form" action="{{action('StockController@destroy', $stk['id'])}}">
                        {{csrf_field()}}
                        <input type="hidden" name="_method" value="DELETE" />
                        <button type="submit" class="btn btn-danger" style="font-size: 15px">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
        </div>
    </div>


<script type="text/javascript">
$(document).ready(function(){
    $('.delete_form').on('submit',function(){
        if(confirm("Are you want to delete it??"))
        {
            return true;
        }
        else{
            return false;
        }
    });
});


function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById('myInput');
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName('tr');

  // Loop through all list items, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if(td){
        txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
        } else {
            tr[i].style.display = "none";
        }
    }
  }
}
function Math(){
    var remain,total_stock,total_assign;
    remain = total_stock - total_assign;

    alert("The remaining stock is : "+remain);
}


jQuery(function ($) {
            $("#exportButton").click(function () {
                // parse the HTML table element having an id=exportTable
                var dataSource = shield.DataSource.create({
                    data: "#stocks",
                    schema: {
                        type: "table",
                        fields: {
                            product_id: { type: String },
                            section: { type: String },
                            category: { type: String },
                            product: { type: String },
                            total_stock: { type: String },
                            total_assign: { type: String },
                        }
                    }
                });

                // when parsing is done, export the data to PDF
                dataSource.read().then(function (data) {
                    var pdf = new shield.exp.PDFDocument({
                        author: "Inventory",
                        created: new Date()
                    });

                    pdf.addPage("a4", "portrait");

                    pdf.table(

                        50,
                        20,
                        data,
                        [
                            { field: "product_id", title: "Product ID", width: 80 },
                            { field: "section", title: "Section", width: 80 },
                            { field: "category", title: "Category", width: 100 },
                            { field: "product", title: "Product", width: 100 },
                            { field: "total_stock", title: "Stock Size", width: 150 },
                            { field: "total_assign", title: "Assign Value", width: 150 },

                        ],
                        {
                            margins: {
                                top: 50,
                                left: 50
                            }
                        }
                    );

                    pdf.saveAs({
                        fileName: "PrepBootstrapPDF"
                    });
                });
            });
        });

</script>



@endsection
