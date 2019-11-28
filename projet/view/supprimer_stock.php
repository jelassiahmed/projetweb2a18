<?PHP
include 'C:\wamp64\www\core\stockC.php';
$stockC=new stockC();
if (isset($_POST["code_prd"])){
	$stockC->supprimerstockC($_POST["code_prd"]);
	header('Location: afficher_stock.php');
}


?>