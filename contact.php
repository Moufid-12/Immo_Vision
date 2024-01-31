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
  </head>
  <body>


<!-- Top Menu 1 -->
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
<section class="w3l-contact-breadcrum">
  <div class="breadcrum-bg py-sm-5 py-4">
    <div class="container py-lg-3">

      <h2>Contactez nous</h2>
      <p><a href="index.html">Accueil</a> &nbsp; / &nbsp; Contact</p>
   
	 </div>
  </div>
</section>
<!-- contact form -->
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
<section class="w3l-contacts-2" id="contact">
	<div class="contacts-main">
		
		<div class="form-41-mian py-5">
			<div class="container py-md-3">
				<h3 class="cont-head">Entrer en contact</h3>
				<div class="d-grid align-form-map">
					<div class="form-inner-cont">
						
						<form action="traitement.php" method="post" class="main-input">
							<div class="top-inputs d-grid">
								<input type="text" placeholder="Nom complet" name="name"  required="">
								<input type="email" name="email" placeholder="email"  required="">
							</div>
							<input type="text" placeholder="Téléphone" name="tel" required="">
              <input type="text" placeholder="Objet" name="objet" required="">
							<textarea placeholder="Message" name="message" required=""></textarea>
							<div class="text-right">
								<button type="submit" class="btn btn-theme3">Envoyer</button>
							</div>
						</form>
					</div>
					
					<div class="contact-right">
						<img src="assets/images/ab-2.jpg" class="img-fluid" alt="">
					</div>
				</div>
			</div>
		</div>
		<div class="contant11-top-bg py-5">
			<div class="container py-md-3">
				<div class="d-grid contact section-gap">
					<div class="contact-info-left d-grid text-center">
						<div class="contact-info">
							<span class="fa fa-location-arrow" aria-hidden="true"></span>
							<h4>Addresse</h4>
							<p>Lot 535, Saint Michel Cotonou</p>
						</div>
						<div class="contact-info">
							<span class="fa fa-phone" aria-hidden="true"></span>
							<h4>Téléphone</h4>
							<p><a href="tel:+229 52 02 55 55">+229 52 02 55 55</a></p>
              <p><a href="tel:+229 52 02 55 55">+229 41 40 00 00</a></p>
						</div>
						<div class="contact-info">
							<span class="fa fa-envelope-open-o" aria-hidden="true"></span>
							<h4>Nos E-mails</h4>
							<p><a href="mailto:mail@mlvisionimmo.com" class="email">mlvisionimmo@outlook.fr</a></p>
							<p><a href="mailto:mail@example.com" class="email">info@mlvisionimmo.com</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15860.73401388493!2d2.3912372499999996!3d6.37029365!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sbj!4v1702684178541!5m2!1sfr!2sbj" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
</section>
<!-- //contact form -->
 
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


