@extends('layout.app')

@section('title')
Post
@endsection

@section('content')
<section class="post">
    <div class="post__inner">
        <div class="post__body">
            <h1 class="post__body-title">{{ $post->title }}</h1>
            <p class="post__body-description">{{ $post->description }}</p>
            <p class="post__body-datetime">{{ $post->created_at }}</p>
            <form method="POST" action="/post/delete/{{ $post->id }}">
                @csrf
                @method('delete')
                <button type="submit" class="post__body-button">Delete</button>
            </form>
        </div>
    </div>
</section>
@endsection