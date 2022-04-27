<?php
	for ($x=4; $x<10; $x++) echo "<p>".pow($x,2)."</p>";	
?>
<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Document</title>
	</head>
	<body>
		<section>
			<table>
				<tr><td><?php for ($x=4; $x<10; $x++) echo "<p>".$x."</p>"; ?></td><td><?php for ($x=4; $x<10; $x++) echo "<p>".pow($x,2)."</p>"; ?></td></tr>
			</table>

		</section>
	</body>
</html>
<?php
	$first=$f=4;
	$second=$s=9;
	for($s=4; $s<10; $s++){
		$q=$f*$s."__";
		echo $q;
	}	
	for($first=4; $first<10; $first++){
		$q=$first*$second."__";
		echo $q;
	}

	$exercise = "Задание";
	$br = "<br>";
	echo $br;
	echo $br;
	echo $exercise;
	echo $br;
	echo $br;
	echo '<div style="display: flex; width: 800px; justify-content: space-around">';
	for ($x = 4; $x <= 9; $x++){
		echo "<table border='1'>";
		echo "<tbody>";
		for ($b = 1; $b<=10; $b++){
			$itog = $x*$b;
			echo "<tr>";
			echo "<td>".$x."</td>";
			echo "<td>"."*"."</td>";
			echo "<td>".$b."</td>";
			echo "<td>"."="."</td>";
			echo '<td>'.$itog.'</td>';
			echo "</tr>";
		}
		echo $br;
		echo "</tbody>";
		echo "</table>";
	}
	echo '</div>';
?>