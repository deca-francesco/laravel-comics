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

@include('./partials/jumbotron')

<div class="bg-primary p-3" style="position: absolute; top: 520px; left: 280px">
    <h3 class="mb-0">CURRENT SERIES</h3>
</div>
<div class="container">
    <div class="row row-cols-lg-6 g-5">
        @foreach ($comics as $comic)
        <div class="col">
            {{-- uso il componente card --}}
            <x-card>
                {{-- la proprietà dell'array letterale andrà a valorizzare lo slot --}}
                <x-slot:imgUrl>{{ $comic["thumb"] }}</x-slot:imgUrl>
                <x-slot:title>{{ $comic["title"] }}</x-slot:title>
            </x-card>
        </div>
        @endforeach
    </div>
    <div class="text-center mt-5 mb-5">
        <button class="bg-primary text-light border-0 py-2 px-5">LOAD MORE</button>
    </div>
</div>

@include('./partials/links')

@endsection