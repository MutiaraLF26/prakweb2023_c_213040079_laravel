

@extends('layout.main')

@section('container')
    <h1 class="mb-5">Post Categories : {{ $category }}</h1>
    
    @foreach ($categories as $category)
        <ul>
            <li>
                <h2>
                    <a href="/posts/"{{ $category->id }}>{{$category->title}} </a>
                </h2>
            </li>
        </ul>
           
        
    @endforeach

@endsection

