<?php
session_start();
    $uploadFile = '/save_img/' . basename($_FILES["fhoto"]["name"]);
    $uploadF = $_SERVER['DOCUMENT_ROOT'] . $uploadFile;
    if (move_uploaded_file($_FILES['fhoto']['tmp_name'], $uploadF)){
        $mysqli = new mysqli("127.0.0.1:3306", "root", "", "users");
        if ($mysqli->connect_errno){
            echo $mysqli->connect_errno;
            exit;
        }
        $query = "UPDATE `users` SET `path` = '$uploadFile' WHERE `users`.`id` = ". $_SESSION['user']['id'] ." ";
        $mysqli->query($query);
        // $_SESSION['user']['path'] = $uploadFile
        if ($mysqli->errno){
            echo $mysqli->errno;
            exit;
        }
        
        echo "ваша фото карточка загруженна <a href='index.php'>назад</a>";
    } else{
        echo "неудача";
    }

?>