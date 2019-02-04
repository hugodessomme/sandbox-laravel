@extends('layout')

@section('title', 'Projects')

@section('content')
    <h1 class="title">
        Projects <a href="/projects/create" class="button">Create</a>
    </h1>

    <ul>
        @foreach ($projects as $project)
            <li class="field">
                <a href="/projects/{{ $project->id }}" class="button is-link">{{ $project->title }}</a>
            </li>
        @endforeach
    </ul>
@endsection