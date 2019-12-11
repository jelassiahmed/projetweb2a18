
<table border="1">
    <tr>
        <td>Id</td>
        <td>MARQUE</td>
        <td>Prix</td>  
        <td>img</td>    
    </tr>
    <?php 
   include "../Core/produitC.php"; 
   $Produit1C= new ProduitC();

$con=mysqli_connect('localhost','root','');

if(!$con){
    echo 'Not connected to Database';
}

if(!mysqli_select_db($con,'projet_web')){
    echo 'Database not connected';
}

$sql = "SELECT * FROM `produit` ORDER BY(prix) ASC";
    
    $result = mysqli_query($con,$sql);
    if($result->num_rows > 0 ){
        while($row = $result->fetch_assoc()){
            echo "<tr><td>" . $row["code"]. "</td><td>" . $row["marque"] . "</td><td>" . $row["prix"]. "</td><td>".$row["img"]."</td><td>";
        }
        echo "</table>";
    } else{
                echo "Vide";
          }
          
?>
    
</table>

<p></p>
<a href="tables-editable promotions et Publictés.html">	Retour Acceuil </a>



