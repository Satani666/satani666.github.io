<html lang="en">
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advins Group</title>
    <link rel="shortcut icon" type="image/png" href="img/favicon.png" />
    <link rel=" preconnect " href="https://fonts.gstatic.com ">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap " rel="stylesheet ">
    <link rel="stylesheet " href="css/style.css ">
    <link rel="stylesheet " href="css/media.css ">
</head>

<body>


    <header id="header " class="header ">
        <div class="container ">
            <div class="header__inner ">
                <a class="logo " href="# ">
                    <img class="logo__img " src="img/Logo.svg " alt="logo ">
                </a>

                <nav class="menu ">
                    <div class="menu__btn ">
                        <span></span>
                    </div>
                    <ul class="menu__list ">
                        <li class="menu__list-item ">
                            <a class="menu__list-link " href="#about ">About</a>
                        </li>
                        <li class="menu__list-item ">
                            <a class="menu__list-link " href="#direction ">Directions</a>
                        </li>
                        <li class="menu__list-item ">
                            <a class="menu__list-link " href="# ">Contacts</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <section class="top ">
        <div class="container ">
            <div class="top__inner ">
                <h1 class="top__title title ">
                    We make goods for home
                </h1>
                <p class="top__text ">
                    Tools, tutorials, design and innovation experts, all in one place! The most intuitive way to imagine your next user experience.
                </p>
                <button class="top__btn ">Contact us</button>
            </div>
        </div>
    </section>

    <section id="about " class="about ">
        <h3 class="about__title title ">
            About Us
        </h3>
        <div class="about__inner ">
            <div class="container ">
                <h4 class="about__heading ">Our company mission</h4>
                <p class="about__text ">“To be Earth’s most customer-centric company, where customers can find and discover anything they might want to buy online, and endeavors to offer its customers the lowest possible prices.”</p>

            </div>
        </div>
    </section>

    <section id="direction " class="direction ">
        <h3 class="direction__title title ">
            Our directions
        </h3>
        <div class="container ">
            <div class="direction__items ">
                <div class="direction__item ">
                    <img class="direction__item-img " src="img/tools-2.svg " alt="direction img ">
                    <h5 class="direction__item-title title ">
                        Safety
                    </h5>
                    <p class="tools__item-text ">
                        Sustainabilityis our high priority.
                    </p>
                </div>
                <div class="direction__item ">
                    <img class="direction__item-img " src="img/tools-3.svg " alt="direction img ">
                    <h5 class="direction__item-title title ">
                        Support
                    </h5>
                    <p class="direction__item-text ">
                        Always ready to answerany question.
                    </p>
                </div>
                <div class="direction__item ">
                    <img class="direction__item-img " src="img/tools-4.svg " alt="direction img ">
                    <h5 class="direction__item-title title ">
                        Quality
                    </h5>
                    <p class="direction__item-text ">
                        We monitor the highquality of our products.
                    </p>
                </div>
            </div>
            <div class="direction__hero ">
                <img class="direction__hero-img " src="img/dir-hero.png " alt="Design Professional Images ">
                <div class="direction__hero-content ">
                    <p class="direction__hero-pretitle ">
                        Easier decision making for
                    </p>
                    <h3 class="direction__hero-title title ">
                        Add comfort to your life
                    </h3>
                    <p class="direction__hero-titletext ">
                        We strive to constantly expand the range of productsto meet any needs of our customers </p>
                    <ul class="direction__list ">
                        <li class="direction__list-item ">
                            Never worry about overpaying for similar product again.
                        </li>
                        <li class="direction__list-item ">
                            We work only with companies that we trust and will treat you right
                        </li>
                        <li class="direction__list-item ">
                            We track the markets daily and constantly follow trends.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <form class="obratnuj-zvonok" autocomplete="off" action='email.php' method='post'>
        <div class="form-zvonok">
            <div>
                <label>Имя <span>*</span></label>
                <input type='text' name='username' required></div>
            <div>
                <label>Номер телефона (с кодом) <span>*</span></label>
                <input type='text' name='usernumber' required></div>
            <div>
                <label>Сообщение</label>
                <input type='text' name='question'>
            </div>
            <input class="bot-send-mail" type='submit' value='Послать заявку'>
        </div>
    </form>

    <footer class="footer ">
        <div class="container ">
            <div class="footer__inner ">
                <a class="logo " href="# ">
                    <img class="logo__img " src="img/Logo.svg " alt="logo ">
                </a>
                <div class="footer__menu ">
                    <h6 class="footer__menu-title ">Quick Links</h6>
                    <ul class="footer__list ">
                        <li class="footer__list-item ">
                            <a class="footer__list-link " href="#about ">About Us</a>
                        </li>
                        <li class="footer__list-item ">
                            <a class="footer__list-link " href="#direction ">Direction</a>
                        </li>
                        <li class="footer__list-item ">
                            <a class="footer__list-link " href="# ">Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="footer__menu ">
                    <h6 class="footer__menu-title ">Legal Stuff</h6>
                    <ul class="footer__list ">
                        <li class="footer__list-item ">
                            <a class="footer__list-link " href="# ">Disclaimer</a>
                        </li>
                        <li class="footer__list-item ">
                            <a class="footer__list-link " href="# ">Financing</a>
                        </li>
                        <li class="footer__list-item ">
                            <a class="footer__list-link " href="# ">Privacy Policy</a>
                        </li>
                        <li class="footer__list-item ">
                            <a class="footer__list-link " href="# ">Terms of Service</a>
                        </li>
                    </ul>
                </div>
                <div class="footer__support ">
                    <h6 class="footer__menu-title ">Support</h6>
                    <div class="footer__support-contacts ">
                        <p class="footer__support-call ">
                            <a href="tel:+17866331395 ">+1 786 633 1395</a>
                        </p>
                        <p class="footer__support-email ">
                            <a href="mailto:info@advins.group ">info@advins.group</a>
                        </p>
                    </div>
                    <div class="footer__support-address ">
                        <h4>Our Mailing Address</h4>
                        <p>2999 N.E. 191ST STREET<br> STE 910 <br> AVENTURA, FL 33180 UNITED STATES OF AMERICA</p>
                    </div>
                </div>
                <!-- <form class="footer__form " action="# ">
                    <p class="footer__form-text ">Knowing you're always on the best energy deal.
                    </p>
                    <input class="footer__form-input " type="text " placeholder="Enter your phone number ">
                    <button class="footer__form-btn " type="submit ">Sing up Now</button>
                </form> -->
            </div>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js "></script>
    <script src="js/main.js "></script>
</body>

</html>