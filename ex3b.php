<html>
<body>

<form action="ex3b.php" method="POST">
    <label for="number">Numéro de légume</label>
    <input type="text" name="number"/>
    <input type="submit"/>
</form>
<?php
    $epicier = array('Tomate','Concombre','Aubergine','Carotte','Epinard');
    /*foreach($epicier as $index => $value){
        echo $index.'='.$value;
        echo "<br/>";
    }*/
    /*foreach($_POST as $index => $value){
        echo $index.'='.$value;
        echo "<br/>";
    }*/
    //echo $_POST[number];
    echo $epicier[$_POST[number]];

?>
</body>
</html>