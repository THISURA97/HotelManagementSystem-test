@extends('layout')

@section('carousel1')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mt40">
                <div class="pull-left"><br><br>
                    <h2><a href="/Room"><i class="fa fa-arrow-left"></i></a>&nbsp&nbspUpdate Room</h2><br><br>
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
        <form action="{{ route('Room.update', $Room_info->id) }}" method="POST" name="update_Room">
            {{ csrf_field() }}
            @method('PATCH')


            <div class="form-group row">
                <label class="col-sm-3 col-form-label" for="RoomNo">RoomNo:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Room No"  name="RoomNo" value="{{ $Room_info->RoomNo }}" >
                </div>
            </div>


            <div class="form-group row">
                <label class="col-sm-3 col-form-label" for="RoomType">Room Type:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control"  placeholder="Room Type" name="RoomType" value="{{ $Room_info->RoomType }}" >
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label" for="Status">Status:</label>
                <div class="col-sm-9">
                    <select id="select_id" class="custom-select" name="Status">
                        <option value="Status" selected="selected">Status</option>
                        <option value="Reserve">Reserved</option>
                        <option value="Empty">Not Reserved</option>
                    </select>

                </div>
            </div>


            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>




        </form>
    </div>
@endsection
