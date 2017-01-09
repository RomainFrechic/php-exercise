<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Loop exercice 3</title>
</head>
<body>
	<?php 
	$A = 100;
	$B = rand(1,100);
	for($A = 100; $A >= 10; $A--){
		if($A < 10){
			break;
		}else{
			$result = $A * $B;
			echo $result;
			var_dump($A);
		}
	}

	?>
</body>
</html>