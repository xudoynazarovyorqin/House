@extends('admin.home')
@section('content')
  <form action="/add-floor" method="GET">
    <input type="hidden" name="podezd_id" value="{{$podezd->id}}">
        <button type="submit" class="btn btn-primary shadow m-3">
            Yangi kiritish
        </button>

    </form>     
    
    <div class="d-flex">
    <div style="width: 60%; margin-left:3%">
        <img class="card-img-top shadow-lg" src="{{$podezd->dom->photo}}" alt="Card image cap">

    </div>
    <h3  class="pl-4 block m-auto">{{$podezd->dom->name}}</h3>
     <h4  class="pl-4 block m-auto">{{$podezd->number}}</h4></div>
       @if (count($floor) == 0)

    <div class="text-center">
            <h1 style="margin-top: 150px;">
                Hali kiritilmagan!
            </h1>
        </div>
        @endif
    @if (count($floor) != 0)
    
    
    <form action="/apartment" method="Get">
        @if(count($podezd->floor) != null)
        <select name="floor" class="form-select w-50 m-auto mt-5 shadow my-3" >
            @foreach($podezd->floor as $val)
            
            <option value="{{$val->id}}">{{$val->number}}</option>
            
            @endforeach
        </select>
        <button type="submit" class="btn shadow-lg  btn-primary text-center m-3">Tanlash</button>
        @endif
        @if(count($podezd->floor) == null)
        <h2 class="text-center mt-4">Sotuvda etaj mavjud emas</h2>
        @endif

    </form> 

    
    @endif
@endsection