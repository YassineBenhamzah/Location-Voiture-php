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
		<form name="formdelet" class="formulaire">
		<p><a href="accuiel.php" class="submit">Tableau de bord</a></p>
	<?php 
     if (isset($_GET['supcar'])) {
     	$sup=$_GET['supcar'];
     	$reqdelet="DELETE FROM automobile where IMM='$sup'";
     	$resultaa=mysqli_query($database,$reqdelet);

     }
     if($resultaa){
     	echo "<label style='text-align: center; color: red;'> la Suppression a été correctement effectuée...</label> ";

     }else{
     	echo "<label style='text-align: center; color: red;'> la Suppression a échouée..</label>";

     }
	?>
	</form>
</div>

</body>
</html>