<?php
				if(!isset($_COOKIE['email']))
			  {
				  header("location: 404-page.php?connect=connexion2");
				  }
				  

                include('views/rafraichirCookie.php');
?>

<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7"><![endif]-->
<!--[if IE 8]><html class="ie ie8"><![endif]-->
<!--[if IE 9]><html class="ie ie9"><![endif]-->
<html lang="en">
  
<!-- Mirrored from warethemes.com/html/laCave/checkout.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Mar 2019 22:21:04 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link href="favicon.jpg" rel="icon">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>laCave</title>
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
        <h1>Mon Profil</h1>
        <div class="ps-breadcrumb">
          <ol class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li class="active">Profil</li>
          </ol>
        </div>
      </div>
    </div>
    <div class="ps-checkout pt-40 pb-40">
      <div class="ps-container">
        <form class="ps-form--checkout" action="views/modifierAbonne.php<?php if(isset($_GET['modif'])){ if($_GET['modif'] == "yes"){ echo"?modif=yes"; } } ?>" method="post">
          <div class="row">
		  <?php if(isset($_GET['modif'])){ if($_GET['modif'] == "yes"){ include("codex/modifierInfo.php");}}?>
		  <?php if(isset($_GET['info'])){ if($_GET['info'] == "yes"){ include("codex/PlusInfoA.php");}}?>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
              <div class="ps-checkout__order">
                <header>
                  <h3>Mes informations personnels</h3>
                </header>
                <div class="content">
                  <table class="table ps-checkout__products">
                    <thead>
                      <tr>
                        <th class="text-uppercase">Nom</th>
                        <th class="text-uppercase"><?php if(isset($_COOKIE['email'])){echo $nom;}else{echo "";}?></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Prenom</td>
                        <td><?php if(isset($_COOKIE['email'])){echo $prenom;}else{echo "";}?></td>
                      </tr>
                      <tr>
                        <td>Date de naissance</td>
                        <td><?php if(isset($_COOKIE['email'])){echo $datenaiss;}else{echo "";}?></td>
                      </tr>
                      <tr>
                        <td>Email</td>
                        <td><?php if(isset($_COOKIE['email'])){echo $email;}else{echo "";}?></td>
                      </tr>
                      <tr>
                        <td>Telephone</td>
                        <td><?php if(isset($_COOKIE['email'])){echo $tel;}else{echo "";}?></td>
                      </tr>
                      <tr>
                        <td>Adresse de residence</td>
                        <td><?php if(isset($_COOKIE['email'])){echo $adresse;}else{echo "";}?></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <footer>
                  <h3>A savoir => <a href="profil.php?info=yes">Plus</a></h3>
                  <div class="form-group cheque">
                  <table class="table ps-checkout__products">
                    <thead>
                      <tr>
                        <th class="text-uppercase">Compte de fidelite</th>
                        <th class="text-uppercase"><?php if(isset($_COOKIE['email'])){if($etat_fid == 1){echo "Activé";}else{echo "Desactivé";}}?></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Produits achetés</td>
                        <td><?php if(isset($_COOKIE['email'])){echo $ntpa;}?></td>
                      </tr>
                        <tr>
                            <td>Prix Total des achats</td>
                            <td>
                                <?php if(isset($_COOKIE['email'])){echo $ptpa;}?>
                            </td>
                        </tr>
                        <?php
                        if(isset($_COOKIE['email'])){
                            if($fid < 100)
                            {
                                echo "
                        <tr>
                            <td>Fidélisation</td>
                            <td>
                            <progress value='$fid' max='100'>$fid</progress>
                            </td>
                        </tr>
                                    ";
                            }
                            else 
                            {
                                $f=ceil($fid);
                                echo "
                        <tr>
                            <td>Point de fidelité</td>
                            <td>
                            $f pts
                            </td>
                        </tr>
                                     ";
                            }
                        }
                        ?>
                    </tbody>
                  </table>
                  </div>
                  <div class="form-group paypal">
				  <?php
				  if(!isset($_GET['modif']))
				  {
					  $info="aucun";
					  if(isset($_GET['modifier'])){
						  if($_GET['modifier'] == "yesp"){
							  $info = "Incorrect || <a href='404-page.php?connect=recuperation'>oublié ? </a>";
							  }
				              }
					  echo "
                  <table class='table ps-checkout__products'>
                    <tbody>
                      <tr>
                        <td class='text-uppercase'>Mot de passe</td>
                        <td class='text-uppercase'>$info</td>
                      </tr>
                    </tbody>
                  </table>
                      <div class='form-group__content'>
                        <input class='form-control' type='password' name='pass1'>
                      </div>";
				  }
?>
                    <button class="ps-btn ps-btn--fullwidth ps-btn--yellow" name="<?php if (isset($_GET['modif'])){ if($_GET['modif'] == "yes"){ echo"yes"; }else{ echo"no"; } }?>">Modifier mes infos personnels</button>
                  </div>
                </footer>
              </div>
            </div>
          </div>
        </form>
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

<!-- Mirrored from warethemes.com/html/laCave/checkout.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Mar 2019 22:23:43 GMT -->
</html>