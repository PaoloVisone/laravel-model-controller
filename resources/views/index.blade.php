{{-- Layout --}}
@extends('layouts.master')

{{-- Contenuto di index --}}
@section('main')
<main> 
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 m-3 g-3">
            
            {{-- Card --}}
            @foreach ($movies as $movie)
            <div class="col">

                <x-card>
                    <x-slot:title>{{ $movie['title'] }}</x-slot>
                    <x-slot:original_title>{{ $movie['original_title'] }}</x-slot>
                    <x-slot:date>Data: {{ $movie['date'] }}</x-slot>
                    <x-slot:nationality>Nazionalità: {{ $movie['nationality'] }}</x-slot>
                    <x-slot:vote>Voto: {{ $movie['vote'] }}</x-slot>
                </x-card>
                
            </div>
                @endforeach
        </div>
    </div> 
</main>
@endsection