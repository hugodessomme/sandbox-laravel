@extends('layout')

@section('title', 'Edit Project')

@section('content')
    <h1 class="title">Edit Project</h1>

    <form method="POST" action="/projects/{{ $project->id }}">
        <!-- Cross-site request forgery token -->
        @csrf
        {{-- SAME AS --}}
        {{-- csrf_field() --}}

        <!-- Faking PATCH request -->
        @method('PATCH')
        {{-- SAME AS --}}
        {{-- method_field('DELETE') --}}

        <div class="field">
            <label for="title" class="label">Title</label>

            <div class="control">
                <input type="text" id="title" class="input" name="title" placeholder="Title" value="{{ $project->title }}">
            </div>
        </div>

        <div class="field">
            <label for="description" class="label">Description</label>

            <textarea name="description" id="description" class="textarea" cols="30" rows="10">{{ $project->description }}</textarea>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Submit</button>
            </div>
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
            <button type="submit" class="button is-danger">Delete Project</button>
        </div>
    </form>
@endsection