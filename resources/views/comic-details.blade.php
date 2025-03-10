@extends('./layouts/master')

@section('title')
{{ $comic['title'] }}
@endsection

@section('content')
<div class="container mt-5">
    <div class="row g-0 mb-5">
        <div class="col-md-4">
            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}" class="img-fluid">
        </div>
        <div class="col-md-8 ps-4">
            <h1>{{ $comic['title'] }}</h1>
            <h3><strong>Serie: </strong>{{ $comic['series'] }}</h3>
            <p><strong>Tipo: </strong>{{ $comic['type'] }}</p>
            <p><strong>Prezzo: </strong>{{ $comic['price'] }}</p>
            <p><strong>Uscita: </strong>{{ $comic['sale_date'] }}</p>
            <p><strong>Artisti: </strong>{{ implode(", ", $comic['artists']) }}</p>
            <p><strong>Scrittori: </strong>{{ implode(", ", $comic['writers']) }}</p>
            <p><strong>Descrizione: </strong>{{ $comic['description'] }}</p>
        </div>
    </div>
    <a href="{{ route('comics') }}" class="btn btn-primary mb-5">
        <h4 class="mb-0">Torna alla lista</h4>
    </a>
</div>
@endsection