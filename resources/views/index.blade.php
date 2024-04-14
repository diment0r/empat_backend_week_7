@extends('layout.app')

@section('title')
All posts
@endsection

@section('content')

<section class="content">
    <div class="content__inner">
        @if(count($posts) === 0)
        <h1 class="content__message">No data</h1>
        @else
        <div class="content__body">
            @foreach($posts as $post)
            <div class="content__post">
                <a href="post/{{ $post->id }}" class="content__post-title">{{ $post->title }}</a>
                <p class="content__post-desc">{{ $post->description }}</p>
                <p class="content__post-datetime">{{ $post->created_at }}</p>
            </div>
            @endforeach
        </div>
        @endif
    </div>
</section>

@endsection