<!DOCTYPE html> 
<?php  
	//-- отработать ваиант случайного посещения
   	$tst_nm = "";    	
    $fl_nm = '';  
    $error = "";

	//-- проверяем на переход для тестирования
    if( isset($_REQUEST['fl_nm'])){
        $fl_nm = $_REQUEST['fl_nm'];
    }
    //-- словарь названий тестов
    $test_names['01.txt'] = "Задание 1";
    $test_names['02.txt'] = "Задание 2";
    //-- извлекаем название теста и его строки
    if(!array_key_exists ( $fl_nm , $test_names )){
    	$error = "Ошибочный параметр ссылки";
    }
    elseif( !file_exists ( $fl_nm )){
    	$error = "Ошибочное имя файла с тестами";
    }
    else{
    	$tst_nm = $test_names[$fl_nm];
    	$lines  = file( $fl_nm);	
    }

    //-- формируем случайные вопросы теста
    if( !$error ){
    	$lines_len = count ( $lines);
    	$num = 0;
    	$test_lines = array();
    	while( $num <  $lines_len ){
    		//-- случайные номера через 5
    		$rand_num = rand( $num , $num+4 );
    		//echo $rand_num;
    		//-- формируем строку тестового задания
            $line = $lines[ $rand_num ];
            $otvet_pos = strrpos($line,'Ответ');
    		$test_lines[] =substr( $line, 0, $otvet_pos);
    		$num += 5; 
    	}
    }
?>

<html>
<head>
	<meta http-equiv=Content-Type content="text/html; charset=utf8">
	<title>Тестовые задания ЕГЭ по математике </title>
	<link href="test.css" rel="stylesheet" type="text/css" />
</head>

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
			<input type = hidden id = 'fl_nm' name = 'fl_nm' value = "<?php echo $fl_nm ?>"><br>
			<input type = hidden id = 'tst_nm' name = 'tst_nm' value = "<?php echo $tst_nm ?>"><br>
			<p></p>
		</form>	
		<script src="test.js"></script>

	<?php } ?>
</div>

</body>
</html>
