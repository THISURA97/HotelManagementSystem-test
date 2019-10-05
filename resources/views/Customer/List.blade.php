@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="row mt40">
        <div class="col-md-10">
            <br><br>
            <h2><a href="/Frontdesk"><i class="fa fa-arrow-left" style="color: orange"></i></a>&nbsp&nbspCustomer&nbsp<b>List</b><button id="exportButton" class="btn btn-lg btn-danger clearfix" style="margin-left:300px"><span class="fa fa-file-pdf-o"></span> Export to PDF</button>
                <button class="btn btn-lg btn-primary clearfix " type="submit1" ><span class="fa fa-print"></span>Print table</button>
            </h2>
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
    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name" class="form-control" style="font-size: 20px">
    <br>
<br>
    </div>
        <table id="laravel_crud"  class="table table-hover" cellspacing="15" style="font-size: 18px;font-family: sans-serif, Verdana;backdrop-filter: blur(20px)">

            <thead>
            <tr style="background-color: orange">

                <th>FirstName</th>
                <th>LastName</th>
                <th>NIC</th>
                <th>Mobile</th>
                <th>Email</th>
                <th>Last updated</th>
                <th colspan="3" style=" text-align: center">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($Customer as $Customer)
                <tr>

                    <td >{{ $Customer->FirstName }}</td>
                    <td>{{ $Customer->LastName }}</td>
                    <td>{{ $Customer->NIC }}</td>
                    <td>{{ $Customer->Mobile }}</td>
                    <td>{{ $Customer->Email }}</td>
                    <td>{{ date('d m Y', strtotime($Customer->created_at)) }}</td>
                    <td><a href="{{ route('Customer.edit',$Customer->id)}}" class="btn btn-primary">Edit</a></td>
                    <td>
                        <form action="{{ route('Customer.destroy', $Customer->id)}}" method="post">
                            {{ csrf_field() }}
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>

                        </form>
                    </td>
                    <td> <a href="{{route('Reservation.create',$Customer->FirstName)}}"class="btn btn-secondary">Reserve</a></td>
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
                            FirstName: { type: String },
                            LastName: { type: String },
                            NIC: { type: Number },
                            Mobile: { type: Number },
                            Email: { type: String },

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
                            { field: "FirstName", title: "First Name", width: 80 },
                            { field: "LastName", title: "Last Name", width: 80 },
                            { field: "NIC", title: "NIC", width: 100 },
                            { field: "Mobile", title: "Mobile", width: 100 },
                            { field: "Email", title: "Email Address", width: 150 },

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
