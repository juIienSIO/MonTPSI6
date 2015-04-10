<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    
            <table border=1>
                
            <?php
        $tab=array("nom"=>"numero",
            "toto"=> "01 23 45 67 89",
            "titi"=> "02 04 06 08 10",
            "tata"=> "01 03 05 07 11");
           
            foreach($tab as $nom=>$tel)
            {
                echo '<tr><td>'.$nom.'</td><td>'.$tel.'</td></tr>';
            }
            ?>
            </table>
        <form action="ex2.php" method="post">
        <p>le nom : <input type="text" name="nom" /></p>
        <p><input type="submit" value="OK"></p>
        </form>
        
    
</html>
