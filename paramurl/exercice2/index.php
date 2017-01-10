
<?php
function ageUrl(){
	$A = $_GET['age'];
	if(isset($A)){
		echo "La page age existe";
	}else{
		echo "La page n'existe pas";
	}
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>ParamUrl exercice 2</title>
</head>
<body>
	<?php ageUrl(); ?>
			<a href="index.php?nom=Nemare&amp;prenom=Jean&amp;">Liens</a>
	</body>
</html>