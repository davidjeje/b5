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
		
	<div class="colorlib-loader"></div>

	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-2">
							<div id="colorlib-logo"><a href="accueil.php">David Marivat.</a></div>
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
						foreach ($news as $n)

						{
					?>
						<article class="blog-entry">
							<div class="blog-wrap">
								<span class="category text-center"><a href="blog.html"><h1> <?php echo$n['title']?>  </h1></a></span>
								<h2 class="text-center"><a href="blog.html"><h1> <?php echo$n['chapo']?>  </h1></a></h2>
								<div class="blog-image">
									<a href="blog.html" class="blog-img text-center" style="background-image: url(<?php echo$n['image']?>);"><span><i class="icon-link"></i></span></a>
									<ul class="share">
									<li class="text-vertical"><i class="icon-share3"></i></li>
									<li><a href="#"><i class="icon-facebook"></i></a></li>
									<li><a href="#"><i class="icon-twitter"></i></a></li>
									<li><a href="#"><i class="icon-googleplus"></i></a></li>
								</ul>
								</div>
								<span class="category text-center"><a href="blog.html"><i class="icon-calendar3"></i> <?php echo$n['date_display']?></a> | <a href="admin.php?id=.". class="posted-by"><i class="icon-user2"></i> <h1> <?php echo$n['author']?>  </h1></a> | <a href="blog.html"><i class="icon-bubble3"></i> </a></span>
							</div>
							<?=
								$nn = $n[0];
								$mm = $n[1];
								$aa = $n[2];
								$bb = $n[3];
								$cc = $n[4];
								$dd = $n[5];
								$ee = $n[6];
							?>
							
					
							<p class="text-center"><a href="index.php?page=vers_admin_message_sup_blog&amp;id=<?=$n['id']?>" class="btn btn-primary btn-custom">Supprimer</a><p>
						</article>
					<?php
						}

					?>
						
					</div>

					<aside class="sidebar">
						
						<div class="side-wrap">
							
						</div>
						<?php
						foreach ($news as $n)

						{
						?>
						<div class="side-wrap">
							<h2 class="sidebar-heading">Post récent</h2>
							<div class="f-entry">
								<a href="#" class="featured-img" style="background-image: url(<?php echo$n[4]?>);"></a>
								<div class="desc">
									<span><i class="icon-calendar3"></i> <?php echo$n['date_display']?></span>
									<h3><a href="#"><?php echo$n[2]?> </a></h3>
								</div>
							</div>
						<?php
						}

						?>
							
						</div>
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

