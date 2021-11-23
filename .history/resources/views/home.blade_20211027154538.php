<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.7.6/dist/css/uikit.min.css" />
    <style>
        .tt {

            background-color: gainsboro;
        }
    </style>
    <title>Document</title>
</head>

<body>
    <div class="uk-position-relative">
        <div class="uk-height-large uk-background-cover uk-light uk-flex uk-flex-top" uk-parallax="bgy: -200" style="background-image: url('img/gambar1.jpg');">

            <h1 class="uk-width-1-2@m uk-text-center uk-margin-auto uk-margin-auto-vertical" uk-parallax="y: 100,0">Hai! Welcome <button class="uk-button uk-button-default uk-button-small">WhatsApp me!</button></h1>

        </div>
        <div class="uk-position-top">
            <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>
                <div class="uk-navbar-left">
                    <ul class="uk-navbar-nav">
                        <!-- <a class="uk-navbar-item uk-logo" href="#">Dondon Dreams</a> -->
                        <a class="uk-navbar-item uk-logo" href="#"><img src="img/teslogo1.png" width="70" alt=""></a>
                        <li class="uk-active"><a href="#about" uk-scroll>About</a></li>
                        <li class="uk-active"><a href="#antraksi" uk-scroll>Antraksi</a></li>
                        <li class="uk-active"><a href="#galery" uk-scroll>Galery</a></li>

                    </ul>
                </div>
                <div class="uk-navbar-right">
                    <ul class="uk-navbar-nav">
                        <li>
                            <button class="uk-button uk-button-default" type="button" uk-toggle="target: #offcanvas-flip"><span class="uk-margin-small-center" uk-icon="user"></span></button>
                            <div id="offcanvas-flip" uk-offcanvas="flip: true; overlay: true">
                                <div class="uk-offcanvas-bar">

                                    <button class="uk-offcanvas-close" type="button" uk-close></button>
                                    <h3>Login Admin</h3>
                                    <form>

                                        <div class="uk-margin">
                                            <div class="uk-inline">
                                                <span class="uk-form-icon" uk-icon="icon: user"></span>
                                                <input class="uk-input" type="text">
                                            </div>
                                        </div>

                                        <div class="uk-margin">
                                            <div class="uk-inline">
                                                <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: lock"></span>
                                                <input class="uk-input" type="password">
                                            </div>
                                        </div>

                                    </form>

                                </div>
                            </div>

                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <div class="uk-section uk-section-primary" id="about">
        <div class="uk-container uk-container-small">
            <div class="uk-column-1-2 uk-column-divider">
                <img src="img/logo1.png" alt="" width="2000px">

                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</p>
                <!-- <a class="uk-button uk-button-primary" href="#coba" uk-scroll>Scroll down</a> -->
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</p>
            </div>
        </div>
    </div>
    <div class="uk-section uk-section-primary" id="antraksi">
        <div class="uk-container uk-container-small">
            <div class="uk-slider-container-offset" uk-slider>

                <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">

                    <ul class="uk-slider-items uk-child-width-1-2@s uk-grid">
                        <li>
                            <div class="uk-card uk-card-default">
                                <div class="uk-card-media-top">
                                    <img src="img/catalog1.jpg" alt="">
                                </div>
                                <div class="uk-card-body">
                                    <h3 class="uk-card-title">Headline</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="uk-card uk-card-default">
                                <div class="uk-card-media-top">
                                    <img src="img/catalog2.jpg" alt="">
                                </div>
                                <div class="uk-card-body">
                                    <h3 class="uk-card-title">Headline</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="uk-card uk-card-default">
                                <div class="uk-card-media-top">
                                    <img src="img/catalog1.jpg" alt="">
                                </div>
                                <div class="uk-card-body">
                                    <h3 class="uk-card-title">Headline</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="uk-card uk-card-default">
                                <div class="uk-card-media-top">
                                    <img src="img/catalog2.jpg" alt="">
                                </div>
                                <div class="uk-card-body">
                                    <h3 class="uk-card-title">Headline</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                </div>
                            </div>
                        </li>
                    </ul>

                    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

                </div>

                <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>

            </div>
        </div>
    </div>
    <!-- 
    <nav class="uk-navbar-container nav-bt" uk-navbar>
        <div class="uk-navbar-center">

            <ul class="uk-navbar-nav">
                <p>Dondon_Dreams &#169; 2021</p>
            </ul>

        </div>
    </nav> -->
    <div class="uk-section uk-section-primary" id="antraksi">
        <div class="uk-container uk-container-small">
            <div uk-slideshow="animation: push">

                <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">

                    <ul class="uk-slideshow-items">
                        <li>
                            <img src="img/catalog1.jpg" alt="" uk-cover>
                        </li>
                        <li>
                            <img src="img/catalog2.jpg" alt="" uk-cover>
                        </li>
                        <li>
                            <img src="img/gambar1.jpg" alt="" uk-cover>
                        </li>
                    </ul>

                    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
                    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

                </div>

                <ul class="uk-slideshow-nav uk-dotnav uk-flex-center uk-margin"></ul>

            </div>
        </div>
    </div>
    <nav class="uk-navbar-container" id="" uk-navbar>
        <div class="uk-navbar-center">

            <ul class="uk-navbar-nav">
                <li class="uk-active"><a href="#">Dondon_Dreams &#169; 2021</a></li>
            </ul>

        </div>
    </nav>




    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.6/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.6/dist/js/uikit-icons.min.js"></script>
</body>

</html>