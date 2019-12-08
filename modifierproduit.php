<HTML>
<head>
</head>
<body>
<form method="POST">
<table>
<caption>Modifier produit</caption>
<tr>
<td>code</td>
<td><input type="number" name="code" ></td>
</tr>
<tr>
<td>marque</td>
<td><input type="text" name="marque" ></td>
</tr>
<td>Prix</td>
<td><input type="number" name="prix" ></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
</tr>

</table>
</form>
<?PHP
include "../Entities/produit.php";
include "../core/produitC.php";
if (isset($_POST['modifier'])){
    $produit=new Produit($_POST['code'],$_POST['marque'],$_POST['prix']);
    $produitC = new ProduitC();
	$produitC->modifierproduit($produit,$_POST['code']);

	//header('Location: afficherproduit.php');
	echo  " LE PRODUIT DE CODE: ";
		echo $_POST['code']; echo  " A ETE MODIFIER ";

}


?>
<p></p>
<a href="tables-editable promotions et Publictés.html">	Retour Acceuil </a>
</body>
</HTMl>

