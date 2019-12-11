<?PHP
class Produit{
	private $code;
	private $marque;
	private $prix;
//	private $img;
	function __construct($code,$marque,$prix,$img){
		$this->code=$code;
		$this->marque=$marque;
		$this->prix=$prix;
		$this->img=$img;
		


	
	}
	
	function getcode(){
		return $this->code;
	}
	function getmarque(){
		return $this->marque;
	}
	function getPrix(){
		return $this->prix;
	}
	function getimg(){
		return $this->img;
	}
	
	function setcode($code){
		$this->code=$code;
	}
	function setNom($marque){
		$this->marque=$marque;
	}
	function setPrix($prix){
		$this->prix=$prix;
	}
	function setimg($img){
		$this->img=$img;
	}
	
}

?>