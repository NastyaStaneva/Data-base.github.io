<?php
  //регистрация. запись данных в бд
  require('dbconnect.php');
  
  if(isset($_POST['email']) && isset($_POST['password'])) {
    $last_name = $_POST['last_name'];
    $firs_name = $_POST['firs_name'];
    $patronymic = $_POST['patronymic'];
    $email = $_POST['email'];
    $school = $_POST['school'];
    $class = $_POST['class'];
    $password = $_POST['password'];
    $password_snd = $_POST['password_snd'];

    $query = "INSERT INTO users ( last_name, firs_name, patronymic, email, school, class, password, password_snd) VALUES ( '$last_name','$firs_name', '$patronymic', '$email', '$school', '$class', '$password', '$password_snd')";

    $res = $conn->query($query);
    if($res) {
        $ssmg = "Вы успешно зарегистрировались.";

    }
    else {
        $fsmg = "Ошибка. Возможно, вы ввели некоретные данные или такой пользователь уже существует.";
        die($fsmg);
    }
    
  }
  
?> 
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="st_reg.css">
<head>
<title> </title>
</head>
</head>

<TR> <TD><img src="135152.jpg" width=1400 height=120</Td><TD></Td></TR>


<body BGCOLOR="#E6E6FA"> 
<meta charset="utf-8">
<title>Выравнивание по центру</title>
  
<head>
    <meta charset="utf-8">
    <title>Меню</title>
</head>
 
<body>
    <ul id="navbar">
      <li><a href="index.html">Главная</a>
      <ul>
          <li><a href="6.html">О нас</a></li>
        </ul>
      <li><a href="6.html">Личная информация</a></li>
      <li><a href="#">Тесты</a>
        <ul>
          <li><a href="test_my.php">Начать тест</a></li>
        </ul>

      <li><a href="5.html">Вход</a></li>
      <li><a href="4.html">Регистрация</a></li>

     
      </ul>

  <div class="container">
    
    <form class = "form-signin" method="POST" action = "index.php" >  
    <h1>Регистрация</h1>
    <p>Пожалуйста, заполните эту форму для создания аккаунта.</p>
    <hr>

  <?php if (isset($ssmg)){ ?> <div class = "alert alert-success" role = "alert"> <?php echo $ssmg;?> </div> <?php } ?><a href = "index.php">Перейти на главную</a><br>

  <?php if (isset($fsmg)){ ?> <div class = "alert alert-danger" role = "alert"> <?php echo $fsmg;?> </div> <?php } ?>
 

    <label for="psw"><b>Фамилия</b></label>
    <input type="text" placeholder="" name="last_name" required>
 
    <label for="psw"><b>Имя</b></label>
    <input type="text" placeholder="" name="firs_name" required>

    <label for="psw"><b>Отчество</b></label>
    <input type="text" placeholder="" name="patronymic" required>
 
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Школа</b></label>
    <input type="text" placeholder="" name="school" required>
 
    <label for="psw"><b>Класс</b></label>
    <input type="text" placeholder="" name="class" required>

    <label for="psw"><b>Пароль</b></label>
    <input type="password" placeholder="Введите пароль" name="password" required>
    

    <label for="psw-repeat"><b>Повторите пароль</b></label>
    <input type="password" placeholder="Повторите пароль" name="password_snd" required>
 
    <input type="hidden"  name="registr" value=1>
   
    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px">  Запомнить меня
    </label>
    
    <p>Создав учетную запись, вы соглашаетесь с нашими Условиями и Конфиденциальностью.<a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
        <button type="button"  class="cancelbtn">Отмена</button>
        <button type="submit" name = "do_singup" class="signupbtn" value="submit">Зарегистрироваться</button>
    </div>
  </div>
</form>

<a href = "index.php">Перейти на главную</a>

</body>
</html>
    




	