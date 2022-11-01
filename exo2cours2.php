<?php
/**
 * exo2:
 * ecrire un algorithme qui affiche toutes les tables de multiplication de 1à12
 * les tables de multiplication sont affichee sous la forme d'une table 
 * html sachant k chaque sequence de multiplication se trouve dans une colonne 
 */
?>
<?php
for($k=1;$k<=12;$k++){
    for($j=1;$j<=10;$j++){
        echo($k."*".$j."=".($j*$k));
        echo("<br>");
    }
}
?>
<h2>table de multiplication de 1 à 12</h2>
<table class="tab">
<?php
for($k=1;$k<=12;$k++){
    echo("<tr>");
    for($j=1;$j<=10;$j++){
        echo("<td>".$j."*".$k."=".($j*$k)."</td>");
    }
    echo("</tr>");
}
?> 
</table>
<style>
    .tab{
        border-collapse: collapse;
    }
    td{
    border: 1px solid black;
    height: 5px;
    width: 5%;
    text-align: center;
    }
</style>