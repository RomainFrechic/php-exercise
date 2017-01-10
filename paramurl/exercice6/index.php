<?php
function testUrl(){
	$a = $_GET['batiment'];
	$b = $_GET['salle'];
	if(isset($a) && isset($b)){
		echo "Le batiment et la Salle sont bien ici : ";
		foreach($_GET as $value){
		echo $value;
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
	<a href="index.php?batiment=12&amp;salle=101;">Liens</a>
</body>
</html>