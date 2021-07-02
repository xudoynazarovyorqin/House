@extends('admin.home')
@section('content')
  <form action="/add-podezd" method="GET">
    <input type="hidden" name="dom_id" value="{{$dom->id}}">
        <button type="submit" class="btn btn-primary shadow m-3">
            Yangi kiritish
        </button>

    </form>     
       @if (count($podezd) == 0)

    <div class="text-center">
            <h1 style="margin-top: 150px;">
                Hali kiritilmagan!
            </h1>
        </div>
        @endif
    @if (count($podezd) != 0)
    
    <div class="d-flex">

    
    <div style="width: 60%; margin-left:3%">
        <img class="card-img-top shadow-lg" src="{{$dom->photo}}" alt="Card image cap">

    </div>
    <h3 class="pl-4 m-auto">{{$dom->name}}</h3></div>
    <form action="/floor" method="Get">
        @if(count($dom->podezd) != null)
        <select name="podezd" class="form-select w-50 m-auto mt-5 shadow my-3" >
        @foreach($dom->podezd as $val)
        <option value="{{$val->id}}">{{$val->number}}</option>
            
        @endforeach
    </select>
       
        <button type="submit" class="btn shadow-lg  btn-primary text-center m-3">Tanlash</button>
        @endif
        @if(count($dom->podezd) == null)
        <h2 class="text-center mt-4">Podezd mavjud emas</h2>
        @endif

    </form>

    
    @endif
@endsection