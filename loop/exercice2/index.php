<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Loop Exercice 2</title>
</head>
<body>
	<?php 
	$A = 0;
	$B = rand(1,100);

	for ($A = 0; $A <= 20; $A++){
		if($A > 20){
			break;
		}else{
			$result = $A * $B;
			echo $result;
		}
	}

	?>
</body>
</html>