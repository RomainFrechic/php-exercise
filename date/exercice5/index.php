
<?php 
$dateDebut = "2016/05/16" ; 
$dateFin = "today"; 
$dureeSejour = (strtotime($dateFin) - strtotime($dateDebut)); 
 ?>
<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">

<title>Date exercice 5</title>
</head>
<body>

<h1>Le nombre de Jour entre aujourd'hui est le 16 Mai 2016 est : 
<?php echo number_format($dureeSejour/86400 ,0);

 ?></h1>
</body>
</html>