
<?php


$con=mysqli_connect('localhost','root','');

if(!$con){
    echo 'Not connected to Database';
}

if(!mysqli_select_db($con,'mysql')){
    echo 'Database not connected';
}

$CODE = $_POST['code'];
$MARQUE = $_POST['marque'];
$PRIX = $_POST['prix'];


$sql = "INSERT INTO 'produit' (code,marque,prix) VALUES ('$CODE','$MARQUE', '$PRIX')";

if (!mysqli_query($con,$sql)){
    echo 'Pas enregistré';
}
else{
    echo 'Enregistré';
}


