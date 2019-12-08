<html>
<?PHP
include "../entities/produit.php";
include "../core/produitC.php";

if (isset($_POST['code']))
{
$produit1=new Produit($_POST['code'],$_POST['marque'],$_POST['prix']);

$produit1P=new ProduitC();
$produit1P->ajouterProduit($produit1);

	
}else{
	echo "vérifier les champs";
}
//*/
echo " SUCCES D AJOUT"


?>
<p></p>
<a href="tables-editable promotions et Publictés.html">	Retour Acceuil </a>
</html>
