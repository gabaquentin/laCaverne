<?PHP
include "C:/wamp64/www/laCaveAdmin/core/AvisC.php";
include "C:/wamp64/www/laCaveAdmin/entities/Avis.php";

if (isset($_POST['nom']) and isset($_POST['email']) and isset($_POST['note']) and isset($_POST['commentaire'])){
$Avis1=new Avis($_POST['nom'],$_POST['email'],$_POST['note'],$_POST['commentaire']);
//Partie2
/*
var_dump($Avis1);
}
*/
//Partie3
$Avis1C=new AvisC();
$Avis1C->modifierEmploye($Avis1,$_POST['nom']);
echo $_POST['commentaire'];
header('Location: ../product-detail.php');

}else{
	echo "vérifier les champs";
}
//*/

?>