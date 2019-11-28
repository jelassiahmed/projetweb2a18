<?php
include 'C:\wamp64\www\projet\config.php';
class StockC {

function afficherstock ($stock){
		echo "code_prd: ".$stock->getcode_prd()."<br>";
		echo "qte: ".$stock->getqte()."<br>";
		echo "des_prd: ".$stock->getdes_prd()."<br>";
		echo "id_fourni: ".$stock->getid_fourni()."<br>";
		echo "qte_maj: ".$stock->getqte_maj()."<br>";
	}

function ajouterstock($stock){
		$sql="insert into stock (code_prd,qte,des_prd,id_fourni,qte_maj) values (:code_prd, :qte,:des_prd,:id_fourni,:qte_maj)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $code_prd=$stock->getcode_prd();
        $qte=$stock->getqte();
        $des_prd=$stock->getdes_prd();
        $id_fourni=$stock->getid_fourni();
        $qte_maj=$stock->getqte_maj();
		$req->bindValue(':code_prd',$code_prd);
		$req->bindValue(':qte',$qte);
		$req->bindValue(':des_prd',$des_prd);
		$req->bindValue(':id_fourni',$id_fourni);
		$req->bindValue(':qte_maj',$qte_maj);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
	}
	function afficherstocks(){

		$sql=" SELECT * from stock ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function supprimerstock($code_prd){
		$sql="DELETE FROM stock where code_prd= :code_prd";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':code_prd',$code_prd);
		try{
            $req->execute();
           
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	

	
	}
	
}

?>
