<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Requested Item Details</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<style>

body{
    background-image: linear-gradient(to right, #20c4d6, #043136);
    margin-top: 150px !important;
    font-family: sans-serif;
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
    padding: 100px;
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
.edit-form{
    position: absolute;
    top: 60%;
    left: 80%;
    transform: translate(-50%,-50%);
    width: 400px;
    padding: 40px;
    background: rgba(0,0,0,.8);
    box-sizing: border-box;
    box-shadow: 0 15px 25px rgba(0,0,0,.5);
    border-radius: 10px;
}
.edit-form h1{
    margin: 0 0 30px;
    padding: 0;
    color: #fff;
    font-family: sans-serif;
}
.box select{
	color: #000;
	padding: 10px;
	width: 319px;
	height: 40px;
	border: none;
	font-size: 16px;
	box-shadow: 0 5px 25px rgba(0,0,0,.5);
	-webkit-apperance: button;
	outline: none;
    border-radius: 10px;

}


</style>    
</head>

@extends('master')

@section('content')

<body> 
<div class="col-md-10 offset=md-1">
                <div class="row">
                    <div class="col-md-5 register-left">
                    <img src="../arrowdownhead.png">
                        <h3>Join Us<h3>
                        <p>Add New Category</p>
                        <a href="{{route('stocks.index')}}" button type="button" class="btn btn-primary">Home</a></button>
                    </div>
<div class="row">
    <div class="edit-form">
        <br/>
        <h1 align ="center">Edit Request Details</h1>
        <br/>
        @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
            </ul>
        @endif
        <form method="post" action="{{action('StockController@update',$id)}}">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="PATCH" />
            <div class="form-group">
            <input type="text" name="product_id" class="form-control"
                 value="{{$stock->product_id}}" placeholder="Enter The Product ID" />
            </div>

            <div class="box">
            <select name="section" value="{{$stock->section}}">
                <option>Kitchen</option>
                <option>House Keeping</option>
                <option>Events</option>
            </select>
            <br/><br/>
            <div class="box">
            <select name="category" value="{{$stock->category}}">
                <option>Linen</option>
                <option>Toiletaries</option>
                <option>Hospitality Tray</option>
                <option>Minibar Suplies</option>
                <option>Cutlery</option>
                <option>Glassware</option>
                <option>Crockery</option>
                <option>Cruet Set</option>
                <option>Gas</option>
                <option>Cooking Materials</option>
                <option>Furnitures</option>
                <option>Buffet</option>
            </select> 
            <br/><br/>
            <div class="form-group">
                <input type="text" name="product" class="form-control"
                 value="{{$stock->product}}" placeholder="Change The Product" />
            </div>

            <div class="form-group">
                <input type="text" name="total_stock" class="form-control"
                 value="{{$stock->total_stock}}" readonly />
            </div>

            
            <div class="form-group">
            <input type="text" name="total_assign" class="form-control"
                 value="{{$stock->total_assign}}" placeholder="Change the assiging number" />
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Edit" /> 
            </div>
        </form>
    </div>
</div>     

</body>
</html>

@endsection