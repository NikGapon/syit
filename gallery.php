<html>
    <head>
        <title>мои фотокарточки</title>
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
                $conn = new mysqli('127.0.0.1:3306',
                'root',
                '',
                'users');
            $num_string = $conn->query("SELECT * FROM `pic`");
            $id = 0;
            if ($conn->connect_errno) {
                echo $conn->connect_error;
        
                exit;
            }
            ?>
                <form method="POST" action="soht_v_gal.php" enctype="multipart/form-data">
                    <input type="file" name="fhoto">
                    <input type="submit">
                    </form>
                <div class="gal" id="gal">
                
                
                    <div class="stro4ka_foto">
                    <?php
                        while($num_string->num_rows > $id){
                            $id++;
                            $path = $conn->query("SELECT `path` FROM `pic` WHERE `id` = '$id'")->fetch_row();
                            echo('
                            <div class="block">
                            <img id = "'. $id .'" class="imge" src="'. $path[0] .'">
                            </div>
                            ');

                            }
?>
                    </div>
                    <div class="fotokarto4ka" id="fotokarto4ka" >
                    </div>
                </div>
               
                
                    
                </div>
            </div>
            
    </div>
    </body>


<script>
    let gallery = document.getElementById("gal");
    
    gallery.onclick = function(event) {
        let target = event.target;
        if (target.classList.contains('imge')) {
            printSquare(target.getAttribute("src"));
        }
    }

    function printSquare(src) {
        let img = document.createElement("img");
        img.className += "big-image";
        img.setAttribute("src", src);
        let place = document.getElementById("fotokarto4ka");
        place.innerHTML = "";
        place.append(img);
    }
</script>
</html>