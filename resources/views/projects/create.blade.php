@extends('layout')

@section('title', 'Create a New Project')

@section('content')
    <h1>Create a New Project</h1>

    <form method="POST" action="/projects">
        <!-- Cross-site request forgery token -->
        <!-- Generate a secure form token provided by Laravel -->
        <!-- Always use it in forms -->
        {{ csrf_field() }}

        <div>
            <input type="text" name="title" placeholder="Project title">
        </div>

        <div>
            <textarea name="description" placeholder="Project description"></textarea>
        </div>

        <div>
            <button type="submit">Create Project</button>
        </div>
    </form>
@endsection