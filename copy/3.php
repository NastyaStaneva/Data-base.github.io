<!DOCTYPE HTML>
<html>

<head>
	<link href="setting.css" rel="stylesheet" type="text/css">
</head>

<body>
	<h3> время: <?php echo date("H:i:s"); ?> </h3>
	<div class = coding>
		<h3> кодировка </h3>
		для настройки кодировки utf-8 Денвера нужно изменить
		глобавльные настройки сервера:<br>
			открыть 	<b>/usr/local/apache/conf/httpd.conf</b><br>
			найти в нем строку <b>AddDefaultCharset windows-1251</b><br>
			и заменить её на <b>AddDefaultCharset utf-8</b>.
			
	</div>
	<div class = cash_page>
		<h3> кэширование страницы</h3>
		для	отключения кэширования можно добавить в каждую страницу
		заголовочную часть РНР из этого файла

	</div>
	<div class = cash_browser>
		<h3> кэширование браузера</h3>
		для отключения кэширования в хроме:<br>
		нажать <b> F12 </b><br>
		выбрать вкладку <b> Network </b> <br>
		включить флажок <b> disable cache </b> <br>
	</div>
	<div class = cash_test>
		<h3> проверка кэширования</h3>
		для проверки отсутствия кэширования перезагрузите эту страницу
	</div>
	<div class = cash_browser>
		комбинация клавиш <b>Ctrl+F5</b> должна перезагружать страницу без кэширования
	</div>

</body>
</html>
