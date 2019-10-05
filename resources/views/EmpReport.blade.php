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
<body>
<div class="container">
    <div class="row">
        <div class="col-md-2" style="margin-top: 50px">
            <img  src="./img/logo.png">
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
            <h3>Employees Details</h3>
        </div>

    </div>

    <div class="row">

        <table class="table table-striped" style="margin-top: 50px">
            <tr>


                <th >Name</th>
                <th >ID Number</th>
                <th>NIC</th>
                <th>Section</th>
                <th>Designation</th>
                <th >Contact NO</th>
                <th style="background-color:#fffbff;" > </th>

            </tr>




            @foreach($emps as $employee)
                <tr>
                    <td>{{$employee->fname }} {{ $employee-> lname }}</td>
                    <td>{{$employee->id}}</td>
                    <td>{{$employee->nic}}</td>
                    <td>{{$employee->section}}</td>
                    <td>{{$employee->designation}}</td>
                    <td>{{$employee->cnumber}}</td>


                </tr>

            @endforeach

        </table>

    </div>
</div>
</body>
</html>