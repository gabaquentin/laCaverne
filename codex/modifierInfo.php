            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 ">
              <div class="ps-checkout__billing">
                <h3>Modifiez vos informations</h3>
				</br>
                    <div class="form-group form-group--inline">
                      <label>Nom
                      </label>
                      <div class="form-group__content">
                        <input value="<?php if(isset($_COOKIE['email'])){echo $nom;}else{echo "";}?>" class="form-control" type="text" name="nom">
                      </div>
                    </div>
                    <div class="form-group form-group--inline">
                      <label>Prenom
                      </label>
                      <div class="form-group__content">
                        <input value="<?php if(isset($_COOKIE['email'])){echo $prenom;}else{echo "";}?>" class="form-control" type="text" name="prenom">
                      </div>
                    </div>
                    <div class="form-group form-group--inline">
                      <label>Date de naissance
                      </label>
                      <div class="form-group__content">
                        <input value="<?php if(isset($_COOKIE['email'])){echo $datenaiss;}else{echo "";}?>" class="form-control" type="date" name="datenaiss">
                      </div>
                    </div>
                    <div class="form-group form-group--inline">
                      <label>Telephone
                      </label>
                      <div class="form-group__content">
                        <input value="<?php if(isset($_COOKIE['email'])){echo $tel;}else{echo "";}?>" class="form-control" type="text" name="tel">
                      </div>
                    </div>
                    <div class="form-group form-group--inline">
                      <label>Nouveau Mot de passe
                      </label>
                      <div class="form-group__content">
                        <input value="<?php if(isset($_COOKIE['email'])){echo $pass;}else{echo "";}?>" class="form-control" type="text" name="pass">
                      </div>
                    </div>
                    <div class="form-group form-group--inline">
                      <label>Email
                      </label>
                      <div class="form-group__content">
                        <input value="<?php if(isset($_COOKIE['email'])){echo $email;}else{echo "";}?>" class="form-control" type="email" name="email">
                      </div>
                    </div>
                    <div class="form-group form-group--inline">
                      <label>Addresse
                      </label>
                      <div class="form-group__content">
                        <input value="<?php if(isset($_COOKIE['email'])){echo $adresse;}else{echo "";}?>" class="form-control" type="text" name="adresse">
                      </div>
                    </div>
              </div>
            </div>
