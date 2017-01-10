<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="./style.css">
	<title>Form exercice 7</title>
</head>
<body>
<?php 
  if(empty($_POST)){
 ?>
	<form action="index.php" method="POST">
		
		<label for="name">Nom</label>
		<select name="Genre">
			<option value="Mr ">Mr</option>
			<option value="Mme ">Mme</option></select>
			<input type="text" value="John " name="name" id="name">	
			<input type="text" value="Lennon " name="prenom" id="prenom"></br>
            <input type="file" name="nomfichier" /></br>

			<button type="submit">Envoyer</button>
		</form>

<?php 
}else{

   foreach ($_POST as $value) {
   	echo $value;
}
	
}

?>
 

	</body>
	</html>