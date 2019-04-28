<?php 
if(isset($_COOKIE['recovMail']) and isset($_COOKIE['code']))
{
	if($_SESSION['confirmCode'] == $_COOKIE['code'])
	{
		if($_SESSION['connect'] == "nouveauPass1")
		{
			echo "<p style='color:red;'>les mots de passes ne sont pas identiques</p>";
		}
echo "
				<form class='login100-form validate-form flex-sb flex-w' method='post' action='views/modifPass.php'>
					<span class='login100-form-title p-b-32'>
						Recupere ton compte
					</span>

					<span class='txt1 p-b-11'>
						Entrez votre Nouveau mot de passe
					</span>
					<div class='wrap-input100 validate-input m-b-36' data-validate = 'Champ obligatoire'>
						<input class='input100' type='password' name='recuPass' >
						<span class='focus-input100'></span>
					</div>
					<span class='txt1 p-b-11'>
						Entrez de nouveau Nouveau mot de passe
					</span>
					<div class='wrap-input100 validate-input m-b-36' data-validate = 'Champ obligatoire'>
						<input class='input100' type='password' name='recuPass1' >
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
					</br>
					</br>
					
				</form>
				";
		
	}
	else
	{
		echo "<p style='color:red;'>code erroné <i class='fa fa-cross'></i></p></br>";
		include ('C:/wamp64/www/laCave/codex/confirmCode.php');
/*
echo "</br>";
echo $_COOKIE['recovMail'];
echo "</br>";
echo $_COOKIE['code'];
*/
}
}
else
{
	header('Location:  http://localhost/laCave/404-page.php?connect=recuperation2');
}
				
?>