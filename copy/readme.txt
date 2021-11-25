			�������:
				���������
				�����������
				������������
			���������:
				home2010.py: 22 ��� (����� ����)
		"http://www.denwer.ru/faq/shared.html":
		01  ��������� ����������� ������ (�����������, ��������) Windows:
			�������� ���� � ������ ����������, �������� ���������� Windows.
			��������� �� ������� ����������.
			������� ������ �������� ����, � ���� ��� ������� ��� IP-�����, � � ���� ����� ����� ������� 80.
			
			���� �� ������������� ���� ����������� ���������� ��� ���������, ��, �������, ��� �������� ���������� � �� ������������.

			������� ������ �������� ����� ������
			�����������, ��� IP-����� ����� 192.168.0.49, ��� � ������� ����. ����� ������� ������ ��������� ������ ��������� �� ������ http://192.168.0.49 ������������ ���� 
			� ��� ����������� ��������� ����� � ����������:
			/home/192.168.0.49/www

			������ ������ ���������� IP-������ �����
			�����������, ��� ��� ���� �������� � ���������� /home/mysupersite/www. 
			����� ��������� ��� IP-����� 192.168.0.49, 
			���������� ������� ���� /home/mysupersite/.htaccess 
			� �������� � ���� �������:

## ���� /home/mysupersite/.htaccess
## ������� ����� ��� ������� IP-�����, � �� 192.168.0.49!
# dnwr_ip 192.168.0.49

			����� ������, ����� ��� ���������� ���������, 
			�������� � ���� /home/custom/.htaccess.
				��� �������)))
		
		"https://www.live-notes.ru/coding/24/":
			� ����� � ������ (�� � ����� www), 
			��������, �� ���� Z:\home\mysite, 
			������� ���� .htaccess �� ��������� �����������:
			# dnwr_ip 192.168.1.5
			�� ����� 192.168.1.5 ������ ���� ip-����� ������ ���������� � ��������.

			�� ���������� � �������� ��������� ������� ������ � ������, 
			� ���� host, ������� ��������� �����: C:\Windows\System32\drivers\etc, 
			����� �������� ������:
				192.168.1.5 mysite
			�� ����� 192.168.1.5 ������ ���� ip-����� ���������� � ��������, 
			� �� ����� mysite ������ ���� ��� ������ �����, 
			�������� � ����� home �� �������.

			����� ���� ����������� ����� ������������� Denwer.

			���� ����� ��������� ������ ������, 
			�� ����� ����� ����� �� ���� .htaccess 
			������ � ����� � ������� � ���������� ����������� ������ � ���� hosts.

		"http://webguruz.ru/web-developer/denwer-local-site-share/"
		��� ���� ���� ���� �������� �� ����� ��������� ���������� 
		���� �������� � ������� ���������� ������������� � ����� ���� 
		���������� ������� ���������:

		1. ���� � C:/WebServers/usr/local/apache/conf/httpd.conf 
		� ��������� ������� apache ������� 80 ���� 
		(������ ������ �� ��������� ���������������� � ����� ������������, 
		�.�. � denwer ���� ����� �������������) �� �� ���������������.

		#Listen 80
 		������� ��:
 		Listen 80

		2. � ���� �� ����� ������� ������ ��������� ��������� ����������� ������ apache:

		#Listen $&{ip:-127.0.0.1}:$&{port:-80}
		#NameVirtualHost $&{ip:-127.0.0.1}:$&{port:-80}
		#<VirtualHost $&{ip:-127.0.0.1}:$&{port:-80}>
 
		������� ��:
 
		##Listen $&{ip:-127.0.0.1}:$&{port:-80}
		#NameVirtualHost $&{ip:-*}:$&{port:-80}
		#<VirtualHost $&{ip:-*}:$&{port:-80}>

		3. ��������� ���������� windows, ��� ���� ���� 80 ���� ���� �������� �����, 
		�������� �������� ��������� ��������� ���� ��� �� ����������� ������ ��� ����.

		�������� ����������� ����� ����� ��������� �� ������� ���������� ��������:

		telnet ��-����������-�-������ 80

		4. �� ������ ���������� � ���� hosts 
		(� windows ��������� � c:/windows/sistem32/drivers/etc/hosts) 
		����������� ���� ������� ����� �����������:

		��-����������-�-������ example.ru

		������������� apache, denwer, � ��������� ����������� ����� 
		�� ������� ���������� ���� � �������� ������ 
		���� �� ������� ��� ���������� ���� ��������� � hosts example.ru
		------------------------------

		��� ��������� ��������� ����� 
		����� � ����� .htaccess � ����� ����� �������� ������

		AddDefaultCharset utf-8

		"http://www.htaccess.net.ru/doc/htaccess/index.php"

		"https://ru.hostings.info/schools/htaccess.html"
		�������� �������� �������� 	.htaccess
		���� ��������� ��������� � �����������

			AddDefaultCharset WINDOWS-1251

		��������� HTTP-����������� ��� ����� ����� � ������� ���������� ���� � .htaccess:

			<IfModule mod_expires.c>
			ExpiresActive On
			ExpiresByType application/javascript "access plus 7 days"
			ExpiresByType text/javascript "access plus 7 days"
			ExpiresByType text/css "access plus 7 days"
			ExpiresByType image/gif "access plus 30 days"
			ExpiresByType image/jpeg "access plus 30 days"
			ExpiresByType image/png "access plus 30 days"
			</IfModule>

		"��������� ����������� ����� ���� .htaccess"
		https://www.netangels.ru/support/hosting-old/htaccess-cache/

		��� ������ �����������
		<FilesMatch ".(pl|php|cgi|spl|scgi|fcgi)$">
  			Header unset Cache-Control
		</FilesMatch>
		����� ������� ���������� ������, 
		������� �� ��������� ����������, 
		������ ������� ��������� ���� ������.

		���  � �������������� � ����� .htaccess:

		<IfModule mod_expires.c>
		    ExpiresActive On
		    ExpiresDefault "access plus 1 month" # ��� ��� ����

		    ExpiresByType image/gif "access plus 2 months" # �������� ��� ����������
		    ExpiresByType image/jpeg "access plus 2 months"
		</IfModule>

