@extends('layout')

@section('title', 'Projects')

@section('content')
    <h1>Projects</h1>

    <ul>
        @foreach ($projects as $project)
            <li>
                {{ $project->title }} (<a href="/projects/{{ $project->id }}/edit">edit</a>)
            </li>
        @endforeach
    </ul>
@endsection