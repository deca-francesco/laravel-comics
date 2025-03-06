<style>
    .links {
        a {
            color: white;
            text-decoration: none;
        }

        .img_buy {
            height: 50px;
            max-width: 50px;
            margin-right: 10px;
        }
    }
</style>
<section class="links bg-primary">
    <div class="container d-flex justify-content-around align-items-center" style="height: 150px">
        <a href="#">
            <img src="{{ Vite::asset('./resources/assets/img/buy-comics-digital-comics.png') }}" class="img_buy" alt="">
            <span>DIGITAL COMICS</span>
        </a>
        <a href="#">
            <img src="{{ Vite::asset('./resources/assets/img/buy-comics-merchandise.png') }}" class="img_buy" alt="">
            <span>DC MERCHANDISE</span>
        </a>
        <a href="#">
            <img src="{{ Vite::asset('./resources/assets/img/buy-comics-subscriptions.png') }}" class="img_buy" alt="">
            <span>SUBSCRIPTION</span>
        </a>
        <a href="#">
            <img src="{{ Vite::asset('./resources/assets/img/buy-comics-shop-locator.png') }}" class="img_buy" alt="">
            <span>COMIC SHOP LOCATOR</span>
        </a>
        <a href="#">
            <img src="{{ Vite::asset('./resources/assets/img/buy-dc-power-visa.svg') }}" class="img_buy" alt="">
            <span>DC POWER VISA</span>
        </a>
    </div>
</section>