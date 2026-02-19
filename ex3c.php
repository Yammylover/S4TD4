<html>
<body>

<form action="ex3c.php" method="POST">
    <label for="number">Nom de légume</label>
    <input type="text" name="legume"/>
    <input type="submit"/>
</form>
<?php
    $legume=$_POST[legume];
    $epicier = array('Tomate','Concombre','Aubergine','Carotte','Epinard');
    for($i=0; $i<5; $i++){
        if($legume==$epicier[$i]){
            $bool=1;
            echo "Le légume est à l'emplacement ".$i;
        }
    }
    if(!isset($bool)){
        echo"Le légume n'est pas dans la liste";
    }

    /*foreach($epicier as $index => $value){
        if($legume==$value){
            $bool=1;
            echo "Le légume est à l'emplacement ".$index;
        }
    }
    if(!(isset($bool))){
            echo "Le légume n'est pas dans la liste";
    }*/
    /*foreach($_POST as $index => $value){
        echo $index.'='.$value;
        echo "<br/>";
    }*/
    //echo $_POST[number];

?>
</body>
</html>