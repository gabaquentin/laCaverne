				
				
				<form class="login100-form validate-form flex-sb flex-w" method="post" action="views/ajoutAbonne.php" id="inscription">
					<span class="login100-form-title p-b-32">
						Inscription
						</br>
						<?php
							if(isset($_SESSION['connect']))
							{
								if($_SESSION['connect'] == "inscription1" || $_SESSION['connect'] == "inscription3")
									echo "</br><a href='404-page.php?connect=connexion'> Le compte existe deja  Se connecter !! </a>";
								else if($_SESSION['connect'] == "inscription2")
									echo "</br><h6>Les mots de passes ne sont pas identiques !!</h6>";
							}
							
						?>
						
					</span>

					<span class="txt1 p-b-11">
						Nom
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Champ obligatoire">
						<input class="input100" type="text" name="name" >
						<span class="focus-input100"></span>
					</div>
					
					<span class="txt1 p-b-11">
						Prenom
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Champ obligatoire">
						<input class="input100" type="text" name="prenom" >
						<span class="focus-input100"></span>
					</div>
					
					<span class="txt1 p-b-11">
						Date de naissance
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Champ obligatoire">
						<input class="input100" type="date" name="datenaiss" >
						<span class="focus-input100"></span>
					</div>
					
					<span class="txt1 p-b-11">
						Numero de telephone 
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Champ obligatoire">
						<input placeholder="<?php if(isset($_SESSION['connect'])){ if($_SESSION['connect'] == "inscription3"){ echo "Modifiez le numero de telephone";}} ?>" class="input100" type="number" name="tel" id="tel">
						<span class="focus-input100"></span>
					</div>
					
					<span class="txt1 p-b-11">
						E-mail
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Champ obligatoire">
						<input placeholder="<?php if(isset($_SESSION['connect'])){ if($_SESSION['connect'] == "inscription1"){ echo "Modifiez l'email";}} ?>" class="input100" type="email" name="email" id="email" >
						<span class="focus-input100"></span>
					</div>
					
					<span class="txt1 p-b-11">
						Adresse
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Champ obligatoire">
						<input class="input100" type="text" name="adresse" >
						<span class="focus-input100"></span>
					</div>
					
					<span class="txt1 p-b-11">
						Mot de passe
					</span>
					<div class="wrap-input100 validate-input m-b-12" data-validate = "Champ obligatoire">
						<input class="input100" type="password" name="pass" >
						<span class="focus-input100"></span>
					</div>
					
					<span class="txt1 p-b-11">
						Confirmer le Mot de passe
					</span>
					<div class="wrap-input100 validate-input m-b-12" data-validate = "Champ obligatoire">
						<input class="input100" type="password" name="pass1" >
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
							<a href="index.php" class="txt3">
								Retourner a la page d'accueil <=
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn">
						<input type="submit" class="login100-form-btn">
					</div>
					</br>
					<div class="flex-sb-m w-full p-b-48">

						<div>
						</br>
						</br>
								<p class="txt1 p-b-11" id="erreur" style="color:red;"></p>
						</div>
					</div>
					
				</form>
				<script src="js/controle1.js"></script>