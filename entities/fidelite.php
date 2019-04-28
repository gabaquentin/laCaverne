<?PHP
class Fidelite	{
	private $code;
	private $email;
	private $ptpa;
	private $ntpa;
	private $fidelisation;
	private $reduction;

	function __construct($code,$email,$ptpa,$ntpa,$fidelisation,$reduction){
		$this->code=$code;
		$this->email=$email;
		$this->ptpa=$ptpa;
		$this->ntpa=$ntpa;
		$this->fidelisation=$fidelisation;
		$this->reduction=$reduction;
	}

	function getCode(){
		return $this->code;
	}
	function getEmail(){
		return $this->email;
	}
	function getPtpa(){
		return $this->ptpa;
	}
	function getNtpa(){
		return $this->ntpa;
	}
	function getFid(){
		return $this->fidelisation;
	}
	function getReduction(){
		return $this->reduction;
	}

	function setCode($code){
		$this->code=$code;
	}
	function setEmail($email){
		$this->email=$email;
	}
	function setPtpa($ptpa){
		$this->ptpa=$ptpa;
	}
	function setNtpa($ntpa){
		$this->ntpa=$ntpa;
	}
	function setFid($fidelisation){
		$this->fidelisation=$fidelisation;
	}
	function setReduction($reduction){
		$this->reduction=$reduction;
	}
}

?>