@extends('layout.app')

@section('title')
Create post
@endsection

@section('content')
<section class="create">
    <div class="create__inner">
        <form class="create__form" action="/post/create-post" method="POST">
            @csrf
            <label class="create__form-label" for="title">Title</label>
            <input class="create__form-input" name="title" id="title" type="text">
            <label class="create__form-label" for="desc">Description</label>
            <input class="create__form-input" name="description" id="desc" type="text">
            <button id="submit_button" class="create__form-button" type="submit">Submit</button>
            @if($errors->any())
            @foreach($errors->all() as $error)
            <p class="create__form-error">{{ $error }}</p>
            @endforeach
            @endif
        </form>
    </div>
</section>
@endsection