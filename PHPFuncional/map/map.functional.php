<?php
	
	include_once '../books.php';
	require_once '../ubench/src/Ubench.php';

  $bench = new Ubench;

  $bench->start();

$getTitleAuthor = function($obj){
    return array(
            "title" => $obj['title'],
            "author" =>$obj['author']
        );
};

$booksTitleAuthor = array_map($getTitleAuthor,$books);

print_r($booksTitleAuthor);

$bench->end();

echo 'CPU time taken '.$bench->getTime(false, '%d%s')." -- ";

echo 'memory used '.$bench->getMemoryUsage(). " -- ";