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
                $name = $_POST['name'];
                $lastname = $_POST['lastname'];
                $email = $_POST['email'];
                $pnumber = $_POST['pnumber'];
                $login = $_POST['login'];
                $password = md5($_POST['password']);
                $verify_password = md5($_POST['verify_password']);
                
                
                $mysql = new mysqli('127.0.0.1:3306','root','','users');
                
                if($password != $verify_password){
                    echo("Пароли не совпадают! Повторите попытку!");
                    exit();
                }    
                if(!preg_match("/^[0-9]{10,11}+$/", $pnumber)){
                    echo ("Телефон задан в неверном формате");
                    exit();
                }
                if (preg_match('/[^(\w)|(\@)|(\.)|(\-)]/', $email)){
                    echo("Введите корректный E-mail");
                    exit();
                }
                $check_email = $mysql->query("SELECT * FROM `users` WHERE `email` = '$email'");
                $user = $check_email->fetch_assoc();
                if(count($user) !== 0){
                    echo("Данная почта уже используется!");
                    echo '<a class="reg_succes_item reg_succes_item_btn" href="registration.php">Назад</a>';
                    exit();
                }
                $check_pnumber = $mysql->query("SELECT * FROM `users` WHERE `pnumber` = '$pnumber'");
                $user = $check_pnumber->fetch_assoc();
                if(count($user) !== 0){
                    echo("Данный номер телефона уже используется!");
                    echo '<a class="reg_succes_item reg_succes_item_btn" href="registration.php">Назад</a>';
                    exit();
                }
                $check_login = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login'");
                $user = $check_login->fetch_assoc();
                if(count($user) !== 0){
                    echo("Данный логин уже используется!");
                    echo '<a class="reg_succes_item reg_succes_item_btn" href="registration.php">Назад</a>';
                    exit();
                }
                if(!isset($name)||!isset($lastname)||!isset($email)||!isset($pnumber)||!isset($login)||!isset($password)){
                    echo("Введите корректные данные!");
                    exit();
                }else{
                    $result = $mysql->query("INSERT INTO `users`(`name`, `lastname`, `email`, `pnumber`, `login`, `password`, `path`) VALUES ('$name', '$lastname', '$email', '$pnumber', '$login', '$password', '/save_img/default.png')");   
                }
                if($result) {
                    echo('<h3 class="reg_succes_item">Регистрация прошла успешно!</h3>');
                    echo '<a class="reg_succes_item reg_succes_item_btn" href="index.php">На главную</a>';
                } else {
                    echo '"Something went wrong!"';
                }
            ?>
</div>
</body>
</html>