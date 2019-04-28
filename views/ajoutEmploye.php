<?PHP
include "../entities/employe.php";
include "../core/employeC.php";

//$employe2=new commande("3445","tujuj","a@a.com","2222","11-11-1111","trhtrht");
//$employe2C=new CommandeC();
//$employe2C->ajouterEmploye($employe2);
if(isset($_POST['test'])){
    echo"AAAAAAAAAAAAAAAA";
}
if (isset($_POST['reference']) and isset($_POST['nom']) and isset($_POST['mail']) and isset($_POST['telephone']) and isset($_POST['date']) and isset($_POST['adresse'])){
$employe1=new commande($_POST['reference'],$_POST['nom'],$_POST['mail'],$_POST['telephone'],$_POST['date'],$_POST['adresse']);

//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$employe1C=new CommandeC();
$employe1C->ajouterEmploye($employe1);
echo "commande ajoutee avec succes";



}else{
	echo "vérifier les champs";
}
//*/

?>