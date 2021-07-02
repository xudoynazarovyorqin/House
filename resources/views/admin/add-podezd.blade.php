@extends('admin.home')
@section('content')

<div class=" mt-5" style="margin-left: 160px">

    <form action="/add-podezd" method="POST">
        @csrf
        <label>Nomi</label>
            <input name="name" class=" ml-5 form-control w-50 m-3 shadow-sm" type="text">
            <input type="hidden" name="dom_id" value="{{$_GET['dom_id']}}">
        <button type="submit" class="btn btn-primary">Qo'sish</button>

    </form>
</div>

@endsection