<?php
define("MIN",1);
define("MAX",15);
$taille = rand(MIN,MAX);
for ($i = 1; $i <= $taille; $i++) { 
    for ($k = 1; $k <= $i; $k++) {
        echo "*";
    }
    echo "<br>";
}
?>