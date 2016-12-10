<?php
include_once '../books.php';

$booksTitleAuthor = [];

for ($i=0; $i < count($books) ; $i++) { 
  array_push($booksTitleAuthor, 
  						array('title' => $books[$i]['title'], 
  									'author'=> $books[$i]['author'] 
  						)
  					);
}

print_r($booksTitleAuthor);