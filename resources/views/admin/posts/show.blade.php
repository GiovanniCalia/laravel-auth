@extends('layouts.admin')

@section('pageTitle', 'Show post')

@section('content')
<main class="main_box">
    <div class="text-center my-4 box">
        <img src="{{ $post->image }}" alt="{{ $post->title }}" class="img-fluid">
        <h1>{{ $post->title }}</h1>
        <div>Created by: <strong>{{ $post->creator }}</strong></div>
        <p>{{ $post->description }}</p>
        <div>Creation date: <strong>{{ $post->date_creation }}</strong></div>
        <div class="links mt-2">
            <a class="btn btn-primary" href="{{ url()->previous()}}" id="gray">Back</a>
            <a class="btn btn-primary" href="{{ route('admin.posts.edit', $post->id) }}">Edit</a>
            <a class="btn btn-primary" href="{{ route('admin.posts.index') }}">Return to posts list</a>
        </div>
        <button class="btn btn-danger btn-delete mt-2" data-id="{{ $post->id }}" onClick="return confirm('Are you sure to delete this post?')">Delete</button>

        {{--<section id="confirmation-overlay" class="overlay d-none">
            <div class="popup">
                <h1>Sei sicuro di voler eliminare?</h1>
                <div class="d-flex justify-content-center">
                    <button id="btn-no" class="btn btn-primary me-3">NO</button>
                    <form method="POST" data-base="{{ route('admin.posts.index') }}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">SI</button>
                    </form>
                </div>
            </div>
        </section>--}}
    </div>
</main>
@endsection