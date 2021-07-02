@extends('welcome')
@section('content')
       
<div class="" style="background-image: url({{$podezd->dom->photo}});height:100vh;bacground-size:cover">
    <h1 class="text-center">{{$podezd->dom->name}}</h1>
    <form action="/client/floor" method="GET">
        
        <select name="floor" class="form-select w-50">
            
            @foreach ($podezd->floor as $floor)
            <option value="{{$floor->id}}"> {{$floor->number}}</option>
            
            @endforeach
        </select>
        <button class="btn btn-primary" type="submit">tanlash </button>
    </form> 



</div>
@endsection