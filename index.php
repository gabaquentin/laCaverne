<?php
			  if(isset($_POST['email']))
			  {
				  setcookie('email', $_POST['email'], time() + 3600, null, null, false, true);
				  header("location: index.php");
			  }
			  else if(isset($_GET['email']))
			  {
				  setcookie('email', $_GET['email'], time() + 3600, null, null, false, true);
				  header("location: index.php");
			  }
			  else
			  {
				  include('views/rafraichirCookie.php');
			  }
			  
?>
<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7"><![endif]-->
<!--[if IE 8]><html class="ie ie8"><![endif]-->
<!--[if IE 9]><html class="ie ie9"><![endif]-->
<html lang="en">
  
<!-- Mirrored from warethemes.com/html/laCave/homepage-2.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Mar 2019 22:11:44 GMT -->
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
        <form class="ps-form--search-2" action = "recherche.php" method ="get">
          <h3>Enter your keyword</h3>
          <div class="form-group">
            <input class="form-control" type="text" placeholder="" name = "terme">
            <input class="ps-btn active ps-btn--fullwidth" type = "submit" name = "s" value = "Rechercher">
          </div>
        </form>
      </div>
    </div>
    <!-- Header-->
    <header class="header header--2" data-sticky="false">
      <div class="ps-container">
        <div class="header__top">
          <div class="left">
            <div class="btn-group ps-dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">USD<i class="fa fa-angle-down"></i></a>
              <ul class="dropdown-menu">
                <li><a href="#"> USD</a></li>
                <li><a href="#"> SGD</a></li>
                <li><a href="#">JPN</a></li>
              </ul>
            </div>
            <div class="btn-group ps-dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Language<i class="fa fa-angle-down"></i></a>
              <ul class="dropdown-menu">
                <li><a href="#">English</a></li>
                <li><a href="#">Japanese</a></li>
              </ul>
            </div>
          </div>
          <div class="center"><a class="ps-logo" href="homepage-2.php"><img src="images/logo.png" alt=""></a></div>
          <div class="right">
            <div class="header__actions btn-group ps-dropdown"><a class="ps-search-btn" href="#"><i class="ba-magnifying-glass"></i></a><a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ba-profile"></i></a>
              <ul class="dropdown-menu">
			  <?php
			  if(isset($_COOKIE['email']))
			  {
				  include("codex/abonne.php");
			  }
			  else
			  {
				  include("codex/invite.php");
			  }
			  ?>
              </ul>
              <div class="ps-cart"><a class="ps-cart__toggle" href="#"><span><i>20</i></span><i class="ba-shopping"></i></a>
                <div class="ps-cart__listing">
                  <div class="ps-cart__content">
                    <div class="ps-cart-item"><a class="ps-cart-item__close" href="#"></a>
                      <div class="ps-cart-item__thumbnail"><a href="product-detail.php"></a><img src="images/shopping-cart/1.png" alt="">
                      </div>
                      <div class="ps-cart-item__content"><a class="ps-cart-item__title" href="product-detail.php">Kingsman</a>
                        <p><span>Quantity:<i>12</i></span><span>Total:<i>£176</i></span></p>
                      </div>
                    </div>
                    <div class="ps-cart-item"><a class="ps-cart-item__close" href="#"></a>
                      <div class="ps-cart-item__thumbnail"><a href="product-detail.php"></a><img src="images/shopping-cart/2.png" alt="">
                      </div>
                      <div class="ps-cart-item__content"><a class="ps-cart-item__title" href="product-detail.php">Joseph</a>
                        <p><span>Quantity:<i>12</i></span><span>Total:<i>£176</i></span></p>
                      </div>
                    </div>
                    <div class="ps-cart-item"><a class="ps-cart-item__close" href="#"></a>
                      <div class="ps-cart-item__thumbnail"><a href="product-detail.php"></a><img src="images/shopping-cart/3.png" alt="">
                      </div>
                      <div class="ps-cart-item__content"><a class="ps-cart-item__title" href="product-detail.php">Todd Snyder</a>
                        <p><span>Quantity:<i>12</i></span><span>Total:<i>£176</i></span></p>
                      </div>
                    </div>
                    <div class="ps-cart-item"><a class="ps-cart-item__close" href="#"></a>
                      <div class="ps-cart-item__thumbnail"><a href="product-detail.php"></a><img src="images/shopping-cart/1.png" alt="">
                      </div>
                      <div class="ps-cart-item__content"><a class="ps-cart-item__title" href="product-detail.php">Todd Snyder</a>
                        <p><span>Quantity:<i>12</i></span><span>Total:<i>£176</i></span></p>
                      </div>
                    </div>
                    <div class="ps-cart-item"><a class="ps-cart-item__close" href="#"></a>
                      <div class="ps-cart-item__thumbnail"><a href="product-detail.php"></a><img src="images/shopping-cart/1.png" alt="">
                      </div>
                      <div class="ps-cart-item__content"><a class="ps-cart-item__title" href="product-detail.php">Todd Snyder</a>
                        <p><span>Quantity:<i>12</i></span><span>Total:<i>£176</i></span></p>
                      </div>
                    </div>
                    <div class="ps-cart-item"><a class="ps-cart-item__close" href="#"></a>
                      <div class="ps-cart-item__thumbnail"><a href="product-detail.php"></a><img src="images/shopping-cart/1.png" alt="">
                      </div>
                      <div class="ps-cart-item__content"><a class="ps-cart-item__title" href="product-detail.php">Todd Snyder</a>
                        <p><span>Quantity:<i>12</i></span><span>Total:<i>£176</i></span></p>
                      </div>
                    </div>
                  </div>
                  <div class="ps-cart__total">
                    <p>Number of items:<span>36</span></p>
                    <p>Item Total:<span>£528.00</span></p>
                  </div>
                  <div class="ps-cart__footer"><a href="cart.php">Check out</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <nav class="navigation">
          <div class="menu-toggle"><span></span></div>
          <ul class="menu">
            <li><a href="index.php">Accueil</a></li>
            <li><a href="about.php">A Propos</a></li>
            <li class="menu-item-has-children"><a href="product-listing.php">product</a><span class="sub-toggle"><i class="fa fa-angle-down"></i></span>
              <ul class="sub-menu">
                <li><a href="product-listing.php">Liste des produits</a></li>
                <li><a href="order-form.php">Commandes</a></li>
              </ul>
            </li>
            <li class="menu-item-has-children"><a href="about.php">Pages</a><span class="sub-toggle"><i class="fa fa-angle-down"></i></span>
              <ul class="sub-menu">
                <li><a href="menu.php">Menu</a></li>
                <li><a href="cart.php">Shopping Cart</a></li>
                <li><a href="checkout.php">Checkout</a></li>
                <li><a href="whishlist.php">Whishlist</a></li>
                <li><a href="compare.php">Compare</a></li>
                <li><a href="404-page.php">Page 404</a></li>
              </ul>
            </li>
            <li class="menu-item-has-children"><a href="blog-grid.php">Blogs</a><span class="sub-toggle"><i class="fa fa-angle-down"></i></span>
              <ul class="sub-menu">
                <li><a href="blog-grid.php">Blog Grid</a></li>
                <li class="menu-item-has-children"><a href="blog-list.php">Blog Listing</a><span class="sub-toggle"><i class="fa fa-angle-down"></i></span>
                  <ul class="sub-menu">
                    <li><a href="blog-list.php">Blog List Has Sidebar</a></li>
                    <li><a href="blog-list.php">Blog List No Sidebar</a></li>
                  </ul>
                </li>
                <li><a href="blog-detail.php">Blog Detail</a></li>
              </ul>
            </li>
            <li><a href="contact.php">Contact Us</a></li>
          </ul>
        </nav>
      </div>
    </header>
<div class="pb-80" id="slider">
      <div class="ps-carousel--animate ps-carousel--1st">
        <div class="item">
          <div class="ps-product--banner"><span class="ps-badge ps-badge--sale"><img src="images/icons/badge-brown.png" alt=""><i>0.5</i></span><img src="images/banner/maccaron.png" alt="">
            <div class="ps-product__footer"><a class="ps-btn" href="order-form.php">Order Now</a></div>
          </div>
        </div>
        <div class="item">
          <div class="ps-product--banner"><span class="ps-badge ps-badge--sale"><img src="images/icons/badge-brown.png" alt=""><i>50%</i></span><img src="images/banner/cupcake.png" alt="">
            <div class="ps-product__footer"><a class="ps-btn" href="order-form.php">Order Now</a></div>
          </div>
        </div>
      </div>
    </div>
    <!-- award-->
    <div class="ps-awards">
      <div class="ps-container">
        <div class="ps-section__header">
          <h3 class="ps-section__title">Delicieux</h3>
          <p>WELCOME TO THE STORE</p><span><img src="images/icons/floral.png" alt=""></span>
        </div>
        <div class="ps-section__content">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
              <div class="ps-block--award"><img src="images/icons/award-1.png" alt="">
                <h4> BAKERY OF THE YEAR <span>2011 -2012</span></h4>
                <p>Tart bear claw cake tiramisu chocolate bar gummies dragée lemon drops brownie. Jujubes chocolate cake sesame snaps</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
              <div class="ps-block--award"><img src="images/icons/award-2.png" alt="">
                <h4> CUPCAKES SHOP OF THE YEAR <span>2012 - 2015</span></h4>
                <p>Tart bear claw cake tiramisu chocolate bar gummies dragée lemon drops brownie. Jujubes chocolate cake sesame snaps</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
              <div class="ps-block--award"><img src="images/icons/award-2.png" alt="">
                <h4> BAKERY OF THE MONTH <span>2017 - 2018</span></h4>
                <p>Tart bear claw cake tiramisu chocolate bar gummies dragée lemon drops brownie. Jujubes chocolate cake sesame snaps</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="ps-block--signature">
        <div class="ps-block__thumbnail"><img src="images/signature.png" alt=""></div>
        <div class="ps-block__content">
          <p>“It seems that every country that can get its hands on butter has its opinion of what butter cream frosting should be. Some are made with eggs and butter.”</p><small>Sunshine -  CEO Bakery</small><img src="images/signature-2.png" alt="">
        </div>
      </div>
    </div>
    <!-- Home 1 products-->
    <div class="ps-home-product bg--cover" data-background="images/bg/home-product.jpg">
      <div class="ps-container">
        <div class="ps-section__header">
          <h3 class="ps-section__title">Deal of the day</h3>
          <p>breads every day</p><span><img src="images/icons/floral.png" alt=""></span>
        </div>
        <div class="ps-section__content">
          <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 ">
              <div class="ps-product ps-product--horizontal">
                <div class="ps-product__thumbnail"><img src="images/products/1.png" alt=""><a class="ps-product__overlay" href="product-detail.php"></a>
                  <ul class="ps-product__actions">
                    <li><a href="#" data-tooltip="Quick View"><i class="ba-magnifying-glass"></i></a></li>
                    <li><a href="#" data-tooltip="Favorite"><i class="ba-heart"></i></a></li>
                    <li><a href="#" data-tooltip="Add to Cart"><i class="ba-shopping"></i></a></li>
                  </ul>
                </div>
                <div class="ps-product__content"><a class="ps-product__title" href="product-detail.php">Red sugar flower</a>
                  <p><a href="product-list.php">Bakery</a> - <a href="product-list.php">Sweet</a> - <a href="product-list.php">Bio</a></p>
                  <select class="ps-rating">
                    <option value="1">1</option>
                    <option value="1">2</option>
                    <option value="1">3</option>
                    <option value="1">4</option>
                    <option value="2">5</option>
                  </select>
                  <p class="ps-product__price">£5.00</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 ">
              <div class="ps-product ps-product--horizontal">
                <div class="ps-product__thumbnail"><span class="ps-badge"><img src="images/icons/badge-red.png" alt=""><i>New</i></span><img src="images/products/2.png" alt=""><a class="ps-product__overlay" href="product-detail.php"></a>
                  <ul class="ps-product__actions">
                    <li><a href="#" data-tooltip="Quick View"><i class="ba-magnifying-glass"></i></a></li>
                    <li><a href="#" data-tooltip="Favorite"><i class="ba-heart"></i></a></li>
                    <li><a href="#" data-tooltip="Add to Cart"><i class="ba-shopping"></i></a></li>
                  </ul>
                </div>
                <div class="ps-product__content"><a class="ps-product__title" href="product-detail.php">Red sugar flower</a>
                  <p><a href="product-list.php">Bakery</a> - <a href="product-list.php">Sweet</a> - <a href="product-list.php">Bio</a></p>
                  <select class="ps-rating">
                    <option value="1">1</option>
                    <option value="1">2</option>
                    <option value="1">3</option>
                    <option value="1">4</option>
                    <option value="2">5</option>
                  </select>
                  <p class="ps-product__price">£5.00</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 ">
              <div class="ps-product ps-product--horizontal">
                <div class="ps-product__thumbnail"><span class="ps-badge"><img src="images/icons/badge-red.png" alt=""><i>New</i></span><img src="images/products/3.png" alt=""><a class="ps-product__overlay" href="product-detail.php"></a>
                  <ul class="ps-product__actions">
                    <li><a href="#" data-tooltip="Quick View"><i class="ba-magnifying-glass"></i></a></li>
                    <li><a href="#" data-tooltip="Favorite"><i class="ba-heart"></i></a></li>
                    <li><a href="#" data-tooltip="Add to Cart"><i class="ba-shopping"></i></a></li>
                  </ul>
                </div>
                <div class="ps-product__content"><a class="ps-product__title" href="product-detail.php">Red sugar flower</a>
                  <p><a href="product-list.php">Bakery</a> - <a href="product-list.php">Sweet</a> - <a href="product-list.php">Bio</a></p>
                  <select class="ps-rating">
                    <option value="1">1</option>
                    <option value="1">2</option>
                    <option value="1">3</option>
                    <option value="1">4</option>
                    <option value="2">5</option>
                  </select>
                  <p class="ps-product__price">£5.00</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 ">
              <div class="ps-product ps-product--horizontal">
                <div class="ps-product__thumbnail"><span class="ps-badge ps-badge--sale"><img src="images/icons/badge-brown.png" alt=""><i>50%</i></span><img src="images/products/4.png" alt=""><a class="ps-product__overlay" href="product-detail.php"></a>
                  <ul class="ps-product__actions">
                    <li><a href="#" data-tooltip="Quick View"><i class="ba-magnifying-glass"></i></a></li>
                    <li><a href="#" data-tooltip="Favorite"><i class="ba-heart"></i></a></li>
                    <li><a href="#" data-tooltip="Add to Cart"><i class="ba-shopping"></i></a></li>
                  </ul>
                </div>
                <div class="ps-product__content"><a class="ps-product__title" href="product-detail.php">Red sugar flower</a>
                  <p><a href="product-list.php">Bakery</a> - <a href="product-list.php">Sweet</a> - <a href="product-list.php">Bio</a></p>
                  <select class="ps-rating">
                    <option value="1">1</option>
                    <option value="1">2</option>
                    <option value="1">3</option>
                    <option value="1">4</option>
                    <option value="2">5</option>
                  </select>
                  <p class="ps-product__price"><del>£8.50</del> £5.00</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 ">
              <div class="ps-product ps-product--horizontal">
                <div class="ps-product__thumbnail"><img src="images/products/5.png" alt=""><a class="ps-product__overlay" href="product-detail.php"></a>
                  <ul class="ps-product__actions">
                    <li><a href="#" data-tooltip="Quick View"><i class="ba-magnifying-glass"></i></a></li>
                    <li><a href="#" data-tooltip="Favorite"><i class="ba-heart"></i></a></li>
                    <li><a href="#" data-tooltip="Add to Cart"><i class="ba-shopping"></i></a></li>
                  </ul>
                </div>
                <div class="ps-product__content"><a class="ps-product__title" href="product-detail.php">Red sugar flower</a>
                  <p><a href="product-list.php">Bakery</a> - <a href="product-list.php">Sweet</a> - <a href="product-list.php">Bio</a></p>
                  <select class="ps-rating">
                    <option value="1">1</option>
                    <option value="1">2</option>
                    <option value="1">3</option>
                    <option value="1">4</option>
                    <option value="2">5</option>
                  </select>
                  <p class="ps-product__price">£5.00</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 ">
              <div class="ps-product ps-product--horizontal">
                <div class="ps-product__thumbnail"><img src="images/products/6.png" alt=""><a class="ps-product__overlay" href="product-detail.php"></a>
                  <ul class="ps-product__actions">
                    <li><a href="#" data-tooltip="Quick View"><i class="ba-magnifying-glass"></i></a></li>
                    <li><a href="#" data-tooltip="Favorite"><i class="ba-heart"></i></a></li>
                    <li><a href="#" data-tooltip="Add to Cart"><i class="ba-shopping"></i></a></li>
                  </ul>
                </div>
                <div class="ps-product__content"><a class="ps-product__title" href="product-detail.php">Red sugar flower</a>
                  <p><a href="product-list.php">Bakery</a> - <a href="product-list.php">Sweet</a> - <a href="product-list.php">Bio</a></p>
                  <select class="ps-rating">
                    <option value="1">1</option>
                    <option value="1">2</option>
                    <option value="1">3</option>
                    <option value="1">4</option>
                    <option value="2">5</option>
                  </select>
                  <p class="ps-product__price">£5.00</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Testimonials-->
    <div class="ps-testimonials bg--parallax" data-background="images/bg/testimonials.jpg">
      <div class="ps-container">
        <div class="ps-carousel--testimonial owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="0" data-owl-nav="false" data-owl-dots="true" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="off" data-owl-animate-in="fadeIn" data-owl-animate-out="fadeOut">
          <div class="ps-block--tesimonial">
            <div class="ps-block__user"><img src="images/user/1.jpg" alt=""></div>
            <div class="ps-block__content">
              <select class="ps-rating">
                <option value="1">1</option>
                <option value="1">2</option>
                <option value="1">3</option>
                <option value="1">4</option>
                <option value="2">5</option>
              </select>
              <p>“Dessert pudding dessert jelly beans cupcake sweet caramels gingerbread. Fruitcake biscuit cheesecake. Cookie topping sweet muffin pudding tart bear claw sugar plum croissant.”</p>
            </div>
            <div class="ps-block__footer">
              <p><strong>Logan May</strong>  - CEO & Founder Invision</p>
            </div>
          </div>
          <div class="ps-block--tesimonial">
            <div class="ps-block__user"><img src="images/user/2.jpg" alt=""></div>
            <div class="ps-block__content">
              <select class="ps-rating">
                <option value="1">1</option>
                <option value="1">2</option>
                <option value="1">3</option>
                <option value="1">4</option>
                <option value="2">5</option>
              </select>
              <p>“Dessert pudding dessert jelly beans cupcake sweet caramels gingerbread. Fruitcake biscuit cheesecake. Cookie topping sweet muffin pudding tart bear claw sugar plum croissant.”</p>
            </div>
            <div class="ps-block__footer">
              <p><strong>Logan May</strong>  - CEO & Founder Invision</p>
            </div>
          </div>
          <div class="ps-block--tesimonial">
            <div class="ps-block__user"><img src="images/user/3.jpg" alt=""></div>
            <div class="ps-block__content">
              <select class="ps-rating">
                <option value="1">1</option>
                <option value="1">2</option>
                <option value="1">3</option>
                <option value="1">4</option>
                <option value="2">5</option>
              </select>
              <p>“Dessert pudding dessert jelly beans cupcake sweet caramels gingerbread. Fruitcake biscuit cheesecake. Cookie topping sweet muffin pudding tart bear claw sugar plum croissant.”</p>
            </div>
            <div class="ps-block__footer">
              <p><strong>Logan May</strong>  - CEO & Founder Invision</p>
            </div>
          </div>
          <div class="ps-block--tesimonial">
            <div class="ps-block__user"><img src="images/user/4.jpg" alt=""></div>
            <div class="ps-block__content">
              <select class="ps-rating">
                <option value="1">1</option>
                <option value="1">2</option>
                <option value="1">3</option>
                <option value="1">4</option>
                <option value="2">5</option>
              </select>
              <p>“Dessert pudding dessert jelly beans cupcake sweet caramels gingerbread. Fruitcake biscuit cheesecake. Cookie topping sweet muffin pudding tart bear claw sugar plum croissant.”</p>
            </div>
            <div class="ps-block__footer">
              <p><strong>Logan May</strong>  - CEO & Founder Invision</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- home-blog-->
    <div class="ps-home-blog">
      <div class="ps-container">
        <div class="ps-section__header">
          <h3 class="ps-section__title">Our history</h3>
          <p>Live with passion</p><span><img src="images/icons/floral.png" alt=""></span>
        </div>
        <div class="ps-section__content">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
              <div class="ps-post">
                <div class="ps-post__thumbnail"><img src="images/posts/home.jpg" alt=""><a class="ps-post__overlay" href="blog-detail.php"></a></div>
                <div class="ps-post__content"><span class="ps-post__posted">March 31, 2018</span><a class="ps-post__title" href="#">BUTTERY TOAST</a><span class="ps-post__byline">By<a href="#"> Alena Studio</a></span>
                  <p>Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further…</p><a class="ps-post__morelink" href="blog-detail.php">Read more</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
              <div class="ps-post">
                <div class="ps-post__thumbnail"><img src="images/posts/home1.jpg" alt=""><a class="ps-post__overlay" href="blog-detail.php"></a></div>
                <div class="ps-post__content"><span class="ps-post__posted">March 31, 2018</span><a class="ps-post__title" href="#">Pumpkin buns with salted</a><span class="ps-post__byline">By<a href="#"> Alena Studio</a></span>
                  <p>Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further…</p><a class="ps-post__morelink" href="blog-detail.php">Read more</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
              <div class="ps-post">
                <div class="ps-post__thumbnail"><img src="images/posts/home-3.jpg" alt=""><a class="ps-post__overlay" href="blog-detail.php"></a></div>
                <div class="ps-post__content"><span class="ps-post__posted">March 31, 2018</span><a class="ps-post__title" href="#">Tartine style bread</a><span class="ps-post__byline">By<a href="#"> Alena Studio</a></span>
                  <p>Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further…</p><a class="ps-post__morelink" href="blog-detail.php">Read more</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--delivery form-->
    <div class="ps-delivery-form bg--parallax" data-background="images/bg/delivery-form.jpg">
      <div class="ps-block--delivery">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
            <div class="ps-block__content">
              <div class="ps-block--contact">
                <h4>OFFICE AT AMERICA</h4>
                <h5>BASEMENT COMPANY, NEW YORK</h5>
                <p><i class="fa fa-envelope"></i><a href="mailto:helo@bredy.com">hello@laCave.com</a></p>
                <p><i class="fa fa-phone-square"></i> +1 650-253-0000</p>
              </div>
              <div class="ps-block--contact">
                <h4>OFFICE AT PARIS</h4>
                <h5>189/32 BASEMENT COMPANY, PARIS, FRANCE</h5>
                <p><i class="fa fa-envelope"></i><a href="mailto:helo@bredy.com">hello@laCave.com</a></p>
                <p><i class="fa fa-phone-square"></i> +1 650-253-0000</p>
              </div>
              <div class="ps-block--contact">
                <h4>OFFICE AT CANADA</h4>
                <h5>189/32 BASEMENT COMPANY, PARIS, FRANCE</h5>
                <p><i class="fa fa-envelope"></i><a href="mailto:helo@bredy.com">hello@laCave.com</a></p>
                <p><i class="fa fa-phone-square"></i> +1 650-253-0000</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
            <form class="ps-form--delivery" action="http://warethemes.com/html/laCave/do_action" method="post">
              <h3>Delivery Now</h3>
              <p>Delivery free wafer fruitcake. Pastry toffee wafer gingerbread liquorice. Apple pie gingerbread caramels toffee tart bonbon.</p>
              <div class="form-group">
                <label>Name <sup>*</sup></label>
                <input class="form-control" type="text" placeholder="" name = "terme">
              </div>
              <div class="form-group">
                <label>Email <sup>*</sup></label>
                <input class="form-control" type="email" placeholder="">
              </div>
              <div class="form-group">
                <label>Phone Number <sup>*</sup></label>
                <input class="form-control" type="text" placeholder="" name = "terme">
              </div>
              <div class="form-group submit">
                <button class="ps-btn">Order Now</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <footer class="ps-footer">
      <div class="ps-footer__content">
        <div class="ps-container">
          <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 ">
              <div class="ps-site-info"><a class="ps-logo" href="index-2.php"><img src="images/logo-dark.png" alt=""></a>
                <p>Tart bear claw cake tiramisu chocolate bar gummies dragée lemon drops brownie.</p>
                <ul class="ps-list--social">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 ">
              <form class="ps-form--subscribe-offer" action="http://warethemes.com/html/laCave/do_action" method="post">
                <h4>Get news & offer</h4>
                <div class="form-group">
                  <input class="form-control" type="text" placeholder="Your Email...">
                  <button>Subscribe</button>
                </div>
                <p>* Don't worry, we never spam</p>
              </form>
              <div class="ps-footer__contact">
                <h4>Contact with me</h4>
                <p>PO Box 16122 Collins Street West,Victoria 8007 Australia</p>
                <P>(+84 ) 7534 9773, (+84 ) 874 548</P>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 ">
              <div class="ps-footer__open">
                <h4>Time to Open</h4>
                <p>
                  Monday - Friday: <br>08:00 am - 08:30 pm <br>
                  Saturday - Sunday:<br>
                  10:00 am - 16:30 pm
                </p>
              </div>
              <ul class="ps-list--payment">
                <li><a href="#"><img src="images/payment-method/visa.png" alt=""></a></li>
                <li><a href="#"><img src="images/payment-method/master-card.png" alt=""></a></li>
                <li><a href="#"><img src="images/payment-method/paypal.png" alt=""></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="ps-footer__copyright">
        <div class="container">
          <p>
            ©  Copyright by <strong>laCave Store</strong>. Design by<a href="#"> Alena Studio.</a></p>
        </div>
      </div>
    </footer>
    <div class="ps-popup" id="subscribe" data-time="10000">
      <div class="ps-popup__content"><a class="ps-popup__close" href="#"><i class="fa fa-remove"></i></a>
        <form class="ps-form--subscribe-popup bg--cover" action="http://warethemes.com/html/laCave/do_action" method="post" data-background="images/bg/subscribe.jpg">
          <h3>subscribe email</h3>
          <p>Follow us & get<strong> 20% OFF</strong>coupon for first purchase !!!!!</p>
          <div class="form-group">
            <input class="form-control" type="text" placeholder="Enter your email...">
            <button class="ps-btn ps-btn--yellow">Subscribe</button>
          </div>
        </form>
      </div>
    </div>
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

<!-- Mirrored from warethemes.com/html/laCave/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Mar 2019 22:11:44 GMT -->
</html>