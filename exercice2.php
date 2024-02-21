<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

error_reporting(E_ALL);
ini_set('display_errors', 1);



$tableauSansDoublons = array();

$tableau = array();

$taille_tab =(int) readline("Donnez la taille du tableau");

for($i = 0 ; $i < $taille_tab; $i++) {

    //$Element = (int) readline ("Veuilez entrez les entiers" );
    //$tableau [$i]=$Element;

    $tableau [$i] = (int) readline ("Veuilez entrez les entiers" );
    
    
    
}
    echo ("affichage du tableau");
     print_r($tableau);
     $tableauSansDoublons = array_unique ($tableau);    
    echo "le tableau sans doublon est de :";
    print_r ($tableauSansDoublons);
    ?>
</body>
</html>