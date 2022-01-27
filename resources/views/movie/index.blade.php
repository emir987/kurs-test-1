@extends('layouts.layout')

@section('body')
    <h4>Filmovi:</h4>
    <ul>
        @foreach ($movies as $movie)
            <li>
                <a href="{{ route('movies.show', $movie->id) }}">{{ $movie->name }}</a>
            </li>
            @if ($loop->last)
                <li>
                    <a class="green" href="{{ route('movies.create') }}">Dodaj novi film</a>
                </li>
            @endif
        @endforeach
    </ul>
@endsection
