<?php
    require_once __DIR__.'/classes/product.php';
    require_once __DIR__.'/classes/food.php';
    require_once __DIR__.'/classes/dogbed.php';
    require_once __DIR__.'/classes/toys.php';



$allProducts= [];


try{
    $product1 =  new food( 'Bastoncini dentflix','https://m.media-amazon.com/images/I/41z8pR5M4vL.jpg', '2099D' , 'Cane', 22, 'bastoncini proteici', '4.8', '23/05/2025', 'cocco e salame', '1kg');
//var_dump ($product1);

$allProducts[] = $product1;

}
catch(Exception $e){
    echo '<h4 style="color: red;">Valore quantità prodotto generico non valido!</h4>';
}




$product2 = new dogbed ('Cuccia deluxe', 'https://www.cuccia-per-cani.com/wp-content/uploads/2017/02/612BY69NS6rL.jpg', '2550', 'Cane', 125, 'Cuccia deluxe per il pet del tuo cuore', '4.5', 'velluto idrorepellente', '150cm X 150cm');
//var_dump ($product2);

$allProducts[] = $product2;


$product3 = new toys ('freesbee', 'https://www.robinsonpetshop.it/news/cms2017/wp-content/uploads/2019/04/04-08_frisbee.jpg', 145, 'Cane', 15, 'freesbee notturno', '3.5', 'polypropylene', '50cm X 50cm');
//var_dump ($product3);
$allProducts[] = $product3;

var_dump ($allProducts);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- FONTAWESOME -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- BOOTSTRAP -->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <link rel="stylesheet" href="style.css">
    
    </head>
    <body>
        <header>
            <h1>
                ZOOCLUB
            </h1>
        </header>
        <main>
            <div class="row justify-content-between ">
                <?php
                    foreach ($allProducts as $singleProduct) {
                ?>
                    <div class="col-3">
                        <div class="card">
                            <img src="<?php echo $singleProduct->image; ?>" class="card-img-top">
                            <div class="card-body">
                                <h3>
                                    <?php echo $singleProduct-> name; ?>
                                </h3>
                                <ul>
                                    <li>
                                        Categoria: <?php echo $singleProduct-> category; ?>
                                    </li>
                                    <li>
                                        Prezzo: <?php echo $singleProduct-> price; ?>
                                    </li>
                                    <li>
                                        Disponibili: <?php echo $singleProduct-> stock;?>
                                    </li>
                                    <li>
                                        Voto: <?php echo $singleProduct-> rate; ?>
                                    </li>
                                </ul>
                                <?php
                                    if(get_class($singleProduct)=='toys'){
                                ?>
                                    <p> Materiale: <?php echo $singleProduct->material;?> </p>
                                <?php
                                    }
                                    else if (get_class($singleProduct)== 'food'){
                                ?>
                                    <p> Data scadenza: <?php echo $singleProduct-> expireDate; ?> </p>
                                <?php
                                    }
                                    else if (get_class($singleProduct)== 'dogbed'){
                                ?>
                                    <p> Dimensioni: <?php echo $singleProduct->dimension; ?> </p>
                                <?php
                                    }
                                ?>
                                <p>
                                    <?php echo $singleProduct->description; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php
                    }
                ?>
            </div>
        </main>
    </body>
</html>