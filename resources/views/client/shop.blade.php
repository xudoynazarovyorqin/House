@extends('welcome') 
@section('content')
    
<div class="" style="background-image: url({{$apartment->floor->podezd->dom->photo}});height:100vh;background-size:cover;background-position:cover">
    <div class="card text-center rounded shadow-lg  vertical-center">
        
        <h1 class="text-center py-3 mt-3">{{$apartment->floor->podezd->dom->name}}</h1>
        <form action="/client/shop" style="display: flex;flex-direction:column;align-items:center" method="POST">
            @csrf
            
        <label >Isminggiz:</label>
        <input class="form-control w-50 m-3 shadow-sm" type="text" name="fname" >
    
    <label >Familiyanggiz</label>
        <input class="form-control w-50 m-3 shadow-sm"  type="text" name="lname" >
    
    <label >Telefon raqamiz</label>
            <input type="number" name="phone" class="form-control w-50 w-50 m-3 shadow-sm" >
    
    <label >Adres</label>
        <input class="form-control w-50 m-3 shadow-sm"  type="text" name="address" >
        <input type="hidden" name="apartment" value="{{$apartment->id}}">
        <button class="btn btn-primary mb-4" type="submit">Buyurtma berish</button>
            {{-- <button class="btn btn-primary mb-5" type="submit">tanlash </button> --}}
        </form> 
    </div>   




</div>
@endsection