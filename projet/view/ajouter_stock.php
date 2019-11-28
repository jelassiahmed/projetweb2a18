<?PHP
include 'C:\wamp64\www\projet\core\stockC.php';
	include 'C:\wamp64\www\projet\entites\stock.php';

if (isset($_POST['code_prd']) and isset($_POST['qte']) and isset($_POST['des_prd']) and isset($_POST['id_fourni']) and isset($_POST['qte_maj'])){
$stock1=new stock($_POST['code_prd'],$_POST['qte'],$_POST['des_prd'],$_POST['id_fourni'],$_POST['qte_maj']);





$stock1C=new stockC();
$stock1C->ajouterstock($stock1);
header('Location: afficher_stock.php');

} else{
	echo "vérifier les champs";
}
//*/

?>