@extends('Master.master')

@section('title', 'Book Detail')

@section('content')

<link rel="stylesheet" href="/css/bookDetailStyle.css">

<div class="alert alert-dark text-center" role="alert">
    <h3 class="text-dark">Book Detail</h3>
</div>

<div class="card mb-3" style="max-width: 1000px; margin: auto">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="{{ asset('/storage/book/'.$book->image) }}" class="img-fluid rounded-start" alt="..." style="width: 200%">
      </div>
      <div class="col-md-8">
        <div class="card-body">
            <h5 class="card-title fs-2">Title: {{ $book->title }}</h5>
            <p class="card-text fs-5">Author: {{ $book->author }}</p>
            <p class="card-text fs-5">Publisher: {{ $book->publisher->name }}</p>
            <p class="card-text fs-5">Year: {{ $book->year }}</p>
            <p class="card-text fs-5">Synopsis</p>
            <p class="card-text" style="white-space: pre-line">{{ $book->synopsis }}</p>
        </div>
      </div>
    </div>
</div>

@endsection
