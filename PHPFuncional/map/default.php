<?php
include_once '../books.php';
require_once '../ubench/src/Ubench.php';

  $bench = new Ubench;

  $bench->start();

$booksTitleAuthor = [];

for ($i=0; $i < count($books) ; $i++) { 
  array_push($booksTitleAuthor, array('title' => $books[$i]['title'], 'author'=> $books[$i]['author'] ));
}

print_r($booksTitleAuthor);
$bench->end();

echo 'CPU time taken '.$bench->getTime(false, '%d%s')." -- ";

echo 'memory used '.$bench->getMemoryUsage(). " -- ";