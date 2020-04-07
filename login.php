<?php
session_start();
?>
<html>
<style>
    #text-error {
        color: red;
    }
    .error-border {
        border: 2px solid red;
    }
    .success-border{
        border: 2px solid greenyellow;
    }
    
    
</style>
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
            if (isset($_SESSION['user'])) {
                echo("<h1>Добро пожаловать, " . $_SESSION['user']['name'] . "</h1>");
            ?>
            <!-- <form action="unlogin.pp" method="POST">
                <input type="button" value="out"> 
            </form> -->
            <a href="unlogin.php" > Выйти Из Записи  </a>
            <?php
            } else{
            ?>
            <form action="index_login.php" method="POST">    
                        <div class="input_data">
                            <h3>Логин:</h3>
                            <input id="login_log" type="text" size="50" name="login" onchange="validateLoginINLog(this)">
                            <h3>Пароль:</h3>
                            <input type="password" size="50" name="password" onchange="validatePasswordINLog(this)">
                        </div>
                        <a href="registration.php" class="btn-login">Регистрация</a>
                        <input id="knopka" type="SUBMIT"  value="Войти" class="btn-login" disabled>
            </form>
            <div id="text-error">
            </div>
            <?php } ?>


    </div>
    <script src="жаба_ситх.js"></script>
    </body>
</html>