<?PHP
class Livreur{
	private $cin;
	private $nom;
	private $prenom;
	private $numtelephone;
	private $mail;
	
	function __construct($cin,$nom,$prenom,$numtelephone,$mail){
		$this->cin=$cin;
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->numtelephone=$numtelephone;
		$this->mail=$mail;
		
	}
	
	function getCin(){
		return $this->cin;
	}
	function getNom(){
		return $this->nom;
	}
	function getPrenom(){
		return $this->prenom;
	}
	function getNum(){
		return $this->numtelephone;
	}
	function getMail(){
		return $this->mail;
	}
	

	function setNom($nom){
		$this->nom=$nom;
	}
	function setPrenom($prenom){
		$this->prenom;
	}
	function setNum($numtelephone){
		$this->numtelephone;
	}
	function setMail($mail){
		$this->mail;
	}
	
	
}

?>