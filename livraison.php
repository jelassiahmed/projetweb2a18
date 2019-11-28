<?php
include_once "../Config.php";
class livraisoncore
{
  
	function afficherLivraison($l){
		//var_dump($e);
		$etat=$e->getEtat();
		$region=$e->getRegion();
		$ville=$e->getVille();
		$rue=$e->getRue();
		$numero=$e->getNumero();

		echo "Etat: " .$etat. "<br>";
		echo "Region :" .$region. "<br>";
		echo "Ville: " .$ville. "<br>";
		echo "Rue: " .$rue. "<br>";
		echo "Numero: " .$numero. "<br>";
	}
	function afficherLivraisons($id){
		$c=Config::getConnexion();
		$sql="SELECT * FROM livraison where id_utilisateur=$id and etat!='Effectuee'";
		try{
			$liste=$c->query($sql);
			return $liste;

		}catch(Exception $e){
			die('Erreur : ' .$e->getMessage());
		}

	}
    function afficherLivraisonseffectuee($id){
    $c=Config::getConnexion();
    $sql="SELECT * FROM livraison where id_utilisateur=$id and etat='Effectuee'";
    try{
      $liste=$c->query($sql);
      return $liste;

    }catch(Exception $e){
      die('Erreur : ' .$e->getMessage());
    }

  }
function supprimerlivraison($id){
      $sql="DELETE FROM livraison where id= :id";
      $db = config::getConnexion();
        $req=$db->prepare($sql);
      $req->bindValue(':id',$id);
      try{
          $req->execute();
		  ?>