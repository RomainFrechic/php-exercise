<?php 
//Tableau des mois 12 mos de l'année
	$mois_fr = Array("", "Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août","Septembre", "Octobre", "Novembre", "Décembre");
//Recupere le mois et l'année selectionné dans les variable global
//Et l'affiche dans la variable $titre
	if(isset($_POST['mois']) && isset($_POST['annee']))
	{
		$mois=$_POST['mois'];
		$annee=$_POST['annee'];
	}
	else
	{
		$mois=date("n");
		$annee=date("Y");
	}
//Variable du tableau de 01 à 31
	$l_day=date("t",mktime(0,0,0,$mois,1,$annee));
//Variable pour que lecommence tableau en partant du premier Jour 01
	$x=date("N", mktime(0, 0, 0, $mois,1 , $annee));
//Variable du nbre du mois selectionné
	$y=date("N", mktime(0, 0, 0, $mois,$l_day , $annee));

//Affiche $_GET['mois'] et $_GET['annee']
	$titre=$mois_fr[$mois]." : ".$annee;

//Affiche le nbre de jour de 1 à 31 --> echo $l_day
	echo $l_day;

	?>
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>TP Calendrier</title>
	</head>
	<body>
		<!DOCTYPE html>
		<html>
		<head>
			<title>Agenda en PHP</title>
			<link href="style.css" rel="stylesheet" type="text/css" />
		</head>
		<body class="alignBlock">
			<form name="dt" method="get" action="">
				<select name="mois" id="mois" class="liste">
					<?php
	//Boucle pour les 12 mois
					for($i=1;$i<13;$i++)
					{
		//Met la valeur du select du mois choisi par l'utilisateur
						echo '<option value="'.$i.'"selected>'.$mois_fr[$i].'</option>';

					}
					?>
				</select>
				<select name="annee" id="annee" class="liste">
					<?php
	//Boucle des années de 2000 à 2020
					for($i=2000;$i<2021;$i++)
					{
		//Met la valeur du select de l'année choisi par l'utilisateur
						echo '<option value="'.$i.'" selected>'.$i.'</option>';
					}
					?>
				</select>
				<button>Envoyer</button>
			</form>
<!-- Affiche au dessus du tableau jour le contenu de la variable $titre 
qui contiens le mois et l'année sélectionner
c'est ce contenu qui va nous servir à changer les données du calendriers --> 
<table class="tableauCadre"><caption class="titreCadre"><?php echo $titre; ?></caption>
	<!-- Tableau des 7 jours de la semaine -->
	<tr><th class="jBorder">Lun</th><th class="jBorder">Mar</th><th class="jBorder">Mer</th><th class="jBorder">Jeu</th><th class="jBorder">Ven</th><th class="jBorder">Sam</th><th class="jBorder">Dim</th></tr>
	<tr>
		<?php 
// Affiche le nbre du mois selectionner --> echo $y
		echo $y;
		$case=0;
//Affiche le tableau en partant du premier Jour 01 avec la variable $x stocker plus haut
		if($x>1)
			for($i=1;$i<$x;$i++)
			{
				echo '<td></td>';
				$case++;
			}
//Affiche le tableau avec la variable $l_day stocker plus haut
			for($i=1;$i<($l_day+1);$i++)
			{
				$y=date("N", mktime(0, 0, 0, $mois,$i , $annee));
				$da=$annee."-".$mois."-".$i;
				echo "<td";
				if(in_array($da))
					{if($clic==1)
						echo $da;
					}
	// Affiche le tableau de 01 à 31
					echo" <td class='jourBorder'>$i</td>";
					$case++;
					if($case%7==0)
		//colonne de 7jours
						echo "</tr><tr>";	
				}
				?>	
			</tr>
		</table>
	</body>
</html>