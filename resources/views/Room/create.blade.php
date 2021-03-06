@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mt40">
                <div class="pull-left">
                    <br><br>
                    <h2><a href="/Frontdesk"><i class="fa fa-arrow-left" style="color: orange"></i></a>&nbsp&nbsp <b>Add</b>  Room</h2>
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

        <form action="{{ route('Room.store') }}" method="POST" name="add_Room" style="font-size: 18px">
            {{ csrf_field() }}

            <div class="form-group row">
                <label class="col-sm-3 col-form-label" for="RoomNo">Room No:</label>
                <div class="col-sm-9">
                    <select id="select_id" class="custom-select" name="RoomNo">
                        <option value="" selected="selected">Room No</option>
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
                <label class="col-sm-3 col-form-label">Room type:</label>
                <div class="col-sm-9 mt-2">
                    <select id="select_id" class="custom-select" name="RoomType">
                        <option value="" selected="selected">Room type</option>
                        <option value="Standard">Standard</option>
                        <option value="Luxury">Luxury</option>
                    </select>
                </div>
            </div>


            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Status:</label>
                <div class="col-sm-9 mt-2">
                    <select id="select_id" class="custom-select" name="Status">
                        <option value="Status" selected="selected">Status</option>
                        <option value="Reserve">Reserved</option>
                        <option value="Empty">NotReserved</option>
                    </select>
                </div>
            </div>

            <br>
            <div class="form-group row">
                <div class="col-sm-9 offset-sm-3">
                    <input type="submit" class="btn" value="Submit" style="background-color: orange">
                    <input type="reset" class="btn btn-secondary" value="Reset">
                </div>
            </div>




        </form>

    </div>

@endsection
