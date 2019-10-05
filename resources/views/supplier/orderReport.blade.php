<!DOCTYPE html>
<html >
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
    <title>Supplier Report</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="css/bootstrap.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="css/custom-style.css" rel="stylesheet" />
    <!-- GOOGLE FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css' />

</head>
<body>
<div class="container">

    <div class="row pad-top-botm ">
        <div class="col-lg-6 col-md-6 col-sm-6 ">
            <img src="img/logo1.png" style="padding-bottom:20px;" />
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">

            <strong>   Refresh Hotel Hikkaduwa.</strong>
            <br />
            <i>Address :</i> No: 361, Galle Road,
            <br />
            Hikkaduwa.

        </div>
    </div>
    <div  class="row text-center contact-info">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <hr />
            <span>
                 <strong>Email : </strong>   refreshhikkaduwa@gmail.com
             </span>
            <span>
                 <strong>Call : </strong>  +94 91 227 7332
             </span>
            <span>
                 <strong>Fax : </strong>  +012340-908- 890
             </span>
            <hr />
        </div>
    </div>
    <br><br>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="table-responsive">
                <center> <strong> Order Details from {{$start}} to {{$end2}} </strong> </center> <br>
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>

                        <th>Supplier Name</th>
                        <th>Item Name</th>
                        <th>Quantity(kg)</th>
                        <th>Sub Total(Rs.)</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php  $total  = 0; ?>

                    @foreach ($flyer as $row3 )
                        @if($row3->status == 'Accepted')
                    <tr>
                        <td>{{$row3->supplier_name}}</td>
                        <td>{{$row3->item_name}}</td>
                        <td>{{$row3->Quantity}}</td>
                        <td>{{$row3->total_price}}</td>


                        @php($total += $row3->total_price)
                    </tr>
                        @endif
                    @endforeach
                    </tbody>
                </table>
            </div>
            <hr />
            <div class="ttl-amts">

                <h5>  Total Amount :Rs. {{$total}} </h5>
            </div>
            <hr />

        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <strong> Important: </strong>
            <ol>
                <li>
                    This is an electronic generated report so doesn't require any signature.

                </li>

            </ol>
        </div>
    </div>
    <div class="row pad-top-botm">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <form method="get" action="GeneratePdf">
                <input type="hidden" name="start" value="{{$start}}">
                <input type="hidden" name="end" value="{{$end2}}">

                <button type="submit" class="btn btn-success btn-lg">Download In Pdf</button>
            </form>



        </div>
    </div>
</div>

</body>
</html>