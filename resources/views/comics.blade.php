{{-- utilizzo il layout --}}
@extends('./layouts/master')

{{-- indico la sezione che andrà nel layout --}}
@section('title')
Laravel Comics
@endsection

@php
$comics = config("comics");
@endphp

@section("content")
<div class="jumbotron overflow-hidden" style="height: 400px; margin-bottom: 100px">
    <img src="{{ Vite::asset('./resources/assets/img/jumbotron.jpg') }}" alt="Jumbotron">
</div>
<div class="container">
    <div class="row row-cols-lg-6 g-4">
        @foreach ($comics as $comic)
        <div class="col mb-5">
            <x-card>
                <x-slot:imgUrl>{{ $comic["thumb"] }}</x-slot:imgUrl>
                <x-slot:title>{{ $comic["title"] }}</x-slot:title>
            </x-card>
        </div>
        @endforeach
    </div>
</div>
@endsection