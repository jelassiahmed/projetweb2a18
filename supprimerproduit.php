<?php

// php code to Delete data from mysql database 

if(isset($_POST['delete']))
{
       
	$con=mysqli_connect('localhost','root','');

	if(!$con){
		echo 'Not connected to Database';
	}
	
	if(!mysqli_select_db($con,'mysql')){
		echo 'Database not connected';
	}
   
   // get values form input text and number
   $CODE = $_POST['CODE'];  
           
   // mysql query to Update data
   $sql = "DELETE FROM `produit` WHERE `code` = $CODE";
   
   
   if (!mysqli_query($con,$sql)){
    echo 'Pas supprimé';
}
else{
    echo 'Supprimé';
}

}

?>

<!DOCTYPE html>

<html>

    <head>

        <title> Supprimer produit </title>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body>

        <form action="supprimerproduit.php" method="POST">

            CODE du produit à supprimer :&nbsp;<input type="number" name="code" required><br><br>

            <input type="submit" name="delete" value="Supprimer le produit">

        </form>

    </body>

</html>