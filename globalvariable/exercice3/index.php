<?php 
setcookie('login',$_POST['login'] ,time()+ 365*24*3600, null, null, false, true);
setcookie('pwd',$_POST['pwd'] ,time()+ 365*24*3600, null, null, false, true);
?>
<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">

<title>GlobalVariable exercice 3</title>
</head>
<body>
	<form action="index.php" method="POST">

		Votre login : <input type="text" name="login" value="romain ">
		<br />
		Votre mot de passé : <input type="password" name="pwd" value="frechic "><br />
		<input type="submit" value="Connexion">
	</form>
	<a href="user.php">Liens user.php</a>


<?php 
	echo $_COOKIE['login'].$_COOKIE['pwd']; 
?>

</body>
</html>