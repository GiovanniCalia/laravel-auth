@extends('layout.admin')

@section('pageTitle', 'Index home')

@section('content')
<main class="background_comic">
    <ol class="d-flex flex-wrap justify-content-between cards_main">
        @foreach ($posts as $post)
             <li class="text-center">
                 <img src="{{ $post->image }}" alt="{{ $post->title }}">
                 {{--<h3><a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a></h3>--}}
                 <p><strong>{{ $post->description}}€</strong></p>
                 <div><strong>{{ $post->date_creation }}</strong></div>
                 <div><strong>{{ $post->creator }}</strong></div>
            </li>   
         @endforeach
     </ol>
     
    {{ $comics->links() }}

    <div class="text-center links mt-5">
        <a href="{{ route('comics.create') }}">Add a comic</a>
        <a href="{{ route('home') }}" id="red">Return to homepage</a>
    </div>

</main>

@endsection