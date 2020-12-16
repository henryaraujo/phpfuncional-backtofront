<?php
include_once '../booksGenre.php';

$concat = function ($obj) {
	$result = [];
	foreach ($obj as $value) {
		$result = array_merge($result, $value);
	}
	return $result;
};

$getCoverArts = function ($field) {
	return function ($obj) use ($field) {
		return $obj[$field];
	};
};

$getCoverArts2 = $concat(
	array_map(
		function ($coverarts) {
			return $coverarts['coverarts'];
		},
		$concat(
			array_map(
				function ($books) {
					return $books['books'];
				},
				$booksGenres
			)
		)
	)
);

$maxCoverArts = function ($max, $current) {

	$maxSize = $max['width'] * $max['height'];
	$currentSize = $current['width'] * $current['height'];

	return ($currentSize > $maxSize) ? $current : $max;
};

$novo = array_map($getCoverArts('books'), $booksGenres);
$cover = $concat(array_map($getCoverArts('coverarts'), $concat($novo)));

$coverLargest = array_reduce($cover, $maxCoverArts, ['width' => 0, 'height' => 0]);

print_r($getCoverArts2);
//echo json_encode($getCoverArts2);
/*print_r($booksGenres);
echo "--------------------";
print_r($coverLargest);*/