<!DOCTYPE HTML>
<?php 
		$ls1 =  file("01.txt");  
		$ls2 =  file("02.txt");
		$ls3 =  file("03.txt");
		$ls4 =  file("04.txt");
		$ls5 =  file("05.txt");
		$ls6 =  file("06.txt");
		$ls7 =  file("07.txt");
		$ls8 =  file("08.txt");
		$ls9 =  file("09.txt");
		$ls10 =  file("10.txt");
		$ls11 =  file("11.txt");
		$ls12 =  file("12.txt");
		$ls13 =  file("13.txt");
		$ls14 =  file("14.txt");
		$ls15 =  file("15.txt");
		$ls16 =  file("16.txt");
		$ls17 =  file("17.txt");
		$ls18 =  file("18.txt");
		$ls19 =  file("19.txt");
		$ls20 =  file("20.txt");
		$ls21 =  file("21.txt");

		$ls1_len = count($ls1);        // число строк в списке 
		$ls2_len = count($ls2);        
		$ls3_len = count($ls3);        
		$ls4_len = count($ls4);        
		$ls5_len = count($ls5);        
		$ls6_len = count($ls6);        
		$ls7_len = count($ls7);        
		$ls8_len = count($ls8);        
		$ls9_len = count($ls9);        
		$ls10_len = count($ls10);        
		$ls11_len = count($ls11);        
		$ls12_len = count($ls12);        
		$ls13_len = count($ls13);        
		$ls14_len = count($ls14);        
		$ls15_len = count($ls15);        
		$ls16_len = count($ls16);       
		$ls17_len = count($ls17);        
		$ls18_len = count($ls18);        
		$ls19_len = count($ls19);        
		$ls20_len = count($ls20);        
		$ls21_len = count($ls21);        

		srand();                     // сбросить генератор случайных чисел
		$num1 = rand(0, $ls1_len-1);   // получить случайный номер
		$num2 = rand(0, $ls2_len-1);
		$num3 = rand(0, $ls3_len-1);
		$num4 = rand(0, $ls4_len-1);
		$num5 = rand(0, $ls5_len-1);
		$num6 = rand(0, $ls6_len-1);
		$num7 = rand(0, $ls7_len-1);
		$num8 = rand(0, $ls8_len-1);
		$num9 = rand(0, $ls9_len-1);
		$num10 = rand(0, $ls10_len-1);
		$num11 = rand(0, $ls11_len-1);
		$num12 = rand(0, $ls12_len-1);
		$num13 = rand(0, $ls13_len-1);
		$num14 = rand(0, $ls14_len-1);
		$num15 = rand(0, $ls15_len-1);
		$num16 = rand(0, $ls16_len-1);
		$num17 = rand(0, $ls17_len-1);
		$num18 = rand(0, $ls18_len-1);
		$num19 = rand(0, $ls19_len-1);
		$num20 = rand(0, $ls20_len-1);
		$num21 = rand(0, $ls21_len-1);

		$line1 = substr(strrchr($ls1[$num1]));
	 	echo $line1;
		$pos = strrchr($line1, ' ');
		echo $pos;
		$line1 = substr($line1, $pos);
		echo $line1;
		//       найти последний пробел 
		//обрезать строку до последнего пробела    // извлечь строку с таким номером
		$line2 = $ls2[$num2];
		$line3 = $ls3[$num3];
		$line4 = $ls4[$num4];
		$line5 = $ls5[$num5];
		$line6 = $ls6[$num6];
		$line7 = $ls7[$num7];
		$line8 = $ls8[$num8];
		$line9 = $ls9[$num9];
		$line10 = $ls10[$num10];
		$line11 = $ls11[$num11];
		$line12 = $ls12[$num12];
		$line13 = $ls13[$num13];
		$line14 = $ls14[$num14];
		$line15 = $ls15[$num15];
		$line16 = $ls16[$num16];
		$line17 = $ls17[$num17];
		$line18 = $ls18[$num18];
		$line19 = $ls19[$num19];
		$line20 = $ls20[$num20];
		$line21 = $ls21[$num21];

	?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="test_e.css" rel="stylesheet" type="text/css" />
	
<title>Тест</title>
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
      <li><a href="index.html">Главная</a>
      <ul>
          <li><a href="6.html">О нас</a></li>
        </ul>
      <li><a href="#">Личная информация</a></li>
      <li><a href="#">Тесты</a>
        <ul>
          <li><a href="test.html">Начать тест</a></li>
        </ul>
       <li><a href="5.html">Вход</a></li>
       <li><a href="4.html">Регистрация</a></li>
    </ul>
  </body>
<head>

<title>Тест №1</title>
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
<h2> Случайный вариант </h2>
<blockquote>
<hr> <B><h3>Вариант состоит из 21 задания. Ответом может быть целое число, десятичная дробь (записывайте её через запятую, вот так: 2,5) или последовательность цифр (пишите без пробелов: 97531).</h3></hr></B>
</blockquote>
</div>
</body>
</head>
<body>
	
	<div class = all_files>
		<?php echo $line1; ?> 
		<td><input type = "text" id ="line1" class = divfiles> </td>
		<p><?php echo $line2; ?>
		<td><input type = "text" id ="line2" ></td>
		<p><?php echo $line3; ?>
		<td><input type = "text" id ="line3"  ></td>
		<p><?php echo $line4; ?>
		<td><input type = "text" id ="line4"  ></td>
		<p><?php echo $line5; ?>
		<td><input type = "text" id ="line5"  ></td>
	
	<div id = divitog>
		<input type="button" id = 'itog_btn' value="Подвести итог" >
		<p></p>
		<input type = "text" id = "itog_text">
		<br>
		Число правильных ответов: 
		<input type = "text" id = "itog_count">
	</div>	
</body>
</html>
