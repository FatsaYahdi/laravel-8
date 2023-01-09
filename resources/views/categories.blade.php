@extends('layouts.main')
@section('container')
    <h1 class="mb-5">Posts Categories </h1>
    <div class="container">
        <div class="row">
            @foreach ($categories as $category)
            <div class="col-md-4">
            <a href="/posts?category={{ $category->slug }}">
                <div class="card bg-dark text-white">
                    <img class="card-img" src="https://source.unsplash.com/500x500?{{ $category->name }}" alt="{{ $category->name }}">
                    <div class="card-img-overlay d-flex align-items-center p-0">
                        <h4 class="card-title text-center flex-fill p-4 fs-3">{{ $category->name }}</h4>
                    </div>
                </div>
            </a>
            </div>
            @endforeach
        </div>
    </div>
@endsection