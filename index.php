<?php
require_once __DIR__ . '/models/Movie.php';
// istanzio due classi Movie, Inception e DallasBuyerClub
$Inception = new Movie();
$DallasBuyerClub = new Movie();

echo "<pre>";
var_dump($Inception);
var_dump($DallasBuyerClub);
echo "</pre>";
?>