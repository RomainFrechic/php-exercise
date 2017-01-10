<?php
function testUrl(){
	$a = $_GET['dateDebut'];
	$b = $_GET['dateFin'];
	if(isset($a) && isset($b)){
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
	<title>ParamUrl exercice 3</title>
</head>
<body>
	<?php testUrl();  ?>
	<a href="index.php?dateDebut=2/05/2016&amp;dateFin=27/11/2016;">Liens</a>
</body>
</html>