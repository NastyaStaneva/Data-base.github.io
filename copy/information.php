<?php $role = 'any'; 
  $user_name = "гость";
?> 
<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="styles.css" rel="stylesheet" type="text/css">
<title>О нас</title>
</head>

<TR> <TD><img src="135152.jpg" width=1400 height=120><TD></Td></TR>


<body BGCOLOR="#E6E6FA"> 
 
    <ul id="navbar">
      <li><a href="index.php">Главная</a>
      <li><a href="information.html">Личная информация</a></li>
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

<h2>О нас</h2>
<p>На сайте находятся тестовые варианты, краткая справочная информация о ЕГЭ, а также руководства по испльзованию сайта.

Проект "Формирование базы данных 
образовательного сайта" создан в 2021 году и активно развивается. Наша команда — это студентки РФ ПГУ, следуя нашим задачам мы стремимся сделать проект лучше, чтобы обучение было для вас увлекательным и эффективным, а результаты превысили все ваши ожидания.

Миссия проекта – создать и развить современную высокотехнологичную обучающую онлайн платформу и предоставить пользователям тестовые ванты в случайном порядке.</p>

<div class="container">
    <h2>Свяжитесь с нами</h2>
    
  </div>
  <div class="container">
  <form action="/action_page.php">
    <div class="row">
      <div class="col-25">
        <label for="fname">Имя</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" placeholder="Введите имя..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Email</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="lastname" placeholder=" Ведите Email..">
      </div>
    </div>
    
    <div class="row">
      <div class="col-25">
        <label for="subject">Сообщение</label>
      </div>
      <div class="col-75">
        <textarea id="subject" name="subject" placeholder="Напишите сообщение.." style="height:200px"></textarea>
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Отправить">
    </div>
  </form>
</div>
<div class="map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26359195.17562375!2d-113.7156245614499!3d36.2473834534249!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited+States!5e0!3m2!1sen!2sin!4v1471497559566"  style="width:100%;height:500px" allowfullscreen=""></iframe>
  </div>

<div class="container">
  
  <div class="content">
    <div style="text-align:center">
    <h3>Контактная информация:</h3>
                    <p>Рыбница, ул.  Гагарина, 12 </p>
					<p class="lst"> (00373)-(555)-2-09-03 </p>
					<p>8:00 - 17:00</p>
				</ul>
    </div>        
  </div>
</div>

</body>
</html>