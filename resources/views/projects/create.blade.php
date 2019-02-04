@extends('layout')

@section('title', 'Create a New Project')

@section('content')

    <h1 class="title">Create a New Project</h1>

    <form method="POST" action="/projects">
        <!-- Cross-site request forgery token -->
        <!-- Generate a secure form token provided by Laravel -->
        <!-- Always use it in forms -->
        {{ csrf_field() }}

        <div class="field">
            <label for="title" class="label">Project Title</label>
            <div class="control">
                <input type="text" id="title"  class="input {{ $errors->has('title') ? 'is-danger' : '' }}" name="title" placeholder="Project title" value="{{ old('title') }}">
            </div>
        </div>

        <div class="field">
            <label for="description" class="label">Project Description</label>
            
            <div class="control">
                <textarea class="textarea {{ $errors->has('description') ? 'is-danger' : '' }}" name="description" placeholder="Project description">{{ old('description') }}</textarea>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Create Project</button>
            </div>
        </div>

        @if ($errors->any())
            <div class="notification is-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </form>
@endsection