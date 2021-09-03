@extends('layout')
@section('content')
<form action="{{url('book')}}" style="width: 70%; margin:auto; text-align:center;" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Name</span>
        <input name="name" type="text" class="form-control" placeholder="Reader name is.." aria-describedby="basic-addon1">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Phone</span>
        <input name="phone" type="text" class="form-control" placeholder="Please fill in..." aria-describedby="basic-addon1">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Email</span>
        <input name="email" type="text" class="form-control" placeholder="Please fill in..." aria-describedby="basic-addon1">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Address</span>
        <input name="address" type="text" class="form-control" placeholder="Please fill in..." aria-describedby="basic-addon1">
    </div>
    <button type="submit" class="btn btn-primary">Add</button>
</form>
@endsection