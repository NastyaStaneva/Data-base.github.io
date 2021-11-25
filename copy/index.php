<?php $role = 'any'; 
	$user_name = "гость";
?> 
<!DOCTYPE html >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="styles.css" rel="stylesheet" type="text/css">
	<title>Главная</title>
</head>

<body BGCOLOR="#E6E6FA"> 

<TR> <TD><img src="135152.jpg" width=1395 height=120><TD></Td></TR>

  <div class="text">
   <h2> <B> <p>ЕГЭ - основная форма госсударственной (итоговой) аттестации выпускников школ.</p></B></h2>
 </div>

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
	  <div class="text">	
	  	<h3><B><p>На сайте опубликованы контрольно-измерительные материалы Государственной итоговой аттестации.</p></B></h3>
	  </div>

<table align=center>
<colgroup>
    <col span="7" style=" background:White">
    <col style="background-color:SlateBlue">
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

<?php if ($role == 'any'): ?> 
					
	<div class="text">
		<h3><p>Пробные тесты:</p></B></h3>
	</div>
	 
	<div class="btn-group" style="width:100%">
		<a href="test1.php"><button style="width:33.3%">Тест 1</button></a>
		<a href="test2.php"><button style="width:33.3%">Тест 2</button></a>
		<a href="test3.php"><button style="width:33.3%">Тест 3</button></a>
	</div>
<?php endif; ?> 

</body>
</html>
