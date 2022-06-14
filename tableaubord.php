<?php
require_once 'base.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>tableau de bord </title>
	<link rel="stylesheet" href="loccarstyle.css">
</head>
<body>
	<p><h1><b>Liste des voitures</b></h1>
	<?php 
    $reqselect="select * from automobile";
    $resultat=mysqli_query($database,$reqselect);
    $nbr=mysqli_num_rows($resultat);
    echo "<p> total <b> " . $nbr . "</b> voitures..</p>";     
     ?>
     </p>
     <p><a href="ajouter.php"><img src="images/ajouter.png" width="50px" height="50px"></a> </p>
     <table width="100%" border="1">
     	<tr>
     		<th>immatriculation</th>
     		<th>Marque</th>
     		<th>Prix de location</th>
     		<th>photo</th>
     		<th>Supprimer</th>
     		<th>Modifie</th>
     	</tr>
     	<?php 
         while(  $ligne=mysqli_fetch_assoc($resultat))
         {

         
     	?>
         <tr>
         	<td><?php echo $ligne['IMM'];?></td>
         	<td><?php echo $ligne['MARQUE'];?></td>
         	<td><?php echo $ligne['PRIX_LOCATION'];?></td>
         	<td><img src='<?php echo $ligne['PHOTO'];?>' class='photocar'></td>
         	<td><a href="supprimer.php?supcar=<?php echo $ligne['IMM'];?>"><img src="images/Supprimer.jpg" width="50px" height="50px"></a></td>
         	<td><a href="modifie.php?modcar=<?php echo $ligne['IMM'];?>"><img src="images/Modifie.png" width="50px" height="50px"></a></td>
         </tr>

     	<?php
          }
     	 ?>


     </table>

</body>
</html>