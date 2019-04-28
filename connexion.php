<?php
session_start();
if(isset($_SESSION['recovMail']) and isset($_SESSION['code']))
{
	setcookie('recovMail', $_SESSION['recovMail'], time() + 5*60, null, null, false, true);
	setcookie('code', $_SESSION['code'], time() + 5*60, null, null, false, true);
	unset($_SESSION['recovMail']);
	unset($_SESSION['code']);
	header("Refresh: 0;url=http://localhost/laCave/connexion.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $_SESSION['connect']; ?></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="favicon.jpg"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="connexion/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="connexion/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="connexion/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="connexion/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="connexion/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="connexion/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="connexion/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="connexion/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="connexion/css/util.css">
	<link rel="stylesheet" type="text/css" href="connexion/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
                <?php
				if(isset($_SESSION['connect']))
				{
                    if($_SESSION['connect'] == "connexion" || $_SESSION['connect'] == "connexion1" || $_SESSION['connect'] == "connexion2")
					include("codex/connexion.php");
				else if($_SESSION['connect'] == "inscription" || $_SESSION['connect'] == "inscription1" || $_SESSION['connect'] == "inscription2" || $_SESSION['connect'] == "inscription3")
					include("codex/inscription.php");
				else if($_SESSION['connect'] == "recuperation" || $_SESSION['connect'] == "recuperation1" || $_SESSION['connect'] == "recuperation2")
					include("codex/recuperation.php");
				else if($_SESSION['connect'] == "confirmCode")
					include("codex/confirmCode.php");
				else if($_SESSION['connect'] == "nouveauPass" || $_SESSION['connect'] == "nouveauPass1")
					include("codex/nouveauPass.php");
				else if($_SESSION['connect'] == "activation")
					include("codex/activeCompte.php");
				else
					header("location: 404-page.php");
				}
				else
					header("location: about.php");

                ?>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="connexion/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="connexion/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="connexion/vendor/bootstrap/js/popper.js"></script>
	<script src="connexion/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="connexion/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="connexion/vendor/daterangepicker/moment.min.js"></script>
	<script src="connexion/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="connexion/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="connexion/js/main.js"></script>
	<script src="js/controle.js"></script>

</body>
</html>