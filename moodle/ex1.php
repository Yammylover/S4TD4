<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

function min_maj(String $str1){
    $chars=preg_split("//",$str1,-1,PREG_SPLIT_NO_EMPTY);
    echo "tes";
    foreach($chars as $c => $value) {
        echo "its actually happening I guess";
        if( $c === mb_strtolower($c,'UTF-8') && $c !== mb_strtoupper($c,'UTF-8')){
            echo "das Kartoffeln ist eine minuscule";
        } elseif($c ===mb_strtoupper($c,'UTF-8') && $c !== mb_strtolower($c,'UTF-8')){
            echo "das letter is keine majuscule, aber eine Majuscule";
        }else{
            
        }
    }
    return $str1;
}

echo min_maj("Attention ils ont des épines");

?>
</body>
</html>

