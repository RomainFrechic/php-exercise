<?php 
setcookie('login',$_POST['login'] ,time()+ 365*24*3600, null, null, false, true);
setcookie('pwd',$_POST['pwd'] ,time()+ 365*24*3600, null, null, false, true);
?>
<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">

<title>GlobalVariable exercice 4</title>
</head>
<body>
	<form action="index.php" method="POST">

		Votre login : <input type="text" name="login" value="romain ">
		<br />
		Votre mot de passé : <input type="password" name="pwd" value="frechic "><br />
		<input type="submit" value="Connexion">
	</form>
	<a href="user.php">Liens user.php</a></br>


	<?php 
	echo "le login est : ".$_COOKIE['login'].'</br>';
	echo "le Mot de passe est : ".$_COOKIE['pwd'];
	?>

</body>
</html>