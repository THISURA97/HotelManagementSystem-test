@extends('layout')

@section('carousel1')
    <div class="container">
        <div class="row mt40">
            <div class="col-md-10">
                <br><br>
                <h2><a href="/home"><i class="fa fa-arrow-left"></i></a>&nbsp&nbspRooms</h2><br><br>
            </div>


            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif


            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Opps!</strong> Something went wrong<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="container">
                <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name" class="form-control">
                <br>

            </div>
            <table class="table table-bordered" id="laravel_crud">
                <thead>
                <tr>


                    <th>RoomType</th>
                    <th>RoomNo</th>
                    <th>Status</th>
                    <th>Last updated</th>
                    <th colspan="3" style=" text-align: center">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($Room as $Room)
                    <tr>


                        <td>{{ $Room->RoomType }}</td>
                        <td>{{ $Room->RoomNo }}</td>
                        <td>{{$Room->Status}}</td>
                        <td>{{ date('d m Y', strtotime($Room->created_at)) }}</td>
                        <td><a href="{{ route('Room.edit',$Room->id)}}" class="btn btn-primary">Edit</a></td>
                        <td>
                            <form action="{{ route('Room.destroy', $Room->id)}}" method="post">
                                {{ csrf_field() }}
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Delete</button>

                            </form>
                        </td>
                        <td> <a href="{{route('Reservation.create',$Room->RoomNo)}}"class="btn btn-info">Reserve</a></td>

                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
        @endsection
    </div>
    </div>
    <script>
        function myFunction() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("laravel_crud");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>