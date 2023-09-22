<?php
require_once "./db/db.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="./styles/style.css">
    <title>Document</title>
</head>

<body>
    <header>
        <div class="header-container">
            <h1>My pet shop</h1>
        </div>

    </header>
    <main>
        <p><?php echo implode($errors) ?></p>
        <div class="container">
            <?php
            foreach ($cibi as $cibo) {;
            ?>

                <div class="card">
                    <div class="card-wrapper">
                        <div class="img-container">
                            <img src="<?php echo $cibo->getImg() ?>" alt="">
                        </div>
                        <div class="info">
                            <h3><?php echo $cibo->getTitolo() ?></h3>
                            <p><?php echo $cibo->getDescrizione() ?></p>
                            <p><?php echo $cibo->getPeso() ?> g</p>
                            <p><?php echo $cibo->getPrezzo() ?> €</p>
                            <p><?php echo $cibo->getCategoria()->icona ?></p>




                        </div>
                    </div>
                </div>
            <?php

            } ?>
        </div>

        <div class="container">
            <?php
            foreach ($giochi as $gioco) {;
            ?>

                <div class="card">
                    <div class="card-wrapper">
                        <div class="img-container">
                            <img src="<?php echo $gioco->getImg() ?>" alt="">
                        </div>
                        <div class="info">
                            <h3><?php echo $gioco->getTitolo() ?></h3>
                            <p><?php echo $gioco->getPeso() ?> g</p>
                            <p><?php echo $gioco->getPrezzo() ?> €</p>
                            <p><?php echo $gioco->getColore() ?></p>
                            <p><?php echo $gioco->getCategoria()->icona ?></p>



                        </div>
                    </div>
                </div>

            <?php

            } ?>
        </div>
    </main>
    <footer>
        <div class="footer">
            
        </div>
    </footer>
</body>

</html>