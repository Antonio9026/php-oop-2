<?php 

require_once "./classi/prodotti.php";
require_once "./classi/categorie.php";
require_once "./classi/giochi.php";
require_once "./classi/cibo.php";

$Cane = new Categoria("cane"," <i class='fa-solid fa-dog'></i> ");
var_dump($Cane);
$Gatto = new Categoria("gatto","<i class='fa-solid fa-cat'></i>");
var_dump($Gatto);

$prodotto1 = new Prodotti( "prodotto1",40, 25,$Cane);
var_dump($prodotto1);
$cibi = [
$cibo1 = new Cibo("Purina Pro Plan"," Light Sterilised All Size Adult Crocchette Cani",14,53.99,"https://m.media-amazon.com/images/I/71duEL4dP6L.__AC_SX300_SY300_QL70_ML2_.jpg","26/02/2030",$Cane),
// var_dump($cibo1)
$cibo2 = new Cibo("Stuzzy","Cibo Umido per Cani Adulti al Gusto Agnello e Risoin Pezzi ",3.3,18.70,"https://m.media-amazon.com/images/I/71681lYCO2L._AC_SL1500_.jpg","26/02/2030",$Cane),
// var_dump($cibo2),
$cibo3 = new Cibo("Venandi Animal","Cibo secco per gatti Premium Salmone senza cereali con un sacco di salmone fresco",1.5,17.62,"https://m.media-amazon.com/images/I/61Td69cmbKL._AC_SL1500_.jpg","26/02/2030",$Gatto),
// var_dump($cibo3),
$cibo4 = new Cibo("Purina Felix","Le Ghiottonerie Cibo Umido per Gatti con Manzo, Pollo, Merluzzo e Tonno,",4.2,36.99,"https://m.media-amazon.com/images/I/61Td69cmbKL._AC_SL1500_.jpg","26/02/2030",$Gatto)
// var_dump($cibo4)
];


$giochi = [
$gioco1 = new Giochi("Palla da fiuto",200,15.99,"https://m.media-amazon.com/images/I/61RKXiv7IrL._AC_SL1001_.jpg","multicolor",$Cane),
// var_dump($gioco1);
$gioco2 = new Giochi("Eroga snack",320,12.58,"https://m.media-amazon.com/images/I/81ErEO46o8L._AC_SL1500_.jpg","azzurro",$Cane),
$gioco3 = new Giochi("Tiragraffi ad albero per gatti, ",00,50.99,"https://m.media-amazon.com/images/I/81ErEO46o8L._AC_SL1500_.jpg","beige",$Gatto),
$gioco4 = new Giochi("Trixie Spielmaus",0.2,1.79,"https://m.media-amazon.com/images/I/814W5ruzwpL._AC_SL1500_.jpg","grigio",$Gatto)
]
?>