<!Doctype html>
<head xmlns="http://www.w3.org/1999/html">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

</head>
<div class="container">
    <div class="row">
        <div class="col-md-2" style="margin-top: 50px">
            <img  src="./images/logo.png">
        </div>
        <div class="col-md-6">
            <h1 align="left">Refresh Hotel & Restaurant</h1>
            <h5 align="left"> No: 361, Galle Road, Hikkaduwa, Sri Lanka</h5>
            <h5 align="left">Phone: +94 91 227 7332</h5>
            <h5 align="left">Email: refreshhikkaduwa@gmail.com</h5>
        </div>
    </div>
    <hr style="color: #0f0f0f">
    <br>
    <div class="row">
        <div class="col-md-6">
            <h3>{{$title}}</h3>
        </div>
        <div class="col-md-6" style="margin-left: 1100px">
            <form method="get" action="/download-report-online">
                <input type="hidden" name="month" value="{{$month}}">
                <input type="hidden" name="year" value="{{$year}}">
                <button class="btn btn-danger btn-md">Create PDF</button>
            </form>
        </div>
    </div>

    <br><br>

    <div class="table-responsive" style="font-size: 16px">
        <table class="table table-striped" cellspacing="15" >

            <thead class="thead-dark">
            <tr>
                <th></th>
                <th>ID</th>
                <th>FirstName</th>
                <th>LastName</th>
                <th>NIC</th>
                <th>PhoneNo</th>
                <th>Email</th>
                <th>NoOfRooms</th>
                <th>RoomType</th>
                <th>Basis</th>
                <th>Check-In</th>
                <th>Check-Out</th>

                <th></th>

            </tr>
            </thead>


            <tbody>
            @foreach($booking as $row)
                <tr>
                    <th scope="row"></th>
                    <td>{{$row->id}} </td>
                    <td>{{$row->FirstName}}</td>
                    <td>{{$row->LastName}}</td>
                    <td>{{$row->NIC}}</td>
                    <td>{{$row->Mobile}}</td>

                    <td>{{$row-> Email}}</td>
                    <td>{{$row -> NoOfRooms}}</td>

                    <td>{{$row -> Type}}</td>
                    <td>{{$row->Basis}}</td>
                    <td>{{$row -> checkIn}}</td>


                    <td>{{$row ->checkOut}}</td>




                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
    </div>

</html>
