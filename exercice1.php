<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice1</title>
</head>
<body>
    

<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


$i =0;
$p =1;
$tab = array();
$p=1;

for ($i = 0 ; $i <= 5; $i++) {

    echo "vueillez entrez les elements";

    $tab{} = intval(trim(fgets(STDIN)));

    //Lire l'entrée utilisateur depuis la console

    //Afficher le nombre saisi

    echo "Vous avez saisi:" . $tab{$i} ."\n";

    $p = $p * $tab{$i};

    echo "le produit est de :" . $p ."\n";
}
?>

</body>
</html>