<style>
    footer {
        .links_section {
            background-image: url( {{ Vite::asset('./resources/assets/img/footer-bg.jpg')}} );
            background-size: cover;
            height: 400px;
            overflow-y: hidden;

            .row.row-cols-4 {
                padding-top: 50px;
            }

            a {
                text-decoration: none;
                color: grey;
            }
            img {
                position: relative;
                top: -100px
            }
        }
        .signup_section {
            background-color: #333;

            a {
                text-decoration: none;
                margin-left: 20px;
            }
            .signup_button {
                padding: 10px 20px;
                border: 3px solid #0d6efd;
                background-color: #333;
                color: white;

                h5 {
                    margin-bottom: 0;
                }
            }
            
        }
    }
    
</style>

<footer>
    <section class="links_section">
        <div class="container">
            <div class="row row-cols-2">
                <div class="col">
                    <div class="row row-cols-4">
                        <div class="col d-flex flex-column">
                            <h4>DC COMICS</h4>
                            <a href="#">Characters</a>
                            <a href="#">Comics</a>
                            <a href="#">Movies</a>
                            <a href="#">TV</a>
                            <a href="#">Games</a>
                            <a href="#">Videos</a>
                            <a href="#">News</a>
                            <h4 class="my-4">SHOP</h4>
                            <a href="#">Shop DC</a>
                            <a href="#">Shop DC Collectibles</a>
                        </div>
                        <div class="col d-flex flex-column">
                            <h4>DC</h4>
                            <a href="#">Terms of use</a>
                            <a href="#">Privacy policy (New)</a>
                            <a href="#">Ad Choices</a>
                            <a href="#">Advertising</a>
                            <a href="#">Jobs</a>
                            <a href="#">Subscriptions</a>
                            <a href="#">Talent Workshops</a>
                            <a href="#">CPSC Certificates</a>
                            <a href="#">Ratings</a>
                            <a href="#">Shop Help</a>
                            <a href="#">Contact Us</a>
                        </div>
                        <div class="col d-flex flex-column">
                            <h4>SITES</h4>
                            <a href="#">DC</a>
                            <a href="#">MAD Magazine</a>
                            <a href="#">DC Kids</a>
                            <a href="#">DC Universe</a>
                            <a href="#">DC Power Visa</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <img src="{{ Vite::asset('./resources/assets/img/dc-logo-bg.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="signup_section py-4">
        <div class="container">
            <div class="row row-cols-2 align-items-center">
                <div class="col">
                    <button class="signup_button"><h5>SIGN-UP NOW!</h5></button>
                </div>
                <div class="col d-flex justify-content-end align-items-center">
                    <h3 class="text-primary m-0"><strong>FOLLOW US</strong></h3>
                    <a href="http://facebook.com"><img src="{{ Vite::asset('./resources/assets/img/footer-facebook.png') }}" alt="Facebook"></a>
                    <a href="http://x.com"><img src="{{ Vite::asset('./resources/assets/img/footer-twitter.png') }}" alt="Twitter"></a>
                    <a href="http://youtube.com"><img src="{{ Vite::asset('./resources/assets/img/footer-youtube.png') }}" alt="Youtube"></a>
                    <a href="http://pinterest.com"><img src="{{ Vite::asset('./resources/assets/img/footer-pinterest.png') }}" alt="Pinterest"></a>
                    <a href="https://www.pscp.tv"><img src="{{ Vite::asset('./resources/assets/img/footer-periscope.png') }}" alt="Periscope"></a>
                </div>
            </div>
        </div>
    </section>
</footer>