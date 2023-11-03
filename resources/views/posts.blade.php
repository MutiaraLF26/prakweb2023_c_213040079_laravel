

@extends('layout.main')

@section('container')
    
    @foreach ($posts as $post)
        <article class="mb-">
            <h2>
                <a href="/posts/"{{ $posts["slug"] }}> </a>
            </h2>
            <h5>{{ $post["body"]}}></h5>
            <p>{{ $post["body"] }}</p>
        </article>
    @endforeach

@endsection

