				<form class="login100-form validate-form flex-sb flex-w" method="post" action="views/verifInfoAbonne.php">
					<span class="login100-form-title p-b-32">
						Connexion
					</span>
					<span class="txt1 p-b-11">
					<h6><?php if(isset($_SESSION['connect'])){ if($_SESSION['connect'] == "connexion1"){ echo "<p style='color:red;'>Email ou Mot de passe incorect !! Reesayez</p>";}}?></h6>
                    <h6><?php if(isset($_SESSION['connect'])){ if($_SESSION['connect'] == "connexion2"){ echo "<p style='color:red;'>Votre session a expiré || Veuillez vous reconnecter</p>";}}?></h6>
					</span>
					<span class="txt1 p-b-11">
						Email
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Champ obligatoire">
						<input class="input100" type="email" name="email" >
						<span class="focus-input100"></span>
					</div>
					
					<span class="txt1 p-b-11">
						Mot de passe
					</span>
					<div class="wrap-input100 validate-input m-b-12" data-validate = "Champ obligatoire">
						<span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
						<input class="input100" type="password" name="pass" >
						<span class="focus-input100"></span>
					</div>
					
					<div class="flex-sb-m w-full p-b-48">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Souviens-toi de moi
							</label>
						</div>

						<div>
							<a href="404-page.php?connect=recuperation" class="txt3">
								Mot de passe oublié?
							</a>
							</br>
							<a href="index.php" class="txt3">
								Retourner a la page d'accueil <=
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Confirmer
						</button>
					</div>

				</form>