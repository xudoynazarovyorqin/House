@extends('welcome')
@section('content')
        
<div class="" style="background-image: url({{$dom->photo}});height:100vh;bacground-size:cover">
    <h1 class="text-center">{{$dom->name}}</h1>
    <form action="/client/podezd" method="GET">
        
        <select name="podezd" class="form-select w-50">
            
            @foreach ($podezds as $podezd)
            <option value="{{$podezd->id}}"> {{$podezd->number}}</option>
            
            @endforeach
        </select>
        <button class="btn btn-primary" type="submit">tanlash </button>
    </form> 



</div>

@endsection