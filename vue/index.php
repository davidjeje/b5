<?php
if (session_status() == PHP_SESSION_NONE) 
{
    session_start();
}  
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Accueil </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="author" content="" />

        <!-- Facebook and Twitter integration -->
        <meta property="og:title" content=""/>
        <meta property="og:image" content=""/>
        <meta property="og:url" content=""/>
        <meta property="og:site_name" content=""/>
        <meta property="og:description" content=""/>
        <meta name="twitter:title" content="" />
        <meta name="twitter:image" content="" />
        <meta name="twitter:url" content="" />
        <meta name="twitter:card" content="" />
    
        <link href="https://fonts.googleapis.com/css?family=Grand+Hotel" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Fira+Sans:100,200,300,400,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    
        <!-- Animate.css -->
        <link rel="stylesheet" href="public/css/animate.css">
        <!-- Icomoon Icon Fonts-->
        <link rel="stylesheet" href="public/css/icomoon.css">
        <!-- Bootstrap  -->
        <link rel="stylesheet" href="public/css/bootstrap.css">

        <!-- Magnific Popup -->
        <link rel="stylesheet" href="public/css/magnific-popup.css">

        <!-- Flexslider  -->
        <link rel="stylesheet" href="public/css/flexslider.css">

        <!-- Owl Carousel -->
        <link rel="stylesheet" href="public/css/owl.carousel.min.css">
        <link rel="stylesheet" href="public/css/owl.theme.default.min.css">
    
        <!-- Flaticons  -->
        <link rel="stylesheet" href="public/fonts/flaticon/font/flaticon.css">

        <!-- Theme style  -->
        <link rel="stylesheet" href="public/css/style.css">

        <!-- Modernizr JS -->
        <script src="public/js/modernizr-2.6.2.min.js"></script>
        <!-- FOR IE9 below -->
        <!--[if lt IE 9]>
        <script src="js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>    
        <div id="page">
            <nav class="colorlib-nav" role="navigation">
                <div class="top-menu">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xs-2">
                                <div id="colorlib-logo">
                                    David Marivat
                                </div>
                            </div>
                            <div class="col-xs-10 text-right menu-1">
                                <ul>
                                    <li><a href="index.php">Accueil</a></li>
                                    <li class="has-dropdown"><a href="index.php?folder=BlogPostController&amp;page=vers_liste_blog">Blog post</a></li>
                                    <?php 
                                    if(empty($_SESSION))
                                    {
                                    ?> 
                                        <li><a href="index.php?folder=UserController&amp;page=vers_connexion_user">Connexion/inscription</a></li>
                    
                                    <?php
                                    }
                                    else
                                    {
                                    ?>
                                        <li><a href="index.php?folder=UserController&amp;page=vers_deconnexion_user">Déconnexion</a></li>
                                    <?php
                                    }
                                    ?>   
                                </ul>           
                            </div>
                        </div>
                    </div>
                </div>
            </nav>

            <aside id="colorlib-breadcrumbs">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 breadcrumbs text-center">
                            <h2>Si vous voulez aller vite, allez y seul mais si vous voulez aller plus loin entourez vous des bonnes personnes qui vous aiderons à réaliser votre projet... faite appel au bon développeur.</h2>
                        </div>
                    </div>
                </div>
            </aside>
                    
            <div id="colorlib-container">
                <div class="container">
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-6">
                                <img class="img-responsive" src="public/images/avatar.png" alt="avatar david">
                            </div>
                            <div class="col-md-6">
                                <p>
                                    Salut ! je m'appelle <strong>David</strong>, je suis actuellement des cours d'informatique chez openclassrooms. Plus particulièrement du développement web. J'étudie les langages HTML5/CSS2, javascript, PHP. De plus dès le début de la formation j'ai pu étudier Bootstrap,Git Github et JQUERY. Par la suite j'étudirai le framework Symfony.
                                </p>
                                <blockquote>
                                    Cette formation est diplômante. Elle me prépare à un niveau bac 3/4 qui est enregistré au Répertoire National des Certifications Professionnelles. Openclassrooms est un établissement privé d'enseignement  à distance déclaré au rectorat de l'Académie de Paris. Elle délivre ses propres diplômes ainsi que ceux d'autres partenaires académiques prestigieux. 
                                </blockquote>
                                <p class="first-letra">
                                    La formation se déroule bien. Une fois par semaine je fais le point avec le mentor qui m'aide à valider mes projets.
                                </p>  
                            </div>
                        </div>
                    </div>
                </div>

                <div id="colorlib-contact">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1 animate-box">
                                <h2>Mes Informations</h2>
                                <div class="row contact-info-wrap">
                                    <div class="col-md-3">
                                        <p>
                                            <span><i class="icon-location-2"></i></span>
                                            Ile de France, <br> Seine et Marne.
                                        </p>
                                    </div>
                                    <div class="col-md-3">
                                        <p>
                                            <span><i class="icon-phone3"></i></span>
                                            06 06 78 45 93
                                        </p>
                                    </div>
                                   
                                    <div class="col-md-3">
                                        <p>
                                            <span><i class="icon-linkedin"></i></span> <a href="https://www.linkedin.com">linkedin David Marivat</a>
                                        </p>
                                    </div> 
                                </div>
                            </div> 
                            <div class="col-md-10 col-md-offset-1 animate-box"> 
                                <h2>Formulaire de contact</h2> 
                                <form method="post" action="index.php?folder=UserController&amp;page=vers_traitement_email"> 
                                    <div class="row form-group">
                                        <div class="col-md-6">
                                            <label for="fname">Prénom</label>
                                            <input type="text" name="prenom" id="fname" class="form-control" placeholder="Your firstname"  required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="lname">Nom</label>
                                            <input type="text" name="nom" id="lname" class="form-control" placeholder="Your lastname" required>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-12">
                                            <label for="email">Email</label>
                                            <input type="text" name="mail" id="email" class="form-control" placeholder="Your email address" required>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-12">
                                            <label for="message">Message</label>
                                            <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Say something about us" required></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="envoyer" class="btn btn-primary" name="envoyer">
                                    </div>
                                </form>     
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="instagram-entry">
                            <a href="#" class="instagram text-center" style="background-image: url(images/gallery-1.jpg);"></a>
                            <a href="#" class="instagram text-center" style="background-image: url(images/gallery-2.jpg);"></a>
                            <a href="#" class="instagram text-center" style="background-image: url(images/gallery-3.jpg);"></a>
                            <a href="#" class="instagram text-center" style="background-image: url(images/gallery-4.jpg);"></a>
                            <a href="#" class="instagram text-center" style="background-image: url(images/gallery-5.jpg);"></a>
                            <a href="#" class="instagram text-center" style="background-image: url(images/gallery-6.jpg);"></a>
                            <a href="#" class="instagram text-center" style="background-image: url(images/gallery-7.jpg);"></a>
                            <a href="#" class="instagram text-center" style="background-image: url(images/gallery-8.jpg);"></a>
                        </div>
                    </div>
                </div> 
                <footer id="colorlib-footer" role="contentinfo">
                    <div class="container">
                        <div class="row row-pb-md">
                            <div class="col-md-4">
                                <h2>Navigation</h2>
                                <p>
                                    <ul class="colorlib-footer-links">
                                        <li><a href="index.php"><i class="icon-check"></i> Accueil</a></li>
                                        <li><a href="index.php?folder=BlogPostController&amp;page=vers_liste_blog"><i class="icon-check"></i> Blog post</a></li>
                                        <?php 
                                        if(empty($_SESSION))
                                        {
                                        ?>
                                            <li><a href="index.php?folder=UserController&amp;page=vers_connexion_user"><i class="icon-check"></i>Connexion/inscription</a></li>
                                        <?php
                                        }
                                        else
                                        {
                                        ?>
                                            <li><a href="index.php?folder=UserController&amp;page=vers_deconnexion_user"><i class="icon-check"></i>Déconnexion</a></li>
                                        <?php
                                        }
                                        ?>   
                                        <?php 
                                        if(empty($_SESSION))
                                        {
                                        ?> 
                                            <li><a href="index.php?folder=UserController&amp;page=vers_la_connexion_admin"><i class="icon-check"></i> Se connecter à la partie administration</a></li>
                                        <?php
                                        }
                                        ?>    
                                    </ul>
                                </p>
                            </div>
                            <div class="col-md-4">
                                <h2>D'autre thème vont être abordé</h2>
                                <ul class="colorlib-footer-links">
                                    <li><span><a href="index.php?page=vers_theme"><i class="icon-check"></i> click ici pour les visualiser</a></span></li>   
                                </ul>
                            </div>
                            <div class="col-md-4 col-md-push-1">
                                <h2>Tags</h2>
                                <p class="tags">
                                    <span><a href="#"><i class="icon-tag"></i> Métier du web</a></span>
                                    <span><a href="#"><i class="icon-tag"></i> Robot et nouvelle technologie</a></span>
                                    <span><a href="#"><i class="icon-tag"></i> Transhumaniste </a></span>
                                    <span><a href="#"><i class="icon-tag"></i> Futur de l'homme</a></span>
                                    <span><a href="#"><i class="icon-tag"></i> Le web est il au géant du web ?</a></span>   
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <p>
                                    <!-- Information on when the project was carried out and who carried it out. -->
                                    <small class="block">I am David Marivat and we are in&copy; <script>document.write(new Date().getFullYear());</script> 
                                    and the project was carried out in 2018. Throughout these years I have made improvements to the code.<i class="icon-heart3" aria-hidden="true"></i></small>
                                </p>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>

        <div class="gototop js-top">
            <a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
        </div>
    
        <!-- jQuery -->
        <script src="public/js/jquery.min.js"></script>
        <!-- jQuery Easing -->
        <script src="public/js/jquery.easing.1.3.js"></script>
        <!-- Bootstrap -->
        <script src="public/js/bootstrap.min.js"></script>
        <!-- Waypoints -->
        <script src="public/js/jquery.waypoints.min.js"></script>
        <!-- Flexslider -->
        <script src="public/js/jquery.flexslider-min.js"></script>
        <!-- Owl carousel -->
        <script src="public/js/owl.carousel.min.js"></script>
        <!-- Magnific Popup -->
        <script src="public/js/jquery.magnific-popup.min.js"></script>
        <script src="public/js/magnific-popup-options.js"></script>
        <!-- Main -->
        <script src="public/js/main.js"></script>
        <script src="public/js/addform.js"></script>
    </body>
</html>
