@extends('layout')

@section('title', 'Edit Project')

@section('content')
    <h1>Edit Project</h1>

    <form action="/tests/{{ $test->id }}" method="POST">
        @csrf
        @method('PATCH')

        <div>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" value="{{ $test->name }}">
        </div>

        <div>
            <button type="submit">Edit</button>
        </div>
    </form>
@endsection