<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $tab = array(2,28,145,74,56,25,94,58,11,42);
        $somme = array_sum($tab);
        $max = max($tab);
        echo "la somme des valeurs du tableau est $somme, la valeur max est $max";
        ?>
    </body>
</html>
