@extends('admin.home')
@section('content')

<div class=" mt-5" style="margin-left: 160px">

    <form action="/add-house" method="POST">
        @csrf
        <label>Nomi</label>
            <input name="name" class=" ml-5 form-control w-50 m-3 shadow-sm" type="text">

        <label>Rasm url</label>
            <input name="photo" class="form-control w-50 m-3 shadow-sm" type="text">

        <label>Adres</label>
            <input name="address" class="form-control w-50 m-3 shadow-sm" type="text">

       

        <button type="submit" class="btn btn-primary">Qo'sish</button>

    </form>
</div>

@endsection