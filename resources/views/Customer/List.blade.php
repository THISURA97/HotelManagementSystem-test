@extends('layout')

@section('carousel1')
    <div class="container">
    <div class="row mt40">
        <div class="col-md-10">
            <br><br>
            <h2><a href="/home"><i class="fa fa-arrow-left"></i></a>&nbsp&nbspCustomer</h2><br><br>
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

                <th>FirstName</th>
                <th>LastName</th>
                <th>NIC</th>
                <th>Mobile</th>
                <th>Email</th>
                <th>Last updated</th>
                <th colspan="2" style=" text-align: center">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($Customer as $Customer)
                <tr>

                    <td>{{ $Customer->FirstName }}</td>
                    <td>{{ $Customer->LastName }}</td>
                    <td>{{ $Customer->NIC }}</td>
                    <td>{{ $Customer->Mobile }}</td>
                    <td>{{ $Customer->Email }}</td>
                    <td>{{ date('d m Y', strtotime($Customer->created_at)) }}</td>
                    <td><a href="{{ route('Customer.edit',$Customer->id)}}" class="btn btn-primary">Edit</a></td>
                    <td>
                        <form action="{{ route('Customer.destroy', $Customer->id)}}" method="post">
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