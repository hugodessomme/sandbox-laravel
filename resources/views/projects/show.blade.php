@extends('layout')

@section('content')
    <h1 class="title">{{ $project->title }}</h1>

    <div class="field">
        {{ $project->description }}
    </div>

    <a href="/projects/{{ $project->id }}/edit" class="button is-link">Edit</a>
@endsection