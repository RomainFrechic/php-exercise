<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Array exercice 10</title>
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
       	   echo " Le département $value ","à le numéro : $key .";
       } 

		?>
</body>
</html>