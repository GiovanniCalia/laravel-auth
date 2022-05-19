@extends('layouts.admin')

@section('pageTitle', 'Index home')

@section('content')
<main class="background_post" >
    <div class="text-center links mt-5">
        <a href="{{ route('admin.posts.create') }}">Create a new post</a><br>
        <a href="{{ route('admin.home') }}">Return to home</a>
    </div>
    <ol class="d-flex flex-wrap justify-content-around cards_main">
        @foreach ($posts as $post)
            <li class="text-center" data-id="{{ $post->slug }}">
                <img src="{{ $post->image }}" alt="{{ $post->title }}" class="img-fluid">
                <h3><a href="{{ route('admin.posts.show', $post->slug) }}">{{ $post->title }}</a></h3>
                <div>Created by: <strong>{{ $post->creator }}</strong></div>
                <a class="btn btn-primary" href="{{ route('admin.posts.edit', $post->slug) }}">Edit</a>
                <form action="{{ route('admin.posts.destroy', $post->slug) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger mt-3" onClick="return confirm('Are you sure to delete this comic?')">Delete</button>
                </form>
            </li> 
         @endforeach
     </ol>
     
    {{ $posts->links() }}

    {{--<section id="confirmation-overlay" class="overlay d-none">
        <div class="popup">
            <h1>Sei sicuro di voler eliminare?</h1>
            <div class="d-flex justify-content-center">
                <button id="btn-no" class="btn btn-primary me-3">NO</button>
                <form method="POST" data-base="{{ route('admin.posts.destroy') }}">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">SI</button>
                </form>
            </div>
        </div>
    </section>--}}
</main>

@endsection