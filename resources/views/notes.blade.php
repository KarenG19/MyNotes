@extends('layouts.app')

@section('title', 'Notes')
@section('meta-description', 'Notes meta description')

@section('content')

    <h1>Notes</h1>

    @foreach ($mynotes as $note)
        <h2>{{ $note->title }}</h2>
    @endforeach

@endsection
