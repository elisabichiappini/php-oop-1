<?php
require_once __DIR__ . '/models/Movie.php';
// istanzio due classi Movie, Inception e DallasBuyerClub
$Inception = new Movie('Inception', 2017); // construct
$Inception->setGenre('Action');

$DallasBuyerClub = new Movie('Dallas Buyer Club', 2015); //construct
$DallasBuyerClub->setGenre('Action/Adventure');

echo "<pre>";
var_dump($Inception);
var_dump($DallasBuyerClub);
echo "</pre>";

?>