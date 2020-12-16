<?php
include_once '../books.php';

$booksMaxPages = [];

/*foreach ($books as $key => $value) {
	if($value['pages'] > 400){
  	array_push($booksMaxPages, $books[$key]);
	}
}*/

for ($i = 0; $i < count($books); $i++) {
	if ($books[$i]['pages'] > 400) {
		array_push($booksMaxPages, $books[$i]);
	}
}

print_r($booksMaxPages);
