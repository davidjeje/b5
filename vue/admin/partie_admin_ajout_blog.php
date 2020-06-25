<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Ajout d'un blog</title>
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

			<div id="colorlib-contact"> 
				<div class="container">
					<div class="row">
						<div class="col-md-10 col-md-offset-1 animate-box">
							<h2>Ajouter un blog</h2>
							<div class="row contact-info-wrap">
								<form method="post" action="index.php?folder=BlogPostController&amp;page=vers_admin_message_ajout_blog" enctype="multipart/form-data">
					
                                    <label for="author">Auteur du blog</label>
                                    <input type="text" class="form-control" name="author" id="author" placeholder="Auteur">
                                    <br/>

                                    <label for="title">Titre du blog</label>
                                    <input type="text" class="form-control" id="title" name="title">
                                    <br/>

                                    <label for="chapo">Chapo</label>
                                    <input type="text" class="form-control" id="chapo" name="chapo">
                                    <br/>
 
                                    <label for="content">Insérer le contenu du blog</label>
                                    <textarea type="text" class="form-control" id="content" name="content"></textarea>
                                    <br/>

                                    <label for="image">Sélectionner l'image</label>
                                    <input type="file" name="image" id= "image"/>
                                    <br/>

                                   <input type="submit" value="Ajouter" class="btn btn-primary" name="Ajouter">
                            	</form>
							</div>
						</div>					
					</div>
				</div>
			</div>

			<div id="colorlib-subscribe">
				<footer id="colorlib-footer" role="contentinfo">
					<div class="container">
                		<div class="row row-pb-md">
                    		<div class="col-md-4">
                        		<h2>Navigation</h2>
                        		<p>
                            		<ul class="colorlib-footer-links">
                                		<li><a href="index.php?folder=UserController&amp;page=vers_menu_admin_sans_passsword"><i class="icon-check"></i>Menu administrateur</a></li>
                                		<li><a href="index.php?folder=UserController&amp;page=vers_deconnexion_user"><i class="icon-check"></i>Déconnexion</a></li>  
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

			<div class="gototop js-top">
				<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
			</div>
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

