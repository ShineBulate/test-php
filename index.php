<?php
/*
if(isset($_COOKIE['user_name'])){
	header('Location:https://github.com/ShineBulate?tab=repositories');
}*/
foreach($_COOKIE as $key => $value) setcookie($key, '', time() - 3600, '/');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,400;0,500;1,100&display=swap" rel="stylesheet">
    <title>Регистрация</title>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.7.0/dist/vue.js"></script>

</head>
<header>

</header>
<body>
<main>
<form action="function.php" method="post" name="reg_form" required/><br>
<<<<<<< HEAD
<input type="text" name="username" placeholder="�����" required /><br>
<input type="email" name="e_mail" placeholder="E-mail" required /><br>
<input type="password" name="password" placeholder="������" required / > <br>
<input type="password" name="repass" placeholder="��������� ������" required /><br>
=======
<input type="text" name="login" placeholder="Логин" required /><br>
<input type="text" name="name" placeholder="Имя" required /><br>
<input type="email" name="e_mail" placeholder="E-mail" required /><br>
<input type="password" name="user_pass" placeholder="Пароль" required / > <br>
<input type="password" name="re_pass" placeholder="Повторите пароль" required /><br>
>>>>>>> eaa5a798703dcbab189f69f2b4407e70cba9897c

<button type="submit">Зарегистрироваться</button>
</form>
</main>
<script>
function check(){	
let password = document.getElementsByName('user_pass');
let re_password = document.getElementsByName('re_password');
if(password !== re_password ){
alert('Ïàðîëè íå ñîâïàäàþò!' + password + re_password);

}
else{
	
}
}
</script>
</body>
</html>
