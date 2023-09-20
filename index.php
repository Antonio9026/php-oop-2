<?php
require_once "./db/db.php"

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
  <?php
  foreach($cibi as $cibo){;
  ?>
  <div class="container">
    <div class="card">
        <div class="img-container">
            <img src="<?php echo $cibo->getImg()?>" alt="">
        </div>
        <div class="info">
            <h3><?php echo $cibo->getTitolo()?></h3>
            <p><?php echo $cibo->getDescrizione()?></p>
            <p><?php echo $cibo->getPeso()?> kg</p>
            <p><?php echo $cibo->getPrezzo()?> €</p>
            
            
            
        </div>
    </div>
  </div>
  <?php
    
  }?>

<?php
  foreach($giochi as $gioco){;
  ?>
  <div class="container">
    <div class="card">
        <div class="img-container">
            <img src="<?php echo $gioco->getImg()?>" alt="">
        </div>
        <div class="info">
            <h3><?php echo $gioco->getTitolo()?></h3>
            
            <p><?php echo $gioco->getPeso() ?> kg</p>
            <p><?php echo $gioco->getPrezzo()?> €</p>
            <p><?php echo $gioco->getColore()?></p>
           
            
            
        </div>
    </div>
  </div>
  <?php
    
  }?>
</body>
</html>

   <!-- <p><?php echo $gioco->getCategoria()?></p> -->