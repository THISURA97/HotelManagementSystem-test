@extends('layouts.app')





@section('body')




    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <div class ="img-fluid">
                <img class="w-100 p-2" src="https://www.refreshhikkaduwa.com/components/com_vikbooking/resources/uploads/big_deluxe-room-slider-3.jpg" alt="First slide" height="750">
            </div>
            </div>
            </div>



            <div class="carousel-item">
                <img class="d-block w-100" src= "https://www.refreshhikkaduwa.com/components/com_vikbooking/resources/uploads/big_deluxe-room-slider-2.jpg" alt="Second slide"  height="750">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src= "https://www.refreshhikkaduwa.com/components/com_vikbooking/resources/uploads/big_deluxe-room-slider-6.jpg" alt="Third slide"   height="750">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>




<br><br><br><br><br><br>




    @endsection
