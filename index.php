<?php
require_once 'base.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="loccarstyle.css">
	
</head>
<body>
<div id="entete">
    <a href="login.php" class="login">Login</a>

	<img src="images/audi.jfif"  class="video_entete">
		
	</img>
	<p class="nomsite">Location Car </p>
	<div id="formauto">
		<form name="formauto" method="post" action="" />
			<input id="motclé" type="text" name="motclé" placeholder=" recherche par marque..." />
			<input class="btnfind" type="submit" name="btnsubmit" value="recherche" />


		</form>
		


	</div>

</div>
<div id="articles">
	<?php 

	if (isset($_POST['btnsubmit'])) {
		$mc=$_POST['motclé'];
		$reqselect= "select * from automobile where MARQUE like '%$mc%'";
	}
	else{
       $reqselect="select * from automobile";

	}
	$resultat=mysqli_query($database,$reqselect);
	$nbr=mysqli_num_rows($resultat);
	echo "<p><b>" . $nbr . " " . " </b> Resultats de votre recherche...</p>";
	while($ligne=mysqli_fetch_assoc($resultat))
	{	
	?>
	<div id ="auto">
		<img src="<?php echo $ligne['PHOTO'] ?>" /><br />
		<?php echo $ligne['IMM'];	?><br />
		<?php echo $ligne['MARQUE'];	?><br />
		<?php echo $ligne['PRIX_LOC'] . " dhs/jour" ;	?><br>
	
			<a class="social-iconwh" href="https://web.whatsapp.com/">
			<ion-icon name="logo-whatsapp"></ion-icon>
			</a>
				<a class="social-icon" href="https://www.instagram.com/yassine_ney05/">
			<ion-icon name="logo-instagram"></ion-icon>
			</a>
			<a class="social-iconfb" href="https://www.facebook.com/hamza.yassine.3348/">
			<ion-icon name="logo-facebook"></ion-icon>
			</a>


		<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
         <br>
        <?php echo "contactez-nous"; ?> 

		

	</div>
<?php 
}
?>

</div>



</body>
</html>