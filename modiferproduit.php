<?php

// php code to Update data from mysql database Table

if(isset($_POST['update']))
{
       
	$con=mysqli_connect('localhost','root','');

	if(!$con){
		echo 'Not connected to Database';
	}
	
	if(!mysqli_select_db($con,'mysql')){
		echo 'Database not connected';
	}
   
   // get values form input text and number
   $CODE = $_POST['code'];
   $MARQUE = $_POST['categorie'];
   $PRIX = $_POST['prix'];
   
  
           
   // mysql query to Update data
   $sql = "UPDATE `produit` SET `code`='".$code."',`prix`=$prix,`marque`=$MARQUE,`img`='".$img."'  WHERE `code` = $CODE";
   
   
   if (!mysqli_query($con,$sql)){
    echo 'Pas modifié';
}
else{
    echo 'Modifié';
}

}

?>

<!DOCTYPE html>

<html>

    <head>

        <title> Modifier produit </title>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body>

        <form action="modifierproduit.php" method="POST">

        
            LE CODE du produit à modifier : <input type="text" name="code" required><br><br>

           

            Nouveau prix :<input type="number" name="prix" required><br><br>

			Marque :<input type="text" name="marque" required><br><br>

        

            <input type="submit" name="update" value="Modifier"> 

        </form>

    </body>


</html>