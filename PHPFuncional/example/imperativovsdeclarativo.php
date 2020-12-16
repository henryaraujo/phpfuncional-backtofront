<?php
$movies = [
	['id' => 1, 'title' => 'Star War Ep. 3', 'age' => '2005'],
	['id' => 2, 'title' => 'DeadPool', 'age' => '2016'],
	['id' => 3, 'title' => 'Batman vs Superman', 'age' => '2016'],
	['id' => 4, 'title' => 'Senhor dos Aneis', 'age' => '2002']
];
//imperativo
$titleMovies = [];
for ($i = 0; $i < count($movies); $i++) {
	$titleMovies[] = $movies[$i]['title'];
}
echo " (imperativo) -> ";
print_r($titleMovies);

//declarativo
echo "\n (declarativo) -> ";
$callback = function ($obj) {
	return $obj['title'];
};
$titleMovies = array_map($callback, $movies);
print_r($titleMovies);
