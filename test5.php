
<?php

$mysqli = new mysqli("127.0.0.1:3306", "root", "", "ff");
if ($mysqli->connect_errno){
    echo $mysqli->connect_errno;
    exit;
}


$query = "SELECT `path` FROM `ss`";
$pp = $mysqli->query($query);


while ($row = $pp->fetch_row()) {

    ?>
    
    <html><img src="<?php echo $row[0]; ?>"></html>
    <?php
    
}
?>
<html>
<?php echo $der["path"]; ?>