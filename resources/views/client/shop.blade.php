@extends('welcome') 
@section('content')
    
<div class="" style="background-image: url({{$apartment->floor->podezd->dom->photo}});height:100vh;bacground-size:cover">
    <h1 class="  text-center">{{$apartment->floor->podezd->dom->name}}</h1>
    <form action="/client/shop"  method="Post">
        @csrf
        <div class="card ml-50 rounded w-50">

       
     
        <label >Isminggiz:</label>
            <input class="form-control w-50 m-3 shadow-sm" type="text" name="fname" >
        
        <label >Familiyanggiz</label>
            <input class="form-control w-50 m-3 shadow-sm"  type="text" name="lname" >
        
        <label >Telefon raqamiz</label>
                <input type="number" name="phone" class="form-control w-50 w-50 m-3 shadow-sm" >
        
        <label >Adres</label>
            <input class="form-control w-50 m-3 shadow-sm"  type="text" name="address" >
            <input type="hidden" name="apartment" value="{{$apartment->id}}">
            <button class="btn btn-primary" type="submit">Buyurtma berish</button>
            </div>
    </form> 



</div>
@endsection