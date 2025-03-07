<style>
    header {
        height: 150px;

        .container {
            img {
                height: 80px;
            }

            nav {

                a {
                    color: black !important;
                    display: flex;
                    align-items: center;
                }

                a.active {
                    color: #0d6efd !important;
                }
            }
        }
    }
</style>

<header class="bg-light">
    <div class="container h-100 d-flex justify-content-between">
        <img class="align-self-center" src="{{ Vite::asset('./resources/assets/img/dc-logo.png') }}" alt="logo DC">
        <nav class="nav nav-underline h-100">
            <a class="nav-link" href="#">CHARACTERS</a>
            <a class="nav-link active" aria-current="page" href="{{ route('comics') }}">COMICS</a>
            <a class="nav-link" href="#">MOVIES</a>
            <a class="nav-link" href="#">TV</a>
            <a class="nav-link" href="#">GAMES</a>
            <a class="nav-link" href="#">COLLECTIBLES</a>
            <a class="nav-link" href="#">VIDEOS</a>
            <a class="nav-link" href="#">FANS</a>
            <a class="nav-link" href="#">NEWS</a>
            <a class="nav-link" href="#">SHOP</a>
        </nav>
    </div>
</header>
