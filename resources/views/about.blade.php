@extends('layouts.main')

@section('content')
<h2>Halaman {{ $title }}</h2>
<h4>{{ $name }} </h4>
<p>{{ $email }} </p>
<img src="img/{{ $image }}" alt="{{ $name }}">
@endsection