
<?php 
$dateDebut = "2016/02/01" ; 
$dateFin = "2016/02/29"; 
$dureeSejour = (strtotime($dateFin) - strtotime($dateDebut)); 
 ?>
<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">

<title>Date exercice 5</title>
</head>
<body>

<h1>Le nombre de du mois de février est : 
<?php echo number_format($dureeSejour/86400 ,0)+1;

 ?></h1>
</body>
</html>