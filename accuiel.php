<?php
require_once 'base.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="loccarstyle.css" type="text/css">
	<style >
		.mypic{
			width: 50px;
			height: 50px;
			border-radius: 50%;
			border: 1px solid ;
		}
	</style>
	
</head>
<body>
 <div id="global">
 	<div id="profil">
 		<?php 
          session_start();
          echo "bienvenue " . $_SESSION['monLogin'] . "<br>";
          $reqe="select * from utilisateure where LOGIN ='" . $_SESSION['monLogin'] . "'";
          $resultats=mysqli_query($database,$reqe);
          $ligne=mysqli_fetch_assoc($resultats);
 		?>
 		<img src="<?php echo $ligne['MYPIC'];?>" class="mypic"> 
 		<br>
 		<a href="déconnecter.php">Déconnetion</a>
 		
 	</div>
 	<div id="tableaubord">
 		<?php 
         include("tableaubord.php")
 		?>

 		
 	</div>
 	
 </div>

</body>
</html>