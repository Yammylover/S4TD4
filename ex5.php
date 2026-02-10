<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <style> fieldset{ border: 5px solid black}</style>
    <form action="ex5.php" method="POST">
        <label for="name"> Votre prénom: </label>
        <input type="text" name="first_name">
        <br/>
        <label for="name"> Votre prénom: </label>
        <input type="text" name="last_name">
        <br/>
        <br/>
        <input type="submit">
    </form>
    </fieldset>
    <?php
        if(isset($_POST["first_name"]) or isset($_POST["last_name"])){
            echo "Bonjour ";
            if(strlen($_POST["first_name"])>"0"){
                echo $_POST["first_name"];
            }
            if((strlen($_POST["first_name"])!="0") && (strlen($_POST["last_name"])!="0")){
                echo " et ";
            }
            if($_POST["last_name"]){//merci à Maxime pour sa contribution booléenne
                echo $_POST["last_name"];
            }
        }
    ?>
</body>
</html>