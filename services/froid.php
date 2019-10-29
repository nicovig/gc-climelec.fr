<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>GC-Climelec • Froid</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="../css/style-services.css">

    <script src="../js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>

<body onload="insertTextFroid();">
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
                    <li><a href="http://www.gc-climelec.fr">Accueil</a></li>
                    <li><a href="../index.php#who">Qui sommes-nous ?</a></li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" data-toggle="dropdown">
                            Nos services
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="./chauffage.php">Chauffage</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="./electricite.php">Electricité</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="./plomberie.php">Plomberie</a>
                        </div>
                    </li>

                    <li><a href="../index.php#map">Nous situer</a></li>
                    <li><a href="#" class="scroll-link" data-id="contact-us">Contact</a></li>
                </ul>
            </div>
            <!--/.navbar-collapse-->
        </nav>
        <!--/.navbar-->
    </div>
    <!--/.container-->
</div>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <img src="../img/45665.jpg" alt="">
        </div>

        <div class="item">
            <img src="../img/logo.png" alt="">
        </div>

        <div class="item">
            <img src="../img/logo.png"   alt="">
        </div>
    </div>
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <!-- <span class="glyphicon glyphicon-chevron-left"></span> -->
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <!-- <span class="glyphicon glyphicon-chevron-right"></span> -->
    </a>
</div>

<div class="service-page-content">
    <div class="page-section">
        <div class="container">
            <div class="row service-page-row">
                <div class="col-md-4">
                    <img class="service-page-photo-desc" src="../img/logo.png" alt="">
                </div>
                <div class="col-md-8">
                    <h4 class ="service-page-text" id="text1"></h4>
                    <div class="line-dec"></div>
                    <p class ="service-page-text" id="text2"></p>
                </div>
            </div>
        </div>
    </div>
    <div class="page-section">
        <div class="container">
            <div class="row service-page-row">
                <div class="col-md-8">
                    <h4 class ="service-page-text" id="text3"></h4>
                    <div class="line-dec"></div>
                    <p class ="service-page-text" id="text4"></p>
                </div>
                <div class="col-md-4 ">
                    <img class="service-page-photo-desc" src="../img/logo.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>



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
                    <form id="contact" action="../contact.php" method="POST">
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

<script src="../js/vendor/bootstrap.min.js"></script>

<script src="../js/main.js"></script>
<script src="text/textFroid.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>

</body>
</html>