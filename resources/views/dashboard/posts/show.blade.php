@extends('dashboard.layouts.main')
@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <h1>{{ $post->title }}</h1>
            <a href="/dashboard/posts" class="btn btn-secondary"><span data-feather="arrow-left"></span> Back to posts</a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
            <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                  <button class="btn btn-danger" onclick="return confirm('R U Sure?')"><span data-feather="x-circle"></span> Delete</button>
            </form>
            
            @if ($post->image)
            <img class="card-img-top img-fluid mt-3" src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" >
            @else
            <img class="card-img-top img-fluid mt-3" src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" >
            @endif
            <article class="my-3 fs-5">
                {!! $post->body !!}
            </article>
        </div>
    </div>
</div>
@endsection