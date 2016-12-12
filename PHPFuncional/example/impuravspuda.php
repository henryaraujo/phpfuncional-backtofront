<?php

//impura
$movie = "Star Wars: Episódio III - A Vingança dos Sith";
$showMovie = function(){
 global $movie;

 return "Filme - $movie";
};
echo " (impura) -> ";
print_r($showMovie());

//pura
$showMovie = function($movie){
 return "Filme - $movie";
};
echo "\n (pura) -> ";
print_r($showMovie("Star Wars: Episódio III - A Vingança dos Sith"));