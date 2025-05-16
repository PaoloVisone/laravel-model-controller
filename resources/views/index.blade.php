{{-- Layout --}}
@extends('layouts/master')

{{-- Contenuto di index --}}
@section('main')
<main>  
    {{-- Card --}}
    @foreach ($movies as $movie)
    <x-card>
        <x-slot:title>{{ $movie['title'] }}</x-slot>
        <x-slot:original_title>{{ $movie['original_title'] }}</x-slot>
        <x-slot:date>Data: {{ $movie['date'] }}</x-slot>
        <x-slot:nationality>Nazionalità: {{ $movie['nationality'] }}</x-slot>
        <x-slot:vote>Voto: {{ $movie['vote'] }}</x-slot>
    </x-card>
    @endforeach
</main>
@endsection