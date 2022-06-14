<?php  require_once('base.php') ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="loccarstyle.css">
</head>
<body>
<div id="container">
	<form action="" method="post" class="formulaire">
		<h1>Connexion</h1>
		<label><b>Nom d'utilisateur :</b></label>
		<input type="text" name="txtlogin" placeholder="entrer le nom d'utilisateur " required class="zonetext">


		<label><b>Mot de passe :</b></label>
		<input type="password" name="txtpass" placeholder="entrer le Mot de passe " required class="zonetext">
		<input type="submit" name="butnlogin" value="login" id="submit" class="submit">
		<?php 
         if (isset($_POST['butnlogin'])) {
         	$req="select * from utilisateure where LOGIN='" . $_POST['txtlogin'] . "' and MOTDEPASS='" . $_POST['txtpass'] . "'";
         	if($result=mysqli_query($database,$req) ){
         		$ligne=mysqli_fetch_assoc($result);
         		if($ligne!=0){
         			session_start();
         			$_SESSION['monLogin'] = $_POST['txtlogin'];
         			header("location:accuiel.php");

         		}
         		else{
         			echo "<font color='#F0001D'>Login ou Mot de passe est invalide </font>";
         		}
         	}
         }
		?>
	</form> 
</div>
</body>
</html>