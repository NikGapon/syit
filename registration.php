
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
            <form action="index_registration.php" method="POST">
                    <div class="input_data">
                        <h3>Имя:</h3>
                        <input type="text" size="50" name="name">
                        <h3>Фамилия:</h3>
                        <input type="text" size="50" name="lastname">
                        <h3>E-mail:</h3>
                        <input type="email" size="50" name="email">
                        <h3>Номер телефона:</h3>
                        <input type="text" size="50" name="pnumber">
                        <h3>Логин:</h3>
                        <input type="text" size="50" name="login" onchange="validateLoginINLog(this)">
                        <h3>Пароль:</h3>
                        <input id="First_pas" type="password" size="50" name="password" onchange="validatePasswordINLog(this)">
                        <h3>Подтвердите пароль:</h3>
                        <input type="password" size="50" name="verify_password" onchange="validatePasswordINPassword(this)">
                        </div>
                        <input id="knopka" type="SUBMIT" value="Зарегестрироваться" class="btn-reg" disabled>
                </form>

                <div id="text-error">
                </div>

</div>
<script src="жаба_ситх.js"></script>
</body>
</html>