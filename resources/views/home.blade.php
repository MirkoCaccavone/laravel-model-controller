<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Model Controller</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>
    <body class="bg-light">
        <div class="container py-5">
            <h1 class="text-center mb-5">Movies Collection</h1>
            <div class="row g-4">
                @foreach ($movies as $movie)
                    <div class="col-12 col-md-6 col-lg-4">
                        <x-card>
                            <x-slot:title>{{$movie->title}}</x-slot>
                            <x-slot:original_title>{{$movie->original_title}}</x-slot>
                            <x-slot:nationality>{{$movie->nationality}}</x-slot>
                            <x-slot:date>{{$movie->date}}</x-slot>
                            <x-slot:vote>{{$movie->vote}}</x-slot>
                        </x-card>
                    </div>
                @endforeach
            </div>
        </div>
    </body>
</html>


