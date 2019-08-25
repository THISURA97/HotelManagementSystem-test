@extends('layouts.main2')



@section('body')
    @if(session()->has('message'))
        <div class="alert alert-danger">

            {{session()->get('message')}}
        </div>
    @endif
    <div class="container text-center">
        <h3>OUR ROOMS</h3>

        <br><br>
        <div class="row">
            <div class="col-sm-4">
                <p ><strong>Standard Room</strong></p><br>
                <img src="https://www.refreshhikkaduwa.com/components/com_vikbooking/resources/uploads/standered-room-slider-main.jpg" alt="Standard Room" width="300" height="300">
                <br>
                <div class="roomlist_carats">
                    <ul >
                        <br>
                        <li class="list-group-item"><span class="vbo-expl" data-vbo-expl="WI-FI"><img src="https://www.refreshhikkaduwa.com/components/com_vikbooking/resources/uploads/1wifi.png" alt="WI-FI" style="opacity: 1;"></span>
                            <span class="vbo-expl" data-vbo-expl="Bathroom"><img src="https://www.refreshhikkaduwa.com/components/com_vikbooking/resources/uploads/1bathroom.png" alt="Bathroom" style="opacity: 1;"></span>
                            <span class="vbo-expl" data-vbo-expl="TV"><img src="https://www.refreshhikkaduwa.com/components/com_vikbooking/resources/uploads/tv.png" alt="TV" style="opacity: 1;"></span>
                            <span class="vbo-expl" data-vbo-expl="Air Conditioner"><img src="https://www.refreshhikkaduwa.com/components/com_vikbooking/resources/uploads/1ac.png" alt="Air Conditioner" style="opacity: 1;"></span>
                            <span class="vbo-expl" data-vbo-expl="Mini Bar"><img src="https://www.refreshhikkaduwa.com/components/com_vikbooking/resources/uploads/mini-bar.png" alt="Mini Bar" style="opacity: 1;"></span>
                            <span class="vbo-expl" data-vbo-expl="pool"><img src="https://www.refreshhikkaduwa.com/components/com_vikbooking/resources/uploads/r_images.png" alt="Sky Pool" style="opacity: 1;"></span>
                        </li>

                        <li class="list-group-item"><p>Hair Drier</p><p>Safe</p><p>Coffee maker</p><p>Hot water</p>

                            <strong>$ 35.00</strong><br><br>

                            <strong>per night</strong><br><br>

                            <a href="booking"> <button  type="button" class="btn btn-warning btn-lg">Book Now</button></a>
                        </li>

                    </ul>
                </div>

            </div>

            <div class="col-sm-4">
                <p><strong>Deluxe Room</strong></p><br>
                <img src="https://www.refreshhikkaduwa.com/components/com_vikbooking/resources/uploads/refresh-deluxe-room-slider-main.jpg" alt="Deluxe Room" width="300" height="300">
                <br>
                <div class="roomlist_carats">
                    <ul >
                        <br>
                        <li class="list-group-item"><span class="vbo-expl" data-vbo-expl="WI-FI"><img src="https://www.refreshhikkaduwa.com/components/com_vikbooking/resources/uploads/1wifi.png" alt="WI-FI" style="opacity: 1;"></span>
                            <span class="vbo-expl" data-vbo-expl="Bathroom"><img src="https://www.refreshhikkaduwa.com/components/com_vikbooking/resources/uploads/1bathroom.png" alt="Bathroom" style="opacity: 1;"></span>
                            <span class="vbo-expl" data-vbo-expl="TV"><img src="https://www.refreshhikkaduwa.com/components/com_vikbooking/resources/uploads/tv.png" alt="TV" style="opacity: 1;"></span>
                            <span class="vbo-expl" data-vbo-expl="Air Conditioner"><img src="https://www.refreshhikkaduwa.com/components/com_vikbooking/resources/uploads/1ac.png" alt="Air Conditioner" style="opacity: 1;"></span>
                            <span class="vbo-expl" data-vbo-expl="Mini Bar"><img src="https://www.refreshhikkaduwa.com/components/com_vikbooking/resources/uploads/mini-bar.png" alt="Mini Bar" style="opacity: 1;"></span>
                            <span class="vbo-expl" data-vbo-expl="pool"><img src="https://www.refreshhikkaduwa.com/components/com_vikbooking/resources/uploads/r_images.png" alt="Sky Pool" style="opacity: 1;"></span>
                        </li>

                        <li class="list-group-item"><p>Hair Drier</p><p>Safe</p><p>Hot Water</p><p>Bath Tab</p>
                            <strong>$ 50.00</strong><br><br>

                            <strong>per night</strong><br><br>

                            <a href="booking"> <button type="button" class="btn btn-warning btn-lg">Book Now</button>  </a>



                        </li>

                    </ul>
                </div>

            </div>
            <div class="col-sm-4">
                <p><strong>Cabana </strong></p><br>
                <img src="https://www.refreshhikkaduwa.com/components/com_vikbooking/resources/uploads/two-room--slider-main.jpg" alt="Two Room Apartment" width="300" height="300">
                <br>
                <div class="roomlist_carats">
                    <ul >
                        <br>
                        <li class="list-group-item"><span class="vbo-expl" data-vbo-expl="WI-FI"><img src="https://www.refreshhikkaduwa.com/components/com_vikbooking/resources/uploads/1wifi.png" alt="WI-FI" style="opacity: 1;"></span>
                            <span class="vbo-expl" data-vbo-expl="Bathroom"><img src="https://www.refreshhikkaduwa.com/components/com_vikbooking/resources/uploads/1bathroom.png" alt="Bathroom" style="opacity: 1;"></span>
                            <span class="vbo-expl" data-vbo-expl="TV"><img src="https://www.refreshhikkaduwa.com/components/com_vikbooking/resources/uploads/tv.png" alt="TV" style="opacity: 1;"></span>
                            <span class="vbo-expl" data-vbo-expl="Air Conditioner"><img src="https://www.refreshhikkaduwa.com/components/com_vikbooking/resources/uploads/1ac.png" alt="Air Conditioner" style="opacity: 1;"></span>
                            <span class="vbo-expl" data-vbo-expl="Mini Bar"><img src="https://www.refreshhikkaduwa.com/components/com_vikbooking/resources/uploads/mini-bar.png" alt="Mini Bar" style="opacity: 1;"></span>
                            <span class="vbo-expl" data-vbo-expl="pool"><img src="https://www.refreshhikkaduwa.com/components/com_vikbooking/resources/uploads/r_images.png" alt="Sky Pool" style="opacity: 1;"></span>
                        </li>

                        <li class="list-group-item"><p>Hair Drier</p><p>Safe</p><p>Hot Water</p><p>Bath Tab</p>

                            <strong>$ 94.00</strong><br><br>

                            <strong>per night</strong><br><br>

                            <a href="booking" > <button type="button" class="btn btn-warning btn-lg">Book Now</button>  </a>


                        </li>

                    </ul>
                </div>

            </div>
        </div>
    </div>


    </div>


    </div>
    <br><br><br><br>
@endsection
