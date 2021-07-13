<?php
    //заносим введенную пользователем фамилию 
    if (isset($_POST['last_name'])) 
        { 
            $last_name = $_POST['last_name']; 
            if ($last_name =='') { unset($last_name);} 
        }

    //заносим введенное пользователем имя
        if (isset($_POST['first_name'])) 
        { 
            $first_name = $_POST['first_name']; 
            if ($first_name =='') { unset($first_name);} 
        }

    //заносим введенное пользователем отчество
        if (isset($_POST['patronymic'])) 
        { 
            $patronymic = $_POST['patronymic']; 
            if ($patronymic =='') { unset($patronymic);} 
        }

    //заносим введенную пользователем школу
        if (isset($_POST['school'])) 
        { 
            $school = $_POST['school']; 
            if ($school =='') { unset($school);} 
        }

    //заносим введенный пользователем класс
        if (isset($_POST['class'])) 
        { 
            $class = $_POST['class']; 
            if ($class =='') { unset($class);} 
        }

    //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
        if (isset($_POST['email'])) 
        { 
            $login = $_POST['email']; 
            if ($login == '') { unset($login);} 
        } 

    //заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную
        if (isset($_POST['password'])) 
        { 
            $password = $_POST['password']; 
            if ($password =='') { unset($password);} 
        }

     //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
         if (empty($last_name) or empty($first_name) or empty($patronymic) or empty($school) or empty($class) or empty($login) or empty($password))
        {
            exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
        }

    //если логин и пароль введены, то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
        $login = stripslashes($login);
        $login = htmlspecialchars($login);
        $password = stripslashes($password);
        $password = htmlspecialchars($password);

    //удаляем лишние пробелы
        $login = trim($login);
        $password = trim($password);

    // подключаемся к базе
        include ("dbconnect.php");

    // проверка на существование пользователя с таким же логином
        $result = regestr_query("SELECT id FROM users WHERE email ='$login'",$db);
        $myrow = regestr_fetch_array($result);
        if (!empty($myrow['id'])) 
        {
            exit ("Извините, введённый вами логин уже зарегистрирован. Введите другой логин.");
        }

    // если такого нет, то сохраняем данные
        $result2 = regestr_query ("INSERT INTO users (email, password) VALUES('$login','$password')");

    // Проверяем, есть ли ошибки
        if ($result2 =='TRUE')
        {
        echo "Вы успешно зарегистрированы! Теперь вы можете зайти на сайт. <a href='index.html'>Главная страница</a>";
        }
        else {
            echo "Ошибка! Вы не зарегистрированы.";
        }

    ?>
    

<?php
  require('dbconnect.php');
  if(isset($_POST['email']) && issert($_POST['password'])) {
    $last_name = $_POST['last_name'];
    $first_name = $_POST['first_name'];
    $patronymic = $_POST['patronymic'];
    $email = $_POST['email'];
    $school = $_POST['school'];
    $class = $_POST['class'];
    $password = $_POST['password'];

    $query = "INSERT INTO users (last_name, first_name, patronymic, email, school, class, password) VALUES ('$last_name', '$first_name', '$patronymic', '$email', '$school', '$class', '$password')";

    $res = mysql_query($db, $query);

    if($res) {
        $ssmg = "Вы успешно зарегистрировались.";
    }
    else {
        $fsmg = "Ошибка. Возможно, вы ввели некоретной данные или такой пользователь уже существует.";
    }
  }

?>