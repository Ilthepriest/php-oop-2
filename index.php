<?php 
require __DIR__ . "/Models/Prodotto.php";
require __DIR__ . "/Models/Gioco.php";
require __DIR__ . "/Models/Cuccia.php";
include __DIR__ . "/db.php";
include __DIR__ . "/Layout/head.php";





?>


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
                    <p><?php echo $product->colore ?></p>
                    <p><?php echo $product->diametro ?></p>
                    <p><?php echo $product->dimensione ?></p>
                    <p><?php echo $product->materiale?></p>
                    <p><?php echo $product->lavabile ?></p>
                    <b><?php 
                        try{
                            echo $product->getPagamento();
                        }catch (Exception $e){
                            echo $e->getMessage();
                        }
                     ?></b>
                    <b><?php echo $product->getSconto() ?></b>

                </div>
            </div>
            <?php endforeach ?>
        </div>
    </div>
</body>
</html>
