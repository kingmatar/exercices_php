<?php
/**
 * exo1:
 * ecrire une fonction qui recoit un nombre puis affiche la table de multiplication de ce nombre
 * la table de multiplication est affichee sous la forme d'une table html
 */
define("MIN",1);
define("MAX",10);
$nbr=rand(MIN,MAX);
$tab=1;
$i=1;
echo("la table de multiplication de ".$nbr." est:");
echo("<br>");
while($i<=10){
    $tab=$nbr*$i;
    echo($nbr."*".$i."=".$tab);
    echo("<br>");
    $i++;
}
?>
<table class="tab">
<?php
$tab=1;
$i=1;
echo("<br>");
echo("la table de multiplication de ".$nbr." sous la forme d'une table html est:");
echo("<br>");
while($i<=10){
    echo("<tr>");
    $tab=$nbr*$i;
    echo("<td>".$nbr."</td><td>*</td><td>".$i."</td><td>=</td><td>".$tab."</td>");
    $i++;
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
    width: 35px;
    text-align: center;
    }
</style>