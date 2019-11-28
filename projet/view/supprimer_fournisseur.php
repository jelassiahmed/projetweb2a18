<?PHP
include 'C:\wamp64\www\core\fournisseurC.php';
$fournisseurC=new newfournisseurC();
if (isset($_POST["id_fourni"])){
	$fournisseurC->supprimerfournisseurC($_POST["id_fourni"]);
	header('Location: afficher_fournisseur.php');
}


?>