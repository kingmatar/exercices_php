<?php
define("MIN",1);
define("MAX",15);
$n = rand(MIN,MAX);
for ($i=1; $i<=$n;$i++){
    for($j=$n-$i;$j>=1;$j--){
        echo " ";
    }
    for($j=1;$j<=$i+$i-1;$j++){
        echo "*";
    }
    echo "<br>";
}
?>