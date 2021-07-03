@extends('welcome')
@section('content')
        
<div class="" style="background-image: url({{$dom->photo}});height:100vh;background-size:cover;background-position: center">
    <div class="card text-center rounded shadow-lg  vertical-center">
        
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
    </div>   



</div>

@endsection