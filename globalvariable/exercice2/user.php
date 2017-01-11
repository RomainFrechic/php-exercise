<?php 
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>GlobalVariable exercice 2</title>
</head>
<body>
	<?php 
echo $_SESSION['nom'],$_SESSION['prenom'],$_SESSION['age']; 
?>

</body>
</html>