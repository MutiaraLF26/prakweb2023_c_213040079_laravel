

@extends('layout.main')

@section('container')

<h1 class="mb-5"> {{ $title }}</h1>
    
    @foreach ($posts as $post)
        <article class="mb-5 border-bottom pb-3">
            <h2>
                <a href="/posts/{{ $post->slug }}" class="text-decoration-none">{{$post->title}} </a>
            </h2>
            <p>By Mutiara in <a href="/authors/{{ $post->author->username}}" class="text-decoration-none">{{ $post->author->name }}</a></p>
            <p>{{ $post->excerpt }}</p>

            <a href="/posts" class="d-block mt-3">Read more..</a>
        </article>
    @endforeach

@endsection

