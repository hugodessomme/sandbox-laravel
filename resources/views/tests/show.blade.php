@extends('layout')

@section('title')

@section('content')
    <h1>{{ $test->name }}</h1>
    <a href="/tests/{{ $test->id }}/edit">Edit</a>

    <form action="/tests/{{ $test->id }}" method="POST">
        @csrf
        @method('DELETE')

        <button type="submit">Delete</button>
    </form>
@endsection