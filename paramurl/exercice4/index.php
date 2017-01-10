<?php
function testUrl(){
	$A = $_GET['langage'];
	$B = $_GET['serveur'];
	if(isset($A) && isset($B)){
		echo "les dates sont bien ici : ";
		foreach($_GET as $value){
			var_dump($value);
		}	
	}else{
		echo "ERREUR 404";
	}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ParamUrl exercice 4</title>
</head>
<body>
	<?php testUrl();  ?>
	<a href="index.php?langage=PHP&amp;serveur=LAMP">Liens</a>
</body>
</html>