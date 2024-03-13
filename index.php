<!--
Author: Moufid
-->

<?php
// Commencer la session sur la page de contact
session_start();

// Récupérer le message de succès depuis la session
$successMessage = isset($_SESSION['success_message']) ? $_SESSION['success_message'] : '';
unset($_SESSION['success_message']); // Supprimer le message de la session

// Récupérer le message d'erreur s'il y en a
$errorMessage = isset($_GET['error_message']) ? urldecode($_GET['error_message']) : '';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Immo Vision</title>
    <!-- web fonts -->
     <link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Hind&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets/images/logo2.png">	
    <!-- //web fonts -->
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
    <script type="text/javascript"
src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
<script>
  (function () {
    emailjs.init('FE1W_VhpVP-nLKoK8');
  })();
</script>
  </head>
  <body>


<!-- Top Menu 1 -->
<marquee behavior="" direction="" >Chers visiteurs <span class="fa fa-heart"></span> , nous sommes en rénovation de notre site web <span class="fa fa-warning"></span>  veuillez bien nous en excuser pour les désagréments.  Pour toute demande de prix ou de livraison veuillez nous envoyer un message en précisant vos contacts <span><a href="contact.html">(Contactez Nous)</a></span> , nous vous repondrons dans les brefs delais. Merci !!!</marquee>
<section class="w3l-top-menu-1">
	<div class="top-hd">
		<div class="container">
	<header class="row">
		<div class="social-top col-lg-3 col-6">
			<li>Suivez Nous</li>
			<li><a href="#"><span class="fa fa-facebook"></span></a></li>
			<li><a href="#"><span class="fa fa-instagram"></span></a> </li>
				<li><a href="#"><span class="fa fa-twitter"></span></a></li>
				<li><a href="#"><span class="fa fa-vimeo"></span></a> </li>
		</div>
		<div class="accounts col-lg-9 col-6">
				<li class="top_li"><span class="fa fa-mobile"></span><a href="tel:+142 5897555">+229 52 02 55 55</a> </li>
				
		</div>
		
	</header>
</div>
</div>
</section>
<!-- //Top Menu 1 -->
<section class="w3l-bootstrap-header">
  <nav class="navbar navbar-expand-lg navbar-light py-lg-2 py-2">
    <div class="container">
      <!-- <a class="navbar-brand" href="index.html"><span class="fa fa-home"></span>ML VISION IMMO</a> -->   
    <a class="navbar-brand" href="#index.html">
        <img src="assets/images/logo2-re.png" alt="Your logo" title="Your logo" style="height:45px;" />
    </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon fa fa-bars"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Accueil</a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="services.html">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="appartments.html">Nos Appartements</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="servicesNetayage.html">Services Netoyage</a>

          </li>
          <li class="nav-item">
            <a class="nav-link" href="apropos.html">A propos</a>
          </li>
          <li class="nav-item mr-0">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</section>
<?php if ($successMessage): ?>
        <div class="success-message"><?php echo $successMessage; ?></div>
    <?php endif; ?>

    <?php if ($errorMessage): ?>
        <div class="error-message"><?php echo $errorMessage; ?></div>
<?php endif; ?>
<style>
.success-message {
        background-color: #d4edda; /* Couleur de fond verte */
        border: 3px solid #c3e6cb; /* Bordure verte */
        color: #155724; /* Couleur du texte */
        padding: 15px; /* Espacement intérieur */
        border-radius: 5px; /* Coins arrondis */
        text-align: center;
        justify-content: center;
    }

    .error-message {
        background-color: #FFB2B2; /* Couleur de fond verte */
        border: 3px solid red; /* Bordure verte */
        color: #155724; /* Couleur du texte */
        padding: 15px; /* Espacement intérieur */
        border-radius: 5px; /* Coins arrondis */
        text-align: center;
        justify-content: center;
    }
</style>
<section class="form-12" id="home">
	<div class="form-12-content">
		<div class="container">
			<div class="grid grid-column-2 ">
				<div class="column2">
					</div>
				<div class="column1">
						<form action="request.php" method="post">
							<!-- <div class="blog-search form d-flex search-form">
								<input type="search" class="form-control" placeholder="Entrez l'emplacement, la propriété, le point de repère" name="search">
								<button type="submit" class="btn search-btn"><span class="fa fa-search"></span></button>
							</div> -->
							<div class="form-top">
								<select id="mainSelect" name="selects[]" onchange="updateAdditionalOptions()" required>
                  <option>Tous les services</option>
                  <option value="Achats">Achats</option>
                  <option value="Ventes">Ventes</option>
                  <option value="Appartements">Appartements meublés</option>
                  <option value="Locations">Locations</option>
                  <option value="Gestion">Gestion locative</option>
                  <option value="Decoration">Décoration d'intérieur</option>
                  <option value="Plan">Plan architectural</option>
                  <option value="Suivi">Suivi de chantier</option>
                  <option value="Videos">Vidéos surveillance</option>
                  <option value="Barbele">Barbelé & clôture électrique</option>
                </select>
                <select id="additionalSelect" name="selects[]" required>
                    <option>Toutes les actions</option>
                    <option value="" disabled>Veuillez sélectionné un service d'abord</option>
								  </select>
								
							</div>
							<div class="form-top">
								<select id="ville" name="selects[]" required>
                  <option value="Commune"></option>
									<option value="" selected disabled>Toutes les communes</option>
                  <option>ABOMEY</option>
                  <option>ABOMEY-CALAVI</option>
                  <option>ADJA-OUERE</option>
                  <option>ADJARRA</option>
                  <option>ADJOHOUN</option>
                  <option>AGBANGNIZOUN</option>
                  <option>AGUEGUES</option>
                  <option>AKPRO-MISSERETE</option>
                  <option>ALLADA</option>
                  <option>APLAHOUE</option>
                  <option>ATHIEME</option>
                  <option>AVRANKOU</option>
                  <option>BANIKOARA</option>
                  <option>BANTE</option>
                  <option>BASSILA</option>
                  <option>BEMBEREKE</option>
                  <option>BOHICON</option>
                  <option>BONOU</option>
                  <option>BOPA</option>
                  <option>BOUKOUMBE</option>
                  <option>COBLY</option>
                  <option>COME</option>
                  <option>COPARGO</option>
                  <option>COTONOU</option>
                  <option>COVE</option>
                  <option>DANGBO</option>
                  <option>DASSA-ZOUME</option>
                  <option>DJAKOTOMEY</option>
                  <option>DJIDJA</option>
                  <option>DJOUGOU</option>
                  <option>DOGBO</option>
                  <option>GLAZOUE</option>
                  <option>GOGOUNOU</option>
                  <option>GRAND-POPO</option>
                  <option>HOUEYOGBE</option>
                  <option>IFANGNI</option>
                  <option>KALALE</option>
                  <option>KANDI</option>
                  <option>KARIMAMA</option>
                  <option>KEROU</option>
                  <option>KETOU</option>
                  <option>KLOUEKANMEY</option>
                  <option>KOUANDE</option>
                  <option>KPOMASSE</option>
                  <option>LALO</option>
                  <option>LOKOSSA</option>
                  <option>MALANVILLE</option>
                  <option>MATERI</option>
                  <option>N'DALI</option>
                  <option>NATITINGOU</option>
                  <option>NIKKI</option>
                  <option>OUAKE</option>
                  <option>OUASSA-PEHUNCO</option>
                  <option>OUESSE</option>
                  <option>OUIDAH</option>
                  <option>OUINHI</option>
                  <option>PARAKOU</option>
                  <option>PERERE</option>
                  <option>POBE</option>
                  <option>PORTO-NOVO</option>
                  <option>SAKETE</option>
                  <option>SAVALOU</option>
                  <option>SAVE</option>
                  <option>SEGBANA</option>
                  <option>SEME-PODJI</option>
                  <option>SINENDE</option>
                  <option>SO-AVA</option>
                  <option>TANGUIETA</option>
                  <option>TCHAOUROU</option>
                  <option>TOFFO</option>
                  <option>TORI-BOSSITO</option>
                  <option>TOUKOUNTOUNA</option>
                  <option>TOVIKLIN</option>
                  <option>ZA-KPOTA</option>
                  <option>ZAGNANADO</option>
                  <option>ZE</option>
                  <option>ZOGBODOMEY</option>
								</select>
							</div>
             <!-- <div class="form-top">
								<select id="quartier" name="selects[]" required>
									<option>Touts les quartiers</option>
									<option value="Ganhi">Ganhi</option>
									<option>Saint Michel</option>
									<option>Les cocotiers</option>
                  <option>Haie Vive</option>
									<option>Saint Michel</option>
									<option>Zogbo</option>
                  <option>Jéricho</option>
									<option>Ganmè</option>
									<option>Gbégamey</option>
									<option>Missèbo</option>
                  <option>Tanlili</option>
                  <option>Tchatchou</option>
									<option>Nagaza</option>
									<option>Zongo</option>
									<option>Gbokpè</option>
                  <option>Zounzoukpa</option>
									<option>Agongointo</option>
                  <option>Houndjro</option>
                  <option>Akpakpa</option>
									<option>Zongo</option>
									<option>Gbeto</option>
									<option>Zongo</option>
								</select>
								 <select id="sel4">
									<option>Nombre minimum de chambres</option>
									<option>Toutes les chambres</option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
									<option>6</option>
									<option>7</option>
								</select> 
							</div>-->
              <div class="blog-search form d-flex search-form mt-3">
								<input type="text" class="form-control" placeholder="Quartier/Village" name="quartier" style="width: 100%;">
							</div>
              <div class="blog-search form d-flex search-form mt-3">
								<input type="text" class="form-control" placeholder="Votre nom complet" name="nom" style="width: 100%;">
							</div>
              <div class="blog-search form d-flex search-form mt-3">
								<input type="text" class="form-control" placeholder="Votre numero de Téléphone" name="number" style="width: 100%;">
							</div>
							<button class="btn">Envoyer</button>
						</form>
					</div>
				
			</div>
		</div>
	</div>
</section>
<script type="text/javascript"
src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
<section class="locations-1" id="locations">
  <div class="locations py-5">
    <div class="container py-md-3">
      <div class="heading text-center mx-auto">
          <h3 class="head">Quartier populaires</h3>
          <p class="my-3 head ">Explorez les quartiers pour de longs séjours, souvent à des tarifs réduits au mois..</p>
        </div>
              <div class="row mt-3 pt-5">
                  <div class="col-md-4 col-sm-6">
                      <div class="box16">
                          <img class="img-fluid" src="assets/images/g1.jpg" alt="">
                          <div class="box-content">
                              <h3 class="title">Fidjrossè</h3>
                              <span class="post">2 Annonces</span>
                            
                          </div>
                      </div>
                  </div>
                  <div class="col-md-4 col-sm-6">
                      <div class="box16">
                          <img class="img-fluid" src="assets/images/g2.jpg" alt="">
                          <div class="box-content">
                              <h3 class="title">Cadjehoun</h3>
                              <span class="post">2 Annonces</span>
                            
                          </div>
                      </div>
                  </div>
                  <div class="col-md-4 col-sm-6 mt-lg-0 pt-lg-0 mt-md-4 pt-md-2">
                      <div class="box16">
                          <img class="img-fluid" src="assets/images/g3.jpg" alt="">
                          <div class="box-content">
                              <h3 class="title">Saint-Michel</h3>
                              <span class="post">2 Annonces</span>
                            
                          </div>
                      </div>
                  </div>
                  <div class="col-md-4 col-sm-6 mt-md-4 pt-md-2">
                      <div class="box16">
                          <img class="img-fluid" src="assets/images/g4.jpg" alt="">
                          <div class="box-content">
                              <h3 class="title">Apkapka</h3>
                              <span class="post">2 Annonces</span>
                              
                          </div>
                      </div>
                  </div>
                  <div class="col-md-4 col-sm-6 mt-md-4 pt-md-2">
                      <div class="box16">
                          <img class="img-fluid" src="assets/images/g5.jpg" alt="">
                          <div class="box-content">
                              <h3 class="title">Aibation</h3>
                              <span class="post">2 Annonces</span>
                            
                          </div>
                      </div>
                  </div>
                  <div class="col-md-4 col-sm-6 mt-md-4 pt-md-2">
                      <div class="box16">
                          <img class="img-fluid" src="assets/images/g6.jpg" alt="">
                          <div class="box-content">
                              <h3 class="title">Bohicon</h3>
                              <span class="post">2 Annonces</span>
                            
                          </div>
                      </div>
                  </div>
              </div>
          </div>
  </div>
</section>
<section class="w3l-services2" id="services">
			<div class="features-with-17_sur py-5">
				   <div class="container py-md-3">
					<div class="heading text-center mx-auto">
						<h3 class="head text-white">Ce que nous offrons</h3>
						<p class="my-3 head "> L'agence immobilièreML Vision Immo  vous accompagne à chaque étape de vos projets d'Achat, Vente, Location ou Investissement dans vos différentes maisons.</p>
					  </div>
				     <div class="row pt-5 mt-3">
						<div class="col-lg-5 features-with-17-left_sur">
							<h4 class="lft-head">Notre metier</h4>
							<p>Notre entreprise offre une palette complète de services dédiés à la gestion de vos appartements et maisons.
                 Que vous cherchiez à optimiser la location de vos biens, à les décorer avec style, à renforcer leur sécurité avec
                  des systèmes de vidéosurveillance de pointe, à installer des clôtures électriques dissuasives, ou à assurer le 
                  suivi méticuleux de vos chantiers de construction, notre équipe professionnelle est là pour vous accompagner. 
                  Nous nous engageons à offrir des solutions complètes, alliant esthétique, sécurité et efficacité opérationnelle,
                 pour répondre à toutes 
                vos exigences immobilières et de projet. Faites confiance à notre expertise polyvalente pour gérer et améliorer chaque aspect de vos biens immobiliers.</p>
							<div class="stats-1">
							<div class="stats-1-left">
								<h4>2300</h4>
								<h6>Clients</h6>
							</div>
							<div class="stats-1-left">
								<h4>16</h4>
								<h6>Prix</h6>
							</div>
							<div class="stats-1-left">
								<h4>2536</h4>
								<h6>Projets</h6>
							</div>
						</div>
						</div>
						<div class="col-lg-7 my-lg-0 my-5 align-self-center features-with-17-right_sur">
							<div class="features-with-17-right-tp_sur">
								<div class="features-with-17-left1">
									<span class="fa fa-laptop s4"></span>		
								</div>
								<div class="features-with-17-left2">
									<h6><a href="#url">Service le plus rapide</a></h6>
									<p>La rapidité est notre priorité, offrant le service le plus rapide pour répondre à vos besoin</p>		
								</div>
							</div>
							<div class="features-with-17-right-tp_sur">
								<div class="features-with-17-left1">
										<span class="fa fa-database s5"></span>		
								</div>
								<div class="features-with-17-left2">
										<h6><a href="#url">Le plus grand bien immobilier</a></h6>
										<p>Découvrez le summum du luxe avec notre plus grand bien immobilier, offrant un espace exceptionnel et des commodités exclusives.</p>			
								</div>
							</div>
							<div class="features-with-17-right-tp_sur">
								<div class="features-with-17-left1">
									<span class="fa fa-lock s3"></span>		
								</div>
								<div class="features-with-17-left2">
										<h6><a href="#url">Assurance habitation</a></h6>
										<p>Sécurisez votre chez-vous avec notre assurance habitation complète, offrant une tranquillité d'esprit et une protection totale pour votre domicile.</p>	
								</div>
							</div>
							<div class="features-with-17-right-tp_sur">
								<div class="features-with-17-left1">
										<span class="fa fa-codepen s2"></span>		
								</div>
								<div class="features-with-17-left2">
										<h6><a href="#url">Processus à domicile</a></h6>
										<p>Simplifiez votre vie avec notre processus à domicile, une solution pratique qui vous permet d'accomplir certaines tâches sans quitter le confort de votre foyer.</p>	
								</div>
							</div>
							
							
						</div>
					</div>
				</div>
			</div>
		</section>
<section class="grids-4" id="properties">
    <div id="grids4-block" class="py-5">
       <div class="container py-md-3">
			<div class="heading text-center mx-auto">
      <h3 class="head">Propriétés à vendre</h3>
      <p class="my-3 head"> Découvrez notre sélection exceptionnelle de propriétés à vendre, 
        offrant des opportunités uniques pour trouver la maison de vos rêves.</p>
    </div>
            <div class="row mt-5 pt-3">
                <div class="grids4-info  col-lg-4 col-md-6">
                        <a href="details_articles.php" onclick="saveImage('assets/images/g7.jpg')"><img src="assets/images/g7.jpg" class="img-fluid" alt="Image" id=""></a>
                        <ul class="location-top">
                            <li class="rent">A louer</li>
                            <li class="open-1">Journée portes ouvertes</li>
                        </ul>
                        <div class="info-bg">
                          <div class="row">
                            <div class="col-md-8"><h5><a href="#">Luxury Appartement </a></h5></div>
                            <div class="col-md-4"><p style="margin-top: 1px;">Ref 229</p></div>
                          </div>
                          <p> 4 photos </p>
                            <p> 450,00 FCFA / par mois </p>
                            <ul>
                                <li><span class="fa fa-bed"></span> 4 Lits</li>
                                <li><span class="fa fa-bath"></span> 3 Thermes</li>
                                <li><span class="fa fa-share-square-o"></span> 1200 pieds carrés</li>
                            </ul>
                            <div class="container d-flex justify-content-center">
                              <a class="btn btn-secondary btn-theme3 mt-3" onclick="saveImage('assets/images/g7.jpg')" href="reservation.php" style="background-color: black; border: none;">Contacter</a>
                            </div>
                        </div>
                    </div>
                <div class="grids4-info col-lg-4 col-md-6 mt-md-0 mt-5">
                        <a href="#"><img src="assets/images/g8.jpg" class="img-fluid" alt="Image" id="imageToPass"></a>
                        <ul class="location-top">
                            <li class="sale">À vendre</li>
                            <li class="open-1">Journée portes ouvertes</li>
                        </ul>
                        <div class="info-bg">
                          <div class="row">
                            <div class="col-md-8"><h5><a href="#">Luxury Appartement </a></h5></div>
                            <div class="col-md-4"><p style="margin-top: 1px;" id="referenceParagraph">Ref 19</p></div>
                          </div>
                          <p> 4 photos </p>
                            <p> 450,00 FCFA / par mois </p>
                            <ul>
                                <li><span class="fa fa-bed"></span> 4 Lits</li>
                                <li><span class="fa fa-bath"></span> 3 Thermes</li>
                                <li><span class="fa fa-share-square-o"></span> 1200 pieds carrés</li>
                            </ul>
                            <div class="container d-flex justify-content-center">
                              <a class="btn btn-secondary btn-theme3 mt-3" onclick="saveImage('assets/images/g8.jpg')" href="reservation.php" style="background-color: black; border: none;">Contacter</a>
                            </div>
                        </div>
                    </div>
                    <script>
                          function saveImage(imageUrl,reference) {
                        // Sauvegarder l'URL de l'image dans le stockage local (localStorage)
                        localStorage.setItem('savedImageUrl', imageUrl);
                    }
                  </script>
                 <div class="grids4-info col-lg-4 col-md-6 mt-lg-0 mt-5">
                        <a href="#"><img src="assets/images/g7.jpg" class="img-fluid" alt="Image" id=""></a>
                        <ul class="location-top">
                            <li class="rent">A louer</li>
                            <li class="open-1">Journée portes ouvertes</li>
                        </ul>
                        <div class="info-bg">
                          <div class="row">
                            <div class="col-md-8"><h5><a href="#">Luxury Appartement </a></h5></div>
                            <div class="col-md-4"><p style="margin-top: 1px;" id="referenceParagraph">Ref 129</p></div>
                          </div>
                          <p> 4 photos </p>
                            <p> 450,00 FCFA / par mois </p>
                            <ul>
                                <li><span class="fa fa-bed"></span> 4 Lits</li>
                                <li><span class="fa fa-bath"></span> 3 Thermes</li>
                                <li><span class="fa fa-share-square-o"></span> 1200 pieds carrés</li>
                            </ul>
                            <div class="container d-flex justify-content-center">
                              <a class="btn btn-secondary btn-theme3 mt-3" onclick="saveImage('assets/images/g7.jpg')" href="reservation.php" style="background-color: black; border: none;">Contacter</a>
                            </div>
                        </div>
                    </div>
					 <div class="grids4-info  col-lg-4 col-md-6 mt-5">
                        <a href="#"><img src="assets/images/g8.jpg" class="img-fluid" alt="Image" id=""></a>
                        <ul class="location-top">
                            <li class="sale">À vendre</li>
                            <li class="open-1">Journée portes ouvertes</li>
                        </ul>
                        <div class="info-bg">
                          <div class="row">
                            <div class="col-md-8"><h5><a href="#">Luxury Appartement </a></h5></div>
                            <div class="col-md-4"><p style="margin-top: 1px;">Ref 129</p></div>
                          </div>
                          <p> 4 photos </p>
                            <p> 450,00 FCFA / par mois </p>
                            <ul>
                                <li><span class="fa fa-bed"></span> 4 Lits</li>
                                <li><span class="fa fa-bath"></span> 3 Thermes</li>
                                <li><span class="fa fa-share-square-o"></span> 1200 pieds carrés</li>
                            </ul>
                            <div class="container d-flex justify-content-center">
                              <a class="btn btn-secondary btn-theme3 mt-3" onclick="saveImage('assets/images/g8.jpg')" href="reservation.php" style="background-color: black; border: none;">Contacter</a>
                            </div>
                        </div>
                    </div>
					 <div class="grids4-info  col-lg-4 col-md-6 mt-5">
                        <a href="#"><img src="assets/images/g9.jpg" class="img-fluid" alt="Image" id=""></a>
                        <ul class="location-top">
                            <li class="rent">A louer</li>
                            <li class="open-1">Journée portes ouvertes</li>
                        </ul>
                        <div class="info-bg">
                          <div class="row">
                            <div class="col-md-8"><h5><a href="#">Luxury Appartement </a></h5></div>
                            <div class="col-md-4"><p style="margin-top: 1px;">Ref 129</p></div>
                          </div>
                          <p> 4 photos </p>
                            <p> 450,00 FCFA / par mois </p>
                            <ul>
                                <li><span class="fa fa-bed"></span> 4 Lits</li>
                                <li><span class="fa fa-bath"></span> 3 Thermes</li>
                                <li><span class="fa fa-share-square-o"></span> 1200 pieds carrés</li>
                            </ul>
                            <div class="container d-flex justify-content-center">
                              <a class="btn btn-secondary btn-theme3 mt-3" onclick="saveImage('assets/images/g9.jpg')" href="reservation.php" style="background-color: black; border: none;">Contacter</a>
                            </div>
                        </div>
                       
                    </div>
					 <div class="grids4-info  col-lg-4 col-md-6 mt-5">
                        <a href="#"><img src="assets/images/g10.jpg" class="img-fluid" alt=""></a>
                        <ul class="location-top">
                            <li class="sale">À vendre</li>
                            <li class="open-1">Journée portes ouvertes</li>
                        </ul>
                        <div class="info-bg">
                          <div class="row">
                            <div class="col-md-8"><h5><a href="#">Luxury Appartement </a></h5></div>
                            <div class="col-md-4"><p style="margin-top: 1px;">Ref 129</p></div>
                          </div>
                          <p> 4 photos </p>
                            <p> 450,00 FCFA / par mois </p>
                            <ul>
                                <li><span class="fa fa-bed"></span> 4 Lits</li>
                                <li><span class="fa fa-bath"></span> 3 Thermes</li>
                                <li><span class="fa fa-share-square-o"></span> 1200 pieds carrés</li>
                            </ul>
                            <div class="container d-flex justify-content-center">
                              <a class="btn btn-secondary btn-theme3 mt-3" onclick="saveImage('assets/images/g10.jpg')" href="reservation.php" style="background-color: black; border: none;">Contacter</a>
                            </div>
                        </div>
                    </div>
                </div>
           </div>
           <div class="container py-md-3">
             <a class="btn btn-secondary btn-theme3 mt-3" href="appartments.html"> Voir plus</a>
           </div>
    </div>
</section>
<section class="w3l-apply-6">
	<!-- /apply-6-->
	<div class="apply-info py-5">
		<div class="container py-lg-3">
			<div class="heading text-center mx-auto">
				<h3 class="head text-white">Ce qui fait de nous le choix préféré</h3>
				<p class="my-3 head "> Notre engagement envers l'excellence, la qualité inégalée de nos services et notre dévouement total
           font de nous le choix préféré pour répondre à vos besoins et dépasser vos attentes.</p>
			  </div>
			<div class="apply-grids-info row pt-5 mt-3">
				<div class="apply-gd-left col-lg-7">
						<div class="row">
						<div class="col-sm-6 sub-apply">
								<div class="apply-sec-info text-center">
										
											<span class="fa fa-university mb-4"></span>
									
										<div class="appyl-sub-icon-info">
												<h5><a href="#">Choix maximum</a></h5>
											<p>Optez pour le choix maximum avec notre gamme diversifiée de produits/services, 
                        répondant à toutes vos préférences et dépassant vos attentes.</p>
										</div>
					
									</div>

						</div>
						<div class="col-sm-6 sub-apply mt-sm-0 mt-5">
							<div class="apply-sec-info text-center">
									
										<span class="fa fa-bath mb-4"></span>
									
									<div class="appyl-sub-icon-info">
											<h5><a href="#">Les acheteurs nous font confiance</a></h5>
										<p>La confiance des acheteurs est notre plus grande réussite. 
                        Choisissez la fiabilité et la transparence pour votre prochaine transaction immobilière avec nous.</p>
									</div>
				
								</div>

					</div>
					<div class="col-sm-6 sub-apply mt-5">
						<div class="apply-sec-info text-center">
								
									<span class="fa fa-cubes mb-4"></span>
								
								<div class="appyl-sub-icon-info">
										<h5><a href="#">Le vendeur nous préfère</a></h5>
									<p>Le vendeur préfère notre expertise. 
                    Choisissez notre service et profitez de l'accompagnement privilégié pour une transaction immobilière réussie.</p>
								</div>
			
							</div>

				</div>
						<div class="col-sm-6 sub-apply mt-5">
								<div class="apply-sec-info text-center">
										
											<span class="fa fa-hospital-o mb-4"></span>
										
										<div class="appyl-sub-icon-info">
												<h5><a href="#">Conseils d'experts</a></h5>
											<p>Bénéficiez de nos conseils d'experts pour prendre des décisions éclairées.
                         Nous mettons notre savoir-faire à votre service pour vous guider vers le succès.</p>
										</div>
					
									</div>
						</div>
					</div>
				</div>
				<div class="apply-gd-right col-lg-5 mt-lg-0 mt-5">
					<div class="apply-form p-md-5 p-4 mx-auto bg-white mw-100">
						<h4>ML VISION IMMO </h4>
						<p class="mt-3">Choisir notre équipe, c'est opter pour l'excellence et la satisfaction. 
              Nous nous engageons à dépasser vos attentes en offrant des services de qualité, des conseils avisés, 
              et une expérience exceptionnelle. Notre dévouement à satisfaire vos besoins immobiliers, que ce soit pour l'achat, 
              la vente, ou la gestion de biens, fait de nous le partenaire idéal. Faites confiance à notre expertise, à notre engagement, 
              et à notre passion pour concrétiser vos projets immobiliers. Optez pour l'excellence, optez pour nous</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="w3l-testimonials" id="testimonials">
  <div class="customers-6-content py-5">
    <div class="container py-lg-3">
      <div class="heading text-center mx-auto">
        <h3 class="head">Clients satisfaits</h3>
        <p class="my-3 head "> Des clients satisfaits, notre meilleure recommandation.</p>
      </div>
     
      <div id="customerhnyCarousel" class="carousel slide" data-ride="carousel">

        <ol class="carousel-indicators">
          <li data-target="#customerhnyCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#customerhnyCarousel" data-slide-to="1"></li>
                        <li data-target="#customerhnyCarousel" data-slide-to="2"></li>
        </ol>
        <!-- Carousel items -->
        <div class="carousel-inner pb-5">

          <div class="carousel-item active">
            <div class="customer row py-5 mt-3">
              <div class="col-lg-4 col-md-6">
                <div class="card">
                  <img class="card-img-top img-responsive" src="assets/images/c1.jpg" alt="">
                  <div class="card-body">
                    <span class="fa fa-quote-left" aria-hidden="true"></span>
                    <h3 class="card-title">MxxFxD DAOUDA</h3>
                    <p class="sub-title mb-3">Dévéloppeur</p>
                    <p class="card-text text-center mb-4"> 
                      Le professionnalisme et l'engagement de cette équipe ont rendu mon expérience sans stress. Je recommande vivement.
                    </p>
                    <div class="text-right">
                     <span class="fa fa-quote-right" aria-hidden="true"></span>
                    </div>
                    
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 off-testi-2">
                <div class="card">
                  <img class="card-img-top img-responsive" src="assets/images/c2.jpg" alt="">
                  <div class="card-body">
                    <span class="fa fa-quote-left" aria-hidden="true"></span>
                    <h3 class="card-title">Mark Waugh</h3>
                    <p class="sub-title mb-3">Ingénieur</p>
                    <p class="card-text text-center mb-4">  
                      La transparence, la compétence et l'attention aux détails font de cette agence un choix incontournable.                    </p>
                    <div class="text-right">
                     <span class="fa fa-quote-right" aria-hidden="true"></span>
                    </div>
                  
                  </div>
                </div>
              </div>
              <div class="col-lg-4 offset-md-3 offset-lg-0 col-md-6 off-testi">
                <div class="card">
                  <img class="card-img-top img-responsive" src="assets/images/c3.jpg" alt="">
                  <div class="card-body">
                    <span class="fa fa-quote-left" aria-hidden="true"></span>
                    <h3 class="card-title">Rodrigue ADJo</h3>
                    <p class="sub-title mb-3">Graphiste</p>
                    <p class="card-text text-center mb-4">  
                      Leur expertise a été évidente dès le départ. Merci pour une expérience positive du début à la fin.                     </p>
                     <div class="text-right">
                      <span class="fa fa-quote-right" aria-hidden="true"></span>
                     </div>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--.item-->

          <div class="carousel-item">
            <div class="customer row py-5 mt-3">
              <div class="col-lg-4 col-md-6">
                <div class="card">
                  <img class="card-img-top img-responsive" src="assets/images/c2.jpg" alt="">
                  <div class="card-body">
                    <span class="fa fa-quote-left" aria-hidden="true"></span>
                    <h3 class="card-title">Mark CRAIG</h3>
                    <p class="sub-title mb-3">Commerçant</p>
                    <p class="card-text text-center mb-4">  
                      'ai été impressionné par leur compréhension approfondie de mes besoins et leur engagement à les satisfaire                    </p>
                    <div class="text-right">
                     <span class="fa fa-quote-right" aria-hidden="true"></span>
                    </div>
                  
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 off-testi-2">
                <div class="card">
                  <img class="card-img-top img-responsive" src="assets/images/c3.jpg" alt="">
                  <div class="card-body">
                    <span class="fa fa-quote-left" aria-hidden="true"></span>
                    <h3 class="card-title">Hanif Wabi</h3>
                    <p class="sub-title mb-3">Compatable</p>
                    <p class="card-text text-center mb-4"> 
                      Je suis ravi de ma décision de faire confiance à cette agence
                    </p>
                     <div class="text-right">
                      <span class="fa fa-quote-right" aria-hidden="true"></span>
                     </div>
                    
                  </div>
                </div>
                
                
              </div>
              <div class="col-lg-4 offset-md-3 offset-lg-0 col-md-6 off-testi">
                <div class="card">
                  <img class="card-img-top img-responsive" src="assets/images/c1.jpg" alt="">
                  <div class="card-body">
                    <span class="fa fa-quote-left" aria-hidden="true"></span>
                    <h3 class="card-title">Henry DANDJOU</h3>
                    <p class="sub-title mb-3">Dévéloppeur
                    <p class="card-text text-center mb-4"> 
                     Mon bien a été vendu rapidement et au meilleur prix possible. Je suis reconnaissant, Merci!!  
                   </p>
                    <div class="text-right">
                     <span class="fa fa-quote-right" aria-hidden="true"></span>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
            
          </div>

          <div class="carousel-item">
            <div class="customer row py-5 mt-3">
              <div class="col-lg-4 col-md-6">
                <div class="card">
                  <img class="card-img-top img-responsive" src="assets/images/c2.jpg" alt="">
                  <div class="card-body">
                    <span class="fa fa-quote-left" aria-hidden="true"></span>
                    <h3 class="card-title">Mark CRAIG</h3>
                    <p class="sub-title mb-3">Commerçant</p>
                    <p class="card-text text-center mb-4">  
                      J'ai été impressionné par leur compréhension approfondie de mes besoins et leur engagement à les satisfaire                    </p>
                    <div class="text-right">
                     <span class="fa fa-quote-right" aria-hidden="true"></span>
                    </div>
                  
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 off-testi-2">
                <div class="card">
                  <img class="card-img-top img-responsive" src="assets/images/c3.jpg" alt="">
                  <div class="card-body">
                    <span class="fa fa-quote-left" aria-hidden="true"></span>
                    <h3 class="card-title">Hanif Wabi</h3>
                    <p class="sub-title mb-3">Compatable</p>
                    <p class="card-text text-center mb-4"> 
                      Je suis ravi de ma décision de faire confiance à cette agence
                    </p>
                     <div class="text-right">
                      <span class="fa fa-quote-right" aria-hidden="true"></span>
                     </div>
                    
                  </div>
                </div>
                
                
              </div>
              <div class="col-lg-4 offset-md-3 offset-lg-0 col-md-6 off-testi">
                <div class="card">
                  <img class="card-img-top img-responsive" src="assets/images/c1.jpg" alt="">
                  <div class="card-body">
                    <span class="fa fa-quote-left" aria-hidden="true"></span>
                    <h3 class="card-title">Henry DANDJOU</h3>
                    <p class="sub-title mb-3">Dévéloppeur
                    <p class="card-text text-center mb-4"> 
                     Mon bien a été vendu rapidement et au meilleur prix possible. Je suis reconnaissant, Merci!!  
                   </p>
                    <div class="text-right">
                     <span class="fa fa-quote-right" aria-hidden="true"></span>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>
        <!--.carousel-inner-->
      </div>
    </div>
  </div>
  <!--//customers -->
</section>
<!-- specifications -->
<section class="w3l-specifications-9">
    <div class="main-w3 py-5" id="stats">
        <div class="container py-md-3">
            <div class="heading text-center mx-auto">
                <h3 class="head">Nous sommes là pour vous</h3>
                <p class="my-3 head "> Nous sommes là pour vous, prêts à concrétiser vos projets immobiliers avec professionnalisme et engagement.</p>
              </div>
           <div class="main-cont-wthree-fea row pt-3 mt-5">
                <div class="grids-speci1 col-lg-3 col-6">
                    <div class="spec-2 text-center">
                        <span class="fa fa-map-marker"></span> 
                    <h3 class="title-spe">180+</h3>
                    <p>Emplacements des propriétés</p>
                </div>
                </div>
                <div class="grids-speci1 midd-eff-spe col-lg-3 col-6">
                    <div class="spec-2 text-center">
                    <span class="fa fa-users"></span>
                    <h3 class="title-spe">100+</h3>
                    <p>Agents professionnels</p>
                    </div>
                </div>
                <div class="grids-speci1 las-but col-lg-3 col-6  mt-lg-0 mt-4">
                    <div class="spec-2 text-center">
                    <span class="fa fa-building"></span>
                    <h3 class="title-spe">150+</h3>
                    <p>Propriété à vendre</p>
                    </div>
                </div>
                <div class="grids-speci1 las-t col-lg-3 col-6  mt-lg-0 mt-4">
                    <div class="spec-2 text-center">
                     <span class="fa fa-home"></span>
                        <h3 class="title-spe">220+ </h3>
                        <p>Propriété A louer</p>
                        </div>
                    </div>
            </div>
            
        </div>
    </div>
    <!-- //specifications -->
    
</section>
 
 <!-- grids block 5 -->
 <section class="w3l-footer-29-main" id="footer">
  <div class="footer-29">
    <div class="grids-forms-1 pb-5">
<div class="container">
  <div class="grids-forms">
      <div class="main-midd">
          <h4 class="title-head">Newsletter</h4>
          
      </div>
      <div class="main-midd-2">
          <form action="#" method="post" class="rightside-form">
              <input type="email" name="email" placeholder="Entrez votre Email">
              <button class="btn" type="submit">S'abonner</button>
          </form>
      </div>
    </div>
  </div>
  </div>
      <div class="container pt-5">
        
          <div class="d-grid grid-col-4 footer-top-29">
              <div class="footer-list-29 footer-1">
                  <h6 class="footer-title-29">À propos de nous</h6>
                  <ul>
                     <p>Nous sommes là pour transformer vos aspirations en réalité, guidés par l'excellence et le service client de qualité.</p>
                  </ul>
                  <div class="main-social-footer-29">
                    <h6 class="footer-title-29">Liens sociaux</h6>
                      <a href="#facebook" class="facebook"><span class="fa fa-facebook"></span></a>
                      <a href="#twitter" class="twitter"><span class="fa fa-twitter"></span></a>
                      <a href="#instagram" class="instagram"><span class="fa fa-instagram"></span></a>
                      <a href="#google-plus" class="google-plus"><span class="fa fa-google-plus"></span></a>
                      <a href="#linkedin" class="linkedin"><span class="fa fa-linkedin"></span></a>
                  </div>
              </div>
              <div class="footer-list-29 footer-2">
                  <ul>
                      <h6 class="footer-title-29">Liens utiles</h6>
                      <li><a href="services.html">Gestion</a></li>
                      <li><a href="services.html">Rapports</a></li>
                      <li><a href="services.html">Suivie</a></li>
                      <li><a href="contact.html">Support</a></li>
                  </ul>
              </div>
              <div class="footer-list-29 footer-3">
                  <div class="properties">
                      <h6 class="footer-title-29">Propriétés en vedette</h6>
                      <a href="#"><img src="assets/images/g7.jpg" class="img-responsive" alt=""><p>Nous sommes une agence de conseil internationale leader</p></a>
                      <a href="#"><img src="assets/images/g8.jpg" class="img-responsive" alt=""><p>Agence de Marketing Digital tous les outils fondamentaux</p></a>
                  </div>
              </div>
              <div class="footer-list-29 footer-4">
                  <ul>
                      <h6 class="footer-title-29">Liens rapides</h6>
                      <li><a href="index.html">Accueil</a></li>
                      <li><a href="apropos.html">A propos</a></li>
                      <li><a href="services.html">Services</a></li>
                      <li><a href="contact.html">Contact Nous</a></li>
                  </ul>
              </div>
          </div>
          <div class="bottom-copies text-center">
              <p class="copy-footer-29">© 2020 ML VISION IMMO . Tous droits reservés | MxxFxD</p>
               
          </div>
      </div>
  </div>
   <!-- move top -->
  <button onclick="topFunction()" id="movetop" title="Go to top">
              <span class="fa fa-angle-up"></span>
                 </button>
                 <script>
                     // When the user scrolls down 20px from the top of the document, show the button
                     window.onscroll = function () {
                         scrollFunction()
                     };
              
                     function scrollFunction() {
                         if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                             document.getElementById("movetop").style.display = "block";
                         } else {
                             document.getElementById("movetop").style.display = "none";
                         }
                     }
              
                     // When the user clicks on the button, scroll to the top of the document
                     function topFunction() {
                         document.body.scrollTop = 0;
                         document.documentElement.scrollTop = 0;
                     }
                 </script>
                 <!-- /move top -->
</section>
<!-- // grids block 5 -->
<script src="assets/js/jquery-3.3.1.min.js"></script>
<!-- //footer-28 block -->
</section>

<script>
  function updateAdditionalOptions() {
      const mainSelect = document.getElementById('mainSelect');
      const additionalSelect = document.getElementById('additionalSelect');
      additionalSelect.innerHTML = '';
      const selectedOption = mainSelect.value;
      switch (selectedOption) {
          case 'Achats':
              addOption(additionalSelect, 'Parcelles vides', 'Parcelles vides');
              addOption(additionalSelect, 'Parcelles avec petit bati', 'Parcelles avec petit bati');
              addOption(additionalSelect, 'Appartements', 'Appartements');
              addOption(additionalSelect, 'Maisons', 'Maisons');
              addOption(additionalSelect, 'Villa', 'Villa');
              addOption(additionalSelect, 'Appartements meublés de luxe', 'Appartements meublés de luxe');
              addOption(additionalSelect, 'Appartements meublés plein pied', 'Appartements meublés plein pied');
              addOption(additionalSelect, 'Appartements meublés T1 Bis', "Appartements meublés T1 Bis");
              addOption(additionalSelect, 'Appartements meublés duplex', 'Appartements meublés duplex');
              addOption(additionalSelect, 'Appartements meublés T1', 'Appartements meublés T1');
              addOption(additionalSelect, 'Appartements meublés T2', 'Appartements meublés T2');
              addOption(additionalSelect, 'Appartements meublés T3', 'Appartements meublés T3');
              addOption(additionalSelect, "Achat d'équippements de vidéos de surveillance", "Achat d'équippements de vidéos de surveillance");
              break;

          case 'Ventes':
              addOption(additionalSelect, 'Parcelles vides', 'Parcelles vides');
              addOption(additionalSelect, 'Parcelles avec petit bati', 'Parcelles avec petit bati');
              addOption(additionalSelect, 'Appartements', 'Appartements');
              addOption(additionalSelect, 'Maisons', 'Maisons');
              addOption(additionalSelect, 'Villa', 'Villa');
              addOption(additionalSelect, 'Appartements meublés de luxe', 'Appartements meublés de luxe');
              addOption(additionalSelect, 'Appartements meublés plein pied', 'Appartements meublés plein pied');
              addOption(additionalSelect, 'Appartements meublés T1 Bis', "Appartements meublés T1 Bis");
              addOption(additionalSelect, 'Appartements meublés duplex', 'Appartements meublés duplex');
              addOption(additionalSelect, 'Appartements meublés T1', 'Appartements meublés T1');
              addOption(additionalSelect, 'Appartements meublés T2', 'Appartements meublés T2');
              addOption(additionalSelect, 'Appartements meublés T3', 'Appartements meublés T3');
              break;

          case 'Appartements':
              addOption(additionalSelect, 'Appartements meublés de luxe', 'Appartements meublés de luxe');
              addOption(additionalSelect, 'Appartements meublés plein pied', 'Appartements meublés plein pied');
              addOption(additionalSelect, 'Appartements meublés T1 Bis', "Appartements meublés T1 Bis");
              addOption(additionalSelect, 'Appartements meublés duplex', 'Appartements meublés duplex');
              addOption(additionalSelect, 'Appartements meublés T1', 'Appartements meublés T1');
              addOption(additionalSelect, 'Appartements meublés T2', 'Appartements meublés T2');
              addOption(additionalSelect, 'Appartements meublés T3', 'Appartements meublés T3');
            break;

          case 'Locations':
              addOption(additionalSelect, 'Appartements', 'Appartements');
              addOption(additionalSelect, 'Maisons', 'Maisons');
              addOption(additionalSelect, 'Villa', 'Villa');
              addOption(additionalSelect, 'Appartements meublés de luxe', 'Appartements meublés de luxe');
              addOption(additionalSelect, 'Appartements meublés plein pied', 'Appartements meublés plein pied');
              addOption(additionalSelect, 'Appartements meublés T1 Bis', "Appartements meublés T1 Bis");
              addOption(additionalSelect, 'Appartements meublés duplex', 'Appartements meublés duplex');
              addOption(additionalSelect, 'Appartements meublés T1', 'Appartements meublés T1');
              addOption(additionalSelect, 'Appartements meublés T2', 'Appartements meublés T2');
              addOption(additionalSelect, 'Appartements meublés T3', 'Appartements meublés T3');
            break;

          case 'Gestion':
            addOption(additionalSelect, 'Affaires', 'Affaires');
            addOption(additionalSelect, 'Proposer un(s) service(s)', 'Proposer un(s) service(s)');
            break;

          case 'Decoration':
            addOption(additionalSelect, 'Tableau de décoration', 'Tableau de décoration');
            addOption(additionalSelect, 'Conseil en Décoration', 'Conseil en Décoration');
            addOption(additionalSelect, "Design d'Intérieur", "Design d'Intérieur");
            addOption(additionalSelect, 'Décoration Résidentielle', 'Décoration Résidentielle');
            addOption(additionalSelect, 'Peinture et Revêtements Muraux', 'Peinture et Revêtements Muraux');
            addOption(additionalSelect, 'Conception de Mobilier', 'Conception de Mobilier');
            addOption(additionalSelect, "Stylisme d'Accessoires", "Stylisme d'Accessoires");
            addOption(additionalSelect, "Conception d'Espaces Extérieurs", "Conception d'Espaces Extérieurs");
            addOption(additionalSelect, 'Conception de Présentoirs et Vitrines', 'Conception de Présentoirs et Vitrines');
            addOption(additionalSelect, 'Conception de Mobilier', 'Conception de Mobilier');
            break;

          case 'Plan':
            addOption(additionalSelect, 'Vues en plan', "Vues en plan (plan côtés; plan aménagé , plan d'électricité, plan de plomberie ;etc)");
            addOption(additionalSelect, 'Calcul de structure', 'Calcul de structure');
            addOption(additionalSelect, "Permis de construction", "Permis de construction");
            break;

          case 'Suivi':
            addOption(additionalSelect, 'Suivi de chantier', "Suivi de chantier (Nous garantissons que le projet avance conformément aux plans, aux spécifications et aux délais)");
            break;

          case 'Videos':
            addOption(additionalSelect, "Achat d'équippements", "Achat d'équippements");
            addOption(additionalSelect, 'Achat & Installations', 'Achat & Installations');
            addOption(additionalSelect, 'Suivie & Maintenance', 'Suivie & Maintenance');
            addOption(additionalSelect, 'Installations', 'Installations');
            break;

          case 'Barbele':
          addOption(additionalSelect, "Achat d'équippements", "Achat d'équippements");
            addOption(additionalSelect, 'Achat & Installations', 'Achat & Installations');
            addOption(additionalSelect, 'Maintenance', 'Maintenance');
            addOption(additionalSelect, 'Installations', 'Installations');
            break;
    }
  }

  // Fonction utilitaire pour ajouter une option à un élément select
  function addOption(selectElement, value, text) {
      const option = document.createElement('option');
      option.value = value;
      option.text = text;
      selectElement.add(option);
  }
</script>


<script>
    $(function () {
      $('.navbar-toggler').click(function () {
        $('body').toggleClass('noscroll');
      })
    });
  </script>
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
  </script>
  
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
  </script>

<!-- Smooth scrolling -->


</body>

</html>
<!-- // grids block 5 -->
