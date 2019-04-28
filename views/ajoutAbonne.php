<?PHP
include "../entities/abonne.php";
include "../core/abonneC.php";


if (isset($_POST['name']) and isset($_POST['prenom']) and isset($_POST['datenaiss']) and isset($_POST['tel']) and isset($_POST['email']) and isset($_POST['adresse']) and isset($_POST['pass'] )){
	if($_POST['pass'] == $_POST['pass1'])
	{
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$abonne1C=new abonneC();
$listeAbonnes=$abonne1C->afficherAbonnes();
$mail=0;
                           foreach($listeAbonnes as $row){
							   
							if($row['email'] == $_POST['email'])
							{
								
								$mail=1;
							}
							if($row['telephone'] == $_POST['tel'])
							{
								
								$mail=2;
							}
						   }
						 
						   if($mail == 0)
						   {
	include("../phpmailer/activeMail.php");
	header('location: ../404-page.php?connect=activation');

						   }
						   else if ($mail == 1)
						   {
							   header('Location:../404-page.php?connect=inscription1');
						   }
						   else if ($mail == 2)
						   {
							   header('Location:../404-page.php?connect=inscription3');
						   }

}
else
	header('Location:../404-page.php?connect=inscription2');
}
else if(isset($_GET['email']) and isset($_GET['dateenvoi']) and isset($_GET['name']) and isset($_GET['prenom']) and isset($_GET['tel']) and isset($_GET['pass']) and isset($_GET['adresse']) and isset($_GET['datenaiss']))
{
	$abonne1=new abonne($_GET['name'],$_GET['prenom'],$_GET['datenaiss'],$_GET['tel'],$_GET['email'],$_GET['adresse'],$_GET['pass']);
	$abonne1C=new abonneC();
                             $listeAbonnes=$abonne1C->afficherAbonnes();
$mail=0;
                           foreach($listeAbonnes as $row){
							   
							if($row['email'] == $_GET['email'])
							{
								
								$mail=1;
							}
							if($row['telephone'] == $_GET['tel'])
							{
								
								$mail=2;
							}
						   }
						   
						   if($mail == 0)
						   {
                             $abonne1C->ajouterAbonne($abonne1);
						   	include("../phpmailer/activeSucces.php");
                             header("location: ../404-page.php?connect=connexion");

						   }
						   else if ($mail == 1)
						   {
							   header('Location:../404-page.php?connect=inscription1');
						   }
						   else if ($mail == 2)
						   {
							   header('Location:../404-page.php?connect=inscription3');
						   }

}

//*/

?>