@extends('layout')

@section('carousel1')
    <div class="container">
    <div class="row mt40">
        <div class="col-md-10">
            <br><br>
            <h2><a href="/home"><i class="fa fa-arrow-left"></i></a>&nbsp&nbspReservation</h2><br><br>
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

                <th>Customer Name</th>
                <th>RoomNo</th>
                <th>Basis</th>
                <th>CheckIn</th>
                <th>CheckOut</th>
                <th>Updated at</th>
                <td colspan="2">Action</td>

            </tr>
            </thead>
            <tbody>


            @foreach($Reservation as $Reservation)
                <tr>


                    <td>{{ $Reservation->RoomType }}</td>
                    <td>{{ $Reservation->RoomNo }}</td>
                    <td>{{ $Reservation->Basis }}</td>
                    <td>{{ $Reservation->CheckIn }}</td>
                    <td>{{ $Reservation->CheckOut }}</td>
                    <td>{{ date('d m Y', strtotime($Reservation->created_at)) }}</td>
                    <td><a href="{{ route('Reservation.edit',$Reservation->id)}}" class="btn btn-primary">Edit</a></td>
                    <td>
                        <form action="{{ route('Reservation.destroy', $Reservation->id)}}" method="post">
                            {{ csrf_field() }}
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>

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