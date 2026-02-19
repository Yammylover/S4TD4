<html>

<body>

<form action="ex4.php" method="POST">
    <label for="number">Nombre</label>
    <input type="text" name="number"/>
    <label for="sgl">Singulier</label>
    <input type="text" name="sgl"/>
    <label for="plrl">Pluriel</label>
    <input type="text" name="plrl"/>
    <label for="bool">Afficher le nombre?(1/0)</label>
    <input type="text" name="bool"/>
    <input type="submit"/>
</form>
<?php
function accorder($number, String $singulier, String $pluriel, bool $displaynum = false){
    $retour;
    
    if($number<2 && $number>-2){
        //$retour=$number.' '.$singulier;
        $retour=$singulier;
    } else {
        $retour = ($displaynum==true) ? ' '.$number.' ' : ' ';
        $retour=$retour.$pluriel;
    }
    return $retour;
}

/*foreach($_POST as $index => $value){
        echo $index.'='.$value;
        echo "<br/>";
}*/

echo accorder($_POST[number],$_POST[sgl],$_POST[plrl],$_POST[bool]);
?>
</body>
</html>