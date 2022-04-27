<?php
    echo "Здраствуйте, ".$_POST['firstname'].", из  ".$_POST['group']." группы, сейчас расчитаем, когда вам на пенсию, так как вы родились в ".$_POST['day']." ".$_POST['mouth']." ".$_POST['year']." следовательно ";
    echo " вам осталось до пенсии ";    
    $ye=2022-(int)$_POST['year'];
    if($_POST['sex'] == "m")
    {
        echo 65-$ye." лет";   
    }
    if($_POST['sex'] != "m")
    {
        echo 63-$ye." лет";    
    }
?>
