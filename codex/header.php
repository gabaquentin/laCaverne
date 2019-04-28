
	  <div class="header__top">
        <div class="ps-container">
          <div class="left">
            <p>5, Rue de la Libye 2000 - Le BARDO - TUNISIE</p>
          </div>
          <div class="right">
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
            <ul class="ps-list--social">
              <li><a href="https://www.facebook.com/lacaverneagouter/"><i class="fa fa-facebook"></i></a></li>
              <li><a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fwww.instagram.com%2Flacaverneagouter%2F%3Ffbclid%3DIwAR0YcgKejjGmBhAGYzDlS2QUqy9ULm_suuRdaE9hxmre7CZm2J0TEIiPBb4&h=AT2kG6Mr9k3BN_4qrcb6_4_He2PujySjg2Zjga8Fxb1DnbnE4BxZWu_yS_v8LvyJUVplgXW4cr8IBtW1h8tEkJ_8ZRIFC1CtvABBU8sTjrKHqOgBnRsLOWXOebKJWj3jfB3TyQ"><i class="fa fa-instagram"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <nav class="navigation">
        <div class="ps-container"><a class="ps-logo" href="index.php"><img src="images/logo-light.jpg" alt=""></a>
          <div class="menu-toggle"><span></span></div>
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
                  <p>Nombre de produits:<span>36</span></p>
                  <p>Prix Total:<span>£528.00</span></p>
                </div>
                <div class="ps-cart__footer"><a href="cart.php">Consulter le panier</a></div>
              </div>
            </div>
          </div>
          <ul class="menu">
            <li><a href="index.php">Accueil</a></li>
            <li><a href="about.php">A Propos</a></li>
            <li class="menu-item-has-children"><a href="product-listing.php">product</a><span class="sub-toggle"><i class="fa fa-angle-down"></i></span>
              <ul class="sub-menu">
                <li><a href="product-listing.php">Product Listing</a></li>
                <li><a href="order-form.php">Order Form</a></li>
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
            <li class="current-menu-item menu-item-has-children"><a href="blog-grid.php">Blogs</a><span class="sub-toggle"><i class="fa fa-angle-down"></i></span>
              <ul class="sub-menu">
                <li><a href="blog-grid.php">Blog Grid</a></li>
                <li class="current-menu-item menu-item-has-children"><a href="blog-list.php">Blog Listing</a><span class="sub-toggle"><i class="fa fa-angle-down"></i></span>
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
        </div>
      </nav>