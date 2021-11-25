			вопросы:
				кодировка
				кэширование
				расшаривание
			материалы:
				home2010.py: 22 сен (кроме кэша)
		"http://www.denwer.ru/faq/shared.html":
		01  Настройка межсетевого экрана (брандмауэра, фаервола) Windows:
			Откройте Пуск — Панель управления, выберите Брандмауэр Windows.
			Перейдите на вкладку Исключения.
			Нажмите кнопку Добавить порт, в поле Имя введите ваш IP-адрес, а в поле Номер порта укажите 80.
			
			Если вы устанавливали свой собственный брандмауэр или антивирус, то, конечно, вам придется обратиться к их документации.

			Простой способ открытия сайта наружу
			Предположим, ваш IP-адрес равен 192.168.0.49, как в примере выше. Самый простой способ заставить Денвер открывать по адресу http://192.168.0.49 определенный сайт 
			— это расположить документы сайта в директории:
			/home/192.168.0.49/www

			Другой способ назначения IP-адреса сайту
			Предположим, что ваш хост хранится в директории /home/mysupersite/www. 
			Чтобы назначить ему IP-адрес 192.168.0.49, 
			необходимо создать файл /home/mysupersite/.htaccess 
			и добавить в него строчки:

## Файл /home/mysupersite/.htaccess
## Укажите здесь ваш внешний IP-адрес, а не 192.168.0.49!
# dnwr_ip 192.168.0.49

			чтобы узнать, какие еще существуют директивы, 
			заглянув в файл /home/custom/.htaccess.
				там отрыжка)))
		
		"https://www.live-notes.ru/coding/24/":
			В папке с сайтом (не в папке www), 
			например, по пути Z:\home\mysite, 
			создать файл .htaccess со следующим содержанием:
			# dnwr_ip 192.168.1.5
			На месте 192.168.1.5 должен быть ip-адрес вашего компьютера с денвером.

			На компьютере С КОТОРОГО требуется получит доступ к сайтам, 
			в файл host, который находится здесь: C:\Windows\System32\drivers\etc, 
			нужно добавить строку:
				192.168.1.5 mysite
			На месте 192.168.1.5 должен быть ip-адрес компьютера с денвером, 
			а на месте mysite должно быть имя вашего сайта, 
			лежащего в папке home на денвере.

			После этих манипуляций нужно перезапустить Denwer.

			Если нужно расшарить больше сайтов, 
			то нужно точно такой же файл .htaccess 
			класть в папки с сайтами и дописывать анологичные строки в файл hosts.

		"http://webguruz.ru/web-developer/denwer-local-site-share/"
		Для того чтоб сайт поднятый на вашем локальном компьютере 
		стал доступен с другого компьютера подключенного к вашей сети 
		необходимо сделать следующее:

		1. Идем в C:/WebServers/usr/local/apache/conf/httpd.conf 
		и указываем серверу apache слушать 80 порт 
		(данная строка по умолчанию закомментирована в целях безопасности, 
		т.к. у denwer есть права админстратора) мы ее раскомментируем.

		#Listen 80
 		заменим на:
 		Listen 80

		2. В этом же файле изменим шаблон генерации настройки вирутальных хостов apache:

		#Listen $&{ip:-127.0.0.1}:$&{port:-80}
		#NameVirtualHost $&{ip:-127.0.0.1}:$&{port:-80}
		#<VirtualHost $&{ip:-127.0.0.1}:$&{port:-80}>
 
		заменим на:
 
		##Listen $&{ip:-127.0.0.1}:$&{port:-80}
		#NameVirtualHost $&{ip:-*}:$&{port:-80}
		#<VirtualHost $&{ip:-*}:$&{port:-80}>

		3. Отключаем брендмауер windows, для того чтоб 80 порт стал доступен извне, 
		возможно придется проверить антивирус чтоб они не блокировали нужный нам порт.

		Проверку доступности порта можно проверить со второго компьютера командой:

		telnet ип-компьютера-с-сайтом 80

		4. На втором компьютере в файл hosts 
		(в windows находится в c:/windows/sistem32/drivers/etc/hosts) 
		прописываем сайт который хотим просмотреть:

		ип-компьютера-с-сайтом example.ru

		Перезапускаем apache, denwer, и проверяем доступность сайта 
		со второго компьютера вбив в адресную строку 
		либо ип нужного нам компьютера либо введенный в hosts example.ru
		------------------------------

		для изменения кодировки сайта 
		нужно в файле .htaccess в корне сайта добавить строку

		AddDefaultCharset utf-8

		"http://www.htaccess.net.ru/doc/htaccess/index.php"

		"https://ru.hostings.info/schools/htaccess.html"
		наиболее разумное описание 	.htaccess
		есть директивы Кодировка и кэширование

			AddDefaultCharset WINDOWS-1251

		Настроить HTTP-кэширование для сайта можно с помощью следующего кода в .htaccess:

			<IfModule mod_expires.c>
			ExpiresActive On
			ExpiresByType application/javascript "access plus 7 days"
			ExpiresByType text/javascript "access plus 7 days"
			ExpiresByType text/css "access plus 7 days"
			ExpiresByType image/gif "access plus 30 days"
			ExpiresByType image/jpeg "access plus 30 days"
			ExpiresByType image/png "access plus 30 days"
			</IfModule>

		"Настройка кэширования через файл .htaccess"
		https://www.netangels.ru/support/hosting-old/htaccess-cache/

		для отмены кэширования
		<FilesMatch ".(pl|php|cgi|spl|scgi|fcgi)$">
  			Header unset Cache-Control
		</FilesMatch>
		здесь указаны расширения файлов, 
		которые не требуется кэшировать, 
		просто укажите требуемые типы файлов.

		или  с использованием в файле .htaccess:

		<IfModule mod_expires.c>
		    ExpiresActive On
		    ExpiresDefault "access plus 1 month" # это для всех

		    ExpiresByType image/gif "access plus 2 months" # уточняем для конкретных
		    ExpiresByType image/jpeg "access plus 2 months"
		</IfModule>

