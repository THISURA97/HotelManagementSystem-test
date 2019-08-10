@extends('layout')

@section('carousel1')
<div class="container">
    <div class="row">
        <div class="col-lg-12 mt40">
            <div class="pull-left"><br><br>
                <h2><a href="/Reservation"><i class="fa fa-arrow-left"></i></a>&nbsp&nbspUpdate Reservation</h2><br><br>
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
    <form action="{{ route('Reservation.update', $Reservation_info->id) }}" method="POST" name="update_Reservation">
        {{ csrf_field() }}
        @method('PATCH')




        <div class="form-group row">
            <label class="col-sm-3 col-form-label" for="firstName">First Name:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="First Name"  name="FirstName" value="{{ $Reservation_info->FirstName }}">
            </div>
        </div>


        <div class="form-group row">
            <label class="col-sm-3 col-form-label" for="lastName">Last Name:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control"  placeholder="Last Name" name="LastName" value="{{ $Reservation_info->LastName }}">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-3 col-form-label" for="NIC">NIC:</label>
            <div class="col-sm-9">
                <input type="number" class="form-control"  placeholder="NIC" name="NIC" value="{{ $Reservation_info->NIC }}">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 col-form-label" for="Mobile">Mobile:</label>
            <div class="col-sm-9">
                <input type="number" class="form-control"  placeholder="Phone Number" name="Mobile" value="{{ $Reservation_info->Mobile }}">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 col-form-label" for="inputEmail">Email:</label>
            <div class="col-sm-9">
                <input type="email" class="form-control"  placeholder="Email Address" name="email" value="{{ $Reservation_info->Email }}">
            </div>
        </div>


            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>




    </form>
</div>
@endsection
