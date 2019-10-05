@extends('layouts.app')

@section('content')
    <div class="container" >
        <div class="row mt40">
            <div class="col-md-10">
                <br><br>
                <h2><a href="/Frontdesk"><i class="fa fa-arrow-left" style="color:orange"></i></a>&nbsp&nbspRoom&nbsp<b>List</b><button id="exportButton" class="btn btn-lg btn-danger clearfix" style="margin-left:300px"><span class="fa fa-file-pdf-o"></span> Export to PDF</button>
                    <button class="btn btn-lg btn-primary clearfix " type="submit1" ><span class="fa fa-print"></span>Print table</button></h2>
            </div>


            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif


            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Opps!</strong> Something went wrong<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="container">
                <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name" class="form-control" style="font-size: 18px">
                <br>

            </div>
            <table id="laravel_crud" class="table table-hover" cellspacing="15" style="font-size: 18px;font-family: sans-serif, Verdana;backdrop-filter: blur(30px)">
                <thead>
                <tr style="background-color: orange">


                    <th>RoomType</th>
                    <th>RoomNo</th>
                    <th>Status</th>
                    <th>Last updated</th>
                    <th colspan="4" style=" text-align: center">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($Room as $Room)
                    <tr>


                        <td>{{ $Room->RoomType }}</td>
                        <td>{{ $Room->RoomNo }}</td>
                        <td>{{$Room->Status}}</td>
                        <td>{{ date('d m Y', strtotime($Room->created_at)) }}</td>
                        <td><a href="{{ route('Room.edit',$Room->id)}}" class="btn btn-primary">Edit</a></td>
                        <td>
                            <form action="{{ route('Room.destroy', $Room->id)}}" method="post">
                                {{ csrf_field() }}
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Delete</button>

                            </form>
                        </td>
                        <td> <a href="{{route('Customer.create',$Room->RoomNo)}}"class="btn btn-secondary">New customer</a></td>
                        <td> <a href="Customer"class="btn btn-secondary">Old customer</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>

    </div><link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/light/all.min.css" />
    <script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>
    <script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/jszip.min.js"></script>

    <script type="text/javascript">
        jQuery(function ($) {
            $("#exportButton").click(function () {
                // parse the HTML table element having an id=exportTable
                var dataSource = shield.DataSource.create({
                    data: "#laravel_crud",
                    schema: {
                        type: "table",
                        fields: {
                            RoomType: { type: String },
                            RoomNo: { type: String },
                            Status: { type: Number },

                        }
                    }
                });

                // when parsing is done, export the data to PDF
                dataSource.read().then(function (data) {
                    var pdf = new shield.exp.PDFDocument({
                        author: "FrontEnd",
                        created: new Date()
                    });

                    pdf.addPage("a4", "portrait");

                    pdf.table(

                        50,
                        20,
                        data,
                        [
                            { field: "RoomType", title: "Room type", width: 100 },
                            { field: "RoomNo", title: "Room no", width: 100 },
                            { field: "Status", title: "Status", width: 100 },

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

        function myFunction() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("laravel_crud");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }

        $(function () {
            $('button[type="submit1"]').click(function () {
                var pageTitle = 'Customer List',
                    stylesheet = '//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css',
                    win = window.open('', 'Print', 'width=300,height=300');
                win.document.write('<html><head><title>' + pageTitle + '</title>' +
                    '<link rel="stylesheet" href="' + stylesheet + '">' +
                    '</head><body>' + $('.table')[0].outerHTML + '</body></html>');
                win.document.close();
                win.print();
                win.close();
                return false;
            });
        });
    </script>
@endsection
