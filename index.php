<?php
    require_once __DIR__.'/classes/product.php';
    require_once __DIR__.'/classes/food.php';
    require_once __DIR__.'/classes/dogbed.php';
    require_once __DIR__.'/classes/toys.php';


$arrayVuoto= [];


$product1 =  new food( 'Bastoncini dentflix','https://m.my-personaltrainer.it/images/ricette/1040/salsicciotto-per-cani.jpg', '20,99€' , 'Cane', 22, 'bastoncini proteici', '4.8', '23/05/2025', 'cocco e salame', '1kg');
//var_dump ($product1);

$arrayVuoto[] = $product1;




$product2 = new dogbed ('Cuccia deluxe', 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.focusjunior.it%2Fanimali%2Fanimali-domestici%2Fbizzarre-case-di-lusso-per-cani%2F&psig=AOvVaw2-PZ7rSTCh-SCfmTmQWASw&ust=1708451702983000&source=images&cd=vfe&opi=89978449&ved=0CBIQjRxqFwoTCNju49r8t4QDFQAAAAAdAAAAABAG', '2550,00€', 'Cane', 15, 'Cuccia deluxe per il pet del tuo cuore', '4.5', 'velluto idrorepellente', '150cm X 150cm');
//var_dump ($product2);

$arrayVuoto[] = $product2;


$product3 = new toys ('freesbee', 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.galleranistore.it%2Fgioco-per-cani-frisbee-snoopy&psig=AOvVaw3x41RVxRMn6W9KJ1pvp2Gz&ust=1708451513563000&source=images&cd=vfe&opi=89978449&ved=0CBIQjRxqFwoTCPCH7YD8t4QDFQAAAAAdAAAAABAH', '15,99€', 'Cane', 15, 'freesbee notturno', '3.5', 'polypropylene', '50cm X 50cm');
//var_dump ($product3);
$arrayVuoto[] = $product3;

var_dump ($arrayVuoto);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
