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
                unset($_SESSION);
                $_SESSION = array();
                session_unset();
            ?>
            <h1>ВЫ ВЫШЛИ</h1>


</div>
</body>
</html>