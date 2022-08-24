<?php

if(isset($_COOKIE['isOnline'])){
    header("Location:http://php.lc/profile.php?id='$_COOKIE[id]'");
}
if(isset($_COOKIE['success']))
{
    echo ($_COOKIE['success']);
   
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход</title>
</head>
<body>
    <main>
    <form action="function.php" method="post" name="logForm">
        <input type="text" name="login" maxlength="50" placeholder="Логин"/><br>
        <input type="password" name="passin" maxlength="50" placeholder="Пароль"/><br>
        <button type="submbit" name="logBtn">Войти</button>
    </form>
</main>
</body>
</html>