
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--========== BOX ICONS ==========-->
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

        <!--========== CSS ==========-->
        <link rel="stylesheet" href="assets/css/styles.css">

        <title>Responsive landing page</title>
    </head>
    <body>
        <!--========== SCROLL TOP ==========-->
        <a href="#" class="scrolltop" id="scroll-top">
            <i class='bx bx-up-arrow-alt scrolltop__icon'></i>
        </a>
        
        <!--========== HEADER ==========-->
        <header class="l-header" id="header">
            <nav class="nav bd-container">
                <a href="index.html#home" class="nav__logo">PUMKEE</a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="index.html#home" class="nav__link active-link">Home</a></li>
                        <li class="nav__item"><a href="index.html#share" class="nav__link">Our mission</a></li>
                        <li class="nav__item"><a href="index.html#decoration" class="nav__link">Assets</a></li>
                        <li class="nav__item"><a href="index.html#accessory" class="nav__link">Features</a></li>
                        <li class="nav__item"><a href="index.html#get" class="nav__link">Get Started</a></li>

                        <li><i class='bx bx-toggle-left change-theme' id="theme-button"></i></li>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-grid-alt'></i>
                </div>
            </nav>
        </header>

        <main class="l-main">
            <!--========== HOME ==========-->
            <section class="home" id="home">
                <div class="home__container bd-container bd-grid">
                    <div class="home__img">
                        <img src="assets/img/Image.jpeg" alt="">
                    </div>

                    <div class="home__data">
                        <h1 class="home__title">Thank you for joining our community</h1>
                        <p class="home__description">You'll receive a message shortly</p>
                    </div>   
                </div>
            </section>


        <!--========== FOOTER ==========-->
        <footer class="footer section">
            <div class="footer__container bd-container bd-grid">
                <div class="footer__content">
                    <h3 class="footer__title">
                        <a href="#" class="footer__logo">Pumkee</a>
                    </h3>
                    <p class="footer__description">Decentralized Social Network</p>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Our Services</h3>
                    <ul>
                        <li><a href="#" class="footer__link">App Store </a></li>
                        <li><a href="#" class="footer__link">Play Store</a></li>
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Our Company</h3>
                    <ul>
                        <li><a href="#" class="footer__link">Our mision</a></li>
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Social</h3>
                    <a href="#" class="footer__social"><i class='bx bxl-facebook-circle '></i></a>
                    <a href="#" class="footer__social"><i class='bx bxl-twitter'></i></a>
                    <a href="#" class="footer__social"><i class='bx bxl-instagram-alt'></i></a>
                </div>
            </div>

            <p class="footer__copy">&#169; 2021 Pumkee. All right reserved</p>
        </footer>

        <!--========== SCROLL REVEAL ==========-->
        <script src="https://unpkg.com/scrollreveal"></script>

        <!--========== MAIN JS ==========-->
        <script src="assets/js/main.js"></script>
    </body>
</html>  



