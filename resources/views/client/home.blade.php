@extends('welcome')
@section('content')
    
<header>
    <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a href="/" class="nav-brand">
                        <img src="https://xonsaroy.uz/logo-1.png" alt="xonsaroy" style="width: 140px">
                    </a>
                    <div class="menus">
                        
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                          <ul class="navbar-nav">
                            <li class="nav-item active">
                              <a class="nav-link px-3" href="#">Bosh sahifa</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link px-3" href="#">Bizning uylar</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link px-3" href="#">Biz haqimizda</a>
                            </li>
                            
                          </ul>
                        </div>
                    </div>
                        
                    @if (Route::has('login'))
                    <div class=" fixed top-0 right-0 px-6 py-4 sm:block float-end mr-3">
                        @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 text-decoration-none size-2">Kirish</a>
                        @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 text-decoration-none size-2">Kirish</a>
                        @endauth
                    </div>
                    @endif
                    
                </nav>
            </div>
            {{-- <img src="https://xonsaroy.uz/img/ayvon.jpg" width="100%"> --}}
        </header>

        
        
        

        
        

        
        
        {{-- <div id="myCarousel" class="carousel mb-5 slide" data-ride="carousel">
            
              <div class="carousel-inner  shadow" style="height: 500px"> --}}
                
                {{-- <div class="item active"  >
                    <img src="https://xonsaroy.uz/img/xon-saroy.jpg" alt="Los Angeles" style="width:800px;" class="m-auto">
                </div> --}}
                <form action="client/dom" method="GET">
                    @foreach ($doms as $val)
                   
                    <div class="card shadow-lg m-auto my-4 m-4 " style="width: 90%;">
                        <a href="#"><img class="card-img-top" src="{{$val->photo}}" alt="Card image cap"></a>
                        <div class="card-body">
                          <h5 class="card-title">{{$val->name}}</h5>
                          <p class="card-text"></p>
                            @csrf
                                <input type="hidden" name="dom_id" value="{{$val->id}}">
                              <button class="btn btn-primary">Go somewhere</button>
                        </div>
                      </div>
                   
                    @endforeach
                </form>
                
{{--                 
                
            </div>
          
            <!-- Left and right controls -->
              <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
              <a class="right carousel-control" href="#myCarousel" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
            </div>

           --}}
            
            @endsection