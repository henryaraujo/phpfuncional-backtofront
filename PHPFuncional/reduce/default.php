<?php
include_once '../booksGenre.php';

//$merge = [];
$maxSize = -9223372036854775807;
$maxBox = null;
$current = 0;

foreach ($booksGenres as $key => $books) {
	foreach ($books['books'] as $idx => $coverarts) {
		foreach ($coverarts['coverarts'] as $self => $cover) {
			
			$current = $cover['width'] * $cover['height'];

			if($current > $maxSize){
					$maxSize = $current;
					$maxBox = $cover;
			}
			//array_push($merge, $cover);
		}
	}
}
			print_r($maxBox);

//print_r($merge);

//print_r(array_merge($merge,array()));