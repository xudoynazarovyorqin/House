@extends('admin.home')
@section('content')
<form action="/add-house" method="GET">
    <button type="submit" class="btn btn-primary m-3">
        Sotuvga bino qo'shish
    </button>
</form>
    @if (count($dom) == 0)
        <div class="text-center">
            <h1 style="margin-top: 150px">
                Hozirda sotuvda bino yoq
            </h1>
        </div>
    @endif
    @if (count($dom) != 0)
   
        @foreach($dom as $val)
        <div class="card shadow-lg m-4 " style="width: 90%;">
            <a href="#"><img class="card-img-top" src="{{$val->photo}}" alt="Card image cap"></a>
            <div class="card-body">
              <h5 class="card-title">{{$val->name}}</h5>
              <p class="card-text"></p>
              <form action="/house-show" method="POST">
                @csrf
                    <input type="hidden" name="id" value="{{$val->id}}">
                  <button class="btn btn-primary">Kirish</button>
              </form>
            </div>
          </div>
       
        @endforeach
 
        
    @endif
@endsection