<?php
  require_once 'ubench/src/Ubench.php';

    $bench = new Ubench;

    $bench->start();

    $name = ['henry','luiz','araujo','henrique','joao','maria','jose','judite'];

	/*$for = function($obj) use (&$for){
		$count = 0;
		if($count < sizeof($obj)){
			print_r("($obj[$count])");
			//return $obj[$count];
			return $for(array_slice($obj,1));
			$count++;
		}
	};*/
	/*for ($i = 0; $i < count($name); $i++) {
		echo "value:  $name[$i] -- ";
	}*/
	for ($i = 0; $i < 100000; $i++) {
		echo $i;
	}
  $bench->end();

  echo 'CPU time taken '.$bench->getTime(false, '%d%s')." -- ";

  echo 'memory used '.$bench->getMemoryUsage(). " -- ";
//$for($name);
