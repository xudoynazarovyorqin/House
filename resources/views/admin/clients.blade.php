@extends('admin.home')
@section('content')
    
    <h2 class="text-center py-3">Yangi mijozlar</h2>
        @if(count($clients) == 0)
            <h5 class="text-center text-danger">Yangi mijozlar mavjud emas</h5>
        @endif
    @foreach ($clients as $client)
    <div class="card shadow m-5" style="width: 35rem;">
        <form action="/clients" method="POST">
            @csrf
            <div class="card-body ">
                <div class="d-flex">

                    <div class="inline" style="padding-right: 60px">
                        <h5 class="card-title">{{$client->fname}} {{$client->lname}}</h5>
                        <p> <strong>Address</strong> {{ $client->address }} </p>
                        <p><strong>Phone number: </strong>  +{{ $client->phone_number}}</p>
                    </div>
                    
                    <div class="d-inline pl-3">
                        <p><b>Xonadon raqami: </b> {{$client->apartment->number}}</p>
                        <p> <strong>Qavat:</strong> {{$client->apartment->floor->number}}</p>
                        <p> <strong>Podezd raqami: </strong> {{$client->apartment->floor->podezd->number}}</p>
                        <p> <strong>Dom nomi: </strong> {{$client->apartment->floor->podezd->dom->name}}</p>
                    </div>
                </div>
                <input type="hidden" name="client" value="{{$client->id}}">
                <button type="submit"  class="btn btn-primary">Sotish</button>
            </div>
        </form>
      </div>
    @endforeach

        <div >
          <h5 class="my-3">Xaridorlar</h5>
          <table class="table bordered">
              <thead>
                  <th>Ismi</th>
                  <th>Uy</th>
                  <th>Qavat</th>
                  <th>Podezd</th>
                  <th>Bino</th>
                  <th>Narxi</th>
                </thead>
                <tbody>
                    @foreach ($customers as $customer)
                    <tr>
                        <td>{{$customer->client->fname}}</td>
                        <td>{{$customer->apartment->number}}</td>
                        <td>{{$customer->apartment->floor->number}}</td>
                        <td>{{$customer->apartment->floor->podezd->number}}</td>
                        <td>{{$customer->apartment->floor->podezd->dom->name}}</td>
                        <td>{{$customer->apartment->cost}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
@endsection