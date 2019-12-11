<?PHP
include "../config.php";
class ProduitC {
function afficherProduit ($produit){
		echo "idP: ".$produit->getidP()."<br>";
		echo "nomP: ".$produit->getNom()."<br>";
		echo "quantiteP: ".$produit->getQuantite()."<br>";
		echo "description: ".$produit->getDescription()."<br>";
		echo "prix: ".$produit->getPrix()."<br>";
		
	}
	//function calculerSalaire($client){
	//	echo $client->getNbHeures() * $client->getTarifHoraire();
	
	function ajouterProduit($produit){ 
		$sql="insert into produit (code,marque,prix,img) values (:code,:marque,:prix,:img)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $code=$produit->getcode();
        $marque=$produit->getmarque();
        $prix=$produit->getPrix();
        $img=$produit->getimg();
		$req->bindValue(':code',$code);
		$req->bindValue(':marque',$marque);
        $req->bindValue(':prix',$prix);
        $req->bindValue(':img',$img);
            $req->execute();
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherproduits(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.idC= a.idC";
		$sql="SElECT * From produit";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	
	function modifierproduit($produit,$code){
		$sql="UPDATE produit SET code=:code, marque=:marque,prix=:prix, img=:img WHERE code=:code";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$code=$produit->getcode();
        $marque=$produit->getmarque();
        $prix=$produit->getPrix();
        $img=$produit->getimg();
$datas = array( ':code'=>$code, ':marque'=>$marque,':prix'=>$prix,':img'=>$img);
	
		$req->bindValue(':code',$code);
		$req->bindValue(':marque',$marque);
        $req->bindValue(':prix',$prix);
        $req->bindValue(':img',$img);		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	
	
	function trie_prix(){
		
        $sql="SElECT * From produit ORDER BY(prix) ASC";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    /*function recherchemarque($marque){
        $sql="SELECT * FROM produit WHERE Cat LIKE '$marque' ";
        $db = config:: getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }*/
    function rechercherProduit($code){
		$sql="SELECT * from produit where code like '%".$code."%' ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

}
?>