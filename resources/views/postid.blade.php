@extends('layouts.main')

@section('content')
    <h2>{{ $postid["judul"] }}</h2>
    <h4>{{ $postid["author"] }}</h4>
    <p>{{ $postid["body"] }}</p>

    <a href="/blog"> Back Page</a>
@endsection