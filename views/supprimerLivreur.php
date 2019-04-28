<?PHP
include "../core/livreurL.php";
$livreurL=new LivreurL();
if (isset($_POST["cin"])){
	$livreurL->supprimerLivreur($_POST["cin"]);
	header('location: ../affichage.php');
}

?>