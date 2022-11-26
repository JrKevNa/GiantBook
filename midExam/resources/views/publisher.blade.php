@extends('Master.master')

@section('title', 'Publisher')

@section('content')

<div class="alert alert-dark text-center" role="alert">
    <h3 class="text-dark">Publisher</h3>
</div>

@foreach($publisher as $p)
    <div class="card mb-3" style="max-width: 550px; margin: auto">
        <div class="row g-0">
        <div class="col-md-4">
            <img src="{{ asset('/storage/publisher/'.$p->image) }}" class="img-fluid rounded-start" alt="..." style="width: 200%">
        </div>
        <div class="col-md-8">
            <div class="card-body">
            <h5 class="card-title">Name: {{ $p->name }}</h5>
            <p class="card-text">Address: {{ $p->address }}</p>
            </div>
        </div>
        </div>
        <a href="../publisher-detail/{{ $p->id }}" class="btn btn-primary">Detail</a>
    </div>
@endforeach

<div class="pagination justify-content-center" style="margin-top: 20px; margin-bottom: 20px">
    {{$publisher->links()}}
</div>

@endsection
