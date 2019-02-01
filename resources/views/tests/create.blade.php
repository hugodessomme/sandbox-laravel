@extends('layout')

@section('title', 'Create Test')

@section('content')
    <h1>Create Test</h1>
    
    <form method="POST" action="/tests">
        @csrf
        
        <div>
            <label for="name">Name</label>
            <input type="text" id="name" name="name">
        </div>
        <div>
            <button type="submit">Create</button>
        </div>
    </form>
@endsection