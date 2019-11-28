<?php

    session_start();

// initialize shopping cart class
include '../core/panierC.php';
include "../entites/produit.php";
include "../core/produitC.php";
$cart = new Cart;
$produit = new ProduitC;

// include database configuration file
if(isset($_REQUEST['action']) && !empty($_REQUEST['action'])){
    if($_REQUEST['action'] == 'addToCart' && !empty($_REQUEST['id'])){
        $productID = $_REQUEST['id'];
		
        // get product details
		$db=config::getConnexion();
		$q="SELECT * FROM produit WHERE referance = ".$productID ;
        $query = $db->query($q);
        $row = $query->fetch(PDO::FETCH_ASSOC);
		
		
        $itemData = array(
            'referance' => $row['referance'],
            'nom' => $row['nom'],
            'prix' => $row['prix'],
            'quantite' => 1
        );
		
        
        $insertItem = $cart->insert($itemData);

        $redirectLoc = $insertItem?'viewCart.php':'index.php';
        header("Location: ".$redirectLoc);
    }elseif($_REQUEST['action'] == 'updateCartItem' && !empty($_REQUEST['id'])){
		
		
		$monProduit=$produit->RecupererProduit($_REQUEST['id']);
		foreach ( $monProduit as $p )
		{
		if($p['quantite']<$_REQUEST['quantite'])
		{ echo 'Produit epuisée' ;}
		
		else
		{
        $itemData = array(
            'rowid' => $_REQUEST['id'],
            'quantite' => $_REQUEST['quantite']
        );
        $updateItem = $cart->update($itemData);
		echo $updateItem?'ok':'err';die;}
		}
        
    }elseif($_REQUEST['action'] == 'removeCartItem' && !empty($_REQUEST['id'])){
        $deleteItem = $cart->remove($_REQUEST['id']);
        header("Location: viewCart.php");
    }
    else{
        header("Location: index.php");
    }
}else{
    header("Location: index.php");
}