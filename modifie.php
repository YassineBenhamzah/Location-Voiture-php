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
		<form name="formupdate" method="post" action="" class="formulaire" enctype="multipart/form-data">
			<h2 align="center">Mettre a jour une voiture</h2>
			<label><b>Immatriculation ;</b></label>
			<input type="text" name="txtimm" class="zonetext" value="<?php echo $_GET['modcar'] ?>" readonly>

			<label><b>Marque ;</b></label>
			<input type="text" name="txtmarque" class="zonetext" placeholder="entrer la Marque" required>

			<label><b>Prix ;</b></label>
			<input type="text" name="txtprix" class="zonetext" placeholder="entrer le prix" required>

			<label><b>Photo ;</b></label>
			<input type="file" name="txtphoto"  placeholder="entrer la Photo" required>

			<input type="submit" name="btnmod" class="submit" value="Mettre a jour">

			<p><a href="accuiel.php" class="submit">Tableau de bord</a></p>
			<label style="text-align : center;color: red;"></label>
			<?php 
              if (isset($_POST['btnmod'])) {
              	$imm=$_POST['txtimm'];
              	$marque=$_POST['txtmarque'];
              	$prix=$_POST['txtprix'];
              	$modifie=$_GET['modcar'];
              	$image=$_FILES['txtphoto']['tmp_name'];
              	$traget="images/".$_FILES['txtphoto']['name'];
              	move_uploaded_file($image,$traget);
              	$reqMO="UPDATE automobile SET MARQUE='$marque' , PRIX_LOCATION='$prix' , PHOTO='$traget' WHERE IMM='$modifie'";
              	$resultatse=mysqli_query($database,$reqMO);
              	if ($resultatse) {
              		echo " modification est éfectué";
              		
              	}else{
              		echo " modification a échouée";

              	}
              }
			?>


			
		</form>

	</div>

</body>
</html>