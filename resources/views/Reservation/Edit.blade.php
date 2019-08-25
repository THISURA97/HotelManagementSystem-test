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
            <label class="col-sm-3 col-form-label" for="RoomType">Customer Name:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="Customer Name"  name="RoomType" value="{{ $Reservation_info->RoomType }}">
            </div>
        </div>


        <div class="form-group row">
            <label class="col-sm-3 col-form-label" for="RoomNo">Room No:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control"  placeholder="Room No" name="RoomNo" value="{{ $Reservation_info->RoomNo }}">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-3 col-form-label" for="Basis">Basis:</label>
            <div class="col-sm-9"> <select id="select_id" class="custom-select" name="Basis">
                    <option value="{{ $Reservation_info->Basis }}" selected="selected">Basis type</option>
                    <option value="Half-board">Half-board</option>
                    <option value="Full-board">Full-board</option>
                </select>

            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 col-form-label" for="CheckIn">From:</label>
            <div class="col-sm-9">
                <input type="date" class="form-control"  placeholder="From" name="CheckIn" value="{{ $Reservation_info->CheckIn }}">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 col-form-label" for="CheckOut">To:</label>
            <div class="col-sm-9">
                <input type="date" class="form-control"  placeholder="To" name="CheckOut" value="{{ $Reservation_info->CheckOut }}">
            </div>
        </div>


            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>




    </form>
</div>
@endsection
