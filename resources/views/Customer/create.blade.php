@extends('layout')

@section('carousel1')
<div class="container">
    <div class="row">
        <div class="col-lg-12 mt40">
            <div class="pull-left">
                <br><br>
                <h2 class="panel-heading"><div class="panel-title" ><a href="/home"><i class="fa fa-arrow-left" style="color: orange"></i></a>&nbsp&nbsp&nbsp<b>Add</b>&nbspCustomer</div></h2>
                <br>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Something went wrong<br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
<br><br>
    <form action="{{ route('Customer.store') }}" method="POST" name="add_Customer" style="font-size:18px;font-family: 'Roboto', sans-serif;">
        {{ csrf_field() }}

        <div class="form-group row">
            <label class="col-sm-3 col-form-label" for="FirstName">First Name:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="First Name"  name="FirstName">
            </div>
        </div>


        <div class="form-group row">
            <label class="col-sm-3 col-form-label" for="LastName">Last Name:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control"  placeholder="Last Name" name="LastName">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 col-form-label" for="NIC">NIC:</label>
            <div class="col-sm-9">
                <input type="number" class="form-control"  placeholder="NIC" name="NIC">
            </div>
        </div>


        <div class="form-group row">
            <label class="col-sm-3 col-form-label" for="Mobile">Mobile:</label>
            <div class="col-sm-9">
                <input type="number" class="form-control"  placeholder="Phone Number" name="Mobile">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 col-form-label" for="inputEmail">Email:</label>
            <div class="col-sm-9">
                <input type="email" class="form-control"  placeholder="Email Address" name="Email">
            </div>
        </div>




        <br>
        <div class="form-group row">
            <div class="col-sm-9 offset-sm-3">
                <input type="submit" class="btn btn-primary" value="Submit" style="font-size: 18px">
                <input type="reset" class="btn btn-secondary" value="Reset" style="font-size: 18px">
            </div>
        </div>



    </form>

    </div>

@endsection