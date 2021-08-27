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
                <a href="#" class="nav__logo">PUMKEE</a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="#home" class="nav__link active-link">Home</a></li>
                        <li class="nav__item"><a href="#share" class="nav__link">Our mission</a></li>
                        <li class="nav__item"><a href="#decoration" class="nav__link">Assets</a></li>
                        <li class="nav__item"><a href="#accessory" class="nav__link">Features</a></li>
                        <li class="nav__item"><a href="#get" class="nav__link">Get Started</a></li>

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
                        <img src="assets/img/home1.png" alt="">
                    </div>

                    <div class="home__data">
                        <h1 class="home__title">Decentralized Social Network</h1>
                        <p class="home__description">We provide a secure and reliable enviroment for creators to connects with diverse and broad communities through blockchain and social tokens.</p>
                        <a href="#get" class="button">Get Started</a>
                    </div>   
                </div>
            </section>

            <!--========== SHARE ==========-->
            <section class="share section bd-container" id="share">
                <div class="share__container bd-grid">
                    <div class="share__data">
                        <h2 class="section-title-center">Our <br> Mission</h2>
                        <p class="share__description">We aim to protect and secure your data. Provide a fun and easy platform to connect with creators, and provide a reliable and sustainable market for Social tokens. .</p>
                        <a href="#get" class="button">Get Started</a>
                    </div>

                    <div class="share__img">
                        <img src="assets/img/security.png" alt="">
                    </div>
                </div>
            </section>

            <!--========== DECORATION ==========-->
            <section class="decoration section bd-container" id="decoration">
                <h2 class="section-title">A innovative and reliable way to connect. <br> For Creators and Supporters</h2>
                <div class="decoration__container bd-grid">
                    <div class="decoration__data">
                        <img src="assets/img/Cloud_database_PNG.png" alt="" class="decoration__img">
                        <h3 class="decoration__title">Secure</h3>
                        <a href="#" class="button button-link">Protect your Data</a>
                    </div>

                    <div class="decoration__data">
                        <img src="assets/img/Chat_PNG.png" alt="" class="decoration__img">
                        <h3 class="decoration__title">Interact</h3>
                        <a href="#" class="button button-link">Fun and easy to use</a>
                    </div>

                    <div class="decoration__data">
                        <img src="assets/img/Cryptocurrency_PNG.png" alt="" class="decoration__img">
                        <h3 class="decoration__title">Connect</h3>
                        <a href="#" class="button button-link">Support your favorite creators</a>
                    </div>
                </div>
            </section>

            <!--========== ACCESSORIES ==========-->
            <section class="accessory section bd-container" id="accessory">
                <h2 class="section-title">Our<br> Features</h2>

                <div class="accessory__container bd-grid">
                    <div class="accessory__content">
                        <img src="assets/img/app_development_PNG.png" alt="" class="accessory__img">
                        <h3 class="accessory__title">Photo and Video</h3>
                        <a href="#" class="button accessory__button"><i class='bx bx-grid-alt'></i></a>
                    </div>

                    <div class="accessory__content">
                        <img src="assets/img/Coding_PNG.png" alt="" class="accessory__img">
                        <h3 class="accessory__title">Articles and Blogs</h3>
                        <a href="#" class="button accessory__button"><i class='bx bx-grid-alt'></i></a>
                    </div>

                    <div class="accessory__content">
                        <img src="assets/img/Financial_insurance_PNG.png" alt="" class="accessory__img">
                        <h3 class="accessory__title">Data Protection</h3>
                        <a href="#" class="button accessory__button"><i class='bx bx-grid-alt'></i></a>
                    </div>

                    <div class="accessory__content">
                        <img src="assets/img/Online_banking_PNG.png" alt="" class="accessory__img">
                        <h3 class="accessory__title">Social Tokens Exchange</h3>
                        <a href="#" class="button accessory__button"><i class='bx bx-grid-alt'></i></a>
                    </div>

                    <div class="accessory__content">
                        <img src="assets/img/people_PNG.png" alt="" class="accessory__img">
                        <h3 class="accessory__title">Connect with Friends and Creators</h3>
                        <a href="#" class="button accessory__button"><i class='bx bx-grid-alt'></i></a>
                    </div>
                </div>
            </section>

            <!--========== SEND GIFT ==========-->
            <section class="send section" id="get">
                <div class="send__container bd-container bd-grid">
                    <div class="send__content">
                        <h2 class="section-title-center send__title">Join our Community</h2>
                        <p class="send__description">Be the first to know when we launch.</p>
                        <form method="post" action="thankyou.html">
                            <div class="send__direction">
                                <input type="text" name="first_name" placeholder="Type your name here" class="send__input">
                            </div><br>
                        <form method="post" action="thankyou.html">
                            <div class="send__direction">
                                <input type="email" name="email" placeholder="Type your email here" class="send__input">
                                <a href="thankyou.html">
                                <input href="thankyou.html" type="submit" name="save" class="button" value="Join!"></a>
                            </div>
                        </form>
                    </div>

                    <div class="send__img">
                        <img src="assets/img/Web_design_PNG.png" alt="">
                    </div>
                </div>
            </section>
        </main>

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