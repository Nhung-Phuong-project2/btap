@extends('layout')
@section('content')
<form action="{{url('book/'.$book->id)}}" style="width: 70%; margin:auto; text-align:center;" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Name</span>
        <input name="name" type="text" class="form-control" placeholder="Book name is.." aria-describedby="basic-addon1" value="{{$book->name}}">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Details</span>
        <input name="details" type="text" class="form-control" placeholder="Please fill in..." aria-describedby="basic-addon1" value="{{ $book->details}}">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection