<meta charset="UTF-8">
<link rel="stylesheet" href="./style.css">
<title>GlobalVariable exercice 1</title>
</head>
<body>
	<?php 
	if(empty($_POST)){
		?>
		<form enctype="multipart/form-data" action="index.php" method="POST">

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
				echo $value."</br>";
			}
			


		echo "L'adresse ip est :".$_SERVER["REMOTE_ADDR"]."</br>";
		echo "Le nom de server est :".$_SERVER['SERVER_NAME']."</br>";
		echo "L'user agent est :".$_SERVER['HTTP_USER_AGENT']."</br>";
	}

	?>

</body>
</html>