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
                    <!-- <div class="ave_prof"><image src="save_img/default.png"></div> -->
                    </p>

                </div>
                <br>
                <br>
                </html>
                <?php
                
                echo("<img id='ave_prof' src='". $_SESSION['user']['path'] ."' >");
                
                ?>
                <html>
                <form method="POST" action="sohr.php" enctype="multipart/form-data">
                    <input type="file" name="fhoto">
                    <input type="submit">
                </form>
                <?php
                echo("<h1>Имя</h1> ". $_SESSION['user']['name'] ."");
                echo("<h1>email</h1> ". $_SESSION['user']['email'] ."");
                echo("");
                ?>
            </div>
            
    </div>
    </body>
</html>