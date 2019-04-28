<?PHP
include "../entities/administrateur.php";
include "../core/administrateurC.php";


if (isset($_POST['nom']) and isset($_POST['tel']) and isset($_POST['email']) and isset($_POST['pass'] )){
	if($_POST['pass'] == $_POST['pass2'])
	{
$admin1=new Administrateur($_POST['nom'],$_POST['tel'],$_POST['email'],$_POST['pass']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$admin1C=new administrateurC();
$admin1C->ajouterAdmin($admin1);
$mail=$_POST['email'];
header("location: ../index.php");
/*
      if ($abonne1C->rechercherDouble($_POST['email']) == 0) 
      {
			 $abonne1C->ajouterAbonne($abonne1);
             setcookie('email', $_POST['email'], time() + 365*24*3600, null, null, false, true);
             header("location: ../index.php");
		 }
		 else
		 {
			 header('Location:../404-page.php?connect=inscription1');
		 }
		 */

}
else
{
	header("location: ../login.php?inscription");
}
}
//*/

?>