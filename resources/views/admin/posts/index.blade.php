@extends('layouts.admin')

@section('pageTitle', 'Index home')

@section('content')
<main class="background_post">
    <ol class="d-flex flex-wrap justify-content-between cards_main">
        @foreach ($posts as $post)
             <li class="text-center">
                 <img src="{{ $post->image }}" alt="{{ $post->title }}">
                 <h3><a href="{{ route('admin.posts.show', $post->id) }}">{{ $post->title }}</a></h3>
                 <p><strong>{{ $post->description}}€</strong></p>
                 <div><strong>{{ $post->date_creation }}</strong></div>
                 <div><strong>{{ $post->creator }}</strong></div>
                <a class="btn btn-primary" href="{{ route('admin.posts.show', $post->id) }}">View</a>
                <a class="btn btn-primary" href="{{ route('admin.posts.edit', $post->id) }}">Edit</a>
                <button class="btn btn-danger btn-delete" data-id="{{ $post->id }}">Delete</button>
            </li> 
         @endforeach
     </ol>
     
    {{ $posts->links() }}

    <div class="text-center links mt-5">
        <a href="{{ route('admin.posts.create') }}">Create</a>
    </div>

</main>

@endsection