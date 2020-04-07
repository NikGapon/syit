
<?php
    $conn = new mysqli('127.0.0.1:3306',
        'root',
        '',
        'users');
    
    if ($conn->connect_errno) {
        echo $conn->connect_error;

        exit;
    }
    

    $usersTable = "CREATE TABLE IF NOT EXISTS users(
        id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
        name VARCHAR(255) NOT NULL,
        lastname VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL,
        pnumber VARCHAR(255) NOT NULL,
        login VARCHAR(255) NOT NULL,
        password VARCHAR(255) NOT NULL,
        path VARCHAR(255)
    );";

    $conn->query($usersTable);

    // if ($conn->errno) {
    //     echo $conn->error;
    //     exit;
    // }

    // if ($conn->connect_errno) {
    //     echo $conn->connect_error;

    //     exit;
    // }
    $fotoTable = "CREATE TABLE IF NOT EXISTS pic(
        id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
        path VARCHAR(255)
    );";

    $conn->query($fotoTable);

    if ($conn->errno) {
        echo $conn->error;
        exit;
    }


    echo "Migration success!";
    $conn->close();
    
?>
