<?php
echo $path = $_SELF;
?>
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>PROGRAMAÇÃO FUNCIONAL PHP</title>

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/style.css" rel="stylesheet">

  </head>
  <body>
    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

         

          <div class="inner cover">
						<ul class="list-group">
							<li class="list-group-item">
								<a class="list-group-item text-left title" href="<?php echo $path."imperativovsdeclarativo.php";?>">
									<strong>IMPERATIVO VS DECLARATIVO</strong>
									<span class="glyphicon glyphicon-chevron-right pull-right" aria-hidden="true"></span>
								</a>
								
							</li>
							<li class="list-group-item">
								<a class="list-group-item text-left title" href="<?php echo $path."impuravspuda.php";?>">
									<strong>IMPURA VS PURA</strong>
									<span class="glyphicon glyphicon-chevron-right pull-right" aria-hidden="true"></span>
								</a>
							</li>
							<li class="list-group-item">
								<a class="list-group-item text-left title" href="<?php echo $path."higherorder.php";?>">
									<strong>HIGHER-ORDER FUNCTIONS</strong>
									<span class="glyphicon glyphicon-chevron-right pull-right" aria-hidden="true"></span>
								</a>
							</li>
							<li class="list-group-item">
								<a class="list-group-item text-left title" href="<?php echo $path."closures.php";?>">
									<strong>CLOSURES</strong>
									<span class="glyphicon glyphicon-chevron-right pull-right" aria-hidden="true"></span>
								</a>
							</li>
							<li class="list-group-item">
								<a class="list-group-item text-left title" href="<?php echo $path."currying.php";?>">
									<strong>CURRYING</strong>
									<span class="glyphicon glyphicon-chevron-right pull-right" aria-hidden="true"></span>
								</a>
							</li>
						</ul>

          </div>

        </div>

      </div>

    </div>
  </body>
</html>