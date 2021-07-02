@extends('admin.home')
@section('content')

<div class=" mt-5" style="margin-left: 160px">

    <form action="/add-floor" method="POST">
        @csrf
        <label>Nechanchi qavat</label>
            <input name="number" class=" ml-5 form-control w-50 m-3 shadow-sm" type="number">
            <input type="hidden" name="podezd_id" value="{{$_GET['podezd_id']}}">
        <button type="submit" class="btn btn-primary">Qo'sish</button>

    </form>
</div>

@endsection