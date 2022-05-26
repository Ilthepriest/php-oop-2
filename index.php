<?php 
require __DIR__ . "/Models/Prodotto.php";
require __DIR__ . "/Models/Gioco.php";
require __DIR__ . "/Models/Cuccia.php";

$Products = [
    new Prodotto("Royal Canin Mini Puppy", 15.99, "https://static1.gattiliano.it/ita_pm_ROYAL-CANIN-Mini-Puppy-2kg-15268_1.png", "ROYAL CANIN", "10KG", "Disponibile"),
    new Prodotto("PURINA Friskies Junior con pollo latte e verdure", 39.99, "https://static4.gattiliano.it/ita_pm_PURINA-Friskies-Junior-con-pollo-latte-e-verdure-15kg-14655_1.jpg", "FRISKIES", "15kg", "Disponibile"),
    new Gioco("Trixie Palla da tennis", 5.99, "https://static3.gattiliano.it/ita_pm_Trixie-Palla-da-tennis-15901_1.jpg", "TRIXIE", "500g", "Non Disponibile", "Gialla", 10),
    new Gioco("Trixie Denta Fun cerchio", 8.99, "https://static2.gattiliano.it/ita_pm_Trixie-Denta-Fun-12cm-cerchio-12038_1.png", "TRIXIE", "400g", "Disponibile", "Verde", 12),
    new Cuccia("Curver knit Letto per animali Beige", 60.99, "https://static3.gattiliano.it/ita_pm_Curver-Knit-Letto-per-animali-Beige-9199_1.jpg", "CURVER", "850g", "Disponibile", "Beige", "54x20 cm"),
    new Cuccia("Hunter Gent Divano Antibatterico per cani marrone", 108.99, "https://static3.gattiliano.it/ita_pm_Hunter-Gent-Divano-antibatterico-per-cani-marrone-taglia-M-15700_1.png", "HUNTER", "1KG", "Non Disponibile", "Marrone", "80x60 cm"),
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC' crossorigin='anonymous'>
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row row-cols-2">
            <?php foreach($Products as $product) :?>
            <div class="col">
                <div class="card h-100">
                    <img  src="<?php echo $product->image ?>" alt="">
                    <h2><?php echo $product->nome ?></h2>
                    <p><?php echo $product->prezzo. " ". "euro" ?></p>
                    <p>Marca: <?php echo $product->marca ?></p>
                    <p>Peso:  <?php echo $product->peso ?></p>
                    <p>Disponibilità:  <?php echo $product->disponibilità ?></p>
                    <b><?php echo $product->getSconto() ?></b>
                    <b><?php echo $product->getPagamento() ?></b>
                </div>
            </div>
            <?php endforeach ?>
        </div>
    </div>
</body>
</html>
