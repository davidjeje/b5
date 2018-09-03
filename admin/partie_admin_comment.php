
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
								
								<li><a href="index.php?page=vers_menu_admin_sans_passsword">Gestion</a></li>
								
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
				   					<h2></h2>
				   					<h1>Vérification des commentaires</h1>
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
						<h2>Valider ou non un commentaire</h2>
						<div class="row contact-info-wrap"> 
							<?php
							foreach ($admin_comment as $n)

							{

							?>
                            <h3> Le nom de l'auteur et le commentaire de celui-ci</h3>
                            <p> Le nom de l'auteur est :</p> <?php echo htmlspecialchars($n['auteur']); ?> <p>et son commentaire est :</p><?php echo htmlspecialchars($n['message']); ?>!
                            	<br/>
                            	<p class="text-center"><a href="index.php?page=vers_la_validation_comment_table&amp;id=<?=$n['id']?>&amp;blog_post_id=<?=$n['blog_post_id']?>&amp;auteur=<?=$n['auteur']?>&amp;message=<?=$n['message']?>" class="btn btn-primary btn-custom">Valider</a><p>
                            	<p class="text-center"><a href="index.php?page=vers_la_sup_comment_table&amp;id=<?=$n['id']?>" class="btn btn-primary btn-custom">Supprimer</a><p>
                            <?php
							}
							?>	
                            	
                            	
						</div>
					</div>
					
							

							
								
	
					</div>
				</div>
			</div>
		</div>
		<div id="map" class="colorlib-map"></div>
		<div id="colorlib-subscribe">
			
			<div class="container">
				<div class="row">
					
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
                            <li>
                                <span>8. Les piratages informatiques en constante augmentation

Les piratages seront plus nombreux que jamais, qu’ils soient ciblés ou non. Les attaquants viseront certainement des plateformes et des appareils qui sont mal protégés. Cette tendance est grandissante et elle coûtera de plus en plus cher à ses victimes – Ivailo Nikolov, SiteGround.</span>
                            </li>
                            <li>
                                <span>9. Les investissements dans le domaine de la cybersécurité

En 2017, les cyberattaques constantes ont bouleversé le secteur de la technologie. Il est aujourd’hui primordial d’investir dans le domaine de la cybersécurité. Cela m’intéresse tout particulièrement de voir comment la tech peut aider les secteurs privés et publics à améliorer leur protection. Le cloud propose des niveaux de sécurité plus importants, alors j’espère que les gens lui feront davantage confiance en 2018 – Marcus Turner, Enola Labs.</span>
                                
                            </li>
                            <li>
                                <span>10. La Blockchain

La technologie de la Blockchain doit être surveillée de près en 2018. La suppression des intermédiaires dans beaucoup de domaines affectera énormément les marchés. Ce système sans faille que nous promet la Blockchain devrait révolutionner le secteur de la finance. Nous assistons également à la naissance de tendances visant à améliorer le confort des consommateurs. Si elles sont bien conçues, ces solutions devraient réussir à tirer leur épingle du jeu – Jim Higgins, Solutionreach.com.</span>
                                
                            </li>
                        </ul>
                    </div>
					
					<div class="col-md-4 col-md-push-1">
						
						
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


