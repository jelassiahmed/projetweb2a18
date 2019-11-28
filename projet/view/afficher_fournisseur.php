
<?PHP
include 'C:\wamp64\www\projet\core\fournisseur.php';

$fournisseur1C=new fournisseurC();
?>
<table border="1" align="center"  cellpadding="20" cellspacing="5" style="border-color: #478bf9" style="background: #478bf9">
<tr>
<td>id_fourni</td>
<td>numero</td>
<td>email</td>
<td>nom_prd</td>
<td>facture</td>
<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
$listefournisseur=$fournisseur1C->afficherfournisseurs($fournisseur1C);
foreach($listefournisseur as $row){
	?>
	<tr>
	<td><?PHP echo $row['id_fourni'];  ?></td>
	<td><?PHP echo $row['numero'];  ?></td>
	<td><?PHP echo $row['email']; ?></td>
	<td><?PHP echo $row['nom_prd']; ?></td>
	<td><?PHP echo $row['facture'];    ?></td>
	

	<td><form method="POST" action="supprimer_fournisseur.php">
	<input style="background-color:#478bf9" nom_prd="submit" name="supprimer" value="supprimer">
	<input  nom_prd="hidden" value="<?PHP echo $row['id_fourni']; ?>" name="id_fourni">
	</form>
	</td>
	<td><a  style="background-color:#478bf9 " style="color:#fff"  href="modifier_fournisseur.php?id_fourni=<?PHP echo $row['id_fourni']; ?>">
	Modifier </a></td>
	</tr>
	<?PHP
	
	
}
?>