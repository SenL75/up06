<?php
$exercise = "Задание";
$br = "<br>";
$color = "green";
echo $exercise;
echo $br;
echo $br;
echo '<div style="display: flex; width: 800px; justify-content: space-around">';
for ($x = 4; $x <= 9; $x++){
    echo "<table border='1'>";
    echo "<tbody>";
    for ($b = 1; $b<=10; $b++){
        $itog = $x*$b;
        if ($itog < 40){
            if( $itog % 2 == 0){
            echo "<tr>";
            echo "<td>".$x."</td>";
            echo "<td>"."*"."</td>";
            echo "<td>".$b."</td>";
            echo "<td>"."="."</td>";
            echo '<td style ="color: green; background: grey;">'.$itog.'</td>';
            echo "</tr>"; 
            }
            else{
            echo "<tr>";
            echo "<td>".$x."</td>";
            echo "<td>"."*"."</td>";
            echo "<td>".$b."</td>";
            echo "<td>"."="."</td>";
            echo '<td style ="color: green;">'.$itog.'</td>';
            echo "</tr>"; 
            }
        }
        elseif ($itog > 75){
            if($itog  % 2 == 0){
                echo "<tr>";
                echo "<td>".$x."</td>";
                echo "<td>"."*"."</td>";
                echo "<td>".$b."</td>";
                echo "<td>"."="."</td>";
                echo '<td style ="color: red; background: grey; font-weght: 700">'.$itog.'</td>';
                echo "</tr>";   
            }
            else{
                echo "<tr>";
                echo "<td>".$x."</td>";
                echo "<td>"."*"."</td>";
                echo "<td>".$b."</td>";
                echo "<td>"."="."</td>";
                echo '<td style ="color: red; font-weght: 700">'.$itog.'</td>';
                echo "</tr>";   
            }
        }
        else{
            if($itog  % 2 == 0){
                echo "<tr>";
                echo "<td>".$x."</td>";
                echo "<td>"."*"."</td>";
                echo "<td>".$b."</td>";
                echo "<td>"."="."</td>";
                echo '<td style ="background: grey;">'.$itog.'</td>';
                echo "</tr>";
            }
            else{
                echo "<tr>";
                echo "<td>".$x."</td>";
                echo "<td>"."*"."</td>";
                echo "<td>".$b."</td>";
                echo "<td>"."="."</td>";
                echo "<td>".$itog."</td>";
                echo "</tr>"; 
            }
        }

    }
    echo $br;
    echo "</tbody>";
    echo "</table>";
}
echo '</div>';
?>