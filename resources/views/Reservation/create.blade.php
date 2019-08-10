@extends('layout')

@section('carousel1')

    <div class="container">
    <div class="row">
        <div class="col-lg-12 mt40">
            <div class="pull-left">
                <br><br>
                <h2><a href="/home"><i class="fa fa-arrow-left"></i></a>&nbsp&nbsp Add Reservation</h2>
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

    <form action="{{ route('Reservation.store') }}" method="POST" name="add_Reservation">
        {{ csrf_field() }}

        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Room type:</label>
            <div class="col-sm-9 mt-2">
                <select id="select_id" class="custom-select" name="RoomType">
                    <option value="" selected="selected">Room type</option>
                    <option value="1">Standard</option>
                    <option value="2">Luxury</option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Rooms No:</label>
            <div class="col-sm-9 mt-2">
                <select id="select_id" class="custom-select" name="RoomNo">
                    <option value="" selected="selected">Room No</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                </select>
            </div>

        </div>

        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Basis:</label>
            <div class="col-sm-9 mt-2">
                <select id="select_id" class="custom-select" name="Basis">
                    <option value="" selected="selected">Basis type</option>
                    <option value="1">Half-board</option>
                    <option value="2">Full-board</option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Check in:</label>
            <div class="col-sm-4 mt-2">
                <input type="date" class="form-control" placeholder="From"  name="CheckIn">
            </div>
        </div>

   <div class="form-group row" >
            <label class="col-sm-3 col-form-label">Check out:</label>
            <div class="col-sm-4 mt-2">
                <input type="date" class="form-control" placeholder="To"  name="CheckOut">
            </div>
        </div>

        <br><br>
        <div class="form-group row">
            <div class="col-sm-9 offset-sm-3">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-secondary" value="Reset">
            </div>
        </div>




    </form>

    </div>

@endsection