<!Doctype html>
<head>
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
    </div>

    <br>
    <div class="row">
        <h4><b>Income List</b></h4>
        <table class="table table-striped">

            <tr>

                <th>Category</th>
                <th>Date and Time</th>
                <th>Amount(Rs.)</th>

            </tr>
            @foreach ($income as $inc )
                <tr>

                    <td>{{$inc->category}}</td>
                    <td>{{$inc->created_at}}</td>
                    <td>{{$inc->amount}}</td>

                </tr>
            @endforeach
            <tr>

                <td></td>
                <td><b>Total Income</b></td>
                <td><b>{{$income_total}}</b></td>
            </tr>
        </table>
    </div>
    <div class="row">
        <h4><b>Expence List</b></h4>
        <br>
        <table class="table table-striped">
            <tr>

                <th>Category</th>
                <th>Date and Time</th>
                <th>Amount(Rs.)</th>

            </tr>
            @foreach ($exps as $exp )
                <tr>

                    <td>{{$exp->category}}</td>
                    <td>{{$exp->created_at}}</td>
                    <td>{{$exp->amount}}</td>

                </tr>
            @endforeach
            <tr>
                <td></td>
                <td ><b>Total Expence</b></td>
                <td><b>{{$exp_total}}</b></td>
            </tr>
        </table>
    </div>
    <br>
    <div class="row">
        <table class="table table-striped">
            <tr>
                <td><b>Total Income</b></td>
                <td><b>Total Expence</b></td>
                <td><b>Total Profit</b></td>
            </tr>
            <tr>
                <td><b>{{$income_total}}</b></td>
                <td><b>{{$exp_total}}</b></td>
                <td><b>{{$income_total - $exp_total}}</b></td>
            </tr>

        </table>
    </div>
    <br><br>

</div>
</div>
</body>
</html>
