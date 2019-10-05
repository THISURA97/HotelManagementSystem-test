<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Refresh Inventory</title>

    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/dashStyle.css">

</head>
<body>

<div class="body">
    
<div class="div container">
    
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card shadow" style="width: 20rem;">
                <div class="inner">
                    <img src="dashboard1.jpg" class="card-img-top" alt="Card image cap">
                </div>

                <div class="card-body text-center">
                        <h5 class="card-title">Stock</h5>
                        <p class="card-text">In here you can quicky take a look about the stock details and manage details.</p>
                        <a href="{{route('categories.index')}}" class="btn btn-primary">Manage</a>
                    </div>
                </div> 
            </div>

            <div class="col-md-4">
            <div class="card shadow" style="width: 20rem;">
            <div class="inner">
                <img src="requestitems.jpg" class="card-img-top" alt="Card image cap">
            </div>
                    <div class="card-body text-center">
                        <h5 class="card-title">Request</h5>
                        <p class="card-text">You can request items when stock size decrece.And then you can request items to refill.</p>
                        <a href="{{route('requestimtems.index')}}" class="btn btn-primary">Manage</a>
                    </div>
                </div> 
            </div>

            <div class="col-md-4">
            <div class="card shadow" style="width: 20rem;">
                <div class="inner">
                    <img src="userprofile.jpg" class="card-img-top" alt="Card image cap">
                </div>
                    <div class="card-body text-center">
                        <h5 class="card-title">Profile</h5>
                        <p class="card-text">Check my profile and add new details to the profile and eddit current details to maintain your profile.</p>
                        <a href="{{route('dashboard.profile')}}" class="btn btn-primary">Manage</a>
                    </div>
                </div> 
            </div>
</div>        
    
</body>
</html>