<!DOCTYPE HTML>
<?php 
$lines = file('01.txt'); 
  //-- проверяем на переход после тестирования
    if( isset($_REQUEST['tst_nm'])){

      //-- формитуем полученные переменные
        $tst_nm = $_REQUEST['tst_nm'];
        //echo $tst_nm;
      $itog_text = $_REQUEST['itog_text'];   
      $fl_nm = $_REQUEST['fl_nm'];
      //-- считываем файл с заданиями
      //$lines  = file( $fl_nm);
      echo $fl_nm;
      echo $lines;
      //-- формируем списки номеров заданий и ответов
      $temp_list = explode(';', $itog_text);
      //echo $itog_text;
      $last_empty = array_pop($temp_list);
      $quest_count = count($temp_list);

      $task_nums = array();
      $answ_list = array();
    foreach ($temp_list as $temp_line) {
      $answ_pair = explode(':', $temp_line);
      $task_nums[] = +$answ_pair[0];    //-- преобразовать строку в целое
      $answ_list[] = trim($answ_pair[1]);  
    }

      //-- расчитать число правильных ответов
    $itog_count = 0;
    
    for( $num=0; $num < count( $task_nums); $num++) {
            $task_num = $task_nums[$num];
      $line = $lines[$task_num - 1];
      $line = trim($line);
      
      $space_pos = strrpos($line,' ');

        $true_answ = trim(substr( $line, $space_pos + 1));
        //echo $true_answ.'<br>';
        if( $true_answ == $answ_list[$num]){
          $itog_count += 1;
        }
    }
    
    }
    else {
        $tst_nm = '';  //-- при первом посещении 
    }

?>

<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link href="test.css" rel="stylesheet" type="text/css" />
  <meta charset="utf-8">
<title>Тест</title>
<title>Меню</title>
</head>


<TR> <TD><img src="135152.jpg" width=1400 height=120></Td></TR>

<body BGCOLOR="#E6E6FA"> 

<title>Выравнивание по центру</title>
  <style>
   .text {
    text-align:  center;
   }

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
      .text {
        text-align: center;
      }
  </style>

<body>
  
    <ul id="navbar">
      <li><a href="index.php">Главная</a>
      <ul>
          <li><a href="6.html">О нас</a></li>
        </ul>
      <li><a href="#">Личная информация</a></li>
      <li><a href="test_my.php">Тесты</a>
       <li><a href="5.php">Вход</a></li>
       <li><a href="4.php">Регистрация</a></li>
    </ul>

<div class="text">

<h2> Случайный вариант </h2>
<blockquote>
<hr> <B><h3>Вариант состоит из 21 задания. Ответом может быть целое число, десятичная дробь (записывайте её через запятую, вот так: 2,5) или последовательность цифр (пишите без пробелов: 97531).</h3></hr></B>
</blockquote>
</div>
  
  <div class = all_tasks>
    <p>
    <a href = test.php?fl_nm=01.txt>Задание 1</a>
    <p> 
    <a href = test.php?fl_nm=02.txt>Задание 2</a>
    <p></p>
  
  <?php  if( $tst_nm != ''): ?>
    <table class = results>
      <tr>
        <td>Пройден тест:</td> 
        <td><input type = "text" id ="test_name" value = "<?php echo $tst_nm; ?>" ></td>
      </tr><tr>
        <td>Строка ответов: </td>
        <td><input type = "text" id ="itog_text" value = "<?php echo $itog_text; ?>" ></td>
      </tr><tr>
        <td>Общее число вопросов: </td>
        <td><input type = "text" class = "count_result" value = "<?php echo $quest_count; ?>" ></td>
      </tr><tr>
        <td>Число правильных ответов: </td>
        <td><input type = "text" class = "count_result" value = "<?php echo $itog_count; ?>" ></td>
      </tr>
    </table>
  <?php endif ?>    
</body>
</html>