@extends('admin.home')
@section('content')

<div class=" mt-5" style="margin-left: 160px">

    <form action="/add-apartment" method="POST">
        @csrf
        <label>Uy raqami</label>
            <input name="number" class=" ml-5 form-control w-50 m-3 shadow-sm" type="text">
            
        <label>Xonalar soni</label>
            <input name="room" class=" ml-5 form-control w-50 m-3 shadow-sm" type="number">    
            
        <label>Narxi</label>
            <div class="form-group d-flex ">
                <input name="cost"  class=" mr-0 ml-5 form-control w-50 m-3 shadow-sm" type="number" >
                <h4 class="vertical-center">$</h4>    
            </div>
            
            
            
        <input type="hidden" name="floor_id" value="{{$_GET['floor_id']}}">

        <button type="submit" class="btn btn-primary">Qo'sish</button>

    </form>
</div>

@endsection