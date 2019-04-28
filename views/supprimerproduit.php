<?PHP
include "../core/produitC.php";
$produitC=new produitC();
if (isset($_POST["reference"])){
	$produitC->supprimerproduit($_POST["reference"]);
	header('location: ../products.php');
}

?>