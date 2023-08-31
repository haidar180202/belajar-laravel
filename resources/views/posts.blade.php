@extends('layouts.main')

@section('content')
    @foreach ($posts as $post)
        <article>
            <h2>
                <a href="/posts/{{ $post["slug"] }}">{{ $post["judul"] }}</a>
            </h2>
            <h4>Author {{ $post["author"] }}</h4>
            <p>{{ $post["body"] }}</p>
        </article>
    @endforeach
@endsection