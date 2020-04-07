<?php
session_start();
?>
<html>

<head>
    <title>моийа жызн</title>
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans&display=swap" rel="stylesheet">
</head>
<body>
<div class="prost">
<link  rel="stylesheet" href="второй файл.css">
<div class="use_ne">
            <p align="center">
            <div class="yu">
                <ul class="main_spis">
                    <li><div class="dager"><tr><td><a href="index.php"><b>ГЛАВНАЯ</b></a></td></div></li>
                    <li><div class="dager"><td><a href="o_sebe.php"><b>О СЕБЕ</b></a></td></div></li>
                    <li><div class="dager"><td><a href="blog.php"><b>БЛОГ</b></a></div></td></li>
                    <li><div class="dager"><td><a href="gallery.php"><b>ГАЛЕРЕЯ</b></a></td></div></li>
                    <li><div class="dager"><td><a href="game.php"><b>ИГРА</b></a></td></tr></div></li>
                    </ul>
                </p>
            </div>
            <?php
            
                $login = $_POST['login'];
                $password = md5($_POST['password']);
                if(empty($login)||empty($password)){
                    echo("Введите корректные данные!");
                    exit();
                }

                $mysql = new mysqli('127.0.0.1:3306','root','','users');
                $result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
                $user = $result->fetch_assoc();
                if(count($user) == 0){
                    echo("Данный пользователь не найден, проверьте правильность введенных данных!");
                    echo('<a href="login.php" class="login_succes_btn">Назад</a>');
                    ?>
                    <html>
                    <video src="4.mp4" controls="controls">das</video>
                    </html>
                    <?php
                }else{
                    echo("Здравствуйте, $user[name] $user[lastname]!");
                    echo('<a href="index.php" class="login_succes_btn">На главную</a>');
                    
                    $_SESSION['user'] = $user;
                    
                }

            ?>
            


</div>
</body>
</html>