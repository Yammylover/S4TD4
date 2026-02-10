<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $data=json_decode(file_get_contents("file.json"));
        foreach($data as $index => $donnee){
            echo "$index:$donnee</br>";
        }
    ?>
</body>
</html>
