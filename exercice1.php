<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice1</title>
</head>
<body>
<h1>p
        

<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);




$tab = array();
$n= (int)readline("donnez la taille du tableau");

for ($i = 0 ; $i <= $n; $i++) {

    $Element = (int)readline ("Veillez entrez un élement");

    $tab[] = (int)$Element;

    //Lire l'entrée utilisateur depuis la console

    //Afficher le nombre saisi

    }
    echo "Affichage du contenu";
    print_r($tab);


    $Produit =1;
    foreach ($tab as $value) {
        $Produit *= $value;
    }

    echo "le produit est de :" . $Produit ."\n";

?>
</h1>

</body>
</html>