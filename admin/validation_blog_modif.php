<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Modification d'un blog</title>
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


	<link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,700" rel="stylesheet">
	
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
		
	<div class="colorlib-loader"></div>

	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="col-xs-2">
							<div id="colorlib-logo">David Marivat</div>
						</div>
						<div class="col-xs-10 text-right menu-1">
							<ul>
								<li><a href="index.php?page=vers_menu_admin_sans_passsword">Gestion des blogs</a></li>
								
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(images/img_bg_1.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-8 col-sm-12 col-md-offset-2 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h1>Modifier un blog</h1>
				   				</div>
				   			</div>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>

		<div id="colorlib-contact">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 animate-box">
						<h2>Modifier un blog</h2>
						<div class="row contact-info-wrap">
							<form method="post" action="index.php?page=form_modif_valide" enctype="multipart/form-data">
									
							<?php
							foreach ($ne as $n)

							{
							?>

									<input type="hidden" name="id" value="<?= $n['id']?>">
									<br/>
                                    <label for="author">Auteur du blog</label>
                                    <input type="text" class="form-control" name="author" id="author" placeholder="Auteur" value="<?= $n['author']?>">
                                    <br/>

                                    <label for="title">Titre du blog</label>
                                    <input type="text" class="form-control" id="title" name="title" value="<?= $n['title']?>">
                                    <br/>

                                    <label for="chapo">Chapo</label>
                                    <input type="text" class="form-control" id="chapo" name="chapo" value="<?= $n['chapo']?>">
                                    <br/>

                                    <label for="content">Insérer le contenu du blog</label>
                                    <textarea type="text" class="form-control" id="content" name="content"><?= $n['content']?></textarea>
                                    <br/>

                                    

                                    
                                    <input type="submit" value="modifier" class="btn btn-primary">

                            </form>
                            <?php
							}

							?>
						</div>
					</div>
						
							</div>

						</form>		
					</div>
				</div>
			</div>
		</div>
		<div id="map" class="colorlib-map"></div>
		<div id="colorlib-subscribe">
			<div class="overlay"></div>
			
		</div>
		<footer id="colorlib-footer" role="contentinfo">
			<div class="container">
                <div class="row row-pb-md">
                    <div class="col-md-4">
                        <h2>Navigation</h2>
                        <p>
                            <ul class="colorlib-footer-links">
                                <li><a href="index.php"><i class="icon-check"></i> Acceuil</a></li>
                                <li><a href="index.php?page=vers_liste_blog"><i class="icon-check"></i> Blog post</a></li>
                                <li><a href="index.php?page=vers_connexion_user"><i class="icon-check"></i>Connexion/inscription</a></li>
                                <li><a href="index.php?page=vers_la_connexion_admin"><i class="icon-check"></i> Se connecter à la partie administration</a></li>    
                            </ul>
                        </p>
                    </div>
                    <div class="col-md-4">
                        <h2>D'autre thème vont être abordé</h2>
                        <ul class="colorlib-footer-links">
                            <li>
                                <span>1. L’intelligence artificielle standardisée

Maintenant qu’il est possible de développer certaines des intelligences artificielles les plus avancées du marché en quelques heures sur son propre ordinateur avec un cadre en open source, l’IA va devenir omniprésente. Les logiciels seront plus intelligents et plus performants dans le traitement du langage naturel, de la vision informatique, des systèmes de recommandations et ils seront plus faciles à développer en CMS – Carson Kahn.</span>
                                
                            </li>
                            <li>
                                <span>2. Les chatbots

Nous verrons davantage de chatbots et nous devrons apprendre à interagir avec. Nous pourrons ainsi leur apprendre ce que nous attendons d’eux – Chalmers Brown, Due.</span>
                            </li>
                            <li>
                                <span>3. La place grandissante de l’éthique dans le secteur de l’innovation technologique

Nous nous heurtons aux dilemmes éthiques qui sont liés directement à ce que nous créons et comment nous le créons : en orientant des publicités en fonction des facteurs démographiques, l’angoisse de l’automatisation des emplois, le revenu universel et même la fréquence du harcèlement sexuel. Le secteur de la tech évolue plus rapidement que les systèmes éthiques qui l’encadrent – Kieran Snyder, Textio.</span>
                            </li>
                            <li>
                                <span>4.La réalité augmentée

Snapchat a aidé à la démocratisation de la réalité augmentée grâce à ses filtres amusants. Plus récemment, Apple a présenté ARKit, permettant de faciliter l’intégration de la réalité augmentée dans les applications pour iPhones et des entreprises comme Amazon l’on déjà adopté. Je pense que 2018 sera sous le signe de la réalité augmentée – Thomas Griffin, OptinMonster.</span>
                                
                            </li>
                            <li>
                                <span>5. Des fonctionnalités d’équipements informatiques et de logiciels compatibles avec la réalité augmentée et le machine learning

Bon nombre d’entreprises produisent des fonctionnalités d’équipements et des logiciels compatibles avec la réalité augmentée et le machine learning. Les développeurs savent tirer profit de ces puces et API pour créer des applications permettant de voir le monde différemment et de mieux communiquer avec les machines. Je prédis également que les nouvelles technologies seront utilisées pour contrôler la sécurité, aider à regrouper le big data et à améliorer les processus d’authentification – Chris Kirby, Voices.com.</span>
                                
                            </li>
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
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <small class="block">Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved. This template is made with <i class="icon-heart3" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></small>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>

                    </div>
                </div>
            </div>
		</footer>
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
	<!-- Stellar Parallax -->
	<script src="public/js/jquery.stellar.min.js"></script>
	<!-- Flexslider -->
	<script src="public/js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="public/js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="public/js/jquery.magnific-popup.min.js"></script>
	<script src="public/js/magnific-popup-options.js"></script>
	<!-- Counters -->
	<script src="public/js/jquery.countTo.js"></script>
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="public/js/google_map.js"></script>

	<!-- Main -->
	<script src="public/js/main.js"></script>

	</body>
</html>


