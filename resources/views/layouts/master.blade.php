<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("title")</title>
    
    {{-- importare bootstrap --}}
    @vite(["resources/sass/app.scss", "resources/js/app.js"])

</head>
<body>
    <div class="container">

        {{-- importo i partials (si parte dal folder views) --}}
        @include("./partials/header")

        {{-- sezione della pagina chiamata contenuto che verrà inserita qua --}}
        <main>
            @yield("content")
        </main>

        @include("./partials/footer")

    </div>
</body>
</html>