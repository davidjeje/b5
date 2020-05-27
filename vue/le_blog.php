<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Le blog</title>
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
								<div id="colorlib-logo">
									<a href="accueil.php">David Marivat.</a>
								</div>
							</div>
							<div class="col-xs-10 text-right menu-1">
								<ul>
									<li><a href="index.php">Accueil</a></li>
									<li class="has-dropdown active"><a href="index.php?page=vers_liste_blog">Blog post</a></li>
									<li><a href="index.php?page=vers_connexion_user">Connexion/inscription</a></li>		
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
							<h2>Le blog</h2>
						</div>
					</div>
				</div>
 			</aside>

			<div id="colorlib-container">
				<div class="container">
					<div class="row">
						<div class="content">
							<article class="blog-entry">
		 						<div class="blog-wrap">
									<span class="category text-center">
										<a href="blog.html"><h1> <?php echo $read->title()?>  </h1></a>
									</span>
									<h2 class="text-center">
										<a href="blog.html"><h1><?php echo $read->chapo()?>  </h1></a>
									</h2>
									<div class="blog-image">
										<a href="blog.html" class="blog-img text-center" style="background-image: url(<?php echo $read->image()?>);"><span><i class="icon-link"></i></span></a>
										<ul class="share">
											<li class="text-vertical"><i class="icon-share3"></i></li>
											<li><a href="#"><i class="icon-facebook"></i></a></li>
											<li><a href="#"><i class="icon-twitter"></i></a></li>
											<li><a href="#"><i class="icon-googleplus"></i></a></li>
										</ul>
									</div>
									<span class="category text-center"><a href="blog.html"><i class="icon-calendar3"></i> <?php echo $read->dateDisplay()?></a> | <a href="admin.php?id=.". class="posted-by"><i class="icon-user2"></i> <h1> <?php echo $read->author()?>  </h1></a> | <a href="blog.html"><i class="icon-bubble3"></i> 5 Comments</a></span>
								</div>
								<div class="desc">
									<?php echo $read->content()?>
								</div>
							</article>	
							<div class="side-wrap">
								<h2 class="sidebar-heading">Commentaires</h2>
								<blockquote>
									<span class="category text-center">
										<h1> <?php echo htmlspecialchars($readc->auteur())?></h1>
									</span>
									<span class="category text-center">
										<h1><?php echo htmlspecialchars($readc->message())?></h1>
									</span></br>
								</blockquote>
							</div> 

							<div class="side-wrap">
								<h2 class="sidebar-heading">Ajouter un commentaire</h2>
								<form method="post" action="index.php?page=vers_insert_comment&amp;blog_post_id=<?=$read->id()?>" enctype="multipart/form-data">
                                    <label for="author">Auteur du commentaire</label>
                                    <input type="text" class="form-control" name="auteur" id="author" placeholder="Auteur">
                                  	<br/>

                                    <label for="content">Commentaire</label>
                                    <textarea type="text" class="form-control" id="content" name="message"></textarea>
                                    <br/> 
                                    <input type="submit" value="valider" class="btn btn-primary">
                                    
                            	</form>
                            	<?php
							
								?>
								<h2 class="sidebar-heading">Video Post</h2>
								<div class="video colorlib-video" style="background-image: url(public/images/info.jpg);">
									<a href="https://www.youtube.com/watch?v=bOjbaNfHuBk" class="popup-vimeo"><i class="icon-play"></i></a>
									<div class="overlay"></div>
								</div>
								<h2 class="sidebar-heading">Blockquote</h2>
								<blockquote>
									" Dans le passé, pour vivre dans des sociétés d'une complexité croissante, il nous fallait accroître notre humanité, maintenant, il nous suffit d'accroître la technologie.Edward Bond Artiste, Dramaturge, écrivain, Metteur en scène, Traducteur (1934 - ) </br>
									<p>La technologie est une chose fabuleuse qui rend la personne ennuyeuse. Daniel Godin France, Paris, 1989 </p>
								</blockquote>
							</div>
						</div>
						<aside class="sidebar">
							<div class="side-wrap">	
							</div>
							<div class="side-wrap">	
							</div>
							<div class="side-wrap">	
							</div>
							<div class="side">	
							</div>
						</aside>
					</div>
				</div>
			</div>

			<div id="colorlib-instagram">
				<div class="row">
					<div class="col-md-12 col-md-offset-0 colorlib-heading text-center">
						<h2>Les mots ne valent rien tant qu'ils ne sont pas prononcés à voix haute, ou écrits noir sur blanc. Tout s'est déroulé comme si rien ne pouvait se terminer. Alors j'en ai pleuré de joie !!!</h2>
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
                                	<li><a href="index.php"><i class="icon-check"></i> Accueil</a></li>
                                	<li><a href="index.php?page=news"><i class="icon-check"></i> Blog post</a></li>
                                	<li><a href="index.php?page=vers_connexion_user"><i class="icon-check"></i>Connexion/inscription</a></li>
                                	<li><a href="index.php?page=vers_la_connexion_admin"><i class="icon-check"></i> Se connecter à la partie administration</a></li>
                            	</ul>
							</p>
						</div>
						<div class="col-md-4">
							<h2>D'autre thème vont être abordé</h2>
                        	<ul class="colorlib-footer-links">
                            	<li>
                                 <span><a href="index.php?page=vers_theme"><i class="icon-check"></i> click ici pour les visualiser</a></span>
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
