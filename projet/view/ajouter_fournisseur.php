<?PHP
include 'C:\wamp64\www\projet\core\fournisseurC.php';
	include 'C:\wamp64\www\projet\entites\fournisseur.php';

if (isset($_POST['id_fourni']) and isset($_POST['numero']) and isset($_POST['email']) and isset($_POST['nom_prd']) and isset($_POST['facture'])){
$fournisseur1=new fournisseur($_POST['id_fourni'],$_POST['numero'],$_POST['email'],$_POST['nom_prd'],$_POST['facture']);





$fournisseur1C=new fournisseurC();
$fournisseur1C->ajouterfournisseur($fournisseur1);
header('Location: afficher_fournisseur.php');

} else{
	echo "vérifier les champs";
}
//*/

?>