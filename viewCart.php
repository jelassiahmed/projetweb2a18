<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

  <?php
// initializ shopping cart class
// include('header.php') ;
session_start();

include '../core/panierC.php';
$cart = new Cart;

?>
    <script>
    function updateCartItem(obj,id){
        $.get("cartAction.php", {action:"updateCartItem", id:id, quantite:obj.value}, function(data){
            if(data == 'ok'){
                location.reload();
            }else{
                alert(data);
            }
        });
    }
    </script>

<link rel="stylesheet" type="text/css" media="all" href="style.css" />



<div class="container">
    <h1>Panier</h1>
    <table class="table">
    <thead>
        <tr>
            <th>Produit</th>
            <th>Prix</th>
            <th>Quantite</th>
            <th>Total</th>
            <th>&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if($cart->total_items() > 0){
            //get cart items from session
            $cartItems = $cart->contents();
			
            foreach($cartItems as $item){
        ?>
        <tr>
            <td><?php echo $item["nom"]; ?></td>
            <td><?php echo $item["prix"].' DT'; ?></td>
            <td ><?php echo $item["rowid"]; ?>
            <input type="number" class="form-control text-center" value="<?php echo $item["quantite"]; ?>" onchange="updateCartItem(this, '<?php echo $item["rowid"]; ?>')"></td>
            <td><?php echo $item["subtotal"].' DT'; ?></td>
            <td>
                <a href="cartAction.php?action=removeCartItem&id=<?php echo $item["rowid"]; ?>" class="btn btn-danger" onclick="return confirm('Vous etes sur ?')"><i class="fa fa-trash"></i></a>
            </td>
        </tr>
        <?php } }else{ ?>
        <tr><td colspan="5"><p>Le Panier Est Vide.....</p></td>
        <?php } ?>
    </tbody>
    <tfoot>
        <tr>
            <td><a href="menu.php" class="btn btn-warning"><i class="glyphicon glyphicon-menu-left"></i> Retour au menu</a></td>
            <td colspan="2"></td>
            <?php if($cart->total_items() > 0){ ?>
            <td class="text-center"><strong>Total <?php echo $cart->total().' DT'; ?></strong></td>
            <td><a href="checkout.php" class="btn btn-success btn-block">Valider <i class="glyphicon glyphicon-menu-right"></i></a></td>
            <?php } ?>
        </tr>
    </tfoot>
    </table>
	</div>
	</div>

<!-- <?php //include('footer.php') ; ?> -->
