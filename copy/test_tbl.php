<!DOCTYPE html> 
<?php 
	$role = 'any'; 
	$user_name = "гость";
	//-- test_tbl.php вариант выбора текста задания из таблицы test
	require ("dbconnect.php");
	//отработать вариант случайного посещения
   	$zadan = -1;    	
    $error = "";

	//проверяем на переход для тестирования
    if( isset($_REQUEST['zadan'])){
        $zadan = $_REQUEST['zadan'];
		$sql = "SELECT * FROM tests WHERE zadan = $zadan";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) < 1){
			$error = "Ошибочный номер задания";
		}
		else{
			$lines = array();
			while($row = mysqli_fetch_assoc($result)) {
				$line = $row['id'].": ".$row['quest'];
				$lines[] = $line;
            }

		}
		
    }
    //формируем случайные вопросы теста
    if( !$error ){
    	$lines_len = count ( $lines);
    	$num = 0;
    	$test_lines = array();
    	while( $num <  $lines_len ){
    		//случайные номера через 5
    		$rand_num = rand( $num , $num+4 );
    		//формируем строку тестового задания
            $line = $lines[ $rand_num ];
    		$test_lines[] = $line;
    		$num += 5; 
    	}
    }
?>

<html>
<head>
	<meta http-equiv=Content-Type content="text/html; charset=utf8">
	<title>Тестовые задания ЕГЭ по математике </title>
	<link href="styles.css" rel="stylesheet" type="text/css">
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
    
	<!-- заголовок -->
	<div class=sel_file>
		<h3>Тестовые задания ЕГЭ по математике</h3>
		<p>
		<h3><?php echo $tst_nm ?></h3>
	</div>

    <?php 
    	if( $error ){ 
    		echo $error;
    	}
    	else {

    ?>
		<!-- задачи -->
		<div class = all_tasks>
			<?php 
			$num_task = 0;
			foreach ($test_lines as $line) {?>
				<div class = divtask>
					<?php echo( $line );?> 
					<br>Ответ: <input type = text class = text_answ 
					id = text_answ<?php echo $num_task ?> >    	
				</div>
			<?php  $num_task += 1;} ?>
		</div>
		<!-- расчетная часть -->
		<form id = form_itog action = 'test_my.php' method = post>
            <input type="button" id = 'itog_btn' value="Подвести итог" >
			<input type = hidden id = 'itog_text' name = 'itog_text'><br>
			<input type = hidden id = 'zadan' name = 'zadan' value = "<?php echo $zadan ?>"><br>
			<p></p>
		</form>	
		<script src="test_tbl.js"></script>

	<?php } ?>
</div>

</body>
</html>
