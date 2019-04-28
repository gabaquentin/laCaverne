<?php
	include('views/rafraichirCookie.php');

try
{
 $bdd = new PDO("mysql:host=localhost;dbname=cave", "root", "");
 $bdd ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(Exception $e)
{
  die("Une érreur a été trouvé : " . $e->getMessage());
}
$bdd->query("SET NAMES UTF8");

if (isset($_GET["s"]) AND $_GET["s"] == "Rechercher")
{
 $_GET["terme"] = htmlspecialchars($_GET["terme"]); //pour sécuriser le formulaire contre les intrusions html
 $terme = $_GET['terme'];
 $terme = trim($terme); //pour supprimer les espaces dans la requête de l'internaute
 $terme = strip_tags($terme); //pour supprimer les balises html dans la requête

 if (isset($terme))
 {
  $terme = strtolower($terme);
  $select_terme = $bdd->prepare("SELECT reference,nom, categorie,prix,description ,image FROM produit WHERE nom LIKE ? OR categorie LIKE ?");
  $select_terme->execute(array("%".$terme."%", "%".$terme."%"));
 }
 else
 {
  $message = "Vous devez entrer votre requete dans la barre de recherche";
 }
}
?>
<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7"><![endif]-->
<!--[if IE 8]><html class="ie ie8"><![endif]-->
<!--[if IE 9]><html class="ie ie9"><![endif]-->
<html lang="en">

<?php 
$titre = 'Boutique';

include "config.php";
        $sql="SElECT * From categorie ";
        $db = config::getConnexion();
    
        $cat=$db->query($sql);

?>
  
<!-- Mirrored from warethemes.com/html/bready/product-listing.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Mar 2019 22:15:40 GMT -->
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
    <div class="ps-hero bg--cover" data-background="images/hero/product.jpg">
      <div class="ps-hero__content">
        <h1> Produits</h1>
        <div class="ps-breadcrumb">
          <ol class="breadcrumb">
            <li><a href="index-2.php">Accueil</a></li>
            <li class="active">Produits</li>
          </ol>
        </div>
      </div>
    </div>
    <main class="ps-shop">
      <div class="ps-shop__wrapper">
        <div class="ps-shop__banners">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
              <div class="ps-collection"><a class="ps-collection__overlay" href="#"></a><img src="images/collection/product-1.jpg" alt=""></div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
              <div class="ps-collection"><a class="ps-collection__overlay" href="#"></a><img src="images/collection/product-2.jpg" alt=""></div>
            </div>
          </div>
        </div>
        <div class="ps-shop__sort">
          <p>Show 1-12 of 35 result</p>
          <select class="ps-select" title="Default Sorting">
            <option value="1">Option 1</option>
            <option value="2">Option 2</option>
            <option value="3">Option 3</option>
          </select>
        </div>
        <div class="ps-row">
          
            
			  <?php
  while($row = $select_terme->fetch())
  {
							   $image=$row['image'];
							   $nom=$row['nom'];
							   $categorie=$row['categorie'];
							   $prix=$row['prix'];
							   $reference=$row['reference'];
							   echo "
							   <div class='ps-column'>
							   <div class='ps-product'>
				<div class='ps-product__thumbnail'><img src='data:image/jpeg;base64,".base64_encode($image)."' height='200' width='200' class='img-thumnail' /><a class='ps-product__overlay' href='product-detail.php'></a>
                <ul class='ps-product__actions'>
                  <li><a href='product-detail.php?reference=$reference' data-tooltip='Quick View'><i class='ba-magnifying-glass'></i></a></li>
                  <li><a href='#' data-tooltip='Favorite'><i class='ba-heart'></i></a></li>
                  <li><a href='#' data-tooltip='Add to Cart'><i class='ba-shopping'></i></a></li>
                </ul>
                </div>
			    <div class='ps-product__content'><a class='ps-product__title' href='product-detail.php'>$nom</a>
                <p>$categorie</p>
                <select class='ps-rating'>
                  <option value='1'>1</option>
                  <option value='1'>2</option>
                  <option value='1'>3</option>
                  <option value='1'>4</option>
                  <option value='2'>5</option>
                </select>
                <p class='ps-product__price'>$prix DT</p>
                </div>
				</div>
				</div>
							   ";
						   }
			  ?>
            
          
        </div>
        <div class="ps-pagination">
          <ul class="pagination">
            <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">...</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
          </ul>
        </div>
      </div>
      <aside class="ps-sidebar">
        <aside class="widget widget_sidebar widget_category">
          <h3 class="widget-title">Categories</h3>
          <ul class="ps-list--checked">
		                <?php
      foreach($cat as $row)
      {
    $cat_nom = $row['nomcat'];
	if($cat_nom == $_GET['terme'])
	{
    echo "<li class='current'><a href=\"recherche.php?s=Rechercher&amp;terme=". $cat_nom ."\">". $cat_nom ."</a></li>";
	}
	else
	{
	echo "<li><a href=\"recherche.php?s=Rechercher&amp;terme=". $cat_nom ."\">". $cat_nom ."</a></li>";
	}
      }

    ?>
          </ul>
        </aside>
        <aside class="widget widget_filter widget_sidebar">
          <h3 class="widget-title">Filtrer par pix</h3>
          <div class="ps-slider" data-default-min="0" data-default-max="0" data-max="50" data-step="1" ></div>
          <p class="ps-slider__meta">Price:<span class="ps-slider__value ps-slider__min"></span>-<span class="ps-slider__value ps-slider__max"></span></p><a class="ac-slider__filter ps-btn ps-btn--sm" href="#">Rechercher</a>
        </aside>
        <aside class="widget widget_sidebar widget_category">
          <h3 class="widget-title">Brands</h3>
          <ul class="ps-list--checked">
            <li class="current"><a href="product-listing.php">Sugar (521)</a></li>
            <li><a href="product-listing.php">Food Stylist (76)</a></li>
            <li><a href="product-listing.php">Halo (69)</a></li>
            <li><a href="product-listing.php">ProjectNews (36)</a></li>
            <li><a href="product-listing.php">B&G (108)</a></li>
            <li><a href="product-listing.php">Louis Vuiton (47)</a></li>
          </ul>
        </aside>
        <aside class="widget widget_sidebar widget_ads">
          <h3 class="widget-title">Ads banner</h3><a href="#"><img src="images/widget-ads.jpg" alt=""></a>
        </aside>
      </aside>
    </main>
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

<!-- Mirrored from warethemes.com/html/bready/product-listing.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Mar 2019 22:18:49 GMT -->
</html>