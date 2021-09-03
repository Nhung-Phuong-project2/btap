@extends('layout')
@section('content')
@csrf
<div class="container">
    <table class="table table-dark table-striped">
        <h1>Book</h1>
    <a href="{{url('reader/create')}}">Them</a>
        <tr>
            <th>STT</th>
            <th>Name</th>
            <th>Avatar</th>
            <th>Details</th>
            <th>Author</th>
            <th>Type</th>
            <th>NXB</th>
            <th colspan="2">Action</th>
        </tr>
        @foreach ($reader as $item)
        <tr>
            <th>
                {{ $item ->id}}
            </th>
            <th>
                {{ $item -> name}}
            </th>
            <th>
    	        {{ $item -> phone}}
            </th>
            <th>
                {{ $item -> email}}
            </th>
            <th>
                <!--  $item -> author -> name -->
                {{ $item -> address}}
            </th>
            <th>
                <!--  $item -> book_type -> name -->
                {{ $item -> id_borrow_ticket}}
            </th>
            <th>
                <a href="{{url('reader/'.$item->id.'/edit')}}">Edit</a>
            </th>
            <th>
                <!-- <a href="{{url('book/'.$item->id.'/delete')}}">Delete</a> -->
                <form action="{{ url('reader/'.$item->id) }}" method="POST">
                @csrf
                @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                </form>
            </th>
        </tr>
        @endforeach
    </table>
        </div>
@endsection