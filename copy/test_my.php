<!DOCTYPE HTML>
<?php 
	$role = 'any'; 
	$user_name = "гость";

//require ("fil_tests.php");
	$itog_text = "";
  //проверяем на переход после тестирования
	
    if( isset($_REQUEST['tst_nm'])){
		echo "test_nm";
		//формитуем полученные переменные
		$tst_nm = $_REQUEST['tst_nm'];
		$itog_text = $_REQUEST['itog_text'];   
		$fl_nm = $_REQUEST['fl_nm'];
		//считываем файл с заданиями
		$lines  = file( $fl_nm);
		//формируем списки номеров заданий и ответов
		$temp_list = explode(';', $itog_text);
		$last_empty = array_pop($temp_list);
		$quest_count = count($temp_list);
		$task_nums = array();
		$answ_list = array();
		echo $answ_list;
		foreach ($temp_list as $temp_line) {
		  $answ_pair = explode(':', $temp_line);
		  $task_nums[] = +$answ_pair[0];    //преобразовать строку в целое
		  $answ_list[] = trim($answ_pair[1]);  
		}

		//расчитать число правильных ответов
		$itog_count = 0;
		
		for( $num = 0; $num < count( $task_nums); $num++) {
			$task_num = $task_nums[$num];
			$line = $lines[$task_num];
			$line = trim($line);
			$space_pos = strrpos($line,' ');

			$true_answ = trim(substr( $line, $space_pos + 1));
			if( $true_answ == $answ_list[$num]){
				$itog_count += 1;
			}
		}
    }
    elseif( isset($_REQUEST['zadan'])){
		$itog_text = $_REQUEST['itog_text'];
		$temp_list = explode(';', $itog_text);
		$last_empty = array_pop($temp_list);  //-- удаляем последний пустой ответ
		$quest_count = count($temp_list);

		require ("dbconnect.php");
		$itog_count = 0;
		foreach ($temp_list as $temp_line) {
			//-- берем ответ студента
			$answ_pair = explode(':', $temp_line);
			$answer = trim($answ_pair[1]);
			//-- извлекаем из таблицы правильный ответ и сравниваеем
			$task_id = +$answ_pair[0];    //преобразовать строку в целое
			$sql = "SELECT * FROM tests WHERE id = $task_id";
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) == 1){
				$row = mysqli_fetch_assoc($result);
				$correct_answer = $row['answ'];
				if ($answer == $correct_answer){
					$itog_count += 1;
				} 
			}
		}
		//-- записываем результат в таблицу ответов
		$user_id = $_COOKIE['user_id'];
		$predmet = $row['predm'];
		$zadan = $row['zadan'];
		$bad_num = $quest_count - $itog_count;
		$query = "INSERT INTO save_tests ( predm, zadan, stud_id, answer, correct_num, error_num, all_num) VALUES ( '$predmet','$zadan', '$user_id', '$itog_text', '$itog_count', '$bad_num', '$quest_count')";
		$result = mysqli_query($conn, $query);
		if ( !$result){
			die ("не могу сохранить ответ");
		}
		
	}
    else {
        $tst_nm = ''; $zadan = ""; //при первом посещении 
    }

?>

<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link href="styles.css" rel="stylesheet" type="text/css">
  <meta charset="utf-8">
<title>Тест</title>
</head>

<TR> <TD><img src="135152.jpg" width=1400 height=120></Td></TR>

<body BGCOLOR="#E6E6FA">
	<?php 
		echo $itog_text;
	?>

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

<h2> Случайный вариант </h2>
<blockquote>
<hr> <B><h3>Вариант состоит из 21 задания. Ответом может быть целое число, десятичная дробь (записывайте её через запятую, вот так: 2,5) или последовательность цифр (пишите без пробелов: 97531).</h3></hr></B>
</blockquote>
</div>
  
  <div class = all_tasks>
    <p>
    <a href = test_tbl.php?zadan=01>Задание 1</a>
    <p> 
    <a href = test_tbl.php?zadan=02>Задание 2</a>
    <p> 
    <a href = test_tbl.php?zadan=03>Задание 3</a>
    <p> 
    <a href = test_tbl.php?zadan=04>Задание 4</a>
    <p> 
    <a href = test_tbl.php?zadan=05>Задание 5</a>
    <p> 
    <a href = test_tbl.php?zadan=06>Задание 6</a>
    <p> 
    <a href = test_tbl.php?zadan=07>Задание 7</a>
    <p> 
    <a href = test_tbl.php?zadan=08>Задание 8</a>
    <p> 
    <a href = test_tbl.php?zadan=09>Задание 9</a>
	<p>
	<a href = test_tbl.php?zadan=10>Задание 10</a>
    <p> 
    <a href = test_tbl.php?zadan=11>Задание 11</a>
    <p> 
    <a href = test_tbl.php?zadan=12>Задание 12</a>
    <p> 
    <a href = test_tbl.php?zadan=13>Задание 13</a>
    <p>
    <a href = test_tbl.php?zadan=14>Задание 14</a>
    <p>
    <a href = test_tbl.php?zadan=15>Задание 15</a>
    <p>
  <?php  if( $itog_text != ''): ?>
    <table class = results>
      <tr>
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