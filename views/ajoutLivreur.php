<?PHP
include "../entities/livreur.php";
include "../core/livreurL.php";

if (isset($_POST['cin']) and isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['numtelephone']) and isset($_POST['mail'])){
$livreur1=new livreur($_POST['cin'],$_POST['nom'],$_POST['prenom'],$_POST['numtelephone'],$_POST['mail']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$livreur1L=new LivreurL();
$livreur1L->ajouterLivreur($livreur1);
header('Location: ../affichage.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>