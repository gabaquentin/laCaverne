<?php		
if(isset($_POST['recuEmail']))
{		
                 include ('C:/wamp64/www/laCave/phpmailer/envoiMail.php');
				}
else
{
	if($_SESSION['connect'] == "recuperation1")
	{
		echo "<p style='color:red;'>l'email n'existe pas dans notre base de donné</p></br>";
	}
	if($_SESSION['connect'] == "recuperation2")
	{
		echo "<p style='color:red;'>le code a expiré reéssayez ou vous n'avez <a href='404-page.php?connect=inscription'> pas de compte? </a></p></br>";
	}
	echo "
				<form class='login100-form validate-form flex-sb flex-w' method='post' action='connexion.php'>
					<span class='login100-form-title p-b-32'>
						Recupere ton compte
					</span>

					<span class='txt1 p-b-11'>
						Entrez votre adresse Email
					</span>
					<div class='wrap-input100 validate-input m-b-36' data-validate = 'Champ obligatoire'>
						<input class='input100' type='email' name='recuEmail' >
						<span class='focus-input100'></span>
					</div>
					
					<div class='flex-sb-m w-full p-b-48'>
						<div>
							<a href='index.php' class='txt3'>
								Retourner a la page d'accueil <=
							</a>
						</div>
					</div>

					<div class='container-login100-form-btn'>
						<button class='login100-form-btn'>
							Confirmer
						</button>
					</div>

				</form>
				";
}
				
?>