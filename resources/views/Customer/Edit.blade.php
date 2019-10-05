@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 mt40">
            <div class="pull-left"><br><br>
                <h2><a href="/Customer"><i class="fa fa-arrow-left" style="color: orange"></i></a>&nbsp&nbsp<b>Update</b> Customer</h2><br><br>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Opps!</strong> Something went wrong<br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('Customer.update', $Customer_info->id) }}" method="POST" name="update_Customer" style="font-size: 18px">
        {{ csrf_field() }}
        @method('PATCH')


        <div class="form-group row">
            <label class="col-sm-3 col-form-label" for="firstName">First Name:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="First Name"  name="FirstName" value="{{ $Customer_info->FirstName }}">
            </div>
        </div>


        <div class="form-group row">
            <label class="col-sm-3 col-form-label" for="lastName">Last Name:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control"  placeholder="Last Name" name="LastName" value="{{ $Customer_info->LastName }}">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-3 col-form-label" for="NIC">NIC:</label>
            <div class="col-sm-9">
                <input type="number" class="form-control"  placeholder="NIC" name="NIC" value="{{ $Customer_info->NIC }}">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 col-form-label" for="Mobile">Mobile:</label>
            <div class="col-sm-9">
                <input type="number" class="form-control"  placeholder="Phone Number" name="Mobile" value="{{ $Customer_info->Mobile }}">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 col-form-label" for="inputEmail">Email:</label>
            <div class="col-sm-9">
                <input type="email" class="form-control"  placeholder="Email Address" name="Email" value="{{ $Customer_info->Email }}">
            </div>
        </div>

<br>
            <div class="col-md-12">
                <button type="submit" class="btn " style="background-color: orange">Submit</button>
            </div>




    </form>
</div>
@endsection
