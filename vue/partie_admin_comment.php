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
								<form method="post" action="index.php?page=coment" enctype="multipart/form-data">

                                    <label for="author">Auteur du commentaire</label>
                                    <input type="text" class="form-control" name="author" id="author" placeholder="Auteur">
                                  	<br/>

                                    <label for="content">Commentaire</label>
                                    <textarea type="text" class="form-control" id="content" name="content"></textarea>
                                    <br/>

                                    <input type="submit" value="valider" class="btn btn-primary">

                                    <input type="submit" value="refuser" class="btn btn-primary">
                            	</form>
                            	<h3> Le nom de l'auteur et le commentaire de celui-ci</h3>
                            	<p> Le nom de l'auteur est :</p> <?php echo htmlspecialchars($_POST['author']); ?> <p>et son commentaire est :</p><?php echo htmlspecialchars($_POST['content']); ?>!
                            	<br/>
                            	
                            	<p class="text-center"><a href="index.php?page=valider&amp;nom=<?=$_POST['author']?>&amp;message=<?=$_POST['content']?>" class="btn btn-primary btn-custom">Valider</a><p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="colorlib-subscribe">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-md-offset-0 colorlib-heading animate-box">
							<h2>Sign up for a Newsletter</h2>
							<div class="row">
								<div class="col-md-7">
									<p>Enter your email address to get the latest news, events and special offers delivered right to your inbox.</p>
								</div>
								<div class="col-md-5">
									<form class="form-inline qbstp-header-subscribe">
										<div class="row">
											<div class="col-md-12 col-md-offset-0">
												<div class="form-group">
													<input type="text" class="form-control" id="email" placeholder="Enter your email">
													<button type="submit" class="btn btn-primary">Subscribe</button>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<footer id="colorlib-footer" role="contentinfo">
				<div class="container">
					<div class="row row-pb-md">
						<div class="col-md-3 colorlib-widget">
							<h4>About Company</h4>
							<p>
								Far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics
							</p>
							<p>
								<ul class="colorlib-social-icons">
									<li><a href="#"><i class="icon-twitter"></i></a></li>
									<li><a href="#"><i class="icon-facebook"></i></a></li>
									<li><a href="#"><i class="icon-linkedin"></i></a></li>
									<li><a href="#"><i class="icon-dribbble"></i></a></li>
								</ul>
							</p>
						</div>
						<div class="col-md-3 col-md-push-1">
							<h4>Recent Blog</h4>
							<ul class="colorlib-footer-links">
								<li>
									<span>&mdash; 20 Jan, 2017</span>
									<a href="#">Results of Annual General Meeting</a>
								</li>
								<li>
									<span>&mdash; 19 Jan, 2017</span>
									<a href="#">Construction was awarded with “The Best Construction Company” prize</a>
								</li>
								<li>
									<span>&mdash; 18 Jan, 2017</span>
									<a href="#">New Saint Michael’s College Residence Hall Buzzing with Student Activity</a>
								</li>
							</ul>
						</div>
						<div class="col-md-3 col-md-push-1 colorlib-widget">
							<h4>Information</h4>
							<p>
								<ul class="colorlib-footer-links">
									<li><a href="#"><i class="icon-check"></i> Our Company</a></li>
									<li><a href="#"><i class="icon-check"></i> Certification</a></li>
									<li><a href="#"><i class="icon-check"></i> Our services</a></li>
									<li><a href="#"><i class="icon-check"></i> Career</a></li>
									<li><a href="#"><i class="icon-check"></i> Core Values</a></li>
									<li><a href="#"><i class="icon-check"></i> Company History</a></li>
									<li><a href="#"><i class="icon-check"></i> FAQ</a></li>
								</ul>
							</p>
						</div>
						<div class="col-md-3 col-md-push-1">
							<h4>Contact Info</h4>
							<ul class="colorlib-footer-links">
								<li>291 South 21th Street, <br> Suite 721 New York NY 10016</li>
								<li><a href="tel://1234567920"><i class="icon-phone"></i> + 1235 2355 98</a></li>
								<li><a href="mailto:info@yoursite.com"><i class="icon-envelope"></i> info@yoursite.com</a></li>
								<li><a href="http://luxehotel.com"><i class="icon-location4"></i> yourwebsite.com</a></li>
							</ul>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 text-center">
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

