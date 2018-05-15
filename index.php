<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
	<?php
		echo "<h1>".'Exo 1'."</h1>";

			$mois = array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'décembre');

			echo "<p>"."Tableau déclaré"."</p>";



		echo "<h1>".'Exo 2'."</h1>";

			echo "<p>".$mois[2]."</p>";


		echo "<h1>".'Exo 3'."</h1>";

			echo "<p>".$mois[5]."</p>";


		echo "<h1>".'Exo 4'."</h1>";

			$mois[7] = 'août';
			echo "<p>"."accent ajouté... preuve : ".$mois[7]."</p>";


		echo "<h1>".'Exo 5'."</h1>";

			$couple_nom_CodeP = array();

			$couple_nom_CodeP ['09'] = "Ariège";
			$couple_nom_CodeP ['11'] = "Aude";
			$couple_nom_CodeP ['12'] = "Aveyron";
			$couple_nom_CodeP ['30'] = 'Gard';
			$couple_nom_CodeP ['31'] = "Haute-Garonne";
			$couple_nom_CodeP ['32'] = "Gers";
			$couple_nom_CodeP ['34'] = "Hérault";
			$couple_nom_CodeP ['46'] = "Lot";
			$couple_nom_CodeP ['48'] = "Lozère";
			$couple_nom_CodeP ['65'] = "Hautes-Pyrénées";
			$couple_nom_CodeP ['66'] = "Pyrénées-Orientales";
			$couple_nom_CodeP ['81'] = "Tarn";
			$couple_nom_CodeP ['82'] = "Tarn-et-Garonne";

			echo "<p>"."tableau déclaré."."</p>";



		echo "<h1>".'Exo 6'."</h1>";

			echo "<p>".$couple_nom_CodeP['30']."</p>";



		echo "<h1>".'Exo 7'."</h1>";

			$couple_nom_CodeP ['11100'] = "Narbonne";

			echo "<p>"."ligne ajoutée au tableau."."</p>";


		echo "<h1>".'Exo 8'."</h1>";

			foreach ($mois as $quel_mois) {
				echo "<p>".$quel_mois."</p>";
			}



		echo "<h1>".'Exo 9'."</h1>";

			foreach ($couple_nom_CodeP as $dept) {
				
				echo "<p>".$dept."</p>";
			}



		echo "<h1>".'Exo 10'."</h1>";

			foreach ($couple_nom_CodeP as $key => $dept) {
				echo "<p>"."Le département ".$dept." a le numéro ".$key."</p>";

			}
	?>

</body>
</html>