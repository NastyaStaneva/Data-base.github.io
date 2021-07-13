<?php //-- prep_index.php
	if (isset($_COOKIE['auth'])) 
		$role = $_COOKIE['auth'];
	
		
	else{
		//-- проверить вход по авторизации 
			$role = 'any'; $login=''; $pass='';

			if (isset($_POST['email'])) 
	        { 
	            $login = $_POST['email']; 
	            if ($login == '') 
	            { 
	            	unset($login);
	            } 
	        } 

	        if (isset($_POST['password'])) 
	        { 
	            $password=$_POST['password']; 
	            if ($password =='') 
				{ 
					unset($password);
	            } 
	        }

	        if (empty($login) or empty($password)) 
	        {
	        	echo ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
	    	}

	    	$login = stripslashes($login);
		    $login = htmlspecialchars($login);
		    $password = stripslashes($password);
		    $password = htmlspecialchars($password);

		    $login = trim($login);
		    $password = trim($password);

		    include ("dbconnect.php");

		    $sql = "SELECT id, email, password FROM users";
			$result = $conn->query($sql);
			$followingdata = $result->fetch_assoc();

			if (empty($followingdata['email']))
	    	{
	        	exit ("Извините, введённый вами логин или пароль неверный.");
	    	}

	    	else {
		        if ($followingdata['password'] == $password) { 
		        	setcookie('auth', 'admin');
		        	$role = 'admin';
		        }
		        else 
		    	{
		        	exit ("Извините, введённый вами логин или пароль неверный.");
		    	}
	    	}
	    }

?>