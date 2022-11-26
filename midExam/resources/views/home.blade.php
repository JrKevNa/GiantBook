@extends('Master.master')

@section('title', 'Home Page')

@section('content')

<link rel="stylesheet" href="/css/homeStyle.css">

<div class="alert alert-dark text-center" role="alert">
    <h3 class="text-dark">Book List</h3>
</div>

<div class="container">
    @foreach($bookData as $b)
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
    {{$bookData->links()}}
</div>

@endsection
