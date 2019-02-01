@extends('layout')

@section('title', 'All Tests')

@section('content')
    <h1>All Tests</h1>
    <a href="/tests/create">Create New Test</a>

    <ul>
        @foreach ($tests as $test)
            <li>
                <a href="/tests/{{ $test->id }}">{{ $test->name }}</a>
            </li>
        @endforeach
    </ul>
@endsection