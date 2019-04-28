<?PHP
include "../core/livraisonL.php";
$livraisonL=new LivraisonL();
if (isset($_POST["ref"])){
	$livraisonL->supprimerLivraison($_POST["ref"]);
	header('location: ../affichageLivraison.php');
}

?>