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
								<li><a href="index.php">Accueil</a></li>
								
								<li><a href="about.php">A Propos</a></li>
								<li><a href="services.php">Domaines</a></li>	
								<li class="current"><a href="realisation.php">Realisations</a></li>
								<li class="dropdown"><a href="#">Publications</a>
                                	<ul>
									<li><a href="#" class="mediatech-link" id="mediatech-link-header">Mediatech</a></li>
                                        <li><a href="about.php#NousRecrutons">Offres</a></li>
								    </ul>
                                </li>
							
									
								<li><a href="contact.php">Contactez-nous</a></li>
                                <button 
  onclick="window.location.href='realisation-en.php'" 
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
			<h1>Nos Réalisations</h1>
            <ul class="page-breadcrumb">
				<li><a href="index.php">Accueil</a></li>
				<li>Nos réalisations</li>
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
                                    <h4 class="card-title">Nom du projet :</h4>Enquêtes socio-économiques
                                </div>
                                <div class="card-title"><strong> Partenaire :</strong>Université de Tulane</div>
                                <div class="text">
                                    <h4 class="card-subtitle mb-2 text-muted">Description:</h4>
                                 <p class="card-text short-text">
                                                                                                        Réalisation d'enquêtes socio-économiques
                                                                        auprès de plus de 4 000 ménages dans les départements du Sud et du Nord-Est pour une
                                                                        évaluation de base des projets d'assistance sociale et humanitaire de l'USAID mis en
                                                                        œuvre par Catholic Relief Services (CRS) dans les départements ciblés...
                                </p>
                                    <p class="card-text full-text9 collapse">
                                        ...
                                    </p>
                                </div>
                                <a href="media/Presentation de IFOS.pdf" target="_blank">Lire plus</a>
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
                                    <h4 class="card-title">Nom du projet :</h4>Projet d'Amélioration de la Qualité de l'Education (PAQUE)
                                   
                                </div>
                                <div class="card-title"><strong> Partenaire :</strong>Banque Mondiale</div>
                                <div class="text">
                                    <h4 class="card-subtitle mb-2 text-muted">Description:</h4>
                                 <p class="card-text short-text">
                                                                                    Évaluation Finale et d'Impacts du "Projet du Projet d'Amélioration
                                                    de la Qualité de l'Education (PAQUE), en République Démocratique du Congo, Afrique
                                                    pour le Projet PAQUE/Banque Mondiale. A cet effet, IFOS, en tant que chef de file du
                                                    consortium...
                                </p>
                                    <p class="card-text full-text1 collapse">
                                       ....................
                                    </p>
                                </div>
                               
                                <a href="media/Presentation de IFOS.pdf" target="_blank">Lire plus</a>
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
                                    <h4 class="card-title">Nom du projet :</h4>EMAT/MDUR
                                </div>
                                <div class="card-title"><strong> Partenaire :</strong>Ministère de l’Intérieur et des Collectivités Territoriales</div>
                                <div class="text">
                                    <h4 class="card-subtitle mb-2 text-muted">Description:</h4>
                                 <p class="card-text short-text">
                                                                            IFOS en tant que chef de file d’un consortium
                                            international a mis en œuvre un projet de renforcement des capacités de six (6)
                                            municipalités dans le département du Nord pour le compte de l’UCP/MICT (ministère
                                            de l’Intérieur et des Collectivités Territoriales)...


                                </p>
                                    <p class="card-text full-text2 collapse">
                                        .....
                                    </p>
                                </div>
                                <a href="media/Presentation de IFOS.pdf" target="_blank">Lire plus</a>
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
                                    <h4 class="card-title">Nom du projet :</h4> GÉRE
                                </div>
                                <div class="card-title"><strong> Partenaire :</strong> RTI</div>
                                <div class="text">
                                    <h4 class="card-subtitle mb-2 text-muted">Description:</h4>
                                 <p class="card-text short-text">
                                                
                                                    IFOS est un sous contractant de RTI International pour la
                    mise en œuvre du projet USAID GÉRE pour l’amélioration de la gouvernance en Haïti
                    en assurant le leadership et le pilotage des composantes : (1) Gouvernance,
                    Décentralisation et Mobilisation des ressources, (2) Gouvernance, Décentralisation et
                    Société civile/participation citoyenne... 
                                    <p class="card-text full-text3 collapse">
                                       ....
                                    </p>
                                </div>
                                <a href="media/Presentation de IFOS.pdf" target="_blank">Lire plus</a>
 
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
                                    <h4 class="card-title">Nom du projet :</h4>Plan Communal de Développement
                                </div>
                                <div class="card-title"><strong> Partenaire :</strong>PADF</div>
                                <div class="text">
                                    <h4 class="card-subtitle mb-2 text-muted">Description:</h4>
                                 <p class="card-text short-text">
                                                                                        IFOS fournit une assistance technique à la PADF pour accompagner
                                                        les municipalités des Côteaux, Roche-à-Bateau, Port-Salut, Île-à-Vache, Caracol,
                                                        Pignon, Saint Raphaël et Anse-à-Galets dans le processus d’élaboration de leur Plan
                                                        Communal de Développement (PCD) et la création du Conseil de Développement
                                                        Communal...
                                </p>
                                    <p class="card-text full-text4 collapse">
                                         ...
                                    </p>
                                </div>
                                <a href="media/Presentation de IFOS.pdf" target="_blank">Lire plus</a>
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
                                    <h4 class="card-title">Nom du projet :</h4>Renforcement des capacités
                                </div>
                                <div class="card-title"><strong> Partenaire :</strong> LOKAL PLUS</div>
                                <div class="text">
                                    <h4 class="card-subtitle mb-2 text-muted">Description:</h4>
                                 <p class="card-text short-text">
                                                                                                    Sous contractant de TETRATECH International pour la mise en œuvre et le suivi de la composante « Renforcement de Capacités » du projet USAID LOKAL Plus. Dans ce rôle, l'IFOS mobilise plus de 50 consultants
                                                                    seniors, formateurs et assistants techniques (h/f) pour conduire une évaluation de la
                                                                    performance organisationnelle...

                                </p>
                                    <p class="card-text full-text8 collapse">
                                       ...
                                    </p>
                                </div>
                                <a href="media/Presentation de IFOS.pdf" target="_blank">Lire plus</a>
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
                                    <h4 class="card-title">Nom du projet :</h4>USAID TOTAL
                                </div>
                                <div class="card-title"><strong> Partenaire :</strong> USAID ToTAL, RTI International.</div>
                                <div class="text">
                                    <h4 class="card-subtitle mb-2 text-muted">Description:</h4>
                                 <p class="card-text short-text">
                                                                                        Sous
                                                        contractant de RTI pour la collecte de données pour l'évaluation des compétences en
                                                        lecture (EGRA) et la gestion de l'école (SSME) au niveau de base dans 240 écoles situées
                                                        dans les zones rurales et urbaines des départements du Nord, du Nord-est, de
                                                        l’Artibonite et de l’Ouest pour le compte du projet USAID TOTAL mis en œuvre par
                                                        RTI en Haïti...
                                </p>
                                    <p class="card-text full-text6 collapse">
                                       ....
                                    </p>
                                </div>
                                <a href="media/Presentation de IFOS.pdf" target="_blank">Lire plus</a>
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
                                    <h4 class="card-title">Nom du projet :</h4>EGRA
                                </div>
                                <div class="card-title"><strong> Partenaire :</strong>USAID /ESS, Social Impact</div>
                                <div class="text">
                                    <h4 class="card-subtitle mb-2 text-muted">Description:</h4>
                                 <p class="card-text short-text">
                                                                                    IFOS a agi en tant que soustraitant de Social Impact lors de l’évaluation de l’impact du programme de lecture en
                                                    Haïti afin de mener la collecte des données pour l’évaluation à mi-parcours. Pour ce
                                                    faire, IFOS a mobilisé un (1) spécialiste en éducation en tant que chef d’équipe, deux (2)
                                                    responsables de terrain, quatre (4) coordonnateurs et coordonnatrices de terrain...
                                </p>
                                    <p class="card-text full-text5 collapse">
                                       .... 
                                    </p>
                                </div>
                                <a href="media/Presentation de IFOS.pdf" target="_blank">Lire plus</a>
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
                                    <h4 class="card-title">Nom du projet :</h4>Evaluation and Survey Services-Plus (ESS+).
                                </div>
                                <div class="card-title"><strong> Partenaire :</strong>International Business Initiatives </div>
                                <div class="text">
                                    <h4 class="card-subtitle mb-2 text-muted">Description:</h4>
                                 <p class="card-text short-text">
                                                                        IFOS est Sous-traitant de International Business Initiatives
                                        d/b/a IBI, pour l'activité Haïti Évaluation and Survey Services-Plus (ESS+). A cet effet,
                                        l'IFOS mobilise une équipe composée d'un (1) directeur de recherche, 1 chargé de contrat,
                                        1 informaticien, 1 assistant technique et logistique, des statisticiens...
                                </p>
                                    <p class="card-text full-text10 collapse">
                                        ...
                                    </p>
                                </div>
                                <a href="media/Presentation de IFOS.pdf" target="_blank">Lire plus</a>
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
                                    <h4 class="card-title">Nom du projet :</h4>UGP/MAST
                                </div>
                                <div class="card-title"><strong> Partenaire :</strong>UGP/MAST-Banque mondiale</div>
                                <div class="text">
                                    <h4 class="card-subtitle mb-2 text-muted">Description:</h4>
                                 <p class="card-text short-text">
                                 IFOS a réalisé l'enquête pour la collecte de données quantitatives auprès de 6250 ménages dans les 14 communes du département Grand'Anse d'Haïti pour l'évaluation de base du programme « KLERE
                                                                    CHIMEN »...
                                </p>
                                    <p class="card-text full-text7 collapse">
                                      ...
                                    </p>
                                </div>
                                <a href="media/Presentation de IFOS.pdf" target="_blank">Lire plus</a>
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
                                    <h4 class="card-title">Nom du projet :</h4>Montage et opérationnalisation d’un programme de micro finance rurale
                                </div>
                                <div class="card-title"><strong> Partenaire :</strong>(FIDA)</div>
                                <div class="text">
                                    <h4 class="card-subtitle mb-2 text-muted">Description:</h4>
                                 <p class="card-text short-text">
                                 Montage et opérationnalisation d’un programme de micro finance rurale par la création et le financement financement de Groupes à Caution Solidaire (GCS) en
vue d’arriver à la mise en place...
                                </p>
                                    <p class="card-text full-text11 collapse">
                                        ...
                                    </p>
                                </div>
                                <a href="media/Presentation de IFOS.pdf" target="_blank">Lire plus</a>
                               
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
                                    <h4 class="card-title">Nom du projet :</h4>KAP (Knowledge, Attitude, and Practice)
                                </div>
                                <div class="card-title"><strong> Partenaire :</strong>Organisation internationale du travail (OIT)</div>
                                <div class="text">
                                    <h4 class="card-subtitle mb-2 text-muted">Description:</h4>
                                 <p class="card-text short-text">
                                    L'IFOS a mené une étude KAP (Knowledge, Attitude, and Practice) auprès des organisations de travailleurs et d'employeurs du secteur textile en Haïti...
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
                                <a href="media/Presentation de IFOS.pdf" target="_blank">Lire plus</a>
                            </div>
                        </div>
                    </div>
                </div>

     



            </div>
        </div>
    </section>
    
    <?php include 'footer.php'; ?> <!-- Inclusion du pied de page -->
</body>
</html>
