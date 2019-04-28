<?PHP
include "../entities/livraison.php";
include "../core/livraisonL.php";


if (isset($_POST['ajouter'])){
	$ref=substr(time(),-5,-1);
$livraison1=new livraison($ref,$_POST['nom'],$_POST['prenom'],$_POST['mail'],$_POST['tel'],$_POST['ville'],$_POST['adresse'],$_POST['poste'],$_GET['priorite']);

//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$livraison1C=new livraisonC();
$livraison1C->ajouterLivraison($livraison1);
header('Location: ../index.php');
  
}

//*/

?>