@extends('Master.master')

@section('title', 'Publisher Detail')

@section('content')

<link rel="stylesheet" href="/css/publisherDetailStyle.css">

<div class="alert alert-dark text-center" role="alert">
    <h6 class="text-dark">{{ $publisher->name }}</h6>
    <h6 class="text-dark">Address: {{ $publisher->address }}</h6>
    <h6 class="text-dark">Phone: {{ $publisher->phone }}</h6>
    <h6 class="text-dark">Email: {{ $publisher->email }}</h6>
</div>

<div class="container">
    @foreach($books as $b)
        <div class="card border-light bg-light" style="width: 18rem; margin: 10px;">
            <img src="{{ asset('/storage/book/'.$b->image) }}" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">{{ $b->title }}</h5>
            <p class="card-text"> By: {{ $b->author }}</p>
            </div>

            <a href="../book-detail/{{ $b->id }}" class="btn btn-primary">Detail</a>
        </div>
    @endforeach
</div>

<div class="pagination justify-content-center" style="margin-top: 20px; margin-bottom: 20px">
    {{$books->links()}}
</div>

@endsection
