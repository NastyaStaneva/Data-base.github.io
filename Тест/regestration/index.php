
<?php
  
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
    echo $res;
    if($res) {
        $ssmg = "Вы успешно зарегистрировались.";
        setcookie('from', $ssmg);

    }
    else {
        $fsmg = "Ошибка. Возможно, вы ввели некоретные данные или такой пользователь уже существует.";
        die($fsmg);
    }
    //$registr  = 1;
    //$registrblock = 1;
  }

  //else{
    //setcookie('from', 'first');
    //$registr = 0;  
    //$registrblock = 0;


  //}

   
?> 
<?php
  
  if(isset($_COOKIE['from'])) {
    $from = $_COOKIE['regirt'];
    echo $from;
  }
  else {
    $from = 'first';
    echo $from;
  }

?> 
<!DOCTYPE html >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Главная</title>
  <style>
   .text {
    text-align:  center;
   }
  </style>

    <style>
      #navbar ul{
        display: none;
        background-color: #f90;
        position: absolute;
        top: 100%;
      }
      #navbar li:hover ul { display: block; }
      #navbar, #navbar ul{
        margin: 0;
        padding: 0;
        list-style-type: none;
      }
      #navbar {
        height: 50px;
        background-color: #666;
        padding-left: 25px;
        min-width: 470px;
      }
      #navbar li {
        float: left;
        position: relative;
        height: 100%;
      }
      #navbar li a {
        display: block;
        padding: 6px;
        width: 100px;
        color: #fff;
        text-decoration: none;
        text-align: center;
      }
      #navbar ul li { float: none; }
      #navbar li:hover { background-color: #f90; }
      #navbar ul li:hover { background-color: #666; }
    </style>

<style>
.btn-group button {
    background-color: #666; /* Green background */
    color: white; /* White text */
    padding: 10px 24px; /* Some padding */
    cursor: pointer; /* Pointer/hand icon */
    float: left; /* Float the buttons side by side */
}

/* Clear floats (clearfix hack) */
.btn-group:after {
    content: "";
    clear: both;
    display: table;
}

.btn-group button:not(:last-child) {
    border-right: none; /* Prevent double borders */
}

/* Add a background color on hover */
.btn-group button:hover {
    background-color: #f90;
}
</style>

  <style>
   .text {
    text-align:  center;
   }
  </style>
 

</head>
<body BGCOLOR="#E6E6FA"> 

<TR> <TD><img src="135152.jpg" width=1395 height=120</Td><TD></Td></TR>


  <div class="text">
   <h2> <B> <p>ЕГЭ - основная форма госсударственной (итоговой) аттестации выпускников школ.</p></B></h2>
 </div>

    <ul id="navbar">
      <li><a href="index.php">Главная</a>
      <ul>
          <li><a href="6.html">О нас</a></li>
        </ul>
      <li><a href="6.html">Личная информация</a></li>
      
        <li><a href="#">Тесты</a>
        <ul>
          <li><a href="test_my.php">Начать тест</a></li>
        </ul>
  
      <li><a href="5.php">Вход</a></li>
     
      <li><a href="4.php">Регистрация</a></li>
  <?php /*endif;*/ ?>
      </ul>

	  <div class="text">
	  	
	  	<h3><B><p>На сайте опубликованы контрольно-измерительные материалы Государственной итоговой аттестации.</p></B></h3>
	  </div>

<table align=center>
<colgroup>
    <col span="7" style=" background:White"><!-- С помощью этой конструкции задаем цвет фона для первых двух столбцов таблицы-->
    <col style="background-color:SlateBlue"><!-- Задаем цвет фона для следующего (одного) столбца таблицы-->
  </colgroup>
<tr>
    <th>Предметы</th>
    <th>Всего заданий</th>
    <th>Всего первичных баллов</th>
    <th>Минимальный порог</th>
    <th>"3"</th>
    <th>"4"</th>
    <th>"5"</th>
     </tr>
   <tr>
    <td>Математика</td>
    <td>21</td>
    <td>33</td>
    <td>5</td>
    <td>5-11</td>
    <td>12-16</td>
    <td>17-33</td>
  </tr>
 <tr>
    <td>Русский</td>
    <td>27</td>
    <td>58</td>
    <td>15</td>
    <td>15-33</td>
    <td>34-45</td>
    <td>46-58

</td>
  </tr>
                <div class="text">

<p><h4><B>В ходе тестирования Вы:</B></h4>
<li>ознакомитесь с тематикой тестовых заданий;</li>
<li>проверите уровень знаний на данном этапе;</li>
<li>наметите пути более эффективной подготовки к экзаменам и устранения пробелов в знаниях по ранее изученному материалу;</li>
Репетиционное тестирование будет проводиться по материалам, предоставленным ЦЕКО ПМР. Обработка бланков ответов и расчет результатов будет осуществляться по установлению минимального количества баллов единого государственного экзамена.
</p>
	  	
<p>У пользователей есть возможность пройти пробные тесты без регистрации. После прохождения теста результаты НЕ СОХРАНЯТЬСЯ без регистрации или входа на свой аккаунт.
Так же у пользователей, которые прошли этап регистрации есть возможность проходить тесты в неограниченном размере, с проверкой своих знаний и итоговым результатом.
Тесты будут автоматически сохраняться в разделе «Личная информация». После истечения времени выделенным на тест, тест будет завершаться автоматически или его можно завершить самостоятельно.
</p>
	        </div>
                
<?php
  
  /*if($registr != 1):*/

?>

  <div class="text">
   <h3><p>Пробные тесты:</p></B></h3>
 </div>
 
<div class="btn-group" style="width:100%">
 <a href="test1.html"><button style="width:33.3%">Тест 1</button></a>
 <a href="test2.html"><button style="width:33.3%">Тест 2</button></a>
 <a href="test3.html"><button style="width:33.3%">Тест 3</button></a>
</div>

<?php /*endif;*/ ?>






</body>
</html>
