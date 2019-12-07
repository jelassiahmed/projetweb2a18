<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<?php

include_once "../config.php";
include_once "../Core/CommandeCore.php";
include_once "../Entities/Commande.php";

$commandeC= new CommandeCore();
if(isset($_POST['ajouter']))
{
    $commande= new commande($_POST['id_cmd'],$_POST['date'],$_POST['idProduit'],$_POST['idLivreur']);
    if($commandeC->ajouterCommande($commande))
        var_dump("ajout termine");
    else 
        var_dump("erreur");
    	// redirection vers la liste des commandes
	//header('Location:ListeCommandes.php');
}
?>
<body>

<form  name="f" action="AjoutCommande.php" method="Post">

	<table>
		<tr>  <td>Id commande:</td> <td> <input type="number" name="id_cmd"> </td> </tr>
		<tr>  <td>Id Livreur:</td>  <td> <input type="number" name="idLivreur"> </td></tr>
		<tr>  <td>Id Produit:</td>  <td> <input type="number" name="idProduit"> </td></tr>
		<tr>  <td>Date:</td> <td> <input type="date" name="date"></td></tr>
		<tr>  <td></td> <td>  <input type="submit" name="ajouter" value="Ajouter"></td></tr>
	</table>
	
</form>
</body>
</html>