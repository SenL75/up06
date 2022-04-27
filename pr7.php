<?php
$br = "<br>";
$x = 7;
$y = 10;
if($x > $y){
    echo $x;
}
else{
    echo $y;
}
echo $br;

$a = -10;
echo $a;
echo $br;
if ($a > 0){
    echo "Число положительное, не равно нулю";
}
elseif ($a == 0){
    echo "Число равно нулю";
}
else{
    echo "Число отрицательное, не равно нулю";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica_7</title>
</head>
<body>
    <form action="pr7.php" method="get">
        <label for="login">Введите логин</label>
        <input type="text" name = "login">
        <label for="password">Введите пароль</label>
        <input type="password" name = "password">
        <input type="submit" name="log_in">
    </form>
</body>
</html>
<?php
    $br = "<br>";
    $br;
    $real_login = "admin";
    $real_password = "123";
    if(isset($_GET['log_in'])){
        $login=(string)$_GET['login'];
        $pass=(string)$_GET['password'];
        if ($login == $real_login){
            if($pass == $real_password){
                echo "Вы вошли в аккаунт";
            }
            else{
                echo "Введеный вами пароль не действителен";
            }
        }
        else{
            echo "Ошибка входа";
        }
    }
?>
