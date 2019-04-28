<?php
	include('views/rafraichirCookie.php');

include "core/produitC.php";
$produit1C=new produitC();
if(isset($_GET['reference']))
{
$Produit=$produit1C->recupererproduit($_GET['reference']);
}
?>
<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7"><![endif]-->
<!--[if IE 8]><html class="ie ie8"><![endif]-->
<!--[if IE 9]><html class="ie ie9"><![endif]-->
<html lang="en">
  
<!-- Mirrored from warethemes.com/html/bready/product-detail.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Mar 2019 22:18:49 GMT -->
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
        <h1> Product Details</h1>
        <div class="ps-breadcrumb">
          <ol class="breadcrumb">
            <li><a href="index-2.php">Home</a></li>
            <li class="active">Product Details</li>
          </ol>
        </div>
      </div>
    </div>
    <main class="ps-main">
      <div class="ps-container">
        <div class="ps-product--detail">
          <div class="row">
			<?php 
			if(isset($_GET['reference']))
			{
			foreach($Produit as $row){
				$nom=$row['nom'];
				$prix=$row['prix'];
				$image=$row['image'];
				$categorie=$row['categorie'];
				$description=$row['description'];
				echo "
			<div class='col-lg-5 col-md-6 col-sm-12 col-xs-12 '>
              <div class='ps-product__thumbnail'>
                <div class='ps-product__image'>
                  <div class='item'><a href='data:image/jpeg;base64,".base64_encode($image)."'><img src='data:image/jpeg;base64,".base64_encode($image)."' height='500' width='300' class='img-thumnail' /></a></div>
                </div>
              </div>
            </div>
			  <div class='col-lg-7 col-md-6 col-sm-12 col-xs-12 '>
              <div class='ps-product__info'>
                <h1 class='text-uppercase'>$nom</h1>
                <div class='ps-product__rating'>
                  <select class='ps-rating'>
                    <option value='1'>1</option>
                    <option value='1'>2</option>
                    <option value='1'>3</option>
                    <option value='1'>4</option>
                    <option value='2'>5</option>
                  </select>
                </div>
                <h3 class='ps-product__price'>$prix DT</h3>
                <div class='ps-product__desc'>
                  <h5>DESCRIPTION DU PRODUIT</h5>
                  <p>$description</p>
                </div>
                <div class='ps-product__status'>
                  <h5>CATEGORIES:<a href='product-listing.php'> $categorie</a></h5>
                </div>
                <div class='ps-product__shopping'>
                  <form class='ps-form--shopping' action='http://warethemes.com/html/bready/do_action' method='post'>
                    <select class='ps-select' title='Choose Size'>
                      <option value='1'>Option 1</option>
                      <option value='2'>Option 2</option>
                      <option value='3'>Option 3</option>
                    </select>
                    <div class='form-group--number'>
                      <button class='minus'><span>-</span></button>
                      <input class='form-control' type='text' value='1'>
                      <button class='plus'><span>+</span></button>
                    </div>
                    <div class='ps-product__actions'><a class='mr-10' href='whishlist.php' data-tootip='Favorite'><i class='ba-heart'></i></a><a href='#' data-tooltip='Ajouter au panier'><i class='ba-shopping'></i></a></div>
                  </form>
                </div>
                <div class='ps-product__sharing'><a class='ps-btn ps-btn--yellow' href='cart.php'>Commander Maintenant</a>
                </div>
              </div>
            </div>
				 ";
				}
			}
			?>
          </div>
          <div class="ps-product__content">
            <ul class="tab-list" role="tablist">
              <li class="active"><a href="#tab_01" aria-controls="tab_01" role="tab" data-toggle="tab">Overview</a></li>
              <li><a href="#tab_02" aria-controls="tab_02" role="tab" data-toggle="tab">Review</a></li>
              <li><a href="#tab_03" aria-controls="tab_03" role="tab" data-toggle="tab">PRODUCT TAGs</a></li>
              <li><a href="#tab_04" aria-controls="tab_04" role="tab" data-toggle="tab">ADDITIONAL</a></li>
            </ul>
          </div>
          <div class="tab-content">
            <div class="tab-pane active" role="tabpanel" id="tab_01">
              <p>Caramels tootsie roll carrot cake sugar plum. Sweet roll jelly bear claw liquorice. Gingerbread lollipop dragée cake. Pie topping jelly-o. Fruitcake dragée candy canes tootsie roll. Pastry jelly-o cupcake. Bonbon brownie soufflé muffin.</p>
              <p>Sweet roll soufflé oat cake apple pie croissant. Pie gummi bears jujubes cake lemon drops gummi bears croissant macaroon pie. Fruitcake tootsie roll chocolate cake Carrot cake cake bear claw jujubes topping cake apple pie. Jujubes gummi bears soufflé candy canes topping gummi bears cake soufflé cake. Cotton candy soufflé sugar plum pastry sweet roll..</p>
            </div>
            <div class="tab-pane" role="tabpanel" id="tab_02">
              <p>1 review for <strong>Cupcakes Red Flowers</strong></p>
              <div class="ps-review">
                <div class="ps-review__thumbnail"><img src="images/user/1.jpg" alt=""></div>
                <div class="ps-review__content">
                  <header>
                    <select class="ps-rating">
                      <option value="1">1</option>
                      <option value="1">2</option>
                      <option value="1">3</option>
                      <option value="1">4</option>
                      <option value="5">5</option>
                    </select>
                    <p>By<a href="#"> Alena Studio</a> - November 25, 2017</p>
                  </header>
                  <p>Soufflé danish gummi bears tart. Pie wafer icing. Gummies jelly beans powder. Chocolate bar pudding macaroon candy canes chocolate apple pie chocolate cake. Sweet caramels sesame snaps halvah bear claw wafer. Sweet roll soufflé muffin topping muffin brownie. Tart bear claw cake tiramisu chocolate bar gummies dragée lemon drops brownie.</p>
                </div>
              </div>
              <form class="ps-form--product-review" action="http://warethemes.com/html/bready/do_action" method="post">
                <h4>ADD YOUR REVIEW</h4>
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                    <div class="form-group">
                      <label>Name:<sup>*</sup></label>
                      <input class="form-control" type="text" placeholder="">
                    </div>
                    <div class="form-group">
                      <label>Email:<sup>*</sup></label>
                      <input class="form-control" type="email" placeholder="">
                    </div>
                    <div class="form-group">
                      <label>Your rating</label>
                      <select class="ps-rating">
                        <option value="1">1</option>
                        <option value="1">2</option>
                        <option value="1">3</option>
                        <option value="1">4</option>
                        <option value="5">5</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12 ">
                    <div class="form-group">
                      <label>Your Review:</label>
                      <textarea class="form-control" rows="6"></textarea>
                    </div>
                    <div class="form-group">
                      <button class="ps-btn ps-btn--yellow">Submit Reviews</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <div class="tab-pane" role="tabpanel" id="tab_03">
              <p>Add your tag <span> *</span></p>
              <form class="ps-form--create-tags" action="http://warethemes.com/html/bready/_action" method="post">
                <div class="form-group">
                  <input class="form-control" type="text" placeholder="">
                  <button class="ps-btn ps-btn--yellow">Add Tags</button>
                </div>
              </form>
              <p>Use spaces to separate tags. Use single quotes ( * ) for phrases.</p>
            </div>
            <div class="tab-pane" role="tabpanel" id="tab_04">
              <form class="ps-form--addition" action="http://warethemes.com/html/bready/do_action" method="post">
                <div class="form-group">
                  <textarea class="form-control" rows="6" placeholder="Enter your addition here..."></textarea>
                </div>
                <div class="form-group">
                  <button class="ps-btn ps-btn--yellow">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- Relate product-->
    <div class="ps-related-product">
      <div class="ps-container">
        <div class="ps-section__header text-center">
          <h3 class="ps-section__title">Produits relatifs</h3>
          <p>Vous pourriez aimer </p><span><img src="images/icons/floral.png" alt=""></span>
        </div>
        <div class="ps-section__content">
          <div class="row">
		  <?php
		  if(isset($_GET['reference']))
		  {
		  $ProduitR=$produit1C->produitrelatifs($_GET['reference'],$categorie);
		  foreach($ProduitR as $row)
		  {
			  				   $image=$row['image'];
							   $nom=$row['nom'];
							   $categorie=$row['categorie'];
							   $prix=$row['prix'];
							   $reference=$row['reference'];
			  echo "
            <div class='col-lg-3 col-md-4 col-sm-6 col-xs-12 '>
              <div class='ps-product'>
                <div class='ps-product__thumbnail'><img src='data:image/jpeg;base64,".base64_encode($image)."' height='200' width='200' class='img-thumnail' style='border-radius:50%;'><a class='ps-product__overlay' href='product-detail.php'></a>
                  <ul class='ps-product__actions'>
                    <li><a href='product-detail.php?reference=$reference' data-tooltip='Quick View'><i class='ba-magnifying-glass'></i></a></li>
                    <li><a href='#' data-tooltip='Favorite'><i class='ba-heart'></i></a></li>
                    <li><a href='#' data-tooltip='Add to Cart'><i class='ba-shopping'></i></a></li>
                  </ul>
                </div>
                <div class='ps-product__content'><a class='ps-product__title' href='product-detail.php'>$nom</a>
                  <p><a href='product-list.php'>$categorie</a></p>
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

		  }
		  ?>
          </div>
          <div class="ps-section__footer text-center"><a class="ps-btn" href="recherche.php?s=Rechercher&amp;terme=<?php echo $categorie;?>">Charger plus</a></div>
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

<!-- Mirrored from warethemes.com/html/bready/product-detail.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Mar 2019 22:20:51 GMT -->
</html>