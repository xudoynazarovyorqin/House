@extends('admin.home')
@section('content')
    @foreach ($clients as $client)
    <div class="card m-5" style="width: 18rem;">
        <form action="/clients" method="POST">
            @csrf
            <div class="card-body ">
                <h5 class="card-title">{{$client->fname}} {{$client->lname}}</h5>
                <p>{{ $client->address }}   +{{ $client->phone_number}}</p>
                <input type="hidden" name="client" value="{{$client->id}}">
                <button type="submit"  class="btn btn-primary">Go somewhere</button>
            </div>
        </form>
      </div>
    @endforeach
@endsection