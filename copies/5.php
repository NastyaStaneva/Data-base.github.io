<?php 
    if (isset($_COOKIE['auth'])) 
        $role = $_COOKIE['auth'];
    
        
    else{
        //проверить вход по авторизации 
            $role = 'any'; $login=''; $pass='';

            require ("dbconnect.php");
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
                exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
            }

            $login = stripslashes($login);
            $login = htmlspecialchars($login);
            $password = stripslashes($password);
            $password = htmlspecialchars($password);

            $login = trim($login);
            $password = trim($password);

            $sql = "SELECT id, email, password FROM users";
            $result = $conn->query($sql);
            $followingdata = $result->fetch_assoc();

            if (empty($followingdata['email']))
            {
                exit ("Извините, введённый вами логин или пароль неверный.");
            }

            
                if ($followingdata['password'] == $password) { 
                    setcookie('auth', 'admin');
                    $role = 'admin';
                }
                else 
                {
                    exit ("Извините, введённый вами логин или пароль неверный.");
                }
            
        }

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #f90;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
</head>
<body>


<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Вход</button>



<div id="id01" class="modal">
  
    <form class="modal-content animate" method="POST" action="index.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
      <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
    
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>
    
      <label for="password"><b>Пароль</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
        
      <button type="submit">Войти</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Запомнить меня
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="password">Забыли <a href="#">пароль?</a></span>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>



