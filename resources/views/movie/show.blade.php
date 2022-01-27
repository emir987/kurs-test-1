@extends('layouts.layout')

@section('body')
    <h4>Detalji filma</h4>
    Naziv: {{ $movie->name }} <br>
    Datum kreiranja: {{ $movie->created_at }}
@endsection
