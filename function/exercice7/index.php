	<?php
	function genre($age, $genre){
		if($age > 18 && $genre === 'Homme'){
			
			echo 'Vous êtes un homme et vous êtes majeur. ';
		}
		elseif($age > 18 && $genre === 'Femme'){
		
			echo 'Vous êtes une femme et vous êtes majeur. ';
		}
		elseif($age < 18 && $genre === 'Homme'){
		
			echo 'Vous êtes un homme et vous êtes mineur. ';
		}
		elseif($age < 18 && $genre === 'Femme'){
		
			echo 'Vous êtes une femme et vous êtes mineur. ';
		}
	}

	?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/semantic-ui/2.2.6/semantic.min.css">
	<title>Function exercice 7</title>
</head>
<body>

	<?php
           genre(15,'Femme');
           genre(25,'Femme');
           genre(16,'Homme');
           genre(30,'Homme');
	?>
</body>
</html>