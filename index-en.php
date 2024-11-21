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


<script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}
(document,"script","https://chimpstatic.com/mcjs-connected/js/users/abcf7d09fa86b9ae1b167e6e6/2a08da6b7aa7646fdbe4522f4.js");</script>


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
 	
 	<!-- MainHeader--> 
    <header class="main-header header-style-one">
    	<!--Header-Upper-->
        <div class="header-upper">
        	<div class="auto-container clearfix">
            	
				<div class="pull-left logo-box">
					<div class="logo"><a href="index-en.php"><img src="images/logo_principale.png" alt="" title=""></a></div>
				</div>
				
				<div class="nav-outer clearfix">
					<!--Mobile Navigation Toggle-->
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
								<li class="current"><a href="index-en.php">Home</a></li>
								
								<li><a href="about-en.php">About us</a></li>
								<li><a href="services-en.php">domains</a></li>
                                <li><a href="realisation-en.php">ACHIEVEMENTS</a></li>
								<li class="dropdown"><a href="#">PUBLICATIONS</a>
                                	<ul>
									<li><a href="#" class="mediatech-link" id="mediatech-link-header">Mediatech</a></li>
                                        <li><a href="about-en.php#NousRecrutons">OPPORTUNITIES </a></li>
								    </ul>
                                </li>
									
								<li ><a href="contact-en.php">CONTACT US</a></li>

								<button 
  onclick="window.location.href='index.php'" 
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
  fr
</button>

							</ul>
						</div>
					</nav>									
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

								<!--End Header Upper-->

							<!-- Sticky Header  -->
							<div class="sticky-header">
							<div class="auto-container clearfix">
							<!--Logo-->
							<div class="logo pull-left">
								<a href="index-en.php" title=""><img src="images/logo-small.png" alt="" title=""></a>
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
											margin-bottom: 5px;
										}
									
										.theme-btn11 {
											background-color: #FCAF17; /* Change this line to set the background color to gray */
											color: #010f06;
											border-radius: 35px;
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
						<div class="nav-logo"><a href="index-en.php"><img src="images/logo-small.png" alt="" title=""></a></div>
						<div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
					</nav>
				</div><!-- End Mobile Menu -->

	
	
    </header>
    <!-- End Main Header -->
	
	<i class="fa-brands fa-x-twitter"></i>	
			<!-- Banner Section -->
			<section class="banner-section">
				
	
		<div class="main-slider-carousel owl-carousel owl-theme">  
		<div class="slide" style="background-image: url(images/main-slider/cover9.png)">
				<div class="auto-container">		
					<!-- Content Column -->
					<div class="content-column">
						<div class="inner-column">
							<div class="title">INSTITUTE FOR TRAINING AND SERVICES S.A</div>
							<h1>20+ YEARS<br>OF EXPERIENCE</h1>
							<div class="text">Experience it for yourself</div>
							<div class="btns-box">
								<a href="about-en.php#NousRecrutons" class="theme-btn30 btn-style-one"><span class="txt">Join us<i class="arrow flaticon-right"></i></span></a>
								<style>
									.btns-box {
										margin-bottom: 10px;
									}
								
									.theme-btn30 {
										background-color: #FCAF17; 
										color: #010f06;
										border-radius: 25px;
									}
								</style>
							</div>
						</div>
					</div>
					
				</div>
			</div>
			
		</div>
		
	</section>
	<br>
	<!-- End Banner Section -->
	
	<!-- Services Section -->
	<section class="testimonial-sectionn">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<h2>OUR ACHIEVEMENTS</h2>
			</div>

			<div class="inner-container">
				<div class="single-item-carousel owl-carousel owl-theme">
					
					<!-- First Block -->
					<div class="testimonial-blockk">
						<div class="row clearfix">
					
							<!-- Services Block -->
							<div class="services-block col-lg-6 col-md-12 col-sm-12">
								<div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
									<div class="content">
										<div class="icon flaticon-group"></div>
										<h5><a href="recherche-socio.php">Evaluation Survey Services activity (Haiti ESS+)/USAID</a></h5>
										<div class="text">As a Subcontractor to International Business Initiatives (IBI). IFOS provided a team composed...</div>
									</div>
									<a href="realisation-en.php" class="arrow flaticon-right"></a> 
								</div>
							</div>
							
							<!-- Services Block -->
							<div class="services-block col-lg-6 col-md-12 col-sm-12">
								<div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
									<div class="content">
										<div class="icon flaticon-group"></div>
										<h5><a href="recherche-socio.php">Socioeconomic surveys Tulane University</a></h5>
										<div class="text">Socioeconomic surveys covering over 4,000 households in the South and North-East departments...</div>
									</div>
									<a href="realisation-en.php" class="arrow flaticon-right"></a> 
								</div>
							</div>

							
							<!-- Services Block -->
							<div class="services-block col-lg-6 col-md-12 col-sm-12">
								<div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
									<div class="content">
										<div class="icon flaticon-file"></div>
										<h5><a href="recherche-socio.php">Education Quality Improvement Project (EQUIP)</a></h5>
										<div class="text">IFOS acted as Consortium Lead for the EQUIP/World Bank Project, coordinating the Impact Assessment...</div>
									</div>
									<a href="realisation-en.php" class="arrow flaticon-right"></a>
								</div>
							</div>
							
							

							<!-- Services Block -->
							<div class="services-block col-lg-6 col-md-12 col-sm-12">
								<div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
									<div class="content">
										<div class="icon flaticon-file"></div>
										<h5><a href="recherche-socio.php">Ministry of Interior and Local Authorities</a></h5>
										<div class="text">Acting as lead for an international consortium, IFOS implemented a capacity building project for...</div>
									</div>
									 <a href="realisation-en.php" class="arrow flaticon-right"></a> 
								</div>
							</div>
					
						</div>
					</div>	


					

					<!-- second Block -->
					<div class="testimonial-blockk">
						<div class="row clearfix">
					
							<!-- Services Block -->
							<div class="services-block col-lg-6 col-md-12 col-sm-12">
								<div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
									<div class="content">
										<div class="icon flaticon-group"></div>
										<h5><a href="recherche-socio.php">Communal Development Plan</a></h5>
										<div class="text">IFOS provided technical assistance to the PADF, supporting the municipalities of Côteaux, Roche-à-Bateau, Port-Salut...</div>
									</div>
									<a href="realisation-en.php" class="arrow flaticon-right"></a> 
								</div>
							</div>
							
							<!-- Services Block -->
							<div class="services-block col-lg-6 col-md-12 col-sm-12">
								<div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
									<div class="content">
										<div class="icon flaticon-group"></div>
										<h5><a href="recherche-socio.php">GÉRE (RTI)</a></h5>
										<div class="text">Serving as a subcontractor to RTI International on the implementation of USAID’s GERÉ project for the improvement of governance...</div>
									</div>
									<a href="realisation-en.php" class="arrow flaticon-right"></a> 
								</div>
							</div>

							
							<!-- Services Block -->
							<div class="services-block col-lg-6 col-md-12 col-sm-12">
								<div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
									<div class="content">
										<div class="icon flaticon-file"></div>
										<h5><a href="recherche-socio.php">(EGRA) and School Management (SSME)</a></h5>
										<div class="text">RTI’s Subcontractor, in charge of data collection regarding Early Grade Reading Assessment (EGRA) and School Management (SSME)...</div>
									</div>
									<a href="realisation-en.php" class="arrow flaticon-right"></a>
								</div>
							</div>
							
							

							<!-- Services Block -->
							<div class="services-block col-lg-6 col-md-12 col-sm-12">
								<div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
									<div class="content">
										<div class="icon flaticon-file"></div>
										<h5><a href="recherche-socio.php">Capacity Building(LOKAL PLUS)</a></h5>
										<div class="text">Acting as a subcontractor to TETRATECH International for the implementation and monitoring of the "Capacity Building"...</div>
									</div>
									 <a href="realisation-en.php" class="arrow flaticon-right"></a> 
								</div>
							</div>
					
						</div>
					</div>	


					
					<!-- Third Block -->
					<div class="testimonial-blockk">
						<div class="row clearfix">
					
							<!-- Services Block -->
							<div class="services-block col-lg-6 col-md-12 col-sm-12">
								<div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
									<div class="content">
										<div class="icon flaticon-group"></div>
										<h5><a href="recherche-socio.php">USAID /ESS, Social Impact(EGRA)</a></h5>
										<div class="text">IFOS acted as a subcontractor to Social Impact for Haiti’s reading program impact evaluation, conducting the data collection...</div>
									</div>
									<a href="realisation-en.php" class="arrow flaticon-right"></a> 
								</div>
							</div>
							
							<!-- Services Block -->
							<div class="services-block col-lg-6 col-md-12 col-sm-12">
								<div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
									<div class="content">
										<div class="icon flaticon-group"></div>
										<h5><a href="recherche-socio.php">KLERE CHIMEN (UGP/MAST-World Bank)</a></h5>
										<div class="text">IFOS conducted the survey aiming to collect quantitative data from 6,250 households in all 14 communes of Haiti’s Grand'Anse department...</div>
									</div>
									<a href="realisation-en.php" class="arrow flaticon-right"></a> 
								</div>
							</div>

							
							<!-- Services Block -->
							<div class="services-block col-lg-6 col-md-12 col-sm-12">
								<div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
									<div class="content">
										<div class="icon flaticon-file"></div>
										<h5><a href="recherche-socio.php">Determinants of Academic Performance in the Haitian School System</a></h5>
										<div class="text">Study of the determinants of academic performance in the Haitian school system..</div>
									</div>
									<a href="realisation-en.php" class="arrow flaticon-right"></a> 
								</div>
							</div>
							

							<!-- Services Block -->
							<div class="services-block col-lg-6 col-md-12 col-sm-12">
								<div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
									<div class="content">
										<div class="icon flaticon-file"></div>
										<h5><a href="recherche-socio.php">KAP (Knowledge, Attitude, and Practice)</a></h5>
										<div class="text">IFOS conducted a KAP (Knowledge, Attitude, and Practice) study among workers' and employers' organizations from Haiti’s textile industry...</div>
									</div>
									<a href="realisation-en.php" class="arrow flaticon-right"></a> 
								</div>
							</div>
					
						</div>
					</div>	
				</div>
			</div>
	</section>
	<!-- End Services Section -->
	
	<!-- Welcome Section -->
	<section class="welcome-section" style="background-image: url(images/background/pattern-1.png)">
		<div class="auto-container">
			<div class="inner-container">
				<div class="clearfix">
					
					<!-- Image Column -->
					<div class="image-column col-lg-6 col-md-12 col-sm-12">
						<div class="inner-column">
							<div class="image titlt" data-tilt data-tilt-max="2">
								<img src="images/resource/gestion.jpg" alt="" />
							</div>
						</div>
					</div>
					
					<!-- Content Column -->
					<div class="content-column col-lg-6 col-md-12 col-sm-12">
						<div class="inner-column">
							<!-- Sec Title -->
							<div class="sec-title">
								<h2>WHAT MAKES US UNIQUE?</h2>
								<div class="text">IFOS is a successful, autonomous, socially and fiscally responsible Haitian company. The recognition 
									achieved, both nationally and internationally, makes us a reference in our areas of expertise.</div>
							</div>
							<p>Owing to our compliance with international norms and standards along with the use of advanced technology, we operate at the forefront of socioeconomic research and capacity building. 
									IFOS, a place for self-actualization and growth. Through our regional offices, we offer a place for learning and self-realization to our employees, consultants and partners.</p>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</section>
	<!-- End Welcome Section -->
	
	<!-- Counter Section -->
	<section class="counter-section">
		<div class="image-layer" style="background-image: url(images/background/service-2.jpg)"></div>
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title light centered">
				<h2>OVER 20 YEARS OF EXPERTISE AT YOUR SERVICE</h2>
				<div class="text">Try an experience with IFOS and you will see for yourself how we help development actors improve their performance, while keeping it entertaining.</div>
			</div>
			
			<div class="fact-counter">
				<div class="row clearfix">
				
					<!-- Column -->
					<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
						<div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="content">
								<div class="icon flaticon-marketing"></div>
								<div class="count-outer count-box">
									<span class="count-text" data-speed="2500" data-stop="15">0</span><sup>+</sup>
								</div>
								<h6 class="counter-title">International Partners</h6>
							</div>
						</div>
					</div>
			
					<!-- Column -->
					<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
						<div class="inner wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="content">
								<div class="icon flaticon-autre-icone"></div>
								<div class="count-outer count-box">
									<span class="count-text" data-speed="3000" data-stop="100">0</span><sup>+</sup>
								</div>
								<h6 class="counter-title">Projects Completed</h6>
							</div>
						</div>
					</div>
			
					<!-- Column -->


					<!-- Column -->
					<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
						<div class="inner wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="content">
								<div class="icon flaticon-users"></div>
								<div class="count-outer count-box">
									<span class="count-text" data-speed="3000" data-stop="800">0</span><sup>+</sup>
								</div>
								<h6 class="counter-title">Field Agents</h6>
							</div>
						</div>
					</div>
					
					
					<!-- Column -->
					<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
						<div class="inner wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="content">
								<div class="icon flaticon-trophy-2"></div>
								<div class="count-outer count-box">
									<span class="count-text" data-speed="3000" data-stop="100">0</span><sup>%</sup>
								</div>
								<h5 class="counter-title">National Coverage</h5>
							</div>
						</div>
					</div>
			
				</div>
			</div>
			
			<!--Video Box-->
			<div class="video-boxed" style="width: 100%; max-width: 500px; height: 250px; margin: 0 auto; display: flex; justify-content: center; align-items: center;">
    <figure class="video-image" style="text-align: center;"><img src="images/logo1.png" alt="" title=""></figure>
    <a href="https://youtu.be/_eDFOiwTZTo" class="lightbox-image overlay-box" style="display: block;">
        <span class="flaticon-play-arrow"><i class="ripple"></i></span>
    </a>
</div>
	</section>
	<!-- End Counter Section -->
	
	<!-- Practice Section -->
	<section class="practice-section">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<h2>OUR AREAS OF EXPERTISE</h2>
			</div>
			<div class="inner-container">
				<div class="clearfix">
					
					<!-- Practice Block -->
					<div class="practice-block col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="icon flaticon-save-money"></div>
							<h6><a href="services-en.php">Microfinance</a></h6>
							
						</div>
					</div>
					
					<!-- Practice Block -->
					<div class="practice-block col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="icon flaticon-briefcase"></div>
							<h6><a href="services-en.php">Training/Coaching</a></h6>
							
						</div>
					</div>
					
					<!-- Practice Block -->
					<div class="practice-block col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="icon flaticon-search-engine"></div>
							<h6><a href="services-en.php">Organizational strengthening</a></h6>
							
						</div>
					</div>
					
					<!-- Practice Block -->
					<div class="practice-block col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="icon flaticon-notebook"></div>
							<h6><a href="services-en.php">Business Plan Development</a></h6>
							
						</div>
					</div>
					
					<!-- Practice Block -->
					<div class="practice-block col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="icon flaticon-autre-icone"></div>
							<h6><a href="services-en.php">Project management and evaluation</a></h6>
							
						</div>
					</div>
					
					<!-- Practice Block -->
					<div class="practice-block col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="icon flaticon-file"></div>
							<h6><a href="services-en.php">Socioeconomic surveys</a></h6>
							
						</div>
					</div>
					
					<!-- Practice Block -->
					<div class="practice-block col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="icon flaticon-car"></div>
							<h6><a href="services-en.php">Event logistics</a></h6>
							
						</div>
					</div>
					
					<!-- Practice Block -->
					<div class="practice-block col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="icon flaticon-diagram"></div>
							<h6><a href="services-en.php">Local Governance</a></h6>
							
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</section>
	<!-- End Practice Section -->
	
	<!-- Fluid Section One -->
    <section class="fluid-section-one">
		<!-- <div class="side-icon"><img src="images/icons/side-icon.png" alt="" /></div> -->
    	<div class="outer-container clearfix">
        	<!-- Image Column -->
            <div class="image-column clearfix" style="background-image:url(images/resource/replace-1.jpg)">
            	<div class="inner-column">
					<div class="sec-title light">
						<h2>FREQUENTLY ASKED <br>QUESTIONS</h2>
						</div>
					
					<!-- Accordian Box -->
					<ul class="accordion-box">
						
						<!-- Block -->
						<li class="accordion block active-block">
							<div class="acc-btn active"><div class="icon-outer"><span class="icon icon-plus flaticon-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>Who are you as a company?</div>
							<div class="acc-content current">
								<div class="content">
									<div class="accordian-text">We are a Haitian consulting company providing training and technical assistance services, in various areas of expertise.</div>
								</div>
							</div>
						</li>
						
						<!-- Block -->
						<li class="accordion block">
							<div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus flaticon-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>What services do you offer?</div>
							<div class="acc-content">
								<div class="content">
									<div class="accordian-text">We offer an array of services in socioeconomic research, capacity building and training engineering, project management, microfinance and micro-enterprise management, local governance and event logistics.</div>
								</div>
							</div>
						</li>
						
						<!-- Block -->
						<li class="accordion block">
							<div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus flaticon-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>What is your experience in project consulting?</div>
							<div class="acc-content">
								<div class="content">
									<div class="accordian-text">We have a team of professionals dedicated to helping you develop and manage your projects. We bring expertise and experience to provide you with advice and support in managing your project. Our firm has over 20 years of expertise in this field.</div>
								</div>
							</div>
						</li>

						<!-- Block -->
						<li class="accordion block">
							<div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus flaticon-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>How can I contact you to discuss my needs in terms of project consulting?</div>
							<div class="acc-content">
								<div class="content">
									<div class="accordian-text"> You may send us a message via email at<a href="mailto:contact@ifosformation.com"> contact@ifosformation.com</a> or call us at 3852-5967.</div>
								</div>
							</div>
						</li>
						
						<!-- Block -->
						<li class="accordion block">
							<div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus flaticon-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>What are the consultation rates?</div>
							<div class="acc-content">
								<div class="content">
									<div class="accordian-text">For the rates of our consultations, please contact us by e-mail at <a href="mailto:contact@ifosformation.com">contact@ifosformation.com</a> </div>
								</div>
							</div>
						</li>
						
					</ul>
					
				</div>
            </div>      
        	<!-- Content Column -->
			<!-- Ajoutez la classe "aleo-font" à votre formulaire -->
		<div class="default-form aleo-font">
    <!-- ... le reste de votre formulaire ... -->

	<div class="content-column">
    <div class="inner-column">
        <div class="sec-title">
            <h2>REQUEST OUR<br>SERVICES</h2>
        </div>
        <!-- Default Form -->
        <div class="default-form">
		<form action="https://ifosformation.us1.list-manage.com/subscribe/post?u=78eba72b1eccb55a0dc15853f&amp;id=d06f26c215&amp;f_id=001e7de2f0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank">
                <div id="mc_embed_signup_scroll">
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <input type="text" name="FNAME" placeholder="Full name" required>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <input type="email" name="EMAIL" placeholder="E-mail" required>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <input type="text" name="PHONE" placeholder="Phone" required>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <input type="text" name="MMERGE6" placeholder="Message">
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <button class="theme-btn14 btn-style-two" type="submit" name="subscribe">Submit <i class="arrow flaticon-right"></i></button>
                        </div>
                        <style>
                            .theme-btn14 {
                                background-color: #FCAF17;
                                color: #010f06;
                                border-radius: 30px;
                            }
                        </style>
                    </div>
                </div>
            </form>
        </div>
        <!-- End Default Form -->
    </div>
</div>

		</div>
		</div>
	</section>
	<!-- Fluid Section One -->
	
	<!-- Team Section -->
	


	
	<!-- End Team Section -->
	
	<!-- Testimonail Section -->
	<section class="testimonial-section" style="background-image: url(images/background/pattern-3.png)">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<h2>TESTIMONIALS</h2>
			</div>
			<div class="inner-container">
				<div class="single-item-carousel owl-carousel owl-theme">
					
					<!-- Testimonial Block -->
					<div class="testimonial-block">
						<div class="inner-box">
							<div class="author-image">
								<img src="images/resource/client_1.png" alt="" />
							</div>
							<span class="quote-icon flaticon-quote-1"></span>
							<div class="text">We greatly appreciate collaborating with IFOS for two important reasons: rigor and quality work.</div>
							<div class="name">Global Women’s Institute of George Washington University</div>
							<p>Collaborators, IFOS</p>
						</div>
					</div>
					
					<!-- Testimonial Block -->
					<div class="testimonial-block">
						<div class="inner-box">
							<div class="author-image">
								<img src="images/resource/client_1.png" alt="" />
							</div>
							<span class="quote-icon flaticon-quote-1"></span>
							<div class="text">In my opinion, the following description applies to IFOS, as the local firm that they are and in terms of the service they provide: responsiveness, quality work, a dedicated, dynamic and motivated team, qualified and experienced staff.</div>
							<div class="name">Patrick Hermain Honoré</div>
							<p>Consultant, IFOS</p>
						</div>
					</div>
					
					<!-- Testimonial Block -->
					<div class="testimonial-block">
						<div class="inner-box">
							<div class="author-image">
								<img src="images/resource/client_1.png" alt="" />
							</div>
							<span class="quote-icon flaticon-quote-1"></span>
							<div class="text">Working with IFOS is indeed an enriching experience for me. I learn at every level, from everyone. Besides, because the projects in which I had the opportunity to participate address challenges faced by our country, they gave me the opportunity to contribute in my own way to our development. All of that is possible thanks to IFOS.</div>
							<div class="name">Vanessa Julien</div>
							<p>Trainer, IFOS</p>
						</div>
					</div>
					
					<!-- Testimonial Block -->
					<div class="testimonial-block">
						<div class="inner-box">
							<div class="author-image">
								<img src="images/resource/client_1.png" alt="" />
							</div>
							<span class="quote-icon flaticon-quote-1"></span>
							<div class="text">I was impressed by the outstanding work done by the institution, its quality and its fine-tuning. Owing to their expertise and experience, I will recommend IFOS because I am confident in their ability to carry out national and international missions in their areas of intervention.</div>
							<div class="name">Atabanam Simbou</div>
							<p>Officer in charge of prospective studies and evaluations, IFOS</p>
						</div>
					</div>


					<!-- Testimonial Block -->
					<div class="testimonial-block">
						<div class="inner-box">
							<div class="author-image">
								<img src="images/resource/client_1.png" alt="" />
							</div>
							<span class="quote-icon flaticon-quote-1"></span>
							<div class="text">The first thing that comes to mind when talking about IFOS is quality training. My experience with IFOS has transformed me. To me, IFOS stands as a faculty that has helped me become a real agent.</div>
							<div class="name">Dijon Agulal Brons </div>
							<p>Surveyor, IFOS</p>
						</div>
					</div>

					<!-- Testimonial Block -->
					<div class="testimonial-block">
						<div class="inner-box">
							<div class="author-image">
								<img src="images/resource/client_1.png" alt="" />
							</div>
							<span class="quote-icon flaticon-quote-1"></span>
							<div class="text">Before joining IFOS, I had a vague or merely theoretical notion of what the principles of good governance and sustainable development were. IFOS interventions, being both effective and efficient, are based on concerted actions and consensual decisions. They prompted me to view the management of local initiatives from another perspective.</div>
							<div class="name">Richarlot Amazan</div>
							<p>Governance Specialist</p>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</section>
	<!-- End Testimonail Section -->
	
	<!-- Clients Section -->
	<section class="clients-section">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<h2>OUR MAIN CUSTOMERS</h2>
			<div class="inner-container">
				<div class="sponsors-outer">
					<!--Sponsors Carousel-->
					<ul class="sponsors-carousel owl-carousel owl-theme">
						<li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/banque.jpg" alt=""></a></figure></li>
						<li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/amoirie.png" alt=""></a></figure></li>
						<li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/tulane.jpg" alt=""></a></figure></li>
						<li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/usaid.jpeg" alt=""></a></figure></li>
						<li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/ambassade de france.jpg" alt=""></a></figure></li>
						<li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/gw.png" alt=""></a></figure></li>
						<li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/tulane.jpg" alt=""></a></figure></li>
						<li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/usaid.jpeg" alt=""></a></figure></li>
						
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!-- End Clients Section -->
	
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
											2, Imp Titus, <br> Haut du Cap, Cap-Haitien, Haiti
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