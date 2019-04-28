<?php
	include('views/rafraichirCookie.php');

?>

<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7"><![endif]-->
<!--[if IE 8]><html class="ie ie8"><![endif]-->
<!--[if IE 9]><html class="ie ie9"><![endif]-->
<html lang="en">
  
<!-- Mirrored from warethemes.com/html/bready/checkout.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Mar 2019 22:21:04 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link href="favicon.png" rel="icon">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Bready</title>
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script%7CLora:400,700" rel="stylesheet">
    <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="plugins/bakery-icon/style.css">
    <link rel="stylesheet" href="plugins/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/owl-carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css">
    <link rel="stylesheet" href="plugins/bootstrap-select/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="plugins/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="plugins/slick/slick/slick.css">
    <link rel="stylesheet" href="plugins/lightGallery-master/dist/css/lightgallery.min.css">
    <link rel="stylesheet" href="css/style.css">
    <!--HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--WARNING: Respond.js doesn't work if you view the page via file://-->
    <!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script><![endif]-->
    <!--[if IE 7]><body class="ie7 lt-ie8 lt-ie9 lt-ie10"><![endif]-->
    <!--[if IE 8]><body class="ie8 lt-ie9 lt-ie10"><![endif]-->
    <!--[if IE 9]><body class="ie9 lt-ie10"><![endif]-->
  </head>
  <body>
    <div class="ps-search">
      <div class="ps-search__content"><a class="ps-search__close" href="#"><span></span></a>
        <form class="ps-form--search-2" action = "recherche.php" method = "get">
          <h3>Enter your keyword</h3>
          <div class="form-group">
            <input class="form-control" type="text" placeholder="" name = "terme">
            <input class="ps-btn active ps-btn--fullwidth" type = "submit" name = "s" value = "Rechercher">
          </div>
        </form>
      </div>
    </div>
    <!-- header-->
    <header class="header header--3" data-sticky="false">
	<?php
	include("codex/header.php");
	?>
    </header>
    <div class="ps-hero bg--cover" data-background="images/hero/about.jpg">
      <div class="ps-hero__content">
        <h1>Checkout</h1>
        <div class="ps-breadcrumb">
          <ol class="breadcrumb">
            <li><a href="index.php">Accueil</a></li>
            <li class="active">Livraison</li>
          </ol>
        </div>
      </div>
    </div>
    <div class="ps-checkout pt-40 pb-40">
      <div class="ps-container">
        <form class="ps-form--checkout" action="views/ajoutLivraison.php?priorite=<?php if(isset($_COOKIE['email'])){ if($fid < 100){echo 1;}else if($fid < 500){echo 2;}else if($fid < 1000){echo 3;}else{echo 4;} }else{echo 0;} ?>" method="post">
          <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 ">
              <div class="ps-checkout__billing">
                <h3>Livraison</h3>
                    <div class="form-group form-group--inline">
                      <label>Nom<span>*</span>
                      </label>
                      <div class="form-group__content">
                        <input class="form-control" type="text" name="nom" value="<?php if(isset($_COOKIE['email'])){echo $nom; }else{echo "";}?>" required>
                      </div>
                    </div>
                    <div class="form-group form-group--inline">
                      <label>Prenom<span>*</span>
                      </label>
                      <div class="form-group__content">
                        <input class="form-control" type="text" name="prenom" value="<?php if(isset($_COOKIE['email'])){echo $prenom; }else{echo "";}?>" required>
                      </div>
                    </div>
                    <div class="form-group form-group--inline">
                      <label>E-mail<span>*</span>
                      </label>
                      <div class="form-group__content">
                        <input class="form-control" type="email" name="mail" value="<?php if(isset($_COOKIE['email'])){echo $email; }else{echo "";}?>" required>
                      </div>
                    </div>
                    <div class="form-group form-group--inline">
                      <label>Telephone<span>*</span>
                      </label>
                      <div class="form-group__content">
                        <input class="form-control" type="text" name="tel" value="<?php if(isset($_COOKIE['email'])){echo $tel; }else{echo "";}?>" required>
                      </div>
                    </div>
                    <div class="form-group form-group--inline">
                      <label>Ville<span>*</span>
                      </label>
                      <div class="form-group__content">
                        <input class="form-control" type="text" name="ville" required>
                      </div>
                    </div>
                    <div class="form-group form-group--inline">
                      <label>Addresse<span>*</span>
                      </label>
                      <div class="form-group__content">
                        <input class="form-control" type="text" name="adresse" value="<?php if(isset($_COOKIE['email'])){echo $adresse; }else{echo "";}?>" required>
                      </div>
                    </div>
                    <div class="form-group form-group--inline">
                      <label>Code postal<span>*</span>
                      </label>
                      <div class="form-group__content">
                        <input class="form-control" type="text" name="poste" required>
                      </div>
                    </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
              <div class="ps-checkout__order">
                <header>
                  <h3>Votre Commande</h3>
                </header>
                <div class="content">
                  <table class="table ps-checkout__products">
                    <thead>
                      <tr>
                        <th class="text-uppercase">Produits</th>
                        <th class="text-uppercase">Total</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>HABITANT x1</td>
                        <td>$300.00</td>
                      </tr>
                      <tr>
                        <td>Card Subtitle</td>
                        <td>$300.00</td>
                      </tr>
                      <tr>
                        <td>Order Total</td>
                        <td>$300.00</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <footer>
                  <h3>Methode de paiement</h3>
                  <div class="form-group cheque">
                    <div class="ps-radio ps-radio--small">
                      <input class="form-control" type="radio" id="rdo01" name="payment" checked>
                      <label for="rdo01">Paiement a la livraison</label>
                    </div>
                  </div>
                  <div class="form-group paypal">
                    <div class="ps-radio ps-radio--small">
                      <input class="form-control" type="radio" name="payment" id="rdo02">
                      <label for="rdo02">Paypal</label>
                    </div>
                    <ul class="ps-payment-method">
                      <li><a href="#"><img src="images/payment/1.png" alt=""></a></li>
                      <li><a href="#"><img src="images/payment/2.png" alt=""></a></li>
                      <li><a href="#"><img src="images/payment/3.png" alt=""></a></li>
                    </ul>
                    <button class="ps-btn ps-btn--fullwidth ps-btn--yellow" name="ajouter">PASSER VOTRE COMMANDE</button>
                  </div>
                </footer>
              </div>
              <div class="ps-shipping">
                <h3>LIVRAISON GRATUITE</h3>
                <p>INSCRIVEZ VOUS A NOTRE SITE POUR OBTENIR DES LIVRAISONS GRATUITES.<br> <a href="404-page.php?connect=inscription"> S'inscrire </a> ou <a href="404-page.php?connect=connexion"> se connecter </a> si vous etes deja inscrit.</p>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="ps-site-features">
      <div class="ps-container">
        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 ">
            <div class="ps-block--iconbox"><i class="ba-delivery-truck-2"></i>
              <h4>Free Shipping <span> On Order Over$199</h4>
              <p>Want to track a package? Find tracking information and order details from Your Orders.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 ">
            <div class="ps-block--iconbox"><i class="ba-biscuit-1"></i>
              <h4>Master Chef<span> WITH PASSION</h4>
              <p>Shop zillions of finds, with new arrivals added daily.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 ">
            <div class="ps-block--iconbox"><i class="ba-flour"></i>
              <h4>Natural Materials<span> protect your family</h4>
              <p>We always ensure the safety of all products of store</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 ">
            <div class="ps-block--iconbox"><i class="ba-cake-3"></i>
              <h4>Attractive Flavor <span>ALWAYS LISTEN</span></h4>
              <p>We offer a 24/7 customer hotline so you’re never alone if you have a question.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="ps-footer">
	<?php
	include("codex/footer.php");
	?>
    </footer>
    <div id="back2top"><i class="fa fa-angle-up"></i></div>
    <div class="ps-loading">
      <div class="rectangle-bounce">
        <div class="rect1"></div>
        <div class="rect2"></div>
        <div class="rect3"></div>
        <div class="rect4"></div>
        <div class="rect5"></div>
      </div>
    </div>
    <!-- Plugins-->
    <script src="plugins/jquery/dist/jquery.min.js"></script>
    <script src="plugins/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="plugins/owl-carousel/owl.carousel.min.js"></script>
    <script src="plugins/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="plugins/jquery-bar-rating/dist/jquery.barrating.min.js"></script>
    <script src="plugins/jquery.waypoints.min.js"></script>
    <script src="plugins/jquery.countTo.js"></script>
    <script src="plugins/jquery.matchHeight-min.js"></script>
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="plugins/gmap3.min.js"></script>
    <script src="plugins/lightGallery-master/dist/js/lightgallery-all.min.js"></script>
    <script src="plugins/slick/slick/slick.min.js"></script>
    <script src="plugins/slick-animation.min.js"></script>
    <script src="plugins/jquery.slimscroll.min.js"></script>
    <!-- Custom scripts-->
    <script src="js/main.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDsUcTjt43mTheN9ruCsQVgBE-wgN6_AfY&amp;region=GB"></script>
  </body>

<!-- Mirrored from warethemes.com/html/bready/checkout.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Mar 2019 22:23:43 GMT -->
</html>