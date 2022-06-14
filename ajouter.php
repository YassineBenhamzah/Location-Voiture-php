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
  <div id="container">
  	<form name="formadd" action="" method="post" class="formulaire" enctype="multipart/form-data">
  		<h2 align="center">Ajouter nouvelle voiture</h2>
  		<label ><b>immatriculation :</b> </label>
  		<input type="text" name="txtImm" class="zonetext" placeholder="entrer immatriculation" required>

  		<label ><b>Marque :</b> </label>
  		<input type="text" name="txtMarque" class="zonetext" placeholder="entrer la Marque" required>

  		<label ><b>Prix :</b> </label>
  		<input type="text" name="txtPL" class="zonetext" placeholder="entrer le prix unitaire" required>

  		<label ><b>photo :</b> </label>
  		<input type="file" name="txtimage" class="zonetext" placeholder="choisir une image" required>

  		<input type="submit" name="btadd" value="Ajouter" class="submit">

  		<p><a href="accuiel.php" class="submit">Tableau de bord</a></p>
  		<label style="text-align: center; color: red;">
  			<?php 
  			if (isset($_POST['btadd'])) {
  				$imm=$_POST['txtImm'];
  				$marque=$_POST['txtMarque'];
  				$prix=$_POST['txtPL'];
  				$image=$_FILES['txtimage']['tmp_name'];
  				$traget="images/".$_FILES['txtimage']['name'];
  				move_uploaded_file($image,$traget);
  				$reqadd="INSERT INTO automobile(IMM,MARQUE,PRIX_LOCATION,PHOTO) value('$imm','$marque','$prix','$traget')";
  				$resulta=mysqli_query($database,$reqadd);
  				if ($resulta) {
  					echo "insertion des données  validés";
  				}
  				else{
  					echo "echec d'insertion des données";
  				}
  			}

  			 ?>

  		</label>
 
  	</form>
  </div>
  
</body>
</html>