<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Liste des blogs</title>
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
			<aside id="colorlib-breadcrumbs">
				<div class="container">
					<div class="row">
						<div class="col-md-12 breadcrumbs text-center">
							<h2>Liste des blogs</h2>
						</div>
					</div>
				</div>
			</aside>
			<div id="colorlib-container">
				<div class="container">
					<div class="row">
						<div class="content">
							<?php
							foreach ($readAll as $n)
							{
							?>
							<article class="blog-entry">
								<div class="blog-wrap">
									<span class="category text-center"><a href="blog.html"><h1> <?php echo$n->title()?>  </h1></a></span>
									<h2 class="text-center"><a href="blog.html"><h1> <?php echo$n->chapo()?>  </h1></a></h2>
									<div class="blog-image">
										<a href="blog.html" class="blog-img text-center" style="background-image: url(<?php echo$n->image()?>);"><span><i class="icon-link"></i></span></a>
										<ul class="share">
											<li class="text-vertical"><i class="icon-share3"></i></li>
											<li><a href="#"><i class="icon-facebook"></i></a></li>
											<li><a href="#"><i class="icon-twitter"></i></a></li>
											<li><a href="#"><i class="icon-googleplus"></i></a></li>
										</ul>
									</div> 
									<span class="category text-center"><a href="blog.html"><i class="icon-calendar3"></i> <?php echo$n->dateDisplay()?></a> | <a href="admin.php?id=.". class="posted-by"><i class="icon-user2"></i> <h1> <?php echo$n->author()?>  </h1></a> | <a href="blog.html"><i class="icon-bubble3"></i> </a></span>
								</div> 
									
								<p class="text-center"><a href="index.php?folder=BlogPostController&amp;page=vers_admin_message_sup_blog&amp;id=<?=$n->id()?>" class="btn btn-primary btn-custom">Supprimer</a><p>
							</article> 
							<?php
							}
							?>	
						</div>

						<aside class="sidebar">
							<?php
							foreach ($readAll as $n)
							{
							?>
								<div class="side-wrap">
									<h2 class="sidebar-heading">Post récent</h2>
									<div class="f-entry">
										<a href="#" class="featured-img" style="background-image: url(<?php echo$n->image()?>);"></a>
										<div class="desc">
											<span><i class="icon-calendar3"></i> <?php echo$n->dateDisplay()?></span>
											<h3><a href="#"><?php echo$n->author()?> </a></h3>
										</div>
									</div>
								</div>
							<?php
							}
							?>		
							<div class="side-wrap">
								<h2 class="sidebar-heading">Catégories des articles</h2>
								<ul class="category">
									<li><a href="#"><i class="icon-check"></i> Développeur web</a></li>
									<li><a href="#"><i class="icon-check"></i> Intelligence artificielle</a></li>
									<li><a href="#"><i class="icon-check"></i> L'homme augmentée</a></li>
									<li><a href="#"><i class="icon-check"></i> Transhumaniste</a></li>
								</ul>
							</div>
						
							<div class="side-wrap">
								<h2 class="sidebar-heading">Gallery</h2>
								<a href="images/gallery-1.jpg" class="gallery image-popup-link text-center" style="background-image: url(public/images/gallery-1.jpg);">
								<span><i class="icon-search3"></i></span>
								</a>
								<a href="images/gallery-2.jpg" class="gallery image-popup-link text-center" style="background-image: url(public/images/gallery-2.jpg);">
								<span><i class="icon-search3"></i></span>
								</a>
								<a href="images/gallery-3.jpg" class="gallery image-popup-link text-center" style="background-image: url(public/images/gallery-3.jpg);">
								<span><i class="icon-search3"></i></span>
								</a>
								<a href="images/gallery-4.jpg" class="gallery image-popup-link text-center" style="background-image: url(public/images/gallery-4.jpg);">
								<span><i class="icon-search3"></i></span>
								</a>
								<a href="images/gallery-5.jpg" class="gallery image-popup-link text-center" style="background-image: url(public/images/gallery-5.jpg);">
								<span><i class="icon-search3"></i></span>
								</a>
								<a href="images/gallery-6.jpg" class="gallery image-popup-link text-center" style="background-image: url(public/images/gallery-6.jpg);">
								<span><i class="icon-search3"></i></span>
								</a>
								<a href="images/gallery-7.jpg" class="gallery image-popup-link text-center" style="background-image: url(public/images/gallery-7.jpg);">
								<span><i class="icon-search3"></i></span>
								</a>
								<a href="images/gallery-8.jpg" class="gallery image-popup-link text-center" style="background-image: url(public/images/gallery-8.jpg);">
								<span><i class="icon-search3"></i></span>
								</a>
							</div>		
						</aside>
					</div>
				</div>
			</div>

			<div id="colorlib-instagram">
				<div class="row">
					<div class="col-md-12 col-md-offset-0 colorlib-heading text-center">
						<h2>La passion numérique</h2>
					</div>
				</div>
				<div class="row">
					<div class="instagram-entry">
						<a href="#" class="instagram text-center" style="background-image: url(public/images/gallery-1.jpg);">
						</a>
						<a href="#" class="instagram text-center" style="background-image: url(public/images/gallery-2.jpg);">
						</a>
						<a href="#" class="instagram text-center" style="background-image: url(public/images/gallery-3.jpg);">
						</a>
						<a href="#" class="instagram text-center" style="background-image: url(public/images/gallery-4.jpg);">
						</a>
						<a href="#" class="instagram text-center" style="background-image: url(public/images/gallery-5.jpg);">
						</a>
						<a href="#" class="instagram text-center" style="background-image: url(public/images/gallery-6.jpg);">
						</a>
						<a href="#" class="instagram text-center" style="background-image: url(public/images/gallery-7.jpg);">
						</a>
						<a href="#" class="instagram text-center" style="background-image: url(public/images/gallery-8.jpg);">
						</a>
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
	</body>
</html>
