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
								<li><a href="index-en.php">Home</a></li>
								
								<li><a href="about-en.php">About us</a></li>
								<li class="current"><a href="services-en.php">Domains</a></li>	
								<li><a href="realisation-en.php">ACHIEVEMENTS</a></li>
								<li class="dropdown"><a href="#">Publications</a>
                                	<ul>
									<li><a href="#" class="mediatech-link" id="mediatech-link-header">Mediatech</a></li>
                                        <li><a href="about-en.php#NousRecrutons">OPPORTUNITIES</a></li>
								    </ul>
                                </li>
							
									
								<li><a href="contact-en.php">Contact us</a></li>
								<button 
  onclick="window.location.href='services.php'" 
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
					
					<!-- main Menu End-->
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
			<h1>Services</h1>
			<ul class="page-breadcrumb">
				<li><a href="index-en.php">Home</a></li>
				<li>Services</li>
			</ul>
        </div>
    </section>
    <!-- End Page Title -->
	
	<!-- Welcome Section -->
	<section class="welcome-section style-two">
		<div class="auto-container">
			<div class="inner-container">
				<div class="clearfix">
					
					<!-- Image Column -->
					<div class="image-column col-lg-6 col-md-12 col-sm-12">
						<div class="inner-column">
							<div class="image">
								<img src="images/resource/microfinance.jpg" alt="" />
							</div>
						</div>
					</div>
					
					<!-- Content Column -->
					<div class="content-column col-lg-6 col-md-12 col-sm-12">
						<div class="inner-column">
							<!-- Sec Title -->
							<div class="sec-title">
								<h3>Microfinance and micro-enterprise management</h3>
								<p class="card-text short-text">
								Microfinance is a financing system allowing for low-income individuals to access financial services such as loans,
								 savings accounts and insurance. Micro-enterprise management is an important dimension of microfinance as it enables 
								 entrepreneurs to efficiently manage their business and maximize their profitability. IFOS can assist you and make your
								procedures easier, in particular through:
								</p>
							</div>
							<div class="row clearfix">
								<div class="column col-lg-6 col-md-6 col-sm-6">
									<div class="card-text full-text1 collapse">
										<ul class="list-style-one">
											<li>Conducting market research and business environment studies</li>
											<li>Choice of methodology</li>
											<li>Staff training in microfinance </li>
											<li>Programs implementation and management</li>
											<li>Providing support to groups of individuals to facilitate their access to funding </li>
										</ul>
									</div>
								</div>
								<div class="column col-lg-6 col-md-6 col-sm-6">
									<div class="card-text full-text1 collapse">
										<ul class="list-style-one">
											<li>Program and institutional evaluation</li>
											<li>Organizing visits to exchange and acquire good practices </li>
											<li>Setting up community and associative micro-enterprises</li>
											<li>Business plan development</li>
										</ul>
									</div>
								</div>
							</div>
							<button class="theme-btn11"><a href="#" class="btn btn-link Read-More" data-toggle="collapse" data-target=".full-text1">Read more</a></button>
							
						</div>
					</div>
					
					
				</div>
			</div>
		</div>
	</section>
	<!-- End Welcome Section -->
	
	<!-- Services Page Section -->
	<section class="services-page-section">
		<div class="auto-container">
		
			<!-- Services Block Three -->
			<div class="services-block-three">
				<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
					<div class="row clearfix">
						<!-- Content Column -->
						<div class="content-column col-lg-6 col-md-12 col-sm-12">
							<div class="inner-column">
								<h3>Capacity building and training engineering</h3>
								<p class="card-text short-text">
								Capacity building and training engineering are key to skills and knowledge development in various fields.
								Capacity building is a process aiming to improve the skills, knowledge and resources of individuals and organizations, 
								enabling them to better perform their tasks and achieve their goals. Training engineering is a systematic approach to the design, 
								development and effective implementation of training programs. IFOS works by your side towards:
								 </p>

								<div class="row clearfix">
									<div class="column col-lg-6 col-md-6 col-sm-6">
										<div class="card-text full-text2 collapse">
										<ul class="list-style-one">
											<li>Assessing institutional and organizational capacities</li>
											<li>Developing organizational strengthening plans</li>
											<li>Personal, organizational and community leadership training/coaching</li>
											<li>Supervision of grassroots groups engaged in social and economic initiatives towards local development</li>
										</ul>
										</div>
									</div>
									<div class="column col-lg-6 col-md-6 col-sm-6">
										<div class="card-text full-text2 collapse">
										<ul class="list-style-one">
											<li>Supporting and assisting in the structuring of local associative structures, and the promotion of democratic practices</li>
											<li>Assessing training needs, developing training modules and materials, training adult trainers and facilitators, training/coaching for the development and strengthening of work teams. </li>
										</ul>
										</div>
									</div>
								</div>
								<button class="theme-btn11"><a href="#" class="btn btn-link Read-More" data-toggle="collapse" data-target=".full-text2">Read more</a></button>
							</div>
						</div>
						<!-- Image Column -->
						<div class="image-column col-lg-6 col-md-12 col-sm-12">
							<div class="inner-column">
								<div class="image">
									<a href="#"><img src="images/resource/renforcement.jpg" alt="" /></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Services Block Three -->
			<div class="services-block-three style-two">
				<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
					<div class="row clearfix">
						<!-- Image Column -->
						<div class="image-column col-lg-6 col-md-12 col-sm-12">
							<div class="inner-column">
								<div class="image">
									<a href="#"><img src="images/resource/gestion.jpg" alt="" /></a>
								</div>
							</div>
						</div>
						<!-- Content Column -->
						<div class="content-column col-lg-6 col-md-12 col-sm-12">
							<div class="inner-column">
								<h3>Project management and monitoring-evaluation</h3>
								<p class="card-text short-text">
								Management and evaluation are key processes to ensure successful project deliveries. Project management covers all activities required to plan, organize, 
								manage and monitor the project resources in order to achieve its objectives. Project evaluation is a systematic and objective analysis of the project performance to establish
								 its relevance, effectiveness, efficiency, impact and sustainability. We offer our expertise regarding:
								</p>

								<div class="row clearfix">
									<div class="column col-lg-6 col-md-6 col-sm-6">
										<div class="card-text full-text3 collapse">
										<ul class="list-style-one">
											<li>Participatory project planning and management</li>
											<li>Carrying out participatory diagnostics</li>
											<li>Drafting socioeconomic mapping of communities</li>
											<li>Project evaluation, setting up project participatory monitoring and evaluation systems</li>
										</ul>
										</div>
									</div>
									<div class="column col-lg-6 col-md-6 col-sm-6">
										<div class="card-text full-text3 collapse">
										<ul class="list-style-one">
											<li>Critical review of project documents</li>
											<li>Project analysis</li>
											<li>Project design and development</li>
											<li>Executive staff training in project management</li>
											<li>Drafting bids or proposals in response to calls for proposals and calls for applications</li>
										</ul>
										</div>
									</div>
							</div>
							<button class="theme-btn11"><a href="#" class="btn btn-link Read-More" data-toggle="collapse" data-target=".full-text3">Read more</a></button>

						</div>
					</div>
				</div>
			</div>
			</div>


			
			<!-- Services Block Three -->
			<div class="services-block-three">
				<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
					<div class="row clearfix">
						<!-- Content Column -->
						<div class="content-column col-lg-6 col-md-12 col-sm-12">
							<div class="inner-column">
								<h3>Local development and governance</h3>
								<p class="card-text short-text">
								Local governance refers to subnational institutions, systems and processes providing services to citizens and through which citizens
								 "articulate their interests and needs, arbitrate their disputes, exercise their rights and fulfil their obligations". Local development is an economic,
								  social and cultural development process aiming to improve the quality of life for local communities.
								</p>	 
							
								<div class="row clearfix">
									<div class="column col-lg-6 col-md-6 col-sm-6">
										<div class="card-text full-text4 collapse">
										<ul class="list-style-one">
											<li>Capacity building of municipal administrations (assessment of institutional capacities, institutional strengthening, training of municipalities’ administrative and technical staff)</li>
											<li>Drafting and development of Communal Development Plan (CDP) and the Communal Section Development Plan (CSDP)</li>
											<li>Taxation</li>
										</ul>
										</div>
									</div>
									<div class="column col-lg-6 col-md-6 col-sm-6">
										<div class="card-text full-text4 collapse">
										<ul class="list-style-one">
											<li>Promotion of good practices in local governance (accountability, citizen participation, transparency, promotion of gender equity, women leadership promotion/development in local governance)</li>
											<li>Training for local elected officials</li>
											<li>Local human resources and skills development </li>
											<li>Participatory municipal budgeting</li>
										</ul>
										</div>
									</div>
							</div>
							<button class="theme-btn11"><a href="#" class="btn btn-link Read-More" data-toggle="collapse" data-target=".full-text4">Read more</a></button>

							</div>
						</div>
						<!-- Image Column -->
					<div class="image-column col-lg-6 col-md-12 col-sm-12">
							<div class="inner-column">
								<div class="image">
									<a href="#"><img src="images/resource/local.png" alt="" /></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>


			
				<!-- Services Block Three -->
				<div class="services-block-three style-two">
					<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="row clearfix">
							<!-- Image Column -->
							<div class="image-column col-lg-6 col-md-12 col-sm-12">
								<div class="inner-column">
									<div class="image">
										<a href="#"><img src="images/resource/recherche_socio.jpg" alt="" /></a>
									</div>
								</div>
							</div>
							<!-- Content Column -->
							<div class="content-column col-lg-6 col-md-12 col-sm-12">
								<div class="inner-column">
									<h3>Socioeconomic Research</h3>
									<p class="card-text short-text">
									Descriptive socioeconomic research is a research method applied to describe the characteristics of a social or economic phenomenon.
									 We often use it to study trends and behaviors in a given population. We collect data by means of technological tools and conduct quantitative and qualitative surveys.
									</p>

									<div class="row clearfix">
										<div class="column col-lg-6 col-md-6 col-sm-6">
											<div class="card-text full-text5 collapse">
											<ul class="list-style-one">
												<li>Conducting socioeconomic surveys</li>
												<li>Electronic data collection and treatment</li>
											</ul>
											</div>
										</div>
										<div class="column col-lg-6 col-md-6 col-sm-6">
											<div class="card-text full-text5 collapse">
											<ul class="list-style-one">
												<li>Conducting scientific studies</li>
											</ul>
											</div>
										</div>
								</div>
								<button class="theme-btn11"><a href="#" class="btn btn-link Read-More" data-toggle="collapse" data-target=".full-text5">Read more</a></button>

								</div>
							</div>
						</div>
					</div>
				</div>



				<!-- Services Block Three -->
			<div class="services-block-three">
				<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
					<div class="row clearfix">
						<!-- Content Column -->
						<div class="content-column col-lg-6 col-md-12 col-sm-12">
							<div class="inner-column">
								<h3>Organization of public events</h3>
								<p class="card-text short-text">
								Our work involves planning and implementing events such as workshops, conferences, trainings and exhibitions open to the general public. 
								We often work with partners to plan and promote those events. The public events we organize can be hosted either for governmental or non-governmental organizations, and include the following services:
								</p>	 
								<div class="row clearfix">
									<div class="column col-lg-6 col-md-6 col-sm-6">
										<div class="card-text full-text6 collapse">
										<ul class="list-style-one">
											<li>Administrative work, logistics and facilitation for conferences, workshops, meetings and field missions both in Haiti and abroad</li>
										</ul>
									</div>
								</div>
							</div>
							<button class="theme-btn11"><a href="#" class="btn btn-link Read-More" data-toggle="collapse" data-target=".full-text6">Read more</a></button>
							</div>
						</div>
						<!-- Image Column -->
						<div class="image-column col-lg-6 col-md-12 col-sm-12">
							<div class="inner-column">
								<div class="image">
									<a href="#"><img src="images/resource/organisation_logistique.jpg" alt="" /></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
 		</div>
	</section>
							<!-- End Services Page Section -->
					
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
	$(document).ready(function() {
		$('.Read-More').click(function() {
			$(this).text(function(i, text) {
				return text === "Read more" ? "Read less" : "Read more";
			});
		});
	});
</script>




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