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

<!-- Responsiv -->
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


<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-X6PQKFYZRS"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-X6PQKFYZRS');
</script>






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
				<div class="logo"><a href="index.php"><img src="images/ifos.jpg" alt="" title=""></a></div>
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
								
								<li class="current"><a href="about.php">A Propos</a></li>
								<li><a href="services.php">Domaines</a></li>	
								<li><a href="realisation.php">Realisations</a></li>
								<li class="dropdown"><a href="#">Publications</a>
                                	<ul>
									<li><a href="#" class="mediatech-link" id="mediatech-link-header">Mediatech</a></li>
                                        <li><a href="about.php#NousRecrutons">Offres</a></li>
								    </ul>
                                </li>
							
									
								<li><a href="contact.php">Contactez-nous</a></li>
								<button 
  onclick="window.location.href='about-en.php'" 
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
  en
</button>

							</ul>
						</div>
					</nav>
					
					<!-- Main Menu End-->
					<div class="outer-box clearfix">

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
												background-color: #808080 !important; /* Force la couleur grise */
												color: #010f06;
												border-radius: 35px;
												padding: 8px 15px;
												font-size: 14px;
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
    <section class="page-title" style="background-image:url(images/background/local.png)">
    	<div class="auto-container">
			<h1>A propos</h1>
			<ul class="page-breadcrumb">
				<li><a href="index.php">Accueil</a></li>
				<li>A propos</li>
			</ul>
        </div>
    </section>
				<!-- End Page Title -->

					<!-- Case Section -->
					<section class="case-section">
						<div class="auto-container">
							<div class="inner-container">
								<div class="clearfix">

									<!-- Image Column -->
									<div class="image-column col-lg-6 col-md-12 col-sm-12">
										<div class="inner-column">
											<div class="image wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
												<img src="images/resource/local.png" alt="" />
											</div>
										</div>
									</div>

						<!-- Content Column -->
						<div class="content-column col-lg-6 col-md-12 col-sm-12">
							<div class="inner-column">
								<!-- Sec Title -->
								<div class="sec-title">
									<h2>QUI SOMMES-NOUS ?</h2>
									<div class="text">L'Institut de Formation et de Services (IFOS) est une société de
										conseil haïtienne qui fournit des services de formation et d'assistance
										technique dans divers domaines, mène des enquêtes et conduit l'évaluation de
										projets et d'autres activités de développement. Il est légalement constitué en
										Haïti.
										IFOS possède une expertise et travaille dans les domaines de la gouvernance
										locale, du renforcement des capacités, de la gestion et de l'évaluation de
										projets, de la microfinance, de la recherche socio-économique, de l'organisation
										logistique et de la facilitation d'événements publics (réunions/ateliers et
										conférences).
									</div>
								</div>
								<div class="text-box">
								IFOS offre des solutions novatrices en recherche socio-économique, 
								en gouvernance locale et en renforcement des capacités répondant aux...
									<a href="description.php" class="arrow flaticon-right"></a>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</section>
		<!-- End Welcome Section -->

		<!-- Services Section Two -->
		<section class="services-section-two style-two">
			<div class="auto-container">
				<!-- Sec Title -->
				<div class="sec-title centered">
					<h2>Nos valeurs</h2>
				</div>
				<div class="row clearfix">


					<!-- Services Block Two -->
					<div class="services-block-two col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="icon flaticon-marketing"></div>
							<h5><a href="description.php">Respect</a></h5>
							<div class="text">
								Adaptation à la réalité de l'interlocuteur<br>
								Écoute active et prise en compte des besoins<br>
								Valorisation de l’autre et des compétences individuelles
							</div>
							<a class="arrow flaticon-right-arrow-3" href="description.php"></a>
						</div>
					</div>


					<!-- Services Block Two -->
					<div class="services-block-two col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="icon flaticon-law"></div>
							<h5><a href="description.php">Excellence</a></h5>
							<div class="text">Normes de qualité à 100 % (processus et produits)<br>
								Dépassement des attentes des clients
								Recherche de la créativité et de l'innovation par l'intelligence stratégique
							</div>
							<a class="arrow flaticon-right-arrow-3" href="description.php"></a>
						</div>
					</div>


					<!-- Services Block Two -->
					<div class="services-block-two col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="icon flaticon-trophy-2"></div>
							<h5><a href="description.php">Satisfaction</a></h5>
							<div class="text">Respect du délai<br>
								Présentation soignée et professionnelle des documents<br>
								Travail en fonction des attentes et des besoins des clients
							</div>
							<a class="arrow flaticon-right-arrow-3" href="description.php"></a>
						</div>
					</div>


					<!-- Services Block Two -->
					<div class="services-block-two col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="icon flaticon-gdpr"></div>
							<h5><a href="description.php">Objectivite</a></h5>
							<div class="text">Transparence dans les actions<br><br>
								Résultats scientifiques reflétant les faits<br><br>
								Facturation objective<br><br>
							</div>
							<a class="arrow flaticon-right-arrow-3" href="description.php"></a>
						</div>
					</div>

					<!-- Services Block Two -->
					<div class="services-block-two col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="icon flaticon-lobal"></div>
							<h5><a href="description.php">Participation</a></h5>
							<div class="text">Méthode de travail privilégiée<br>
								Recherche de la complémentarité au sein de l'équipe<br><br>
								Responsabilisation mutuelle sur les performances techniques et financières
							</div>
							<a class="arrow flaticon-right-arrow-3" href="description.php"></a>
						</div>
					</div>


					<!-- Services Block Two -->
					<div class="services-block-two col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="icon flaticon-injury"></div>
							<h5><a href="description.php">Responsabilite Sociale</a></h5>
							<div class="text">Écoresponsabilité par la réduction consciente des déchets et de pollution numérique dans toutes les activités <br>
								Consommation éner- gétique modérée et utilisation limitée des em- ballages en plastique par tous les collaborateurs
							</div>
							<a class="arrow flaticon-right-arrow-3" href="description.php"></a>
						</div>
					</div>


				</div>
			</div>
		</section>
		<!-- End Services Section Two -->

		<!-- Fluid Section Two -->
		<section class="fluid-section-two">
			<div class="outer-container clearfix">

				<!-- Content Column -->
				<div class="content-column">
					<div class="inner-column">
						<!-- Sec Title -->
						<div class="sec-title light">
							<h3>Plus de 20 ans d’expertise à votre service</h3>
							<div class="text">Faites l’expérience d’une activité avec IFOS et découvrez de part
								vous-mêmes comment nous aidons les acteurs du développement à améliorer leur performance
								de façon ludique.</div>
						</div>
						<!-- Counter Boxed -->
						<div class="counter-boxed">
							<div class="fact-counter style-two">
								<div class="row clearfix">

									<!-- Column -->
									<div class="column counter-column col-lg-6 col-md-6 col-sm-12">
										<div class="inner wow fadeInLeft" data-wow-delay="0ms"
											data-wow-duration="1500ms">
											<div class="content">
												<div class="icon flaticon-briefcase"></div>
												<div class="count-outer count-box">
													<span class="count-text" data-speed="2500"
														data-stop="15">0</span><sup>+</sup>
												</div>
												<h6 class="counter-title">Partenaires Internationaux</h6>
											</div>
										</div>
									</div>

									<!-- Column -->
									<div class="column counter-column col-lg-6 col-md-6 col-sm-12">
										<div class="inner wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
											<div class="content">
												<div class="icon flaticon-notebook"></div>
												<div class="count-outer count-box">
													<span class="count-text" data-speed="3000"
														data-stop="50">0</span><sup>+</sup>
												</div>
												<h6 class="counter-title">Consultants seniors</h6>
											</div>
										</div>
									</div>

									<!-- Column -->
									<div class="column counter-column col-lg-6 col-md-6 col-sm-12">
										<div class="inner wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
											<div class="content">
												<div class="icon flaticon-group"></div>
												<div class="count-outer count-box">
													<span class="count-text" data-speed="3000"
														data-stop="800">0</span><sup>+</sup>
												</div>
												<h6 class="counter-title">Agents de terrain</h6>
											</div>
										</div>
									</div>

									<!-- Column -->
									<div class="column counter-column col-lg-6 col-md-6 col-sm-12">
										<div class="inner wow fadeInRight" data-wow-delay="0ms"
											data-wow-duration="1500ms">
											<div class="content">
												<div class="icon flaticon-trophy-2"></div>
												<div class="count-outer count-box">
													<span class="count-text" data-speed="3000"
														data-stop="100%">0</span><sup>%</sup>
												</div>
												<h6 class="counter-title">Couverture nationale</h6>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>

					</div>
				</div>



				<!-- Image Column -->
				<div class="video-boxed" style="width: 80%; max-width: 400px; height: 450px; margin: 0 auto; display: flex; justify-content: center; align-items: center;">
					<a href="https://youtu.be/_eDFOiwTZTo" class="lightbox-image video-box"><span
							class="fa fa-play"><i class="ripple"></i></span></a>
					<figure class="image-box"><img src="images/resource/image-2.jpg" alt=""></figure>
				</div>

			</div>
		</section>
		<!-- End Fluid Section Two -->

		<!-- Team Section -->
		<section class="team-section">
			<div class="auto-container">
				<!-- Sec Title -->
				<div class="sec-title centered">
					<h2>Notre equipe</h2>
				</div>

				<div class="row clearfix">
					<div class="team-block col-lg-3 col-md-4 col-sm-6 team-member">
						<div class="gray-background"></div>
						<img src="images/resource/IMG_4045.jpg" alt="Profile">
						<div class="member-description">
						<!-- <a href="https://www.linkedin.com/in/ulrick-jean-claude-59b96320/?originalSubdomain=ht" target="_blank">Profil</a> -->
							
						</div>
						<div class="lower-box">
							<h6>Ulrick Jean claude</h6>
							<div class="designation">Directeur Général</div>
						</div>
					</div>


					<div class="team-block col-lg-3 col-md-4 col-sm-6 team-member">
						<div class="gray-background"></div>
						<img src="images/resource/IMG_4042.jpg" alt="Profile">
						<div class="member-description">
						<!-- <a href="https://www.linkedin.com/in/clauvita-jean-claude-0663bb178?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank">Profil</a> -->

						</div>
						<div class="lower-box">
							<h6>Clauvita Jean Claude</h6>
							<div class="designation">Gestionnaire de l'Administration et des Finances</div>
						</div>
					</div>



					<div class="team-block col-lg-3 col-md-4 col-sm-6 team-member">
						<div class="gray-background"></div>
						<img src="images/resource/IMG_4040.jpg" alt="Profile">
						<div class="member-description">
							

						<!-- <a href="https://www.genelmilerose.com/" target="_blank">Profil</a> -->

						</div>
						<div class="lower-box">
							<h6>Genel Milerose</h6>
							<div class="designation">Gestionnaire de Système d'Information</div>
						</div>
					</div>


					<div class="team-block col-lg-3 col-md-4 col-sm-6 team-member">
						<div class="gray-background"></div>
						<img src="images/resource/IMG_4064.jpg" alt="Profile">
						<div class="member-description">
						

						</div>
						<div class="lower-box">
							<h6>Yves-Stevenson Jean Joseph</h6>
							<div class="designation">Gestionnaire de projet</div>
						</div>
					</div>



					
					<div class="team-block col-lg-3 col-md-4 col-sm-6 team-member">
						<div class="gray-background"></div>
						<img src="images/resource/IMG_4036.jpg" alt="Profile">
						<div class="member-description">
						<!-- <a href="https://www.linkedin.com/in/sonor-pierre-23969b79/" target="_blank">Profile</a> -->

						
						</div>
						<div class="lower-box">
							<h6>Sonor Pierre</h6>
							<div class="designation">Gestionnaire de renforcement des capacités</div>
						</div>
					</div>




					<div class="team-block col-lg-3 col-md-4 col-sm-6 team-member">
						<div class="gray-background"></div>
						<img src="images/resource/IMG_4056.jpg" alt="Profile">
						<div class="member-description">
						
						<!-- <a href="https://www.linkedin.com/in/chavelt-dareus-829a0124b/" target="_blank">Profil</a> -->
						</div>
						<div class="lower-box">
							<h6>Chavelt Dareus</h6>
							<div class="designation">Comptable</div>
						</div>
					</div>



					<div class="team-block col-lg-3 col-md-4 col-sm-6 team-member">
						<div class="gray-background"></div>
						<img src="images/resource/IMG_4073.jpg" alt="Profile">
						<div class="member-description">
						
						<!-- <a href="https://www.linkedin.com/in/michelson-jeanlus-322358230?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank">Profil</a> -->
						</div>
						<div class="lower-box">
							<h6>Michelson Jeanlus</h6>
							<div class="designation">Officier de suivi et évaluation</div>
						</div>
					</div>



					<div class="team-block col-lg-3 col-md-4 col-sm-6 team-member">
						<div class="gray-background"></div>
						<img src="images/resource/IMG_4075.jpg" alt="Profile">
						<div class="member-description">
						<!-- <a href="https://www.linkedin.com/in/anne-stecie-nerleine-osmann-a4620622b/" target="_blank">Profile</a>
						 -->
						
						</div>
						<div class="lower-box">
							<h6>Anne Stecie Nerleine Osmann</h6>
							<div class="designation">Officière des opérations</div>
						</div>
					</div>



					<div class="team-block col-lg-3 col-md-4 col-sm-6 team-member">
						<div class="gray-background"></div>
						<img src="images/resource/IMG_4034.jpg" alt="Profile">
						<div class="member-description">
						<!-- <a href="https://github.com/julyssewilkenson" target="_blank">Profile</a> -->

						
						</div>
						<div class="lower-box">
							<h6>Wilkenson JULYSSE</h6>
							<div class="designation">IT Manager</div>
						</div>
					</div>


					<div class="team-block col-lg-3 col-md-4 col-sm-6 team-member">
						<div class="gray-background"></div>
						<img src="images/resource/IMG_4048.jpg" alt="Profile">
						<div class="member-description">
						
						
						</div>
						<div class="lower-box">
							<h6>Verner Felix</h6>
							<div class="designation">Support Staff</div>
						</div>
					</div>



					<div class="team-block col-lg-3 col-md-4 col-sm-6 team-member">
						<div class="gray-background"></div>
						<img src="images/resource/IMG_4083.jpg" alt="Profile">
						<div class="member-description">
						
						</div>
						<div class="lower-box">
							<h6>Pierre Michelet Alexandre</h6>
							<div class="designation">Support Staff</div>
						</div>
					</div>



					<div class="team-block col-lg-3 col-md-4 col-sm-6 team-member">
						<div class="gray-background"></div>
						<img src="images/resource/IMG_4039.jpg" alt="Profile">
						<div class="member-description">
							
						</div>
						<div class="lower-box">
							<h6>Gesner Seizeme</h6>
							<div class="designation">Support Staff</div>
						</div>
					</div>

			<div class="team-block col-lg-3 col-md-4 col-sm-6 team-member" style="margin: 0 auto;">
				<div class="gray-background"></div>
				<img src="images/resource/IMG_4052.jpg" alt="Profile">
				<div class="member-description">
				</div>
				<div class="lower-box">
					<h6>Marie Nadege Augustin</h6>
					<div class="designation">Support Staff</div>
				</div>
			</div>


				</div>
			</div>
	</section>
	<!-- End Team Section -->

	<!-- Practice Section -->
	<section id="NousRecrutons" class="practice-section">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title centered">
            <h2>Nous Recrutons</h2>
        </div>
        <div class="inner-container">
            <div class="clearfix" style="display: flex; justify-content: center; flex-wrap: wrap;">

                <!-- Practice Block -->
                <div class="practice-block col-lg-3 col-md-6 col-sm-12" style="margin: 10px;">
                    <div class="inner-box" style="text-align: center;">
                        <div class="icon flaticon-briefcase"></div>
                        <h6><a href="https://www.ifosformation.com/download/GRC.pdf" target="_blank">Responsable des ressources humaines</a></h6>
                        <p>Deadline: 31 Aout 2024</p>
                    </div>
                </div>

                <!-- Practice Block -->
                <div class="practice-block col-lg-3 col-md-6 col-sm-12" style="margin: 10px;">
                    <div class="inner-box" style="text-align: center;">
                        <div class="icon flaticon-law"></div>
                        <h6><a href="https://www.ifosformation.com/download/GRC.pdf" target="_blank">Coordonnateur regionnal dans le nord</a></h6>
                        <p>Deadline: 31 Aout 2024</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

	<!-- End Practice Section -->

	<!-- CTA Section -->
	<section class="cta-section">
	<div class="auto-container">
		<div class="inner-container">
			
			<div class="content">
				<h2>Abonnez-vous à notre NewsLetter</h2>
				
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
									<div class="text">IFOS offre des solutions novatrices de recherche socio-économique, de gouvernance locale et de renforcement des capacités...</div>
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
									<h5>Raccourcis</h5>
									<ul class="footer-list">
    <li><a href="index.php">Accueil</a></li>
    <li><a href="about.php">A propos</a></li>
    <li><a href="services.php">Domaines</a></li>
    <li><a href="realisation.php">Realisations</a></li>

    <!-- Lien modifié pour Mediatech -->
	<li><a href="#" class="mediatech-link" id="mediatech-link-footer">Mediatech</a></li>

    <li><a href="about.php#NousRecrutons">Offres</a></li>
    <li><a href="contact.php">Contactez nous</a></li>
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
                    <h2>S'abonner</h2>
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
									<h5>Information du Bureau</h5>
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
										<h2>S'abonner</h2>
									</div>

									<div class="mc-field-group">
										<label for="mce-EMAIL">Email Address <span class="asterisk">*</span></label>
										<input type="email" name="EMAIL" class="required email" id="mce-EMAIL" required="" value="">
									</div>

									<div style="position: absolute; left: -5000px;">
										<input type="text" name="b_78eba72b1eccb55a0dc15853f_d06f26c215" tabindex="-1" value="">
									</div>

									<div class="clear">
										<input type="submit" name="subscribe" id="mc-embedded-subscribe" class="button" value="S'abonner" style="background-color: #FCAF17; border-radius: 20px;">
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
				<div class="copyright">Copyright 2024, IFOS S.A, Tous Droits Réservés.</div>
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