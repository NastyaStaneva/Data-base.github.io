<?php
    if (isset($_POST['last_name'])) 
        { 
            $last_name = $_POST['last_name']; 
            if ($last_name =='') { unset($last_name);} 
        }

        if (isset($_POST['first_name'])) 
        { 
            $first_name = $_POST['first_name']; 
            if ($first_name =='') { unset($first_name);} 
        }

        if (isset($_POST['patronymic'])) 
        { 
            $patronymic = $_POST['patronymic']; 
            if ($patronymic =='') { unset($patronymic);} 
        }
        if (isset($_POST['school'])) 
        { 
            $school = $_POST['school']; 
            if ($school =='') { unset($school);} 
        }

        if (isset($_POST['class'])) 
        { 
            $class = $_POST['class']; 
            if ($class =='') { unset($class);} 
        }

        if (isset($_POST['email'])) 
        { 
            $login = $_POST['email']; 
            if ($login == '') { unset($login);} 
        } 

        if (isset($_POST['password'])) 
        { 
            $password = $_POST['password']; 
            if ($password =='') { unset($password);} 
        }

         if (empty($last_name) or empty($first_name) or empty($patronymic) or empty($school) or empty($class) or empty($login) or empty($password))
        {
            exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
        }

    
        $login = stripslashes($login);
        $login = htmlspecialchars($login);
        $password = stripslashes($password);
        $password = htmlspecialchars($password);

        $login = trim($login);
        $password = trim($password);

        include ("dbconnect.php");

        $result = regestr_query("SELECT id FROM users WHERE email ='$login'",$db);
        $myrow = regestr_fetch_array($result);
        if (!empty($myrow['id'])) 
        {
            exit ("Извините, введённый вами логин уже зарегистрирован. Введите другой логин.");
        }

        $result2 = regestr_query ("INSERT INTO users (email, password) VALUES('$login','$password')");

        if ($result2 =='TRUE')
        {
        echo "Вы успешно зарегистрированы! Теперь вы можете зайти на сайт. <a href='index.html'>Главная страница</a>";
        }
        else {
            echo "Ошибка! Вы не зарегистрированы.";
        }

    ?>
    
