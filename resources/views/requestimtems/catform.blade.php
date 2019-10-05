<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add New Category</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<style>

body{
    background-image: linear-gradient(to right, #20c4d6, #043136);
    margin-top: 150px !important;
}
.register-left{
    text-align: center;
    color: #fff;
    padding: 30px;
}
.register-left img
{
    margin-top: 60px;
    margin-bottom: 18px;
    width: 80px;
    animation: mover 1s infinite alternate;
}
.register-left p
{
    padding 20px 20px 0;
}
.register-right{
    padding 40px 40px 0;
}
.register-left .btn-primary{
    border-radius: 1.5rem;
    border: none;
    width: 120px;
    background: #f8f8f8;
    font-weight: 700;
    color: #555;
    margin-top: 20px;
    padding: 10px;
}
.register-left .btn-primary:hover
{
    background: #000;
}
.register-right
{
    border: none;
    background: #f8f8f8;
    border-top-left-radius: 10% 50%;
    border-bottom-left-radius:10% 50%;
    padding: 60px;
}
.register-right h2
{
    text-align: center;
    margin-bottom: 10px;
    color: #555;
}
.register-form
{
    padding: 40px;
}
.register-right .btn-primary
{
    float: right;
    border-radius: 1.5rem;
    border: none;
    width: 120px;
    background: #086a85;
    font-weight: 700;
    color: #ffffff;
    margin-top: 60px;
    padding: 10px;
}
.register-right .btn-primary
{
    background: #086a85;
}
@keyframes mover
{
    0%{transform: translateY(0);}
    100%{transform: translateY(-20px);}
}

</style>    
</head>
@extends('master')

@section('content')
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset=md-1">
                <div class="row">
                    <div class="col-md-5 register-left">
                        <img src="../arrowdownhead.png"> 
                        <h3>Join Us<h3>
                        <p>Add New Category</p>
                        <button type="button" class="btn btn-primary">Home</button>
                    </div>
                     @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                        </ul>
                         @endif
                        <form method="post" action="">
                            {{csrf_field()}}
                                <div class="col-md-7 register-right">
                                    <h2>Add New Categories</h2>
                                    <div class="register-form">
                                    <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Category Type">
                                    </div>
                                    <select name="choose...">
                                    <option value="volvo">Volvo</option>
                                    <option value="saab">Saab</option>
                                    <option value="fiat">Fiat</option>
                                    <option value="audi">Audi</option>
                                    </select>
                                    <button type="button" class="btn btn-primary">Add</button>
                                </div>
                        </form>
                </div>
    </div>

    </div>
    </div>
    
</body>
</html>