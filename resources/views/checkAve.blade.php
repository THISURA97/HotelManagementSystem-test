@extends('layouts.app')


@section('content')




    <div class="container" >
        <div class="row justify-content-center">
            <div class="col-md-8" >
                <div class="card" style="background-color: #ecedeb; height: 350px;width: 1200px;margin-left: -240px">
                    <div class="card-header" style="background-color: #22292f"><font size="6" style="color: white"> Check Availability </font> </div>



<br><br>

        <form method="post" action="/avalabilityCheck">
            {{csrf_field()}}

                    <div class="row">
                        <div class="col-md-4">

                            <label for="start" style="font-size: medium;margin-left: 15px">Check-in Date</label>

                            <input type="date"  id="checkin" name="checkin" class="form-control" style="font-size: medium; border-radius: 4px 10px 3px;margin-left: 15px"
                                   value="2019-01-01"
                                   min="2019-09-01" max="2020-12-31">


                        </div>


                        <div class="col-md-4">


                        <label for="start"style="font-size: medium;margin-left: 15px">Check-Out Date</label>
                            <br>

                        <input type="date" id="checkout" name="checkout" class="form-control" style="font-size: medium; border-radius: 4px 10px 3px;margin-left: 15px"

                               value="2019-01-01"
                               min="2019-09-01" max="2020-12-31">

                        </div>

                        <div class="col-md-4">

                        <label for="room type" style="font-size: medium"> Room Type </label>
                        <select class="browser-default custom-select custom-select-lg mb-3" name="roomtype" style="font-size: medium; border-radius: 4px 10px 3px">

                            <option selected>Choose...</option>
                            <option value="Standard Room">Standard Room</option>
                            <option value="Duluxe Room">Duluxe Room </option>
                            <option value="Cabana">Cabana</option>
                        </select>
                    </div>


                        <input type="submit" class="btn btn-warning btn-lg" value="Check Now" style="height: 50px; width: 250px; margin-left: 450px; margin-top: 60px;font-size: larger;border-radius: 4px 10px 3px; font-size: large">

                    </div>

        </form>

</div>

        </div>
    </div>



</div>
    </div>




<br><br><br><br><br>










    @endsection


