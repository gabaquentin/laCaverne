<?PHP
include "../entities/abonne.php";
include "../core/abonneC.php";


if (isset($_POST['recuPass']) and isset($_POST['recuPass1'])){
	if($_POST['recuPass'] == $_POST['recuPass1'])
	{
$abonne1C=new abonneC();
    $listeAbonnes=$abonne1C->afficherAbonnes();
    foreach($listeAbonnes as $row){
							   
			if($row['email'] == $_COOKIE['recovMail'])
				{
					$nom=$row['nom'];
					$prenom=$row['prenom'];
					$datenaiss=$row['datenaiss'];
					$tel=$row['telephone'];
					$email=$row['email'];
					$adresse=$row['adresse'];
				}
	}
	$email=$_COOKIE['recovMail'];
	$abonne=new abonne($nom,$prenom,$datenaiss,$tel,$email,$adresse,$_POST['recuPass']);
	$abonne1C->modifierAbonne($abonne,$email);
	header('Location: ../404-page.php?connect=connexion');

}
else
	header('Location:../404-page.php?connect=nouveauPass1');
}
//*/

?>