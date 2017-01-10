<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Array exercice 9</title>
</head>
<body>
	<?php
       $tableau = array(
"87 " => "Nord ",
"02 " => "Aisne ",
"60 " => "Oise ",
"62 " => "Pas de calais ",
"59 " => "Nord ",
"80 " => "Somme"

			);

       foreach ($tableau as $key => $value) {
       	   echo "clés : $key ","valeur : $value ";
       } 

	?>
</body>
</html>