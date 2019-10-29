<?php ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>GC-Climelec</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css"
          integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
          crossorigin=""/>

    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>

<body onload="insertTextHome();">
<div class="header">
    <div class="container">
        <nav class="navbar navbar-inverse" role="navigation">
            <div class="navbar-header">
                <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand scroll-top"><em>Gc</em>-Climelec</a>
            </div>
            <!--/.navbar-header-->
            <div id="main-nav" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="#" class="scroll-top">Accueil</a></li>
                    <li><a href="#" class="scroll-link" data-id="who">Qui sommes-nous ?</a></li>
                    <li><a href="#" class="scroll-link" data-id="services">Nos services</a></li>
                    <li><a href="#" class="scroll-link" data-id="map">Nous situer</a></li>
                    <li><a href="#" class="scroll-link" data-id="contact-us">Contact</a></li>
                </ul>
            </div>
            <!--/.navbar-collapse-->
        </nav>
        <!--/.navbar-->
    </div>
    <!--/.container-->
</div>
<!--/.header-->
<div class="parallax-content baner-content" id="home">
    <img src="img/logo.png" class="logo-banner"/>
    <div class="container btn-discover col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="text-content">
            <div class="primary-white-button">
                <a href="#" class="scroll-link" data-id="who">Découvrir</a>
            </div>
        </div>
    </div>
</div>

<section id="who" class="page-section">
    <div class="container">
        <div class="wrapper">
            <div class="col-md-12">
                <div class="section-heading">
                    <h4>Qui sommes-nous ?</h4>
                    <div class="line-dec"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="service-item">
                    <div class="icon">
                        <img class="photo" src="img/quelle-photo-de-profil-pour-facebook-copie.jpg" alt="">
                    </div>
                    <h4>Ghislain</h4>
                    <div class="line-dec"></div>
                    <p id="text2"></p>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12 ">
                <p class="text-desc" id="text1"></p>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="service-item">
                    <div class="icon">
                        <img class="photo" src="img/quelle-photo-de-profil-pour-facebook-copie.jpg" alt="">
                    </div>
                    <h4>Geoffrey</h4>
                    <div class="line-dec"></div>
                    <p id="text3"></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="services" class="page-section">
    <div class="container">
        <div class="wrapper">
            <div class="col-md-12">
                <div class="section-heading">
                    <h4>Nos services</h4>
                    <div class="line-dec"></div>
                    <p class="desc-services" id="text4"></p>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="service-item">
                    <div class="icon">
                        <img class="froid" src="img/snowflake-regular.svg" alt="">
                    </div>
                    <h4>Froid</h4>
                    <div class="line-dec"></div>
                    <p id="text5"></p>
                    <div class="pop-button">
                        <a href="services/froid.php">
                            <h4>En savoir +</h4>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="service-item">
                    <div class="icon">
                        <img class="chauffage" src="img/burn-solid.svg" alt="">
                    </div>
                    <h4>Chauffage</h4>
                    <div class="line-dec"></div>
                    <p id="text6"></p>
                    <div class="pop-button">
                        <a href="services/chauffage.php">
                            <h4>En savoir +</h4>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="service-item">
                    <div class="icon">
                        <img class="electricite" src="img/bolt-solid.svg" alt="">
                    </div>
                    <h4>Electricité</h4>
                    <div class="line-dec"></div>
                    <p id="text7"></p>
                    <div class="pop-button">
                        <a href="services/electricite.php">
                            <h4>En savoir +</h4>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="service-item">
                    <div class="icon">
                        <img class="plomberie" src="img/toilet-solid.svg" alt="">
                    </div>
                    <h4>Plomberie</h4>
                    <div class="line-dec"></div>
                    <p id="text8"></p>
                    <div class="pop-button">
                        <a href="services/plomberie.php">
                            <h4>En savoir +</h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="map" class="page-section">
    <div class="container">
        <div class="wrapper">
            <div class="col-md-12">
                <div class="section-heading">
                    <h4>Où sommes-nous ?</h4>
                    <div class="line-dec"></div>
                    <p id="text9"></p>
                </div>
            </div>
            <div id="leaflet"></div>
        </div>
    </div>
</section>

<div id="contact-us">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h4>Contact</h4>
                    <div class="line-dec"></div>
                    <p>Cliquez sur le bouton ci-dessous pour remplir un formulaire de contact. <br>Nous vous répondrons au plus vite !</p>
                    <div class="pop-button">
                        <h4>Nous contacter</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="pop">
                    <span>✖</span>
                    <form id="contact" action="contact.php" method="POST">
                        <div class="row">
                            <div class="col-md-12">
                                <fieldset>
                                    <input name="name" type="text" class="form-name" id="name" placeholder="Votre nom" required>
                                </fieldset>
                            </div>
                            <div class="col-md-12">
                                <fieldset>
                                    <input name="email" type="email" class="form-email" id="email" placeholder="Votre e-mail" required>
                                </fieldset>
                            </div>
                            <div class="col-md-12">
                                <fieldset>
                                    <textarea name="message" rows="6" class="form-message" id="message" placeholder="Votre message" required></textarea>
                                </fieldset>
                            </div>
                            <div class="col-md-12">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="btn">Envoyer</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-12">
                <div class="logo">
                    <p>Copyright &copy; 2019 Gc-Climelec</p>
                    <br>
                    <p ><a href="mentions.php" class="link-mentions">Mentions légales</a></p>
                </div>
            </div>
            <div class="col-md-3 col-sm-12">
                <div class="location">
                    <h4>Adresse</h4>
                    <p>1 Rue Charles de Gaulle, <br>49330 - Contigné<br>Les-Hauts-D'Anjou</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-12">
                <div class="contact-info">
                    <h4>Ghislain :</h4>
                    <ul>
                        <li><em>Téléphone</em>: 06.83.46.24.46</li>
                        <li><em>Email</em>: ghislain@gc-climelec.fr</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-12">
                <div class="contact-info">
                    <h4>Geoffrey :</h4>
                    <ul>
                        <li><em>Téléphone</em>: 06.74.64.25.48</li>
                        <li><em>Email</em>: geoffrey@gc-climelec.fr</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"
        integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og=="
        crossorigin=""></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

<script src="js/vendor/bootstrap.min.js"></script>

<script src="js/main.js"></script>
<script src="textHome.js"></script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
</body>
</html>