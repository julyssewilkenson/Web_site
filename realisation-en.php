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
							<!-- Toggle Butto -->    	
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
								<li><a href="services-en.php">Domains</a></li>	
								<li class="current"><a href="realisation-en.php">ACHIEVEMENTS</a></li>
								<li class="dropdown"><a href="#">Publications</a>
                                	<ul>
                                    <li><a href="#" class="mediatech-link" id="mediatech-link-header">Mediatech</a></li>
                                        <li><a href="about-en.php#NousRecrutons">OPPORTUNITIES</a></li>
								    </ul>
                                </li>
							
									
								<li><a href="contact-en.php">Contact us</a></li>
                                <button 
  onclick="window.location.href='realisation.php'" 
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
			<h1>Our ACHIEVEMENTS</h1>
            <ul class="page-breadcrumb">
				<li><a href="index-en.php">Home</a></li>
				<li>Our ACHIEVEMENTS</li>
			</ul>
			
                  </div>
    </section>
    <!-- End Page Title -->
	
	<!-- case-style-three -->
    <section class="case-style-three bg-color-1">
        <div class="auto-container">
            <div class="row clearfix"> 
                
            
                                
               <div class="col-lg-4 col-md-6 col-sm-12 case-block">
                    <div class="case-block-two wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="images/resource/case-2.jpg" alt="">
                                <div class="link"><a href="case-details.php"><i class="flaticon-link"></i></a></div>
                                <div class="overlay-layer"></div>
                            </figure>
                            <div class="lower-content">
                                <div class="box">
                                    <div class="icon-box"><i class="flaticon-notebook"></i></div>
                                    <h4 class="card-title">Project Name :</h4>Socioeconomic surveys
                                </div>
                                <div class="card-title"><strong> Partner :</strong>Tulane University </div>
                                <div class="text">
                                    <h4 class="card-subtitle mb-2 text-muted">Description:</h4>
                                 <p class="card-text short-text">
                                 Socioeconomic surveys covering over 4,000 households in the South and North-East departments, 
                                 to inform a baseline evaluation of USAID social and humanitarian assistance projects implemented
                                  by the Catholic Relief Services (CRS) in the targeted provinces...
                                </p>
                                    <p class="card-text full-text9 collapse">
                                        ...
                                    </p>
                                </div>
                                <a href="media/IFOS presentation.pdf" target="_blank">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>




                <div class="col-lg-4 col-md-6 col-sm-12 case-block">
                    <div class="case-block-two wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="images/resource/case-2.jpg" alt="">
                                <div class="link"><a href="case-details.php"><i class="flaticon-link"></i></a></div>
                                <div class="overlay-layer"></div>
                            </figure>
                            <div class="lower-content">
                                <div class="box">
                                    <div class="icon-box"><i class="flaticon-notebook"></i></div>
                                    <h4 class="card-title">Project Name :</h4>Education Quality Improvement Project
                                   
                                </div>
                                <div class="card-title"><strong> Partner :</strong>World Bank</div>
                                <div class="text">
                                    <h4 class="card-subtitle mb-2 text-muted">Description:</h4>
                                 <p class="card-text short-text">
                                 IFOS acted as Consortium Lead for the EQUIP/World Bank Project,
                                  coordinating the Impact Assessment and Final Evaluation of the
                                   "Education Quality Improvement Project (EQUIP)" implemented in the Democratic Republic of Congo, Africa...
                                </p>
                                    <p class="card-text full-text1 collapse">
                                       ....................
                                    </p>
                                </div>
                               
                                <a href="media/IFOS presentation.pdf" target="_blank">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 col-sm-12 case-block">
                    <div class="case-block-two wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="images/resource/case-2.jpg" alt="">
                                <div class="link"><a href="case-details.php"><i class="flaticon-link"></i></a></div>
                                <div class="overlay-layer"></div>
                            </figure>
                            <div class="lower-content">
                                <div class="box">
                                    <div class="icon-box"><i class="flaticon-notebook"></i></div>
                                    <h4 class="card-title">Project Name :</h4>EMAT/MDUR
                                </div>
                                <div class="card-title"><strong> Partner :</strong>Ministry of Interior and Local Authorities</div>
                                <div class="text">
                                    <h4 class="card-subtitle mb-2 text-muted">Description:</h4>
                                 <p class="card-text short-text">
                                 Acting as lead for an international consortium, IFOS implemented a capacity building project for six (6) municipalities
                                  located in the North department on behalf of the UCP/MICT (Ministry of Interior and Local Authorities)...


                                </p>
                                    <p class="card-text full-text2 collapse">
                                        .....
                                    </p>
                                </div>
                                <a href="media/IFOS presentation.pdf" target="_blank">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 case-block">
                    <div class="case-block-two wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="images/resource/case-2.jpg" alt="">
                                <div class="link"><a href="case-details.php"><i class="flaticon-link"></i></a></div>
                                <div class="overlay-layer"></div>
                            </figure>
                            <div class="lower-content">
                                <div class="box">
                                    <div class="icon-box"><i class="flaticon-notebook"></i></div>
                                    <h4 class="card-title">Project Name :</h4> GÉRE
                                </div>
                                <div class="card-title"><strong> Partner :</strong> RTI</div>
                                <div class="text">
                                    <h4 class="card-subtitle mb-2 text-muted">Description:</h4>
                                 <p class="card-text short-text">
                                                
                                 Serving as a subcontractor to RTI International on the implementation of USAID’s GERÉ project for the improvement of governance in Haiti, 
                                 IFOS oversaw and managed the following components: (1) Governance, Decentralization and Resource Mobilization, (2) Governance, Decentralization and Civil Society/Citizen Participation... 
                                    <p class="card-text full-text3 collapse">
                                       ....
                                    </p>
                                </div>
                                <a href="media/IFOS presentation.pdf" target="_blank">Read more</a>

 
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-lg-4 col-md-6 col-sm-12 case-block">
                    <div class="case-block-two wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="images/resource/case-2.jpg" alt="">
                                <div class="link"><a href="case-details.php"><i class="flaticon-link"></i></a></div>
                                <div class="overlay-layer"></div>
                            </figure>
                            <div class="lower-content">
                                <div class="box">
                                      <div class="icon-box"><i class="flaticon-notebook"></i></div>
                                    <h4 class="card-title">Project Name :</h4>Communal Development Plan
                                </div>
                                <div class="card-title"><strong> Partner :</strong>PADF</div>
                                <div class="text">
                                    <h4 class="card-subtitle mb-2 text-muted">Description:</h4>
                                 <p class="card-text short-text">
                                 IFOS provided technical assistance to the PADF, supporting the municipalities of Côteaux, Roche-à-Bateau, Port-Salut, 
                                 Île-à-Vache, Caracol, Pignon, Saint Raphaël and Anse-à-Galets through the process of developing a Communal Development Plan (CDP) and establishing a Communal Development Committee...
                                </p>
                                    <p class="card-text full-text4 collapse">
                                         ...
                                    </p>
                                </div>
                                <a href="media/IFOS presentation.pdf" target="_blank">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>



         

                
              <div class="col-lg-4 col-md-6 col-sm-12 case-block">
                    <div class="case-block-two wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="images/resource/case-2.jpg" alt="">
                                <div class="link"><a href="case-details.php"><i class="flaticon-link"></i></a></div>
                                <div class="overlay-layer"></div>
                            </figure>
                            <div class="lower-content">
                                <div class="box">
                                    <div class="icon-box"><i class="flaticon-notebook"></i></div>
                                    <h4 class="card-title">Project Name :</h4>Capacity Building
                                </div>
                                <div class="card-title"><strong> Partner :</strong> LOKAL PLUS</div>
                                <div class="text">
                                    <h4 class="card-subtitle mb-2 text-muted">Description:</h4>
                                 <p class="card-text short-text">Acting as a subcontractor to TETRATECH International for the implementation and monitoring of the "Capacity Building" 
                                    component of USAID’s LOKAL Plus project, IFOS mobilized over 50 senior consultants, trainers and technical assistants (m/f) to conduct an organizational performance assessment...

                                </p>
                                    <p class="card-text full-text8 collapse">
                                       ...
                                    </p>
                                </div>
                                <a href="media/IFOS presentation.pdf" target="_blank">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>



              
                <div class="col-lg-4 col-md-6 col-sm-12 case-block">
                    <div class="case-block-two wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="images/resource/case-2.jpg" alt="">
                                <div class="link"><a href="case-details.php"><i class="flaticon-link"></i></a></div>
                                <div class="overlay-layer"></div>
                            </figure>
                            <div class="lower-content">
                                <div class="box">
                                    <div class="icon-box"><i class="flaticon-notebook"></i></div>
                                    <h4 class="card-title">Project Name :</h4>USAID TOTAl
                                </div>
                                <div class="card-title"><strong> Partner :</strong> USAID ToTAL, RTI International.</div>
                                <div class="text">
                                    <h4 class="card-subtitle mb-2 text-muted">Description:</h4>
                                 <p class="card-text short-text">
                                 RTI’s Subcontractor, in charge of data collection regarding Early Grade Reading Assessment
                                 (EGRA) and School Management (SSME) in 240 rural and urban Schools located in the North, Northeast, Artibonite and West departments, under the USAID’s TOTAL Project implemented by RTI in Haiti...
                                </p>
                                    <p class="card-text full-text6 collapse">
                                       ....
                                    </p>
                                </div>
                                <a href="media/IFOS presentation.pdf" target="_blank">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>




                <div class="col-lg-4 col-md-6 col-sm-12 case-block">
                    <div class="case-block-two wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="images/resource/case-2.jpg" alt="">
                                <div class="link"><a href="case-details.php"><i class="flaticon-link"></i></a></div>
                                <div class="overlay-layer"></div>
                            </figure>
                            <div class="lower-content">
                                <div class="box">
                                    <div class="icon-box"><i class="flaticon-notebook"></i></div>
                                    <h4 class="card-title">Project Name :</h4>EGRA
                                </div>
                                <div class="card-title"><strong> Partner :</strong>USAID /ESS, Social Impact</div>
                                <div class="text">
                                    <h4 class="card-subtitle mb-2 text-muted">Description:</h4>
                                 <p class="card-text short-text">
                                 IFOS acted as a subcontractor to Social Impact for Haiti’s reading program impact evaluation, 
                                 conducting the data collection supporting the mid-term evaluation. To that effect, IFOS appointed one (1) education specialist as team leader, two (2) field managers, four (4) field coordinators...
                                </p>
                                    <p class="card-text full-text5 collapse">
                                       .... 
                                    </p>
                                </div>
                                <a href="media/IFOS presentation.pdf" target="_blank">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>





            


                <div class="col-lg-4 col-md-6 col-sm-12 case-block">
                    <div class="case-block-two wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="images/resource/case-2.jpg" alt="">
                                <div class="link"><a href="case-details.php"><i class="flaticon-link"></i></a></div>
                                <div class="overlay-layer"></div>
                            </figure>
                            <div class="lower-content">
                                <div class="box">
                                    <div class="icon-box"><i class="flaticon-notebook"></i></div>
                                    <h4 class="card-title">Project Name :</h4>Evaluation and Survey Services-Plus (ESS+).
                                </div>
                                <div class="card-title"><strong> Partner :</strong>International Business Initiatives </div>
                                <div class="text">
                                    <h4 class="card-subtitle mb-2 text-muted">Description:</h4>
                                 <p class="card-text short-text">
                                 As a Subcontractor to International Business Initiatives (IBI), in charge of the Haiti Evaluation and Survey Services-Plus (ESS+), 
                                 IFOS provided a team composed of 1 research director, 1 contract manager, 1 IT specialist, 1 technical and logistics assistant, as well as statisticians...
                                </p>
                                    <p class="card-text full-text10 collapse">
                                        ...
                                    </p>
                                </div>
                                <a href="media/IFOS presentation.pdf" target="_blank">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>




                <div class="col-lg-4 col-md-6 col-sm-12 case-block">
                    <div class="case-block-two wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="images/resource/case-2.jpg" alt="">
                                <div class="link"><a href="case-details.php"><i class="flaticon-link"></i></a></div>
                                <div class="overlay-layer"></div>
                            </figure>
                            <div class="lower-content">
                                <div class="box">
                                    <div class="icon-box"><i class="flaticon-notebook"></i></div>
                                    <h4 class="card-title">Project Name :</h4>UGP/MAST
                                </div>
                                <div class="card-title"><strong> Partner :</strong>UGP/MAST-World Bank</div>
                                <div class="text">
                                    <h4 class="card-subtitle mb-2 text-muted">Description:</h4>
                                 <p class="card-text short-text">
                                 IFOS conducted the survey aiming to collect quantitative data from 6,250 households in all 14 communes of Haiti’s Grand'Anse department for the "KLERE CHIMEN" program baseline evaluation...
                                </p>
                                    <p class="card-text full-text7 collapse">
                                      ...
                                    </p>
                                </div>
                                <a href="media/IFOS presentation.pdf" target="_blank">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>




               <div class="col-lg-4 col-md-6 col-sm-12 case-block">
                    <div class="case-block-two wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="images/resource/case-2.jpg" alt="">
                                <div class="link"><a href="case-details.php"><i class="flaticon-link"></i></a></div>
                                <div class="overlay-layer"></div>
                            </figure>
                            <div class="lower-content">
                                <div class="box">
                                    <div class="icon-box"><i class="flaticon-notebook"></i></div>
                                    <h4 class="card-title">Project Name :</h4>Design and implementation of a rural microfinance program
                                </div>
                                <div class="card-title"><strong> Partner :</strong>(FIDA)</div>
                                <div class="text">
                                    <h4 class="card-subtitle mb-2 text-muted">Description:</h4>
                                 <p class="card-text short-text">
                                 Design and implementation of a rural microfinance program through the creation and financing of Solidarity Caution Groups (SCGs) with a view to setting up...
                                </p>
                                    <p class="card-text full-text11 collapse">
                                        ...
                                    </p>
                                </div>
                                <a href="media/IFOS presentation.pdf" target="_blank">Read more</a>
                               
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-lg-4 col-md-6 col-sm-12 case-block">
                    <div class="case-block-two wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="images/resource/case-2.jpg" alt="">
                                <div class="link"><a href="case-details.php"><i class="flaticon-link"></i></a></div>
                                <div class="overlay-layer"></div>
                            </figure>
                            <div class="lower-content">
                                <div class="box">
                                    <div class="icon-box"><i class="flaticon-notebook"></i></div>
                                    <h4 class="card-title">Project Name :</h4>KAP (Knowledge, Attitude, and Practice)
                                </div>
                                <div class="card-title"><strong> Partenaire :</strong>International Labour Organization (ILO)</div>
                                <div class="text">
                                    <h4 class="card-subtitle mb-2 text-muted">Description:</h4>
                                 <p class="card-text short-text">
                                 IFOS conducted a KAP (Knowledge, Attitude, and Practice) study among workers' and employers' organizations from Haiti’s textile industry...
                                </p>
                                    <p class="card-text full-text12 collapse">
                                        Pour ce faire, l'IFOS a mobilisé un sociologue comme chef d'équipe, un (1) informaticien, un statisticien et un gestionnaire
                                         de données, trois (3) superviseurs et treize (13) enquêteurs pour assurer le développement des instruments
                                          (questionnaires et guides de conduite d'entretiens et de FG), la formation des enquêteurs et des superviseurs,
                                           la collecte électronique des données (enquêtes quantitatives et qualitatives), L'enquête a été menée auprès des directeurs
                                            et employeurs d'entreprises manufacturières, du personnel d'agences gouvernementales et d'autres partenaires internationaux de SONAPI
                                             travaillant en Haïti dans le parc industriel de Caracol, le parc industriel de CODEVI/Ouanaminthe et le parc industriel de Port-au-Prince
                                              (zone métropolitaine), le traitement et l'analyse des données, la rédaction de rapports et la présentation des résultats
                                               de l'enquête KAP à l'OIT et à ses partenaires.
                                    </p>
                                </div>
                                <a href="media/IFOS presentation.pdf" target="_blank">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>

     



            </div>
        </div>
    </section>
    
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