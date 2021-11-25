<?php 
	$role = 'any'; 
	$user_name = "гость";

	require ("dbconnect.php");
	$role = $_COOKIE['auth'];
	$user_id = $_COOKIE['user_id'];
	$user_name = $_COOKIE['user_name'];
	//-- извлекаем данные
	if ($role == 'stud'){
		$query = "SELECT * FROM save_tests WHERE stud_id = $user_id";
	} 
	else{
		$query = "SELECT * FROM save_tests ";		
	}
	$result = mysqli_query($conn, $query);
	if( !$result){
		die("невозможно выбрать данные");
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

<!-- если имеются данные по результатам -->
<?php 
	echo "пользователь:  ".$user_name."<br>";
	if( mysqli_num_rows($result) > 0){
		echo "<div><table >";
		echo "<tr><th>id студента</th><th>предмет</th><th>номер <br> задания</th><th>всего <br> вопросов</th><th>из них <br> правильных</th></tr>";
		while($row = mysqli_fetch_assoc($result)) {
			echo "<tr>";
			echo "<td>".$row['stud_id']."</td>";
			echo "<td>".$row['predm']."</td>";
			echo "<td>".$row['zadan']."</td>";
			echo "<td>".$row['all_num']."</td>";
			echo "<td>".$row['correct_num']."</td>";
			echo "</tr>";			
		}
		echo "</table></div>";

	}

?>


<br>
<a href='index.php'>вернуться на главную страницу</a>

</body>
</html>
