<?PHP
include ("Reclamation.php");
include ("ReclamationC.php");

if (isset($_POST['nom']) and isset($_POST['email']) and isset($_POST['objet']) and isset($_POST['libelle'])){
$Reclamation1=new Reclamation($_POST['nom'],$_POST['email'],$_POST['objet'],$_POST['libelle']);
//Partie2
/*
var_dump($Reclamation1);
}
*/
//Partie3
$Reclamation1C=new ReclamationC();
$Reclamation1C->ajouterReclamation($Reclamation1);
echo $_POST['libelle'];
header('Location: ../contact.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>