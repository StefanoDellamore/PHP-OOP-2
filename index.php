<?php
require_once __DIR__."/models/category.php";
require_once __DIR__."/models/product.php";
require_once __DIR__."/models/game.php";
require_once __DIR__."/models/food.php";
require_once __DIR__."/models/PetHouse.php";

$dogCategory = new category ('cani');
$catCategory = new category ('gatti');

$allProducts = [];

try {
    $genericProduct = new Product(
        'Product',
        'lorem ipsum dolar itsu',
        7,
        $_GET['q1'],
        $dogsCategory
    );
    $allProducts[] = $genericProduct;
}
catch (Exception $e) {
    echo '<h4 style="color: red;">Valore quantità prodotto generico non valido!</h4>';
}

$gameFirst = new game (
    'Corda Osso',
    'Cotone Misto',
    'Con la coloratissima corda per cani di Trixie in misto cotone, la cura dell’igiene orale del tuo cane sarà molto più divertente del previsto!',
    5.99,
    'https://arcaplanet.vtexassets.com/arquivos/ids/223864/trixie-cane-gioco-corda.jpg?v=637454736645100000',
    $dogCategory
);

$allProducts[] = $gameFirst;

$foodFirst = new food (
    'Pedigree',
    3,
    'Manzo e Verdure',
    'Pedigree Vital ti offre cibo secco con manzo e verdure per cani adulti ideale per soddisfare al meglio i bisogni di salute di Fido e favorire la sua vitalità.',
    16.70,
    'https://arcaplanet.vtexassets.com/arquivos/ids/273547/pedigree-adult-manzo-e-verdure-.jpg?v=637940913133230000',
    $dogCategory
);

$allProducts[] = $foodFirst;

$PetHuoseFirst = new PetHouse (
    'Cuccia Outdoor',
    'Medium',
    'Pet Around You presenta una linea comfort curata esteticamente nei minimi dettagli, pratica e resistente sia in ambienti interni che esterni!',
    53.99,
    'https://arcaplanet.vtexassets.com/arquivos/ids/223864/trixie-cane-gioco-corda.jpg?v=637454736645100000',
    $dogCategory
);

$allProducts[] = $PetHuoseFirst;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php-oop-2</title>
</head>
<body>
    
<div class="card">
    <h1>Prodotti</h1>
    <?php 
        foreach ($allProducts as $singleProduct) {
    ?>

    <h2>
        <?php echo $singleProduct->getName();?>
    </h2>
    <ul>
        <li>
            Categoria:<?php echo $singleProduct->category->name;?>
        </li>
        <li>
            $<?php echo $singleProduct->price;?>
        </li>

        <?php if (get_class($singleProduct) == 'game'){ ?>
        <li>
            Materiale:<?php echo $singleProduct->material;?>
        </li>

        <?php } else if (get_class($singleProduct) == 'food') { ?>
        <li>
            Peso:<?php echo $singleProduct->weight;?>
        </li>
        <li>
            Ingredienti:<?php echo $singleProduct->ingredients;?>
        </li>

        <?php } else if (get_class($singleProduct) == 'PetHouse'){?>
        <li>
            Grandezza:<?php echo $singleProduct->size;?>
        </li>
        <?php } ?>
        <li>
            Descrizione:<?php echo $singleProduct->description;?>
        </li>
    </ul>

    <?php } ?>

</div>

</body>
</html>