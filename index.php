<?php
require_once "./classi/prodotti.php";
require_once "./classi/categorie.php";
require_once "./classi/giochi.php";
require_once "./classi/cibo.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>Document</title>
</head>
<body>
  <h1><?php echo $prodotto1->getTitolo() ?></h1>
</body>
</html>