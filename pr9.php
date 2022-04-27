<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="Post" action="form9.php" style="width:400px; display: flex; flex-direction:column; margion: 0 auto; height: 300px; justify-content:space-between; ">
    <label for="" style="text-align:center;">Имя</label>    
    <input required type="text" name="firstname">
    <label for="" style="text-align:center;">Группа</label>    
    <input required type="text" name="group">
        <div class="pol" style="display:flex; justify-content:space-between;padding: 0px 20px;">
        <div class="item">
            <input require type="radio" name="sex" value="m">
            <label for="sex">Мужской</label>
            </div>
            <div class="item">
            <input require type="radio" name="sex" value="f">
            <label for="sex" >Женский</label>
            </div>
        </div>
        <label for="day" style="text-align:center;">Дата рождения</label>
        <select require name="day" id="">
        <?php
            for($i=1; $i<=31;$i++)
            {
                ECHO '<option value='.$i.'>'.$i.'</option>';
            }
            ?>
        </select>
        <select required name="mouth" >
            <option value="января">Январь</option>
            <option selected value="февраля">Февраль</option>
            <option value="марта">Март</option>
            <option value="апреля">Апрель</option>
            <option value="мая">май</option>
            <option value="июня">Июнь</option>
            <option value="июля">Июль</option>
            <option value="августа">Август</option>
            <option value="сентября">Сентябрь</option>
            <option value="ноября">Ноябрь</option>
            <option value="октября">Октябрь</option>
            <option value="декабря">Декабрь</option>
        </select>
        <select required name="year">
            <?php
            for($i=2021; $i>=1900;$i--)
            {
                ECHO '<option value='.$i.'>'.$i.'</option>';
            }
            ?>
        </select>
        <div class="check">
             <input type="checkbox" name="drive" id="">
    <label for="">Наличие водительского удостоверения</label>
        </div>
   <input type="submit" value="Отправить" name="go">
    </form>
   
</body>
</html>