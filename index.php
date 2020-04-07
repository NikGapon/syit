<?php
session_start();
?>
<html>
    <head>
        <title>Главная</title>
        <link href="https://fonts.googleapis.com/css?family=Fira+Sans&display=swap" rel="stylesheet">
        <meta charset="UTF-8">
    </head>
    <body>
    <div class="prost">
        <link  rel="stylesheet" href="второй файл.css">
        
        <td>Николай Гапон</td>
            <?php
            if (isset($_SESSION['user'])) {
                echo("<a href='prof.php'><h1>Добро пожаловать, " . $_SESSION['user']['name'] . "</h1> </a>");
            } 
            ?>
        <div class="use_main">
        <!-- <video src="ads.mp4" controls="controls">das</video> -->
            
        <p align="center">
            
            <ul class="main_spis">
                <li><div class="dager"><tr><td><a href="index.php"><b>ГЛАВНАЯ</b></a></td></div></li>
                <li><div class="dager"><td><a href="o_sebe.php"><b>О СЕБЕ</b></a></td></div></li>
                <li><div class="dager"><td><a href="blog.php"><b>БЛОГ</b></a></div></td></li>
                <li><div class="dager"><td><a href="gallery.php"><b>ГАЛЕРЕЯ</b></a></td></div></li>
                <li><div class="dager"><td><a href="game.php"><b>ИГРА</b></a></td></tr></div></li>
                <li><div class="dager"><td><a href="login.php"><b>Зайти на этот прекрасный суйт</b></a></td></tr></div></li>
            </ul>
            
        </p>
        </div>


        
        <!-- <font color="blue" size="20"><p align="center">ссылки на полезные сайты</p></font> -->


        <!-- <div class="parent">
            <div class="child"><p align="center">_________<br>пусто</p></div>
            <div class="child"><p align="center">_________<br>пусто</p></div>
            <div class="child"><p align="center">_________<br>пусто</p></p></div>
            <div class="child"><p align="center">_________<br>пусто</p></p></div>
 
        </div>

        <div class="parent">
            <div class="child"><p align="center">__________<br>пусто</p></p></div>
            <div class="child"><p align="center">__________<br>пусто</p></p></div>
        </div> -->

    </div>

    </body>
</html>