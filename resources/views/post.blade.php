@extends('layouts.main')
@section('container')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>{{ $post->title }}</h1>
                <p>By : <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/posts?category=/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
                @if ($post->image)
                    <img class="card-img-top img-fluid" src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" >
                @else
                    <img class="card-img-top img-fluid" src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" >
                @endif
                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>
                <a class="d-block mt-3" href="/posts">Back to Posts</a>
            </div>
        </div>
    </div>
@endsection