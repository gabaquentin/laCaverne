<?PHP
include ("Avis.php");
include ("AvisC.php");

if (isset($_POST['ok']) and isset($_POST['nom']) and isset($_POST['email']) and isset($_POST['note']) and isset($_POST['commentaire'])){
$Avis1=new Avis($_POST['nom'],$_POST['email'],$_POST['note'],$_POST['commentaire']);
//Partie2
/*
var_dump($Avis1);
}
*/
//Partie3
$Avis1C=new AvisC();
$Avis1C->ajouterAvis($Avis1);
echo $_POST['commentaire'];
header('Location: ../product-detail.php');
	
}
else if (isset($_POST['modif']) and isset($_POST['nom']) and isset($_POST['email']) and isset($_POST['note']) and isset($_POST['commentaire'])){

$Avis1=new Avis($_POST['nom'],$_POST['email'],$_POST['note'],$_POST['commentaire']);
//Partie2
/*
var_dump($Avis1);
}
*/
//Partie3
$Avis1C=new AvisC();
$Avis1C->modifierAvis($Avis1,$_POST['nom']);
echo $_POST['commentaire'];
header('Location: ../product-detail.php');
	
}
else{
	echo "vérifier les champs";
}
//*/

?>