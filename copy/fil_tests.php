<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//-- формируем параметры
$predm = "математика";
$zadan = "3";
$fl_nm = $zadan.'.txt';

//-- считываем строки из файла вопросов
$tst_nm = $test_names[$fl_nm];
$lines  = file( $fl_nm);	
$lines_len = count ( $lines);

//-- добавляем поля с вопросами и ответами
for ($num = 0; $num < $lines_len; $num++){
	//-- выделяем вопрос и правильный ответ
	$line = trim($lines[$num]);
	$space_pos = strrpos($line,' ');
	$answ = substr( $line, $space_pos);
	$space_pos = strrpos($line, ' ', $space_pos-1);
	$quest = substr( $line, 0, $space_pos);
	$images = substr( $line, $space_pos);
	echo $num." ".$quest." ->> ".$answ."<br>";

	//-- добавляем в таблицу вопросов
	    $query = "INSERT INTO tests ( predm, zadan, quest, answ, images) 
		          VALUES ( '$predm','$zadan', '$quest', '$answ', '$images')";

    $res = $conn->query($query);
    if(!$res) {
        $fsmg = "Ошибка записи теста. ";
        die($fsmg);
    }
	
}


?>

<!DOCTYPE html>
<html>
<head>
<title>¬ход</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>
<body>

</body>
</html>
