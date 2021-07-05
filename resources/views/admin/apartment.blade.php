@extends('admin.home')
@section('content')
  <form action="/add-apartment" method="GET">
    <input type="hidden" name="floor_id" value="{{$floor->id}}">
        <button type="submit" class="btn btn-primary shadow m-3">
            Yangi kiritish
        </button>

    </form>     
    
    <div class="d-flex">
    <div style="width: 60%; margin-left:3%">
        <img class="card-img-top shadow-lg" src="{{$floor->podezd->dom->photo}}" alt="Card image cap">

    </div>
    <div class="block text-center py-2 m-auto">
    <h3  class="m-auto">{{$floor->podezd->dom->name}}</h3>
    <h4  class="m-auto">{{$floor->podezd->number}}</h4>
    <h4  class="m-auto">{{$floor->number}}</h4></div>
    </div>
    
       @if (count($apartment) == 0)

    <div class="text-center">
            <h1 style="margin-top: 150px;">
                Hali kiritilmagan!
            </h1>
        </div>
        @endif
    @if (count($apartment) != 0)
    
        <h3 class="text-center mt-3">Sotuvda {{count($apartment)}}ta xonadon mavjud</h3>
    
        @if(count($apartment) != null)
        
        
        <table class="table my-5 text-center" style="width: 80%; margin-left:18%">
            <thead>
                <tr>
                    
                    <th scope="col">Xonadon raqami</th>
                    <th scope="col">Xonalar soni</th>
                    <th scope="col">Narxi</th>
                </tr>
            </thead>
            <tbody>
                    @foreach($floor->apartment as $val)
                  <tr class="m-auto">
                    
                    <td>{{$val->number}}</td>
                    <td>{{$val->room}}</td>
                    <td class="d-flex m-auto">{{$val->cost}}<h5>$</h5></td>
                  </tr>
                  @endforeach
                  
                </tbody>
              </table>
            
              
              @endif
       
    

    
    @endif
@endsection