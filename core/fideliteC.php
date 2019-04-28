<?PHP
//include "C:\wamp64\www\laCave\config.php";
class FideliteC {
    function afficherfidelite ($fidelite){
		echo "Code: ".$fidelite->getCode()."<br>";
		echo "Email: ".$fidelite->getEmail()."<br>";
        echo "Prix total des produits achetés: ".$fidelite->getPtpa()."<br>";
		echo "Nombre total des produits achetés: ".$fidelite->getNtpa()."<br>";
		echo ":fidelisation ".$fidelite->getFid()."<br>";
		echo "Reduction: ".$fidelite->getReduction()."<br>";
	}
	function ajouterfidelite($fidelite){
		$sql="insert into fidelite (code,email,ptpa,ntpa,fidelisation,reduction) values (:code,:email,:ptpa,:ntpa,:fid,:reduction)";
		$db = config::getConnexion();
		try{
            $req=$db->prepare($sql);

            $code=$fidelite->getCode();
            $email=$fidelite->getEmail();
            $ptpa=$fidelite->getPtpa();
            $ntpa=$fidelite->getNtpa();
            $fid=$fidelite->getFid();
            $reduction=$fidelite->getReduction();
            $req->bindValue(':code',$code);
            $req->bindValue(':email',$email);
            $req->bindValue(':ptpa',$ptpa);
            $req->bindValue(':ntpa',$ntpa);
            $req->bindValue(':fid',$fid);
            $req->bindValue(':reduction',$reduction);

            $req->execute();

        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }

	}

	function afficherfidelites(){
		$sql="SElECT * From fidelite";
		$db = config::getConnexion();
		try{
            $liste=$db->query($sql);
            return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function supprimerfidelite($email){
		$sql="DELETE FROM fidelite where email= :email";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':email',$email);
		try{
            $req->execute();
            // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function modifierfidelite($fidelite,$emaill){
		$sql="UPDATE fidelite SET email=:email,ptpa=:ptpa,ntpa=:ntpa,fidelisation=:fid,reduction=:reduction WHERE email=:emaill";

		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
        try{
            $req=$db->prepare($sql);
            $code=$fidelite->getCode();
            $email=$fidelite->getEmail();
            $ptpa=$fidelite->getPtpa();
            $ntpa=$fidelite->getNtpa();
            $fid=$fidelite->getFid();
            $reduction=$fidelite->getReduction();

            $req->bindValue(':emaill',$emaill);
            $req->bindValue(':email',$email);
            $req->bindValue(':ptpa',$ptpa);
            $req->bindValue(':ntpa',$ntpa);
            $req->bindValue(':fid',$fid);
            $req->bindValue(':reduction',$reduction);


            $s=$req->execute();

            // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
        }

	}
	function recupererfidelite($email){
		$sql="SELECT * from fidelite where email=$email";
		$db = config::getConnexion();
		try{
            $liste=$db->query($sql);
            return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function rechercherDouble($mail){
		$sql="SELECT count(*) FROM fidelite WHERE email = :email";
		$db = config::getConnexion();
		try{
            $req_prep=$db->query($sql);
            $req_prep->execute(array(0=>$mail));
            $resultat = $req_prep->fetchColumn();
            return $req_prep;

		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

}

?>