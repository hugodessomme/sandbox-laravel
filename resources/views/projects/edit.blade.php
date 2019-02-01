@extends('layout')

@section('title', 'Edit Project')

@section('content')
    <h1>Edit Project</h1>

    <form method="POST" action="/projects/{{ $project->id }}">
        <!-- Cross-site request forgery token -->
        @csrf
        {{-- SAME AS --}}
        {{-- csrf_field() --}}

        <!-- Faking PATCH request -->
        @method('PATCH')
        {{-- SAME AS --}}
        {{-- method_field('DELETE') --}}

        <div>
            <label for="title">Title</label><br>
            <input type="text" id="title" name="title" placeholder="Title" value="{{ $project->title }}">
        </div>
        <br>
        <div>
            <label for="description">Description</label><br>
            <textarea name="description" id="description" cols="30" rows="10">{{ $project->description }}</textarea>
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>

    <form method="POST" action="/projects/{{ $project->id }}">
        <!-- Cross-site request forgery token -->
        @csrf
        {{-- SAME AS --}}
        {{-- csrf_field() --}}

        <!-- Faking DELETE request -->
        @method('DELETE')
        {{-- SAME AS --}}
        {{-- method_field('DELETE') --}}

        <div>
            <button type="submit">Delete Project</button>
        </div>
    </form>
@endsection