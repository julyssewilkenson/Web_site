<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>IFOS S.A</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/customized_style.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Bellefair&family=Open+Sans:wght@300;400;700;800&family=Oswald:wght@400;500;600;700&display=swap" rel="stylesheet">

<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">
<!-- Outsider -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">


<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif] -->

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
					<div class="logo"><a href="index-en.php"><img src="images/logo_principale.png" alt="" title=""></a></div>
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
								<span class="icon-bar"> </span>
								<span class="icon-bar"></span>
							</button>
						</div>
						
						<div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
							<ul class="navigation clearfix">
								<li><a href="index-en.php">Home</a></li>
								
								<li><a href="about-en.php">About us</a></li>
								<li><a href="services-en.php">domains</a></li>
									
                                <li  class="current"><a href="realisation-en.php">ACHIEVEMENTS</a></li>
                                <li class="dropdown"><a href="#">Publications</a>
                                	<ul>
									<li><a href="#" class="mediatech-link" id="mediatech-link-header">Mediatech</a></li>
                                        <li><a href="about-en.php#NousRecrutons">OPPORTUNITIES</a></li>
								    </ul>
                                </li>
									
								<li><a href="contact-en.php">Contact US</a></li>
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
                <div class="nav-logo"><a href="index-en.php"><img src="images/logo-2.png" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            </nav>
        </div><!-- End Mobile Menu -->
	
    </header>
    <!-- End Main Header -->
	
	<!-- Page Title -->
    <section class="page-title style-two" style="background-image:url(images/background/service-5_2-\ Copy.jpg)">
    	<div class="auto-container">
			<h1>Nos réalisations</h1>
			
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
                                    <h4 class="card-title">Nom du projet :</h4>Evaluation Survey Services activity (Haiti ESS+) /USAID
                                   
                                </div>
                                <div class="card-title"><strong> Partenaire :</strong>International Business Initiatives d/b/a IBI</div>
                                <div class="text">
                                    <h4 class="card-subtitle mb-2 text-muted">Description:</h4>
                                 <p class="card-text short-text">
                                    Sous-traitant pour l'activité d'évaluation et d'enquête en Haïti (ESS+). A cette fin, IFOS a mobilisé une équipe composée...
                                </p>
                                    <p class="card-text full-text1 collapse">
                                        d'un (1) Directeur de recherche, 1 gestionnaire de contrat, 1 informaticien, 1 assistant technique et logistique,
                                         des statisticiens, des coordinateurs de terrain, des superviseurs, des moniteurs/enquêteurs, des facilitateurs de 
                                         FGD et KII, des preneurs de notes, et un (1) spécialiste de l'évaluation de projet et de programme pour fournir des
                                          services de soutien dans le cadre des composantes 1 & 2 de l'activité ESS+ suivantes : soutien à l'évaluation et à l'enquête,
                                         et suivi par une tierce partie dans le pays (TPM) des activités de l'USAID. 
                                    </p>
                                </div>
                               
                                <a href="https://www.ifosformation.com/download/GRC.pdf" target="_blank">Lire plus</a>
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
                                    <h4 class="card-title">Nom du projet :</h4>MAÏS
                                </div>
                                <div class="card-title"><strong> Partenaire :</strong>Papyrus, S.A., Haïti</div>
                                <div class="text">
                                    <h4 class="card-subtitle mb-2 text-muted">Description:</h4>
                                 <p class="card-text short-text">
                                    Réalisation de l'enquête pour l'évaluation à mi-parcours (midline) du projet MAÏS dans 4 communes du département du Sud d'Haïti. Le projet MAÏS, a été financé par Global Affairs Canada...
                                </p>
                                    <p class="card-text full-text2 collapse">
                                        fut un projet quinquennal de chaîne de valeur du maïs et des haricots, géré par Papyrus et ses partenaires, Les Moulins d'Haïti (LMH),
                                         Research Triangle International (RTI) et l'Alliance for Risk Management and Business Continuity (AGERCA). MAIS MOULIN change la vie des
                                          femmes et des jeunes dans les communautés rurales en améliorant les capacités grâce à l'éducation agricole, en fournissant de petites
                                           subventions et en améliorant l'accès au marché. Le projet a été mis en œuvre par Papyrus S.A. dans 3 communes du département du Sud 
                                           d'Haïti (Camp-Perrin, Les Cayes et Torbeck). A cette fin, IFOS a mobilisé 1 statisticien/spécialiste des données, 1 coordinateur de 
                                           terrain, 4 superviseurs et 12 collecteurs de données (enquêteurs) pour réviser le questionnaire, mobiliser et former les équipes de 
                                           collecte pour effectuer la collecte de données (300 ménages), effectuer l'assurance et le contrôle de la qualité des données, effectuer
                                            l'édition des données, et soumettre la base de données auditée et le rapport final de l'enquête.
                                    </p>
                                </div>
                                <a href="https://www.ifosformation.com/download/GRC.pdf" target="_blank">Lire plus</a>
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
                                    <h4 class="card-title">Nom du projet :</h4>KLERE CHIMEN
                                </div>
                                <div class="card-title"><strong> Partenaire :</strong>UGP/MAST-Banque Mondiale, Haïti</div>
                                <div class="text">
                                    <h4 class="card-subtitle mb-2 text-muted">Description:</h4>
                                 <p class="card-text short-text">
                                    IFOS a réalisé une enquête de collecte de données quantitatives auprès de 6250 ménages dans les 14 communes du département de la Grand'Anse d'Haïti...
                                </p>
                                    <p class="card-text full-text3 collapse">
                                        pour l'évaluation de base du programme " KLERE CHIMEN ". A cette fin, IFOS a mobilisé une équipe composée d'un (1) chef d'équipe, d'un gestionnaire de données, d'un informaticien, 
                                        d'un coordinateur de terrain, de 14 superviseurs, de 56 enquêteurs et de 3 assistants logistiques pour Obtenir les autorisations
                                         nationales et locales pour l'enquête, Créer/Définir un plan de collecte et de protection des données, Assurer la traduction
                                          et le pré-test des questionnaires sur le terrain avant le début de l'enquête, Assurer la programmation électronique et le 
                                          test des questionnaires sur le logiciel/application de collecte, Assurer le recrutement, la formation et la contractualisation
                                           des équipes de collecte de données (recenseurs et superviseurs), Développer la formation et le manuel de terrain pour les équipes
                                            de collecte, Produire le rapport de formation, Mener un test d'enquête à la fin de la formation, Réussir la collecte de données
                                             auprès des ménages les plus vulnérables sélectionnés par l'équipe d'évaluation, et Produire la base de données collectées
                                              et le rapport d'enquête. 
                                    </p>
                                </div>
                                <a href="https://www.ifosformation.com/download/GRC.pdf" target="_blank">Lire plus</a>

 
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
                                    <h4 class="card-title">Nom du projet :</h4>KORE LAVI
                                </div>
                                <div class="card-title"><strong> Partenaire :</strong>Université de Tulane, Haïti</div>
                                <div class="text">
                                    <h4 class="card-subtitle mb-2 text-muted">Description:</h4>
                                 <p class="card-text short-text">
                                    IFOS a mené, en appui à l'Université de Tulane, l'évaluation finale de la performance du projet USAID/FFP: Kore Lavi mis en œuvre par CARE en utilisant une méthodologie à la fois...
                                </p>
                                    <p class="card-text full-text4 collapse">
                                          qualitative et quantitative.
                                         A cette fin, IFOS a mobilisé 1 chef d'équipe en tant que superviseur général, 3 membres seniors de l'équipe de collecte de données
                                          en tant que facilitateurs de FGD, 3 preneurs de notes, 1 responsable d'enquête, 3 responsables de terrain, 9 superviseurs,
                                           46 enquêteurs pour examiner et fournir des contributions sur le protocole de recherche et obtenir l'approbation et l'autorisation
                                            du comité IRB haïtien, réviser les instruments d'enquête, programmer et tester le questionnaire sur des tablettes, superviser le personnel local,
                                             effectuer la collecte de données qualitatives (41 FGD, 44 KII) et l'enquête quantitative (ménages) (2500 ménages) dans 5 départements d'Haïti. 
                                    </p>
                                </div>
                                <a href="https://www.ifosformation.com/download/GRC.pdf" target="_blank">Lire plus</a>
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
                                    <h4 class="card-title">Nom du projet :</h4>Développement du marché de la cuisson propre en Haïti
                                </div>
                                <div class="card-title"><strong> Partenaire :</strong>Papyrus, S.A, Haïti</div>
                                <div class="text">
                                    <h4 class="card-subtitle mb-2 text-muted">Description:</h4>
                                 <p class="card-text short-text">
                                    IFOS a mené dans 5 départements d'Haïti la collecte de données de base pour le programme de développement du marché...
                                </p>
                                    <p class="card-text full-text5 collapse">
                                        de la cuisson propre en Haïti avec une équipe composée de 1 responsable d'enquête, 3 coordinateurs de terrain, 10 superviseurs,
                                         40 enquêteurs pour effectuer une collecte de données auprès des ménages (2250 ménages), la gestion et le nettoyage des données
                                          et l'établissement de rapports.  
                                    </p>
                                </div>
                                <a href="https://www.ifosformation.com/download/GRC.pdf" target="_blank">Lire plus</a>
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
                                    <h4 class="card-title">Nom du projet :</h4>L'évaluation d'impact du programme de lecture précoce en Haïti
                                </div>
                                <div class="card-title"><strong> Partenaire :</strong>Social Impact, Haïti</div>
                                <div class="text">
                                    <h4 class="card-subtitle mb-2 text-muted">Description:</h4>
                                 <p class="card-text short-text">
                                    IFOS a agi en tant que sous-traitant de Social Impact dans le cadre de l'évaluation d'impact du programme de lecture...
                                </p>
                                    <p class="card-text full-text6 collapse">
                                        précoce en Haïti pour mener la collecte de données à mi-parcours. Pour ce faire, IFOS a mobilisé un (1) spécialiste en éducation en tant
                                         que chef d'équipe, deux (2) gestionnaires de terrain, quatre (4) coordinateurs de terrain, un (1) statisticien / gestionnaire de
                                          données, douze (12) superviseurs, soixante-douze (72) collecteurs de données quantitatives pour soutenir la collecte de données
                                           pour l'évaluation quantitative de l'apprentissage en utilisant la méthodologie EGRA, l'enquête dans les écoles
                                            et l'observation des classes dans 179 écoles à travers 7 départements géographiques en Haïti, assurer la supervision 
                                            de la collecte de données et effectuer l'assurance qualité de la collecte de données.
                                    </p>
                                </div>
                                <a href="https://www.ifosformation.com/download/GRC.pdf" target="_blank">Lire plus</a>
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
                                    <h4 class="card-title">Nom du projet :</h4>REPANSE POUVWA
                                </div>
                                <div class="card-title"><strong> Partenaire :</strong>Université Georges Washington, Haïti</div>
                                <div class="text">
                                    <h4 class="card-subtitle mb-2 text-muted">Description:</h4>
                                 <p class="card-text short-text">
                                    IFOS a réalisé la collecte de données quantitatives à Marigot et La Vallée de Jacmel pour Global Women Institute (GWI)...
                                </p>
                                    <p class="card-text full-text7 collapse">
                                        de l'Université Georges Washington (/GWU) pour l'évaluation à mi-parcours du projet "Repanse Pouvwa" axé sur la violence basée
                                         sur les femmes.  Pour ce faire, l'IFOS a mobilisé un (1) coordinateur de recherche, un (1) coordinateur de terrain, quatre (4)
                                          superviseurs et 24 enquêteurs pour réviser et fournir des commentaires sur le protocole de recherche à l'IRB haïtien et réduire
                                           les instruments d'enquête, programmer et tester le questionnaire sur des tablettes, superviser le personnel local, 
                                           coordonner avec GWI l'organisation de la formation et du pilotage des instruments pour tous les enquêteurs, fournir 
                                           des mises à jour hebdomadaires à GWI sur l'avancement de la collecte de données (y compris les défis rencontrés), superviser
                                            la traduction des outils de collecte de données, réaliser une enquête auprès des ménages (1500 ménages), le nettoyage
                                             des données et l'assurance de la qualité, et le traitement de l'enquête. 
                                    </p>
                                </div>
                                <a href="https://www.ifosformation.com/download/GRC.pdf" target="_blank">Lire plus</a>
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
                                    <h4 class="card-title">Nom du projet :</h4>L'évaluation de l'impact du programme de lecture précoce en Haïti
                                </div>
                                <div class="card-title"><strong> Partenaire :</strong>Social Impact, Haïti</div>
                                <div class="text">
                                    <h4 class="card-subtitle mb-2 text-muted">Description:</h4>
                                 <p class="card-text short-text">
                                    : IFOS a agi en tant que sous-traitant de Social Impact dans le cadre pour mener la collecte des données de base...
                                </p>
                                    <p class="card-text full-text8 collapse">
                                        Pour ce faire, IFOS a mobilisé un (1) spécialiste en éducation comme chef d'équipe, deux (2) gestionnaires de terrain,
                                         quatre (4) coordinateurs de terrain, un (1) statisticien /gestionnaire de données, un (1) spécialiste des enquêtes 
                                         qualitatives, vingt (20) superviseurs, quatre-vingt (80) collecteurs de données quantitatives, vingt (20) facilitateurs de FGDs
                                          et KIIs pour soutenir la collecte de données pour un pilote de l'outil EGRA pendant l'atelier de validation EGRA, 
                                          mener une activité de cartographie de 355 écoles, fournir des commentaires sur les protocoles et instruments de collecte
                                           de données, développer des manuels pour le personnel de terrain, fournir la traduction des instruments, des protocoles,
                                            manuel de terrain et transcriptions (notes) des groupes de discussion et des entretiens, effectuer le prétest des instruments
                                             de collecte de données, réaliser la formation des équipes de collecte de données et le pilotage des instruments et du processus,
                                              assurer la collecte de données quantitatives (évaluation de l'apprentissage à l'aide de la méthodologie EGRA, enquête auprès
                                               des écoles et observation des classes) dans 195 écoles, assurer la collecte de données qualitatives FGD avec les parents 
                                               (femmes et hommes), les élèves (femmes et hommes) et KII avec les fonctionnaires du MENFP et les enseignants des écoles,
                                                assurer la supervision de la collecte de données et effectuer l'assurance qualité de la collecte de données.
                                    </p>
                                </div>
                                <a href="https://www.ifosformation.com/download/GRC.pdf" target="_blank">Lire plus</a>
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
                                    <h4 class="card-title">Nom du projet :</h4>Evaluation longitudinale pour les élèves de la première à la troisième année
                                </div>
                                <div class="card-title"><strong> Partenaire :</strong>USAID Haiti mission Bureau</div>
                                <div class="text">
                                    <h4 class="card-subtitle mb-2 text-muted">Description:</h4>
                                 <p class="card-text short-text">
                                    Partenaire de suivi par une tierce partie pour mener une évaluation longitudinale pour les élèves...
                                </p>
                                    <p class="card-text full-text9 collapse">
                                        de la première à la troisième année afin de mesurer les progrès de leurs compétences en lecture et en écriture en créole haïtien et en français dans 120 écoles situées dans
                                         les départements de l'Ouest, de l'Artibonite, du Nord et du Nord-Est pour l'USAID-Haïti. A cette fin, l'IFOS a mobilisé un expert en suivi
                                          et évaluation, 2 experts linguistiques, 2 formateurs en évaluation des compétences de base en lecture et écriture, 53 enquêteurs
                                           et superviseurs (m/f), 2 coordinateurs de terrain et 2 membres de la coordination centrale pour développer et réviser les outils
                                            d'évaluation CLAMS, mobiliser, recruter et former des enquêteurs, des superviseurs et des responsables locaux du MENFP pour mener
                                             à bien l'évaluation CLAMS ; assurer la collecte des données pour les élèves de 2ème et 3ème année dans 60 écoles
                                              et de 1ère à 1ère année dans 60 écoles (environ 2400 élèves) et assurer l'analyse et la diffusion des résultats de CLAMS au MENFP,
                                               à l'USAID, aux écoles ALE, aux bailleurs de fonds qui soutiennent les activités de lecture dans les premières années de l'éducation
                                                de base avec le financement et le matériel éducatif de l'USAID et d'autres partenaires pertinents.
                                    </p>
                                </div>
                                <a href="https://www.ifosformation.com/download/GRC.pdf" target="_blank">Lire plus</a>
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
                                    <h4 class="card-title">Nom du projet :</h4>Recensement général des propriétés bâties dans la commune de Port au Prince
                                </div>
                                <div class="card-title"><strong> Partenaire :</strong>PCM/Fédération Canadienne des Municipalités, Haïti</div>
                                <div class="text">
                                    <h4 class="card-subtitle mb-2 text-muted">Description:</h4>
                                 <p class="card-text short-text">
                                    Réalisation d'un recensement général des propriétés bâties dans la commune de Port au Prince pour le Programme...
                                </p>
                                    <p class="card-text full-text10 collapse">
                                        de Coopération Municipale/Canada. A cette fin, l'IFOS a mobilisé 80 enquêteurs, 8 superviseurs, 1 statisticien, 4 gestionnaires de données et 3 coordinateurs pour assurer le développement
                                         des instruments, la formation des collecteurs de données, la collecte des données (enquête quantitative) dans 52600 ménages et le contrôle de la qualité
                                          des données.
                                    </p>
                                </div>
                                <a href="https://www.ifosformation.com/download/GRC.pdf" target="_blank">Lire plus</a>
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
                                    <h4 class="card-title">Nom du projet :</h4>Déterminants de la performance académique dans le système scolaire Haïtien
                                </div>
                                <div class="card-title"><strong> Partenaire :</strong>ONAPE/MENFP, Haïti</div>
                                <div class="text">
                                    <h4 class="card-subtitle mb-2 text-muted">Description:</h4>
                                 <p class="card-text short-text">
                                    Réalisation d'une étude sur les déterminants de la performance académique dans le système scolaire haïtien...
                                </p>
                                    <p class="card-text full-text11 collapse">
                                        Pour ce faire, l'IFOS mobilise 2 spécialistes en éducation, 1 statisticien, 1 data manager, 1 coordinateur de terrain,
                                         38 data collectors (enquêteurs et superviseurs), 5 data collectors qualitatifs (facilitateurs de FG et d'entretiens) 
                                         pour assurer le développement des instruments (questionnaires et guides de conduite d'entretiens et de FG), la formation des data collectors,
                                          la collecte de données électroniques (enquête quantitative) dans 41 écoles situées dans des zones rurales et urbaines de 5 départements géographiques d'Haïti,
                                         la réalisation d'entretiens et de groupes de discussion avec des parents, des comités d'école, des enseignants, des directeurs et d'autres acteurs du secteur de l'éducation en Haïti,
                                          le traitement et l'analyse des données, la rédaction de rapports et la présentation des résultats de la recherche à l'ONAPE et à ses partenaires.
                                    </p>
                                </div>
                                <a href="https://www.ifosformation.com/download/GRC.pdf" target="_blank">Lire plus</a>
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
                                <a href="https://www.ifosformation.com/download/GRC.pdf" target="_blank">Lire plus</a>
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
