
<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 ">
    <div class="ps-checkout__billing">
        <br />
        <div class="ps-section__header text-center">
            <h3 class="ps-section__title" >Votre compte <?php //echo $etat;?></h3>
        </div>
        <?php if(isset($_COOKIE['email'])){
                  //$fid=600;
        if($fid >= 100 && $fid < 500 )
        {
            echo "
        <div class='ps-section__header text-center'>
            <h3 class='ps-section__title' style='color:gray;'>Vous possedez un compte BRONZE</h3>
        </div>
                 ";
        }
        else if($fid >=500 && $fid <1000)
        {
            echo "
        <div class='ps-section__header text-center'>
            <h3 class='ps-section__title' style='color:darkgoldenrod;'>Vous possedez un compte OR</h3>
        </div>
                 ";
        }
        else if($fid >=1000)
        {
            echo "
        <div class='ps-section__header text-center'>
            <h3 class='ps-section__title' style='color:rebeccapurple;'>Vous possedez un compte PREMIUM</h3>
        </div>
                 ";
        }
        else
        {
            echo "
        <div class='ps-section__header text-center'>
            <p>Vous ne possedez pas encore de compte de fidelite</p>
            <p>Faites des achats dans notre boutique pour augmenter vos points</p>
        </div>
                 ";
        }
              }
              else{
                  
              } 
       ?>
        </br>
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" >
              <div class="ps-block--countdown"><span class="number ps-block__number" data-from="0" data-to="<?php if(isset($_COOKIE['email'])){echo $ntpa;}else{echo "0";}?>"><?php if(isset($_COOKIE['email'])){echo $ntpa;}else{echo "0";}?></span>
                <h4>ntpa</h4>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 ">
              <div class="ps-block--countdown"><span class="number ps-block__number" data-from="0" data-to="<?php if(isset($_COOKIE['email'])){echo $ptpa;}else{echo "0";}?>"><?php if(isset($_COOKIE['email'])){echo $ptpa;}else{echo "0";}?></span>
                <h4>ptpa</h4>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 ">
              <div class="ps-block--countdown"><span class="number ps-block__number" data-from="0" data-to="<?php if(isset($_COOKIE['email'])){echo $fid;}else{echo "0";}?>"><?php if(isset($_COOKIE['email'])){echo $fid;}else{echo "0";}?></span>
                <h4>points</h4>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 ">
              <div class="ps-block--countdown"><span class="number ps-block__number" data-from="0" data-to="<?php if(isset($_COOKIE['email'])){echo $reduction;}else{echo "0";}?>"><?php if(isset($_COOKIE['email'])){echo $reduction;}else{echo "0";}?></span>
                <h4>Reductions</h4>
              </div>
            </div>

          </div>
        <div class="ps-section__header text-center">
            <h3 class="ps-section__title">Savoir Plus</h3>
            <p>les termes de fidelisation</p>
            <span>
                <img src="images/icons/floral.png" alt="" />
            </span>
        </div>
        <div class="ps-section__content">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
                    <div class="ps-block--award">
                        <img src="images/icons/award-2.png" alt="" />
                        <h4 style="color:darkgoldenrod;">
                            FIDELISATION ...OR...
                            <span> >=500 pts</span>
                        </h4>
                        <p>La FIDELISATION OR vous permet d'obtenir des reductions allants jusqu'a 45%. Les livraisons sont gratuites et vos reservations sont prioritaires.  </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
                    <div class="ps-block--award">
                        <img src="images/icons/award-2.png" alt="" />
                        <h4 style="color:rebeccapurple;border-color:mediumpurple;">
                            FIDELISATION PREMIUM
                            <span> >=1000 pts</span>
                        </h4>
                        <p>La FIDELISATION PREMIUM vous permet d'obtenir des reductions allants jusqu'a 60% et vous avez la priorite de service pour toutes vos commandes. Livraison gratuite, vous pouvez obtenir des produits gratuits et vos reservations sont prioritaires. </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
                    <div class="ps-block--award">
                        <img src="images/icons/award-2.png" alt="" />
                        <h4 style="color:gray;">
                            FIDELISATION BRONZE
                            <span> >=100 pts</span>
                        </h4>
                        <p>La FIDELISATION BRONZE vous permet d'obtenir des reductions allants jusqu'a 25%, et vos reservations sont prioritaires.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>