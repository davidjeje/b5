<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Connexion administrateur</title>
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
		<div id="page">
			<nav class="colorlib-nav" role="navigation">
				<div class="top-menu">
					<div class="container">
						<div class="row">
							<div class="col-xs-2">
								<div id="colorlib-logo">
									David Marivat
								</div>
							</div>
							<div class="col-xs-10 text-right menu-1">
								<ul>
									<li><a href="index.php?folder=UserController&amp;page=vers_menu_admin_sans_passsword">Menu administrateur</a></li>
									<li><a href="index.php?folder=UserController&amp;page=vers_deconnexion_user">Déconnexion</a></li>	
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
			   				<div class="container-fluid">
			   					<div class="row">
				   					<div class="col-md-8 col-sm-12 col-md-offset-2 slider-text">
				   						<div class="slider-text-inner text-center">
				   							<h1>Vérification des commentaires</h1>
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
							<h2>Valider ou non un commentaire</h2>
							<div class="row contact-info-wrap">  
								<?php   
								foreach ($readAll1 as $n)
								{ 
								?>
                            		<h3> Le nom de l'auteur et le commentaire de celui-ci
                            		</h3>
                            		<p> Le nom de l'auteur est :</p> 
                            		<?php echo htmlspecialchars($n->auteur());?> 
                            		<p>et son commentaire est :</p>
                            		<?php echo htmlspecialchars($n->message());?>
                            		<br/>
                            		<p class="text-center"><a href="index.php?folder=CommentController&amp;page=vers_la_validation_comment_table&amp;id=<?=$n->id()?>&amp;blog_post_id=<?=$n->blog_post_id()?>&amp;auteur=<?=$n->auteur()?>&amp;message=<?=$n->message()?>" class="btn btn-primary btn-custom">Valider</a>
                            		</p>
                            		<p class="text-center"><a href="index.php?folder=CommentController&amp;page=vers_la_sup_comment_table&amp;id=<?=$n->id()?>" class="btn btn-primary btn-custom">Supprimer</a>
                            		</p>
                            	<?php
								} 
								?>  	
							</div>
						</div>
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
                                	<li><a href="index.php?page=vers_le_menu_admin.php"><i class="icon-check"></i>Menu administrateur</a></li>
                                	<li><a href="index.php?folder=UserController&amp;page=vers_deconnexion_user"><i class="icon-check"></i>Déconnexion</a></li>
                            	</ul>
							</p>
						</div>

						<h2>D'autre thème vont être abordé</h2>
                    	<ul class="colorlib-footer-links">
                        	<li>
                            <span>6. Une méthode d’analyse améliorée
							L’analyse augmentée automatise les résultats des données à l’aide du machine learning et du langage naturel afin d’automatiser la préparation de données pour pouvoir ensuite les partager. Cette présentation des données aide à leur simplification dans le but d’obtenir un résultat clair tout en fournissant un accès à des outils sophistiqués qui confortent les clients et les employés avec le luxe de pouvoir prendre des décisions au jour le jour en toute confiance et objectivité – Jeremy Williams, Vyudu.</span>   
                        	</li>
                        	<li>
                            <span>7. La pression pour migrer vers le cloud
							Davantage d’entreprises migreront vers le cloud car davantage de PDG le demanderont, ce qui aura pour effet d’angoisser les équipes qui devront appliquer cette décision. Elles rencontreront beaucoup de difficultés et se demanderont si elles ont les compétences ou les équipes nécessaires pour le faire. Le cloud change la donne, mais engendre une certaine pression au sein des entreprises qui souhaitent s’y installer – Todd Delaughter, Automic Software.</span>
                        	</li>
                    	</ul>
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

