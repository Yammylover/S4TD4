<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ex6.php" method="POST">
        <label for="first_name">Prénom:</label>
        <input type="text" name="first_name"/><br>
        <label for="birthdate">Date de naissance:</label>
        <input type="text" name="birthdate"/><br>
        <label for="food">Plat préféré:</label>
        <select name="food">
            <option value="burger">Burger</option>
            <option value="ramen">Ramen</option>
            <option value="pizza">Pizza</option>
        </select><br>
        <label for="color">Couleur:</label>
        <input type="color" name="color"/><br>
        <input type="submit" value="Soumettre"/>
    </form>
        <?php
            
        ?>
</body>
</html>