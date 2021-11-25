<?php 
  $role = 'any'; 
  $user_name = "гость";


    if ( (isset($_COOKIE['auth']))&(!isset($_POST['unregist']))){
        $role = $_COOKIE['auth'];
        $registered = 1;  //уже был зарегистрирован
    } 
    else{
        $registered = 0;
		setcookie('auth', "");
		setcookie('user_id', "");
		setcookie('user_name', "");

        $role = 'any'; $login=''; $pass='';
        //проверяем правильность регистрации по форме
        if (isset($_POST['email'])) 
        { 
            $login = $_POST['email']; 
            $login = trim($login);
        } 
        if (isset($_POST['password'])) 
        { 
            $pass=$_POST['password']; 
            $pass = trim($pass);
        }
        if( $login != ""){
            //ищем логин и пароль в таблице пользователей
            require ("dbconnect.php");
            $sql = "SELECT * FROM users ";
            $result = $conn->query($sql);
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                 //проверить каждую запись
                 while($row = mysqli_fetch_assoc($result)) {
                     if(( $row['email'] == $login) && ( $row['password'] == $pass) ){
                         $registered = 1;
                        // setcookie('auth', 'admin'); 
						setcookie('auth', $row['role']);
						setcookie('user_id', $row['id']);
						setcookie('user_name', $row['firs_name'].' '.$row['last_name']);
                        break;     
                     }
                 }
            }
            else{
                 $registered = -1; //неверный логин и пароль
            }
        }
    }
?>        



<!DOCTYPE html>
<html>
<head>
<title>Вход</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="styles.css" rel="stylesheet" type="text/css">
</head>
<body BGCOLOR="#E6E6FA">
<TR> <TD><img src="135152.jpg" width=1395 height=120><TD></Td></TR>

<ul id="navbar">
      <li><a href="index.php">Главная</a>
      <li><a href="information.php">Личная информация</a></li>
 <?php     if (isset($_COOKIE['auth'])){
           $role = $_COOKIE['auth'];
       $user_name = $_COOKIE['user_name'];
          }
?>
<?php if ($role != 'any'): ?> 
       <li><a href="test_my.php">Тесты</a>        
       <li><a href="brow_results.php">Ответы</a>        
<?php endif; ?> 

      <li><a href="autoris.php">Вход</a></li>     
<?php if ($role == 'any'): ?> 
    <li><a href="registr.php">Регистрация</a></li>      
<?php endif; ?> 
      </ul>
  <h3><?php
    echo 'пользователь: '.$user_name.", роль: ".$role; 
    ?>
  </h3>

<!-- если удачно зарегистрировались -->
<?php if( $registered == 1): ?>
Вы правильно зашли<br>
<a href='index.php'>вернуться на главную страницу</a>
<form method=post>
	<input type = hidden name = unregist value = 1>
	<input type = submit value = "отменить авторизацию">
</form>
<?php  endif ?>


<!-- если неверный логин или пароль -->
<?php if( $registered == -1){
    echo ("Извините, введённый вами логин или пароль неверный. <br>");    
}
?>

<!-- если еше не зарегистрировались -->
<?php if( $registered < 1): ?>

<form method="POST" >
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>
	<br>
    
    <label for="password"><b>Пароль</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
    <br>   
    <button type="submit">Войти</button>

</form>
<br>
<a href='index.php'>вернуться на главную страницу</a>
<?php  endif ?>

</body>
</html>
