<?php


								$nom="";
								$prenom="";
								$datenaiss="";
								$tel="";
								$email="";
								$adresse="";
								$pass="";
                                $etat_fid="";
                                $ptpa="";
                                $ntpa="";
                                $etat="";
                                $code="";
                                $reduction=0;
								$getcode="";

if(isset($_COOKIE['email']))
{
setcookie('email', $_COOKIE['email'], time() + 3600, null, null, false, true);


include "entities/abonne.php";
include "core/abonneC.php";

$abonne1C=new AbonneC();
$listeAbonnes=$abonne1C->afficherAbonnes();

                           include "entities/fidelite.php";
                           include "core/fideliteC.php";

                           $fidelite1C=new FideliteC();
                           $listeFidelites=$fidelite1C->afficherfidelites();
						   
                           foreach($listeFidelites as $row)
                           {
                               if($row['email'] == $_COOKIE['email'])
                               {
                                   $code = $row['code'];
                               }
                           }						   
						   


                           foreach($listeAbonnes as $row){

							if($row['email'] == $_COOKIE['email'])
							{
								$nom=$row['nom'];
								$prenom=$row['prenom'];
								$datenaiss=$row['datenaiss'];
								$tel=$row['telephone'];
								$email=$row['email'];
								$adresse=$row['adresse'];
								$pass=$row['motdepasse'];
								$etat_fid=$row['etat_fid'];
								$ptpa=$row['ptpa'];
								$ntpa=$row['ntpa'];
															}
						   }
                           $p=($ntpa/50)*100;
                           $pr=($ptpa/200)*100;
                           $fid=($p+$pr)/2;
                           if($fid < 300)
                           {
                               if($fid != 0)
                               $reduction = ($fid/10)-5;
                               else
                                   $reduction = 0;
                           }
                           else if($fid >= 300 && $fid <500)
                           {
                               $reduction = 25;
                           }
                           else if($fid >= 500 && $fid <1000)
                           {
                               $reduction = 45;
                           }
                           else if($fid >=1000)
                           {
                               $reduction = 60;
                           }

                           if(($fid >= 100))
                           {

                           $etat = 0;

                           foreach($listeFidelites as $row)
                           {

                               if($row['email'] == $_COOKIE['email'])
                               {
                                   $etat = 1;
                               }
                           }

                           if($etat == 1)
                           {
                               $fidelite1=new Fidelite($code,$email,$ptpa,$ntpa,$fid,$reduction);
                               $fidelite1C->modifierfidelite($fidelite1,$email);
                           }
                           else if($etat == 0)
                           {
                               $sql="UPDATE abonne SET etat_fid=1 WHERE email=:email";
                               $db = config::getConnexion();
                               //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
                               try{
                                   $req=$db->prepare($sql);
                                   $req->bindValue(':email',$email);
                                   $s=$req->execute();
                               }
                               catch (Exception $e){
                                   echo " Erreur ! ".$e->getMessage();
                               }

                               $Code=$nom;
                               $fidelite1=new Fidelite($Code,$email,$ptpa,$ntpa,$fid,$reduction);
                               $fidelite1C->ajouterfidelite($fidelite1);

                               include("phpmailer/mailFid.php");

                           }

                           }

}

?>