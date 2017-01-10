<?php
function testUrl(){
	$A = $_GET['semaine'];
	if(isset($A))
	{
		echo "la page est bien ici : ";
		foreach($_GET as $value){
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
	<a href="index.php?semaine=12">Liens</a>
</body>
</html>