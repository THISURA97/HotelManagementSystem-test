@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 mt40">
            <div class="pull-left"><br><br>
                <h2><a href="/Reservation"><i class="fa fa-arrow-left" style="color:orange"></i></a>&nbsp&nbspUpdate Reservation</h2><br><br>
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
    <form action="{{ route('Reservation.update', $Reservation_info->id) }}" method="POST" name="update_Reservation" style="font-size: 18px">
        {{ csrf_field() }}
        @method('PATCH')




        <div class="form-group row">
            <label class="col-sm-3 col-form-label" for="RoomType">Customer Name:</label>
            <div class="col-sm-9" >
                <input type="text" class="form-control" placeholder="Customer Name"  name="RoomType" value="{{ $Reservation_info->RoomType }}" >
            </div>
        </div>


        <div class="form-group row">
            <label class="col-sm-3 col-form-label" for="RoomNo">Room No:</label>
            <div class="col-sm-9">
                <select id="select_id" class="custom-select" name="RoomNo">
                    <option value="" selected="selected">{{ $Reservation_info->RoomNo }} -Current room</option>
                    <option value="S001">S001</option>
                    <option value="S002">S002</option>
                    <option value="S003">S003</option>
                    <option value="S004">S004</option>
                    <option value="L001">L001</option>
                    <option value="L002">L002</option>
                    <option value="G001">G001</option>
                    <option value="G002">G002</option>
                    <option value="G003">G003</option>
                    <option value="G004">G004</option>
                    <option value="G005">G005</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-3 col-form-label" for="Basis">Basis:</label>
            <div class="col-sm-9"> <select id="select_id" class="custom-select" name="Basis">
                    <option  selected="selected">{{ $Reservation_info->Basis }}- Current Basis </option>
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
<br>

            <div class="col-md-12">
                <button type="submit" class="btn " style="background-color: orange">Submit</button>
            </div>




    </form>
</div>
@endsection
