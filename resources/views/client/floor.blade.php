@extends('welcome')
@section('content')
    
<div class="" style="background-image: url({{$floor->podezd->dom->photo}});height:100vh;background-size:cover;background-position:cover">
    <h1 class="m-0 p-0  text-center">{{$floor->podezd->dom->name}}</h1>
    
    <form action="/client/shop" style="display: flex;flex-direction:column;align-items:center"  method="GET">
        
        @foreach ($floor->apartment as $val)
        @if ($val->status == 0)
        <div style="width:40%" class="card rounded text-center my-5 shadow-lg m-auto">
            <div class="info">

                <h4>Xonadon raqami: <strong>{{$val->number}}</strong></h4>
                <h4>Xonalar soni: <strong>{{$val->room}}</strong></h4>
                <h5>Narxi: {{$val->cost}} <strong>$</strong></h5>
                
            </div>
            <input type="hidden" name="id" value="{{$val->id}}">
            <button class="btn btn-primary m-auto my-3 w-50" type="submit">tanlash </button>
        </div>
        @endif
        @endforeach
    </form> 
    
    {{-- <div class="card text-center rounded shadow-lg  vertical-center">
        
        <h1 class="text-center py-3 mt-3">{{$dom->name}}</h1>
        <p>Podezd tanlang</p>
        <form action="/client/podezd" style="display: flex;flex-direction:column;align-items:center" method="GET">

            <select name="podezd" class="form-select my-5 w-50">
                
                @foreach ($dom->podezd as $podezd)
                <option value="{{$podezd->id}}"> {{$podezd->number}}</option>
                
                @endforeach
            </select>
            <button class="btn btn-primary mb-5" type="submit">tanlash </button>
        </form> 
    </div>    --}}


</div>
@endsection