@extends('welcome')
@section('content')
    
<div class="" style="background-image: url({{$floor->podezd->dom->photo}});height:100vh;bacground-size:cover">
    <h1 class="  text-center">{{$floor->podezd->dom->name}}</h1>
    <form action="/client/shop" method="GET">
        
        @foreach ($floor->apartment as $val)
        <div class="card w-50 m-auto">
            <div class="info">

                <h4>Xonadon raqami: {{$val->number}}</h4>
                <h4>Xonalar soni: {{$val->room}}</h4>
                <h5>Narxi: {{$val->cost}} <strong>$</strong></h5>

            </div>
            <input type="hidden" name="id" value="{{$val->id}}">
            <button class="btn btn-primary" type="submit">tanlash </button>
        </div>
        @endforeach
    </form> 



</div>
@endsection