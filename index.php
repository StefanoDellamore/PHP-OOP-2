<?php 
require_once __DIR__."/models/product.php";
require_once __DIR__."/models/game.php";
require_once __DIR__."/models/food.php";
require_once __DIR__."/models/dogKennel.php";

$productArray = [];

$gameFirst = new game ('Corda Osso', 'lorem ipsum dolar itsu', 7, 'https://arcaplanet.vtexassets.com/arquivos/ids/223864/trixie-cane-gioco-corda.jpg?v=637454736645100000', 'cotone', 'cane');

$foodFirst = new food ('Sheba', 'lorem ipsum dolar itsu', 0.90, 'https://iperverde.it/cdn/shop/products/cibo-umido-gatto-sheba-selezione-in-salsa-85-gr-vitello-tacchino.jpg?v=1634725379', 'gatto', 85, 'vitello e tacchino', 'medium');

$dogKennelFirst = new dogKennel ('PawHut', 'lorem ipsum dolar itsu', 85, 'https://m.media-amazon.com/images/I/81cGRiDQgfL._AC_SX679_.jpg', 'gomma piuma', 'cane', 'piccola');

$productArray[] = $gameFirst;

$productArray[] = $foodFirst;

$productArray[] = $dogKennelFirst;