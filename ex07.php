<?php
    $nombre = 7;
    for ($i = 1; $i <= 10; $i++) {
        echo $nombre."x". $i." = " . ($nombre * $i) . "<br>";
    }
   
    echo"<h3>pyramide d'etoiles</h3>";
    for($i=1;$i<=6;$i++){
        for($j=1;$j<=$i;$j++){
            echo "*";
        }
        echo "<br>";
    }


?>
    
   


