<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>IFOS S.A</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Bellefair&family=Open+Sans:wght@300;400;700;800&family=Oswald:wght@400;500;600;700&display=swap" rel="stylesheet">

<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->

<style>
        /* Style pour centrer et afficher la modale */
        #emailModal {
            display: none; /* Caché par défaut */
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 1000; /* Assure qu’il est au-dessus des autres éléments */
            background-color: white;
            padding: 20px;
            margin: 0;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 90vw; /* Largeur à 90% de l'écran */
            max-width: 400px; /* Largeur maximale fixe */
            max-height: 90vh; /* Limite la hauteur pour éviter les débordements */
            overflow-y: auto; /* Ajoute un défilement interne si le contenu déborde */
            transition: opacity 0.4s ease; /* Animation pour l'apparition douce */
        }

        /* Classe ajoutée pour afficher la modale au centre */
        #emailModal.show {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            opacity: 1; /* Ajout de l'animation d'opacité */
        }
    </style>
</head>

<body class="hidden-bar-wrapper">

<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	
 	<!-- Main Header-->
    <header class="main-header header-style-one">
    	<!--Header-Upper-->
        <div class="header-upper">
        	<div class="auto-container clearfix">
            	
				<div class="pull-left logo-box">
					<div class="logo"><a href="index.php"><img src="images/logo_principale.png" alt="" title=""></a></div>
				</div>
				
				<div class="nav-outer clearfix">
					<!--Mobile Navigation Toggler-->
					<div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
					<!-- Main Menu -->
					<nav class="main-menu navbar-expand-md">
						<div class="navbar-header">
							<!-- Toggle Button -->    	
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						
						<div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
							<ul class="navigation clearfix">
								<li><a href="index.php">Accueil</a></li>
								
								<li><a href="about.php">A Propos</a></li>
								<li><a href="services.php">Domaines</a></li>	
								<li><a href="realisation.php">Realisations</a>
                                	<!-- <ul>
										<li><a href="realisation.php">Recherche socio-économique</a></li>
                                        <li><a href="evaluation.php">Evaluation de projets</a></li>
                                        <li><a href="gouvernace.php">Gouvernance locale et developpement</a></li>
                                        <li><a href="renforcement.php">Renforcement des capacités</a></li>
										<li><a href="micro.php">Micro Finance</a></li>
										<li><a href="evenement.php">Organisation d'evenement</a></li>

								    </ul> -->
                                </li>
								
						<!--		<li class="current"><a href="blog.php">Blog</a></li>  -->
									
								<li><a href="contact.php">Contactez nous</a></li>
								
								<button 
  onclick="window.location.href='https://ifosformation.com/New-Website-ifos/index.php'" 
  style="
    background-color: #808080;
    color: #000080;  /* Bleu marine */
    border: none;
    border-radius: 50%;
    width: 40px;
    height: 40px;
    font-size: 16px;
    font-weight: bold;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: background-color 0.3s ease;"
  onmouseover="this.style.backgroundColor='#808080'"
  onmouseout="this.style.backgroundColor='#808080'">
  Fr
</button>
							</ul>
						</div>
					</nav>
					
					<!-- Main Menu End-->
												<div class="outer-box clearfix">
													<!-- Btn Box -->

													<div class="btn-box">
														<a href="https://wa.me/+50938525967" class="theme-btn11 btn-style-two">
															<span class="txt">Whatsapp</span>
														</a>
													</div>
													
													<style>
														.btn-box {
															margin-bottom: 10px;
														}
													
														.theme-btn11 {
															background-color: #FCAF17; /* Change this line to set the background color to gray */
															color: #010f06;
															border-radius: 30px;
														}
													</style>			
														
												</div>
											</div>	
										</div>
									</div>
							<!--End Header Upper-->

							<!-- Sticky Header  -->
							<div class="sticky-header">
							<div class="auto-container clearfix">
							<!--Logo-->
							<div class="logo pull-left">
							<a href="index.php" title=""><img src="images/logo-small.png" alt="" title=""></a>
							</div>
							<!--Right Col-->
							<div class="pull-right">
							<!-- Main Menu -->
							<nav class="main-menu">
								<!--Keep This Empty / Menu will come through Javascript-->
							</nav><!-- Main Menu End-->

							<!-- Main Menu End-->
							<div class="outer-box clearfix">
								<!-- Btn Box 0082c3-->
								<div class="btn-box">
									<a href="https://wa.me/+50938525967" class="theme-btn11 btn-style-two">
										<span class="txt">Whatsapp</span>
									</a>
								</div>
								
								<style>
									.btn-box {
										margin-bottom: 10px;
									}
								
									.theme-btn11 {
										background-color: #FCAF17; /* Change this line to set the background color to gray */
										color: #010f06;
										border-radius: 30px;
									}
								</style>
								
								
								<!-- Mobile Navigation Toggler -->
								<div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
								
							</div>

							</div>
							</div>
							</div><!-- End Sticky Menu -->
    
					<!-- Mobile Menu  -->
					<div class="mobile-menu">
						<div class="menu-backdrop"></div>
						<div class="close-btn"><span class="icon flaticon-multiply"></span></div>
						
						<nav class="menu-box">
							<div class="nav-logo"><a href="index.php"><img src="images/logo-2.png" alt="" title=""></a></div>
							<div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
						</nav>
					</div><!-- End Mobile Menu -->
				
				</header>
				<!-- End Main Header -->
	
				
				<!-- Page Title -->
				<section class="page-title style-two" style="background-image:url(images/background/blog.jpg)">
					<div class="auto-container">
						<h1>Blog</h1>
						<ul class="page-breadcrumb">
							<li><a href="index.php">Accueil</a></li>
							<li>Blog</li>
						</ul>
					</div>
				</section>
				<!-- End Page Title -->
	
			<!-- Sidebar Page Container -->
			<div class="sidebar-page-container">
				<div class="auto-container">
					<div class="row clearfix">
						
						<!-- Content Side -->
						<div class="content-side col-lg-8 col-md-12 col-sm-12">
							<div class="blog-classic">
								
						<!-- News Block -->
						<div class="news-block">
							<div class="inner-box">
								<div class="image">
									<a href="blog-detail.php"><img src="images/resource/news-1.jpg" alt="" /></a>
									<div class="category">socioéconomique</div>
									<ul class="post-meta">
										<li><a href="blog-detail.php"><span class="icon flaticon-timetable"></span>Novembre 15, 2023</a></li>
										<li><a href="blog-detail.html"><span class="icon flaticon-email"></span>Comments 03</a></li>
									</ul>
								</div>
								<div class="lower-content">
									<h3><a href="blog-detail.php">Titre de l'article: BIG DATA.</a></h3>
									<div class="text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </div>
									<div class="btn-box">
										<a href="blog-detail.php" class="theme-btn11 btn-style-one"><span class="txt">Plus</span></a>
									</div>
								</div>
							</div>
						</div>
						
						<!-- News Block -->
						<div class="news-block">
							<div class="inner-box">
								<div class="image">
									<a href="blog-detail.php"><img src="images/resource/news-1.jpg" alt="" /></a>
									<div class="category">socioéconomique</div>
									<ul class="post-meta">
										<li><a href="blog-detail.php"><span class="icon flaticon-timetable"></span>Novembre 15, 2023</a></li>
										<li><a href="blog-detail.html"><span class="icon flaticon-email"></span>Comments 03</a></li>
									</ul>
								</div>
								<div class="lower-content">
									<h3><a href="blog-detail.php">Titre de l'article: BIG DATA.</a></h3>
									<div class="text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </div>
									<div class="btn-box">
										<a href="blog-detail.php" class="theme-btn11 btn-style-one"><span class="txt">Plus</span></a>
									</div>
								</div>
							</div>
						</div>
						<!-- News Block -->
						<div class="news-block">
							<div class="inner-box">
								<div class="image">
									<a href="blog-detail.php"><img src="images/resource/news-1.jpg" alt="" /></a>
									<div class="category">socioéconomique</div>
									<ul class="post-meta">
										<li><a href="blog-detail.php"><span class="icon flaticon-timetable"></span>Novembre 15, 2023</a></li>
										<li><a href="blog-detail.html"><span class="icon flaticon-email"></span>Comments 03</a></li>
									</ul>
								</div>
								<div class="lower-content">
									<h3><a href="blog-detail.php">Titre de l'article: BIG DATA.</a></h3>
									<div class="text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </div>
									<div class="btn-box">
										<a href="blog-detail.php" class="theme-btn11 btn-style-one"><span class="txt">Plus</span></a>
									</div>
								</div>
							</div>
						</div>
						
						<!-- News Block -->
						<div class="news-block">
							<div class="inner-box">
								<div class="image">
									<a href="blog-detail.php"><img src="images/resource/news-1.jpg" alt="" /></a>
									<div class="category">socioéconomique</div>
									<ul class="post-meta">
										<li><a href="blog-detail.php"><span class="icon flaticon-timetable"></span>Novembre 15, 2023</a></li>
										<li><a href="blog-detail.html"><span class="icon flaticon-email"></span>Comments 03</a></li>
									</ul>
								</div>
								<div class="lower-content">
									<h3><a href="blog-detail.php">Titre de l'article: BIG DATA.</a></h3>
									<div class="text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </div>
									<div class="btn-box">
										<a href="blog-detail.php" class="theme-btn11 btn-style-one"><span class="txt">Plus</span></a>
									</div>
								</div>
							</div>
						</div>
						
					</div>
					
					<!--Post Share Options-->
					<div class="styled-pagination text-center">
						<ul class="clearfix">
							<li class="prev"><a href="#"><span class="flaticon-back"></span> </a></li>
							<li><a href="#">1</a></li>
							<li class="active"><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li class="next"><a href="#"><span class="flaticon-next-1"></span> </a></li>
						</ul>
					</div>
					
				</div>
				
				<!-- Sidebar Side -->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                	<aside class="sidebar sticky-top">
						<div class="sidebar-inner">
						
							<!-- Search -->
							
							
							<!--Blog Category Widget-->
							<div class="sidebar-widget sidebar-blog-category">
								<div class="widget-content">
									<div class="sidebar-title">
										<h5>Categoris</h5>
									</div>
									<ul class="cat-list-two">
										<li><a href="#">socioéconomique <span>(2)</span></a></li>
										<li><a href="#">Gouvernance<span>(3)</span></a></li>
										<li><a href="#">Technology<span>(5)</span></a></li>
									</ul>
								</div>
							</div>
							
							<!-- Popular Post Widget -->
							<div class="sidebar-widget popular-posts">
								<div class="widget-content">
									<div class="sidebar-title">
										<h5>Dernieres publications</h5>
									</div>
									<article class="post">
										<figure class="post-thumb"><img src="images/resource/post-thumb-1.jpg" alt=""><a href="blog-detail.php" class="overlay-box"></a></figure>
										<div class="text"><a href="blog-detail.php">Quis autem velo eum iure suam nihil</a></div>
										<div class="post-info">15 novembre, 2023</div>
									</article>
									
									<article class="post">
										<figure class="post-thumb"><img src="images/resource/post-thumb-2.jpg" alt=""><a href="blog-detail.php" class="overlay-box"></a></figure>
										<div class="text"><a href="blog-detail.php">Quis autem velo eum iure suam nihil</a></div>
										<div class="post-info">15novembre, 2023</div>
									</article>
									
									<article class="post">
										<figure class="post-thumb"><img src="images/resource/post-thumb-3.jpg" alt=""><a href="blog-detail.php" class="overlay-box"></a></figure>
										<div class="text"><a href="blog-detail.php">Quis autem velo eum iure suam nihil</a></div>
										<div class="post-info">15 novembre, 2023</div>
									</article>
								</div>
							</div>
							
							<!-- Tags Widget -->
							<div class="sidebar-widget popular-tags">
								<div class="widget-content">
									<div class="sidebar-title">
										<h5>Tags</h5>
									</div>
									<a href="#">Projet</a>
									<a href="#">Evenement</a>
									<a href="#">economie</a>
									<a href="#">Business</a>
								</div>
							</div>
							
						</div>
					</aside>
				</div>
				
			</div>
		</div>
	</div>
	
	<!-- Facts Section three -->
	
	
	
<!-- CTA Section -->
<section class="cta-section">
	<div class="auto-container">
		<div class="inner-container">
			
			<div class="content">
			<h2>SUBSCRIBE TO OUR NEWSLETTER</h2>
				
				<a href="#new_letter" class="scroll-down">
   					 <div class="fa fa-arrow-down"></div>
				</a>
				<div class="footer-widget newsletter-widget"></div>
			</div>
		
		</div>
	</div>
</section>
	
	<!-- End CTA Section -->
	
	<!-- Main Footer -->
	<footer class="main-footer">
		<div class="auto-container">
        	<!-- Widgets Section -->
            <div class="widgets-section">
				<!-- Scroll To Top -->
				<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>
            	<div class="row clearfix">
                	
                    <!-- Big Column -->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
                        <div class="row clearfix">
							
							<!--Footer Column-->
                            <div class="footer-column col-lg-7 col-md-6 col-sm-12">
                                <div class="footer-widget logo-widget">
									<div class="logo">
                                    	<a href="index.php"><img src="images/footer.png" alt="" /></a>
                                    </div>
									<div class="text">IFOS provides services in socioeconomic research, local governance and capacity building, through innovative solutions...</div>
									<!-- Social Nav -->
									<ul class="social-nav">
										<li><a href="https://web.facebook.com/ifosformation" target="_blank"><span class="fa fa-facebook-f"></span></a></li>
										<li class="twitter"><a href="https://twitter.com/IFOSFormation" target="_blank"> <img src="fonts/x-twitter.svg" alt="Twitter logo" /></a></li>
										<li><a href="https://www.linkedin.com/in/ifos-sa-institut-de-formation-et-de-services-sa-952a02a6/" target="_blank"><span class="fa fa-linkedin"></span></a></li>
									</ul>
								</div>
							</div>
							
							<!--Footer Column-->
                            <div class="footer-column col-lg-5 col-md-6 col-sm-12">
                                <div class="footer-widget links-widget">
								<h5>Shortcuts</h5>
									<ul class="footer-list">
								<li><a href="index-en.php">Home</a></li>
										<li><a href="about-en.php">About us</a></li>
										<li><a href="services-en.php">Domains</a></li>
										<li><a href="realisation-en.php">Achievements</a>
										<!--<li><a href="#">News</a></li>-->
										<!--<li><a href="blog.php">Blog</a></li> -->
										<li><a href="#" class="mediatech-link" id="mediatech-link-footer">Mediatech</a></li>

										<li><a href="about-en.php#NousRecrutons">Opportunities</a></li>
										<li><a href="contact-en.php">Contact us</a></li>
</ul>

<!-- Ajoutez la modale ici, juste après la liste des liens -->
<div id="emailModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <div id="mc_embed_shell">
            <link href="//cdn-images.mailchimp.com/embedcode/classic-061523.css" rel="stylesheet" type="text/css">
            <div id="mc_embed_signup">
                <form action="https://ifosformation.us1.list-manage.com/subscribe/post?u=78eba72b1eccb55a0dc15853f&amp;id=d06f26c215&amp;f_id=001e7de2f0" 
                    method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank">
                    <h2>Subscribe</h2>
                    <div class="mc-field-group">
                        <label for="mce-EMAIL">Adresse Email <span class="asterisk">*</span></label>
                        <input type="email" name="EMAIL" class="required email" id="mce-EMAIL" required>
                    </div>
                    <div style="position: absolute; left: -5000px;">
                        <input type="text" name="b_78eba72b1eccb55a0dc15853f_d06f26c215" tabindex="-1" value="">
                    </div>
                    <div class="clear">
                        <input type="submit" id="submit-email" class="button" value="S'abonner">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

								</div>
							</div>
							
						</div>
					</div>
					
					<!-- Big Column -->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
                        <div class="row clearfix">
							
							<!-- Footer Column -->
							<div class="footer-column col-lg-6 col-md-6 col-sm-12">
								<div class="footer-widget contact-widget">
									<h5>Office Contact Details </h5>
									<ul>
										<li>
											<span class="icon flaticon-call-1"></span>
											<a href="tel:+61-3-8376-6284">+509 3852-5967</a>
										</li>
										<li>
											<span class="icon flaticon-call-1"></span>
											<a href="tel:+00-9-0000-9999">+509 3652-5226</a>
										</li>
										<li>
											<span class="icon flaticon-email-2"></span>
											<a href="mailto:contact@ifosformation.com">contact@ifosformation.com</a>
										</li>
										<li>
											<span class="icon flaticon-maps-and-flags"></span>
											7, Delmas 52, <br> Delmas, Haiti
										</li>
										<li>
											<span class="icon flaticon-maps-and-flags"></span>
											2, Imp Titus, <br> Haut du cap, Haiti
										</li>
									</ul>
								</div>
							</div>
							
							<!-- Footer Column -->
							<div id="new_letter" class="footer-column col-lg-6 col-md-6 col-sm-12">
								<div class="footer-widget newsletter-widget">

											
								<div id="mc_embed_shell">
							<link href="//cdn-images.mailchimp.com/embedcode/classic-061523.css" rel="stylesheet" type="text/css">
							<style type="text/css">
								#mc_embed_signup {
									background: #1B1464;
									clear: left;
									font: 14px Helvetica, Arial, sans-serif;
									width: 250px;
								}

								/* Style pour changer la couleur du texte des labels */
								#mc_embed_signup label {
									color: white; /* Change la couleur en blanc */
								}
							</style>
							<div id="mc_embed_signup">
								<form action="https://ifosformation.us1.list-manage.com/subscribe/post?u=78eba72b1eccb55a0dc15853f&amp;id=d06f26c215&amp;f_id=001e7de2f0" 
									method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank">
									<div id="mc_embed_signup_scroll" style="color: white; font-family: 'Aleo', sans-serif;">
										<h2>Subscribe</h2>
									</div>

									<div class="mc-field-group">
										<label for="mce-EMAIL">Email Address <span class="asterisk">*</span></label>
										<input type="email" name="EMAIL" class="required email" id="mce-EMAIL" required="" value="">
									</div>

									<div style="position: absolute; left: -5000px;">
										<input type="text" name="b_78eba72b1eccb55a0dc15853f_d06f26c215" tabindex="-1" value="">
									</div>

									<div class="clear">
										<input type="submit" name="subscribe" id="mc-embedded-subscribe" class="button" value="Subscribe" style="background-color: #FCAF17; border-radius: 20px;">
									</div>
								</form>
							</div>
							<script type="text/javascript" src="//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js"></script>
							<script type="text/javascript">
								(function($) {
									window.fnames = new Array();
									window.ftypes = new Array();
									fnames[0] = 'EMAIL';
									ftypes[0] = 'email';
								}(jQuery));
								var $mcj = jQuery.noConflict(true);
							</script>
						</div>



								</div>
							</div>						
						</div>
					</div>
					
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="auto-container">
				<div class="copyright">Copyright 2024, IFOS SA, All Rights Reserved.</div>
			</div>
		</div>
	</footer>
	
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>

<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/appear.js"></script>
<script src="js/parallax.min.js"></script>
<script src="js/tilt.jquery.min.js"></script>
<script src="js/jquery.paroller.min.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/validate.js"></script>
<script src="js/nav-tool.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/script.js"></script>


<script>
    // Récupération des éléments du DOM
    const modal = document.getElementById('emailModal');
    const mediatechLinks = document.querySelectorAll('.mediatech-link'); // Sélectionne tous les liens avec la classe
    const closeBtn = document.querySelector('.close');
    const submitBtn = document.getElementById('submit-email');
    const newPageLink = "media.php"; // Nouvelle page avec documents téléchargeables

    // Ouvrir la modale pour chaque lien Mediatech
    mediatechLinks.forEach(link => {
        link.onclick = function(event) {
            event.preventDefault(); // Empêche la redirection immédiate
            modal.classList.add('show'); // Ajoute la classe pour l'animation
            modal.style.display = "flex"; // Affiche la modale
        };
    });

    // Fermer la modale
    closeBtn.onclick = function() {
        modal.classList.remove('show'); // Supprime la classe
        setTimeout(() => {
            modal.style.display = "none"; // Cache après l'animation
        }, 400); // Délai correspondant à l'animation CSS
    };

    // Rediriger après soumission
    submitBtn.onclick = function() {
        setTimeout(function() {
            window.location.href = newPageLink; // Redirige vers media.php
        }, 1000); // Attente de 1 seconde
    };

    // Fermer la modale si clic à l’extérieur
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.classList.remove('show');
            setTimeout(() => {
                modal.style.display = "none";
            }, 400);
        }
    };
</script>





</body>
</html>