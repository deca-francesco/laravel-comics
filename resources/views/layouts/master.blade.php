<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="{{ Vite::asset('resources/assets/img/favicon.ico') }}">
    
    <title>@yield("title")</title>

    {{-- font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">

    {{-- importare bootstrap --}}
    @vite(["resources/sass/app.scss", "resources/js/app.js"])

</head>

<body class="bg-dark text-light">

    {{-- importo i partials (si parte dal folder views) --}}
    @include("./partials/header")

    {{-- sezione della pagina chiamata contenuto che verrà inserita qua --}}
    <main>
        @yield("content")
    </main>

    @include("./partials/footer")

</body>

</html>