<?PHP
include "../entities/abonne.php";
include "../core/abonneC.php";


if (isset($_POST['email']) and isset($_POST['pass'] )){
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
							   
							if($row['email'] == $_POST['email'] && $row['motdepasse'] == $_POST['pass'])
							{
								
								$mail=1;
								$nom=$row['nom'];
								$prenom=$row['prenom'];
								$datenaiss=$row['datenaiss'];
								$tel=$row['telephone'];
								$email=$row['email'];
								$adresse=$row['adresse'];
							}
						   }
						 
						   if($mail == 1)
						   {
                             header("location: ../index.php?email=$email");
						   }
						   else if ($mail == 0)
						   {
							   header('Location:../404-page.php?connect=connexion1');
						   }

}
//*/

?>