<?php
	$x=10;
	$y=5;
	$sum=$x+$y;
	$raz=$x-$y;
	$pro=$x*$y;
	$cha=$x/$y;
	// задание 1
	$sumT="10+5=".$sum;
	$razT="10-5=".$raz;
	$proT="10*5=".$pro;
	$chaT="10/5=".$cha;
	$text= "Задание 1<br>".$sumT."<br>".$razT."<br>".$proT."<br>".$chaT."<br>";
	echo $text;
	// задание 2
	$x=25;
	$y=9;
	$sum=$x+$y;
	$raz=$x-$y;
	$pro=$x*$y;
	$cha=$x/$y;
	$sumT="25+9=".$sum;
	$razT="25-9=".$raz;
	$proT="25*9=".$pro;
	$chaT="25/9=".$cha;
	$text= "Задание 2<br>".$sumT."<br>".$razT."<br>".$proT."<br>".$chaT."<br>";
	echo $text;
	// задание 2.5
	$x=31;
	$y=15;
	$sum=$x+$y;
	$raz=$x-$y;
	$pro=$x*$y;
	$cha=$x/$y;
	$sumT="31+15=".$sum;
	$razT="31-15=".$raz;
	$proT="31*15=".$pro;
	$chaT="31/15=".$cha;
	$text= "Задание 2.5<br>".$sumT."<br>".$razT."<br>".$proT."<br>".$chaT."<br>";
	echo $text;
	// задание 3
	$text= "Задание 3.1<br>";
	echo $text;
	$a=3;
	$z3_1=$a*2;
	$b=$z3_1;
	echo $b;
	$text= "<br>Задание 3.2<br>";
	echo $text;
	$k=3;
	$z3_2=$k/3+1;
	$k_new=$z3_2;
	echo $k_new;
	$text= "<br>Задание 3.2<br>";
	echo $text;
	$a=4;
	$S=1/4*pow($a,1/3);
	echo $S;
	$text= "<br>Задание 3.2<br>";
	echo $text;	
	$max=max(5, 6, 7);
	$min=min(5, 6, 7);
	$mm="Максимальное: ".$max."<br>Минимальное: ".$min;
	echo $mm;
?>