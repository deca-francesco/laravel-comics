{{-- utilizzo il layout --}}
@extends('./layouts/master')

{{-- indico la sezione che andrà nel layout --}}
@section('title')
Laravel Comics
@endsection

@section('content')
@include('./partials/jumbotron')

<div class="bg-primary p-3" style="position: absolute; top: 470px; left: 280px">
    <h3 class="mb-0">CURRENT SERIES</h3>
</div>
<div class="container">
    <div class="row row-cols-lg-4 row-cols-xl-6 g-5">
        {{-- ogni comic sarà un elemento con chiave index --}}
        @foreach ($comics as $index => $comic)
        <div class="col">
            {{-- reindirizzo alla pagina di dettaglio --}}
            <a href="{{ route('comic-details', ['id' => $index]) }}" style="text-decoration: none; color: inherit;">
                {{-- uso il componente card --}}
                <x-card>
                    {{-- la proprietà dell'array letterale andrà a valorizzare lo slot --}}
                    <x-slot:imgUrl>{{ $comic['thumb'] }}</x-slot:imgUrl>
                    <x-slot:title>{{ $comic['series'] }}</x-slot:title>
                </x-card>
            </a>
        </div>
        @endforeach
    </div>
    <div class="text-center mt-5 mb-5">
        <button class="bg-primary text-light border-0 py-2 px-5">LOAD MORE</button>
    </div>
</div>

@include('./partials/links')
@endsection