<?php $role = 'any'; 
  $user_name = "гость";
?> 
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Тест №3</title>
</head>
<html>
<head>
<title> </title>
</head>
</head>

<TR> <TD><img src="135152.jpg" width=1400 height=120</Td><TD></Td></TR>


<body BGCOLOR="#E6E6FA"> 
<meta charset="utf-8">
<title>Выравнивание по центру</title>
  <style>
   .text {
    text-align:  center;
   }
  </style>

<head>
    <meta charset="utf-8">
    <title>Меню</title>
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
  </head>
 
  <body>
  
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
  </body>
<head>
<title>Тест №3</title>
<style>
.text {
text-align: center;
}
</style>
</head>
<body>
<body>
<div class="text">
<body BGCOLOR="#E6E6FA">
<h2> Пробный вариант №3 </h2>
<blockquote>
<hr> <B><h3>Пробный вариант состоит из 21 задания. Ответом может быть целое число, десятичная дробь (записывайте её через запятую, вот так: 2,5) или последовательность цифр (пишите без пробелов: 97531).</h3></hr></B>
</blockquote>
</div>
</body>
<ol>  
	<B><li><p></p><h3>задание</h3></li></B><div style="text-align:center"><img src="1\38.JPG" width=800 height=50>
		<tr>
			<td><br> <input type="text" name="lastname" size="15"> <br></td>
				<p></p>
		</tr></div>
	<B><li><p></p><h3>задание</h3></li></B><div style="text-align:center"><img src="2\66.JPG" width=800 height=50>
		<tr>
			<td><br> <input type="text" name="lastname" size="15"><br></td>
		</tr></div>
	<B><li><p></p><h3>задание</h3></li></B><div style="text-align:center"><img src="3\69.JPG" width=800 height=250>
		<tr>
			<td><br> <input type="text" name="lastname" size="15"><br></td>
		</tr></div>
	<B><li><p></p><h3>задание</h3></li></B><div style="text-align:center"><img src="4\80.JPG" width=800 height=70>
		<tr>
			<td><br> <input type="text" name="lastname" size="15"> <br></td>
		</tr></div>

	<B><li><p></p><h3>задание</h3></li></B><div style="text-align:center"><img src="5/21.JPG" width=800 height=110>
		<tr>
			<td><br> <input type="text" name="lastname" size="15"> <br></td>
		</tr></div>

	<B><li><p></p><h3>задание</h3></li></B><div style="text-align:center"><img src="6\27.JPG" width=800 height=70>
		<tr>
			<td><br> <input type="text" name="lastname" size="15"> <br></td>
		</tr></div>

	<B><li><p></p><h3>задание</h3></li></B><div style="text-align:center"><img src="7\95.JPG" width=800 height=35>
		<tr>
			<td><br> <input type="text" name="lastname" size="15"> <br></td>
		</tr></div>

	<B><li><p></p><h3>задание</h3></li></B><div style="text-align:center"><img src="8\3.JPG" width=800 height=80>
		<tr>
			<td><br> <input type="text" name="lastname" size="15"> <br></td>
		</tr></div>

	<B><li><p></p><h3>задание</h3></li></B><div style="text-align:center"><img src="9\3.JPG" width=800 height=232>
		<tr>
			<td><br> <input type="text" name="lastname" size="15"> <br></td>
		</tr></div>

	<B><li><p></p><h3>задание</h3></li></B><div style="text-align:center"><img src="10\3.JPG" width=800 height=120>
		<tr>
			<td><br> <input type="text" name="lastname" size="15"> <br></td>
		</tr></div>

	<B><li><p></p><h3>задание</h3></li></B><div style="text-align:center"><img src="C11\3.JPG" width=800 height=70>
		<tr>
			<td><br> <input type="text" name="lastname" size="15"> <br></td>
		</tr></div>

	<B><li><p></p><h3>задание</h3></li></B><div style="text-align:center"><img src="12\3.JPG" width=800 height=50>
		<tr>
			<td><br> <input type="text" name="lastname" size="15"> <br></td>
		</tr></div>

	<B><li><p></p><h3>задание</h3></li></B><div style="text-align:center"><img src="13\3.JPG" width=800 height=85>
		<tr>
			<td><br> <input type="text" name="lastname" size="15"> <br></td>
		</tr></div>

	<B><li><p></p><h3>задание</h3></li></B><div style="text-align:center"><img src="14\3.JPG" width=800 height=60>
		<tr>
			<td><br> <input type="text" name="lastname" size="15"> <br></td>
		</tr></div>

	<B><li><p></p><h3>задание</h3></li></B><div style="text-align:center"><img src="15/3.JPG" width=800 height=70>
		<tr>
			<td><br> <input type="text" name="lastname" size="15"> <br></td>
		</tr></div>

	<B><li><p></p><h3>задание</h3></li></B><div style="text-align:center"><img src="16/3.JPG" width=800 height=120></div>
		<p><div style="text-align:center">Решите это задание в тетради самостоятельно! Ваш учитель его проверит.</p></div>
<style>
  .center { 
    text-align: center; 
  }
</style>
<div class = "center">
  <input type="file" class="upload" id="photo-upload"/>
</div>
	<B><li><p></p><h3>задание</h3></li></B><div style="text-align:center"><img src="17/75.JPG" width=800 height=70></div> 
		<p><div style="text-align:center">Решите это задание в тетради самостоятельно! Ваш учитель его проверит.</p></div>
<style>
  .center { 
    text-align: center; 
  }
</style>
<div class = "center">
  <input type="file" class="upload" id="photo-upload"/>
</div>
	<B><li><p></p><h3>задание</h3></li></B><div style="text-align:center"><img src="18/3.JPG" width=800 height=85></div> 
		<p><div style="text-align:center">Решите это задание в тетради самостоятельно! Ваш учитель его проверит.</p></div>
<style>
  .center { 
    text-align: center; 
  }
</style>
<div class = "center">
  <input type="file" class="upload" id="photo-upload"/>
</div>
	<B><li><p></p><h3>задание</h3></li></B><div style="text-align:center"><img src="19/3.JPG" width=800 height=70></div> 
		<p><div style="text-align:center">Решите это задание в тетради самостоятельно! Ваш учитель его проверит.</p></div>
<style>
  .center { 
    text-align: center; 
  }
</style>
<div class = "center">
  <input type="file" class="upload" id="photo-upload"/>
</div>
	<B><li><p></p><h3>задание</h3></li></B><div style="text-align:center"><img src="20/3.JPG" width=800 height=60></div> 
		<p><div style="text-align:center">Решите это задание в тетради самостоятельно! Ваш учитель его проверит.</p></div>
<style>
  .center { 
    text-align: center; 
  }
</style>
<div class = "center">
  <input type="file" class="upload" id="photo-upload"/>
</div>
	<B><li><p></p><h3>задание</h3></li></B><div style="text-align:center"><img src="21/3.JPG" width=800 height=80></div> 
		<p><div style="text-align:center">Решите это задание в тетради самостоятельно! Ваш учитель его проверит.</p></div>
<style>
  .center { 
    text-align: center; 
  }
</style>
<div class = "center">
  <input type="file" class="upload" id="photo-upload"/>
</div>
</ol>
<meta charset="utf-8">
  <title>Кнопка</title>
 </head>
 <body> 
  <form>
   <p><input type="button" value=" Проверить "></p>
  </form>
