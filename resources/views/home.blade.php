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
    
@endsection