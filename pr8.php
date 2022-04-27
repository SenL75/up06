<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>practica_8</title>
</head>
<body>
    <form action="pr8.php" method="get">
        <label>Введите имя</label>
        <input type="text" name="name">
        <label>Введите возраст</label>
        <input type="text" name="age">
        <label>Выберите пол</label>
        <select name="gender">
            <option value="1">male</option>
            <option value="0">female</option>
        </select>
        <input type="submit" name="btn">
    </form>
</body>
</html>
<?php
$br = "<br>";
echo $br;
if(isset($_GET['btn'])){
    if ($_GET['gender'] == 1){
        $gender = "муж.";
        echo "Здравствуйте, ".$_GET['name']." Вы указали данные: ".$_GET['age']." и Возраст ".$gender;
    }
    else{
        $gender = "жен.";
        echo "Здравствуйте, ".$_GET['name']." Вы указали данные: ".$_GET['age']." и Возраст ".$gender;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>practica_8</title>
</head>
<body>
    <form action="pr8.php" method="get">
        <label>Введите 1 число</label>
        <input type="number" name="number_1">
        <label>Введите 2 число</label>
        <input type="number" name="number_2">
        <label>Введите 3 число</label>
        <input type="number" name="number_3">
        <input type="submit" name="submit">
    </form>
</body>
</html>
<?php
$br = "<br>";
echo $br;
if(isset($_GET['submit'])){
    $x =(int)$_GET['number_1'];
    $y =(int)$_GET['number_2'];
    $z =(int)$_GET['number_3'];
    echo " Максимально число = ".max($x, $y, $z);
    echo $br;
    echo " Минимальное число = ".min($x, $y, $z);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>practica_8</title>
</head>
<body>
    <form action="pr8.php">
        <label>Исходное слово</label>
        <input type="text" name="text">
        <input type="submit" name="button">
    </form>
</body>
</html>
<?php
$br = "<br>";
if(isset($_GET['button'])){
    $text = $_GET['text'];
    $text2 = str_replace('а','о',$text);
    $text = str_replace('к','н',$text2);
    echo $text;
}
?>