<?php
include 'C:\wamp64\www\projet\config.php';
class fournisseurC {

function afficherfournisseur ($fournisseur){
		echo "id_fourni: ".$fournisseur->getid_fourni()."<br>";
		echo "numero: ".$fournisseur->getnumero()."<br>";
		echo "email: ".$fournisseur->getemail()."<br>";
		echo "nom_prd: ".$fournisseur->getnom_prd()."<br>";
		echo "facture: ".$fournisseur->getfacture()."<br>";
	}

function ajouterfournisseur($fournisseur){
		$sql="insert into fournisseur (id_fourni,numero,email,nom_prd,facture) values (:id_fourni, :numero,:email,:nom_prd,:facture)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $id_fourni=$fournisseur->getid_fourni();
        $numero=$fournisseur->getnumero();
        $email=$fournisseur->getemail();
        $nom_prd=$fournisseur->getnom_prd();
        $facture=$fournisseur->getfacture();
		$req->bindValue(':id_fourni',$id_fourni);
		$req->bindValue(':numero',$numero);
		$req->bindValue(':email',$email);
		$req->bindValue(':nom_prd',$nom_prd);
		$req->bindValue(':facture',$facture);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
	}
	function afficherfournisseurs(){

		$sql=" SELECT * from fournisseur ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function supprimerfournisseur($id_fourni){
		$sql="DELETE FROM fournisseur where id_fourni= :id_fourni";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_fourni',$id_fourni);
		try{
            $req->execute();
           
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	
	
       
	}

	
	}
	
}

?>
