<?PHP
include "../core/produitC.php";
$produit1C=new ProduitC();
$listeProduits=$produit1C->afficherProduit();
foreach($listeProduits as $row){
	?>
	<div class="col-xs-6 col-sm-4 product-grids">
						<div class="flip-container">
							<div class="flipper agile-products">
								<div class="front"> 
									<img src="<?PHP echo $row['img']; ?>"  alt="img" width=175 height=175>
									<div class="agile-product-text">              
										<h5><?PHP echo $row['nom']; ?></h5>  
									</div> 
								</div>
								<div class="back">
									<h4><?PHP echo $row['nom']; ?></h4>
									<p>Maecenas condimentum interdum lacus, ac varius nisl.</p>
									<h6><?PHP echo $row['prix']; ?><sup>Dt</sup></h6>
									<form action="#" method="post">
										<input type="hidden" name="cmd" value="_cart">
										<input type="hidden" name="add" value="1"> 
										<input type="hidden" name="w3ls_item" value="Fish salad"> 
										<input type="hidden" name="amount" value="3.00"> 
										
										<a  class="w3ls-cart pw3ls-cart" href="cartAction.php?action=addToCart&id=<?php echo $row["referance"]; ?>"><i class="fa fa-cart-plus" aria-hidden="true"></i> Ajouter </a>
										<span class="w3-agile-line"> </span>
										<a href="#" data-toggle="modal" data-target="#myModal1">More</a>
									</form>
								</div>
							</div>
						</div> 
					</div> 
	<?PHP
}
?>