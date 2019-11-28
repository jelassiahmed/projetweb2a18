
<table border="1">
    <tr>
        <td>CODE</td>
        <td>PRIX</td>
        <td>MARQUE</td>
       
        
    </tr>
    <?php 

$con=mysqli_connect('localhost','root','');

if(!$con){
    echo 'Not connected to Database';
}

if(!mysqli_select_db($con,'mysql')){
    echo 'Database not connected';
}

    $sql = "SELECT `code`, `marque`, `prix`,  FROM `produit`";
    
    $result = mysqli_query($con,$sql);
    if($result->num_rows > 0 ){
        while($row = $result->fetch_assoc()){
            echo ' . $row["code"]. "</td><td>" . $row["marque"] ' ;
        }
        echo "</table>";
    } else{
                echo "Vide";
          }
        

?>
    
</table>
<button>Ajouter <a href="ajoutproduit.html"></a> </button>
<button>Modifier <a href="modifierproduit.php"></a> </button>
<button>Supprimer <a href="supprimerproduit.php"></a> </button>



