﻿<!DOCTYPE html>

<html lang="en">

	<head>
		<meta name="description" content="Tic Tac Toe / Noughts & Crosses game made using JavaScript."/>
		<script type="text/javascript" src="javascript/tictactoe.js"></script>
		<link type="text/css" rel="stylesheet" href="css/tictactoe.css"/>
		<?php
			$page_title = "stevedeveaux.com";
			include ("includes/headinfo.html");
		?>
		<title><?php echo $page_title; ?></title>
	</head>

	<body>
		<div class="container-fluid">
			<div id="wrapper" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<img id="gradfill" src="images/gradfill.png" alt="gradfill"/>
				<?php
					include ("includes/header.html");
					include ("includes/tictactoe.html");
				?>
			</div>
		</div>			
	</body>

</html>
