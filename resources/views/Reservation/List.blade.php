@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="row mt40">
        <div class="col-md-10">
            <br><br>
            <h2><a href="/Frontdesk"><i class="fa fa-arrow-left" style="color: orange"></i></a>&nbsp&nbspReservation&nbsp<b>List</b><button id="exportButton" class="btn btn-lg btn-danger clearfix" style="margin-left:300px"><span class="fa fa-file-pdf-o"></span> Export to PDF</button>
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
            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name" class="form-control" style="font-size: 18px">
            <br>

        </div>
        <table id="laravel_crud" class="table table-hover" cellspacing="15" style="font-size: 18px;font-family: sans-serif, Verdana;backdrop-filter: blur(20px)">


            <thead>
            <tr style="background-color: orange">

                <th>Customer Name</th>
                <th>RoomNo</th>
                <th>Basis</th>
                <th>CheckIn</th>
                <th>CheckOut</th>
                <th>Updated at</th>
                <td colspan="2">Action</td>

            </tr>
            </thead>
            <tbody>


            @foreach($Reservation as $Reservation)
                <tr >


                    <td>{{ $Reservation->RoomType }}</td>
                    <td>{{ $Reservation->RoomNo }}</td>
                    <td>{{ $Reservation->Basis }}</td>
                    <td>{{ $Reservation->CheckIn }}</td>
                    <td>{{ $Reservation->CheckOut }}</td>
                    <td>{{ date('d m Y', strtotime($Reservation->created_at)) }}</td>
                    <td><a href="{{ route('Reservation.edit',$Reservation->id)}}" class="btn btn-primary">Edit</a></td>
                    <td>
                        <form action="{{ route('Reservation.destroy', $Reservation->id)}}" method="post">
                            {{ csrf_field() }}
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
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

                            RoomNo: {type: String},
                            Basis: {type: String},
                            CheckIn: {type: Date},
                            CheckOut: {type: Date},
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

                            { field: "RoomNo", title: "RoomNo", width: 100 },
                            { field: "Basis", title: "Basis", width: 100 },
                            { field: "CheckIn", title: "CheckIn", width: 120 },
                            { field: "CheckOut", title: "CheckOut", width: 120 },

                        ],
                        {
                            margins: {
                                top: 50,
                                left: 50
                            }
                        }
                    );

                    pdf.saveAs({
                        fileName: "Reservations"
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
