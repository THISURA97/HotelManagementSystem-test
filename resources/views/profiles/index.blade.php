@extends('master')

@section('content')

<style>
#myInput {
  background-image: url('../search.png'); /* Add a search icon to input */
  background-position: 10px 12px; /* Position the search icon */
  background-repeat: no-repeat; /* Do not repeat the icon image */
  width: 30%; /* Full-width */
  font-size: 16px; /* Increase font-size */
  padding: 12px 20px 12px 40px; /* Add some padding */
  border: 1px solid #ddd; /* Add a grey border */
  margin-bottom: 12px; /* Add some space below the input */
}
body{
/*background-image: linear-gradient(to right, #20c4d6, #043136);*/
background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url("../dashboard1.jpg");
    height: 90vh;
    background-size: cover;
    background-position: center;
    font-family: sans-serif;
}


</style>

    <div class="row">
        <div class="col-md-12">
        <br/>
        <h1 align="center">Profile Data</h1>
        <br/>
        @if($message = Session::get('Successful'))
        <div class="alert alert-success">
            <p>{{$message}}</p>
        </div>
        @endif
        <div align ="right">
            <a href="/profile" class="btn btn-primary">Add</a>
            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">
    </div>

      
        <table class="table table-striped table-dark">
            <tr id="row">
                    <th>Admin ID</th>
                    <th>Name</th>
                    <th>Contact Number</th>
                    <th>E-mail</th> 
                    <th>Edit</th>
                    <th>Delete</th>

            </tr>
            @foreach($profiles as $prof)
            <tr>
                <td>{{$prof['admin_id']}}</td>
                <td>{{$prof['name']}}</td>
                <td>{{$prof['contact']}}</td>
                <td>{{$prof['email']}}</td>
               
                <td><a type="button" class="btn btn-success" href="{{action('ProfileController@edit',$prof['id'])}}">Edit</a></td>
                <td>
                    <form method="post" class="delete_form" action="{{action('ProfileController@destroy', $prof['id'])}}">
                        {{csrf_field()}}
                        <input type="hidden" name="_method" value="DELETE" />
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
        {{$prof->links()}}
        </div>
    </div>
    

<script>
$(document).ready(function(){
    $('.delete_form').on('submit',function(){
        if(confirm("Are you want to delete it??"))
        {
            return true;
        }
        else{
            return false;
        }
    });
});


function myFunction() {
  // Declare variables
  var input, filter, tr, td, a, i, txtValue;
  input = document.getElementById('myInput');
  filter = input.value.toUpperCase();
  tr = document.getElementById("row");
  td = tr.getElementsByTagName('td');

  // Loop through all list items, and hide those who don't match the search query
  for (i = 0; i < li.length; i++) {
    a = li[i].getElementsByTagName("a")[0];
    txtValue = a.textContent || a.innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
    }
  }
}

</script>

@endsection