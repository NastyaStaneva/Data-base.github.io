<?php
    session_start();
    if (isset($_POST['email'])) 
        { 
            $login = $_POST['email']; 
            if ($login == '') 
                { unset($login);} 
        } 
    if (isset($_POST['password'])) 
        { 
            $password=$_POST['password']; 
            if ($password =='') 
                { unset($password);} 
    }
    if (empty($login) or empty($password)) 
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
 
    $result = regestr_query("SELECT * FROM users WHERE email ='$login'",$db); 
    $myrow = regestr_fetch_array($result);
    if (empty($myrow['password']))
    {
        exit ("Извините, введённый вами логин или пароль неверный.");
    }

    else {
    if ($myrow['password'] == $password) { 
    $_SESSION['email'] = $myrow['email']; 
    $_SESSION['id'] = $myrow['id'];
    echo "Вы успешно вошли на сайт! <a href='index.html'>Главная страница</a>";
    }
    
    //если пароли не сошлись
    else 
    {
        exit ("Извините, введённый вами логин или пароль неверный.");
    }
    }
    ?>
