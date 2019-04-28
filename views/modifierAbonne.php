<?php
include "../entities/abonne.php";
include "../core/abonneC.php";

$abonne1C=new AbonneC();

if(isset($_COOKIE['email']))
{

    if(isset($_POST['pass1']))
    {
        $listeAbonnes=$abonne1C->afficherAbonnes();
        $action=0;
        $pass=$_POST['pass1'];
        foreach($listeAbonnes as $row){

			if($row['email'] == $_COOKIE['email'])
            {
                if($row['motdepasse'] == $pass)
                {
                    $action=1;
                    break;
                }
            }
        }
        if($action == 1)
            header('Location: ../profil.php?modif=yes');
        else
            header('Location: ../profil.php?modifier=yesp');
    }

    if(isset($_POST['yes']))
    {
        if (isset($_GET['modif'])){
            if($_GET['modif'] == "yes")
            {
                $email=$_COOKIE['email'];
                $abonne=new abonne($_POST['nom'],$_POST['prenom'],$_POST['datenaiss'],$_POST['tel'],$_POST['email'],$_POST['adresse'],$_POST['pass']);
                $abonne1C->modifierAbonne($abonne,$email);
                header('Location: ../profil.php');
            }
            else
                header('Location: ../cart.php');
        }
        else
            header('Location: ../about.php');
    }
}
else
{
    header("location: ../404-page.php?connect=connexion2");
}
?>