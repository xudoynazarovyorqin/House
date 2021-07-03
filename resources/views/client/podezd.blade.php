@extends('welcome')
@section('content')
       
<div class="" style="background-image: url({{$podezd->dom->photo}});height:100vh;background-size:cover;background-position:center">
    <div class="card text-center rounded shadow-lg  vertical-center">
        
        <h1 class="text-center py-3 mt-3">{{$podezd->dom->name}}</h1>
        <p>Qavatni tanlang</p>
            <form action="/client/floor" style="display: flex;flex-direction:column;align-items:center" method="GET">
                
                <select name="floor" class="form-select my-5 w-50">
                    
                    @foreach ($podezd->floor as $floor)
                    <option value="{{$floor->id}}"> {{$floor->number}}</option>
                    
                    @endforeach
                </select>
                <button class="btn btn-primary mb-5" type="submit">tanlash </button>
            </form> 

    </div>



</div>
@endsection