<!DOCTYPE html>
@extends('layout.master')



    <title>Profit Charts</title>

<head>

    {!! Charts::styles() !!}

</head>



@section('content')



<div class="app" style="margin-top: 150px">
    <div class="col-md-12">

    <center>

        {!! $chart->html() !!}

    </center>
    </div>
</div>



{!! Charts::scripts() !!}

{!! $chart->script() !!}

@endsection

