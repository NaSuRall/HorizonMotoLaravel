@extends("layouts.dashboard")

@section("content")

<h1>Bonjour {{ auth()->user()->name }}</h1>

@endsection
