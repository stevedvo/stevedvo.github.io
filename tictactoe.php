<!DOCTYPE html>

<html lang="en">

	<head>
		<?php
			include ("includes/headinfo.html");
		?>
		<script type="text/javascript" src="javascript/tictactoe.js"></script>
		<script type="text/javascript" src="javascript/OSC.js"></script>
		<link type="text/css" rel="stylesheet" href="css/tictactoe.css"/>
	</head>

	<body>
		<div class="container-fluid">
			<div id="wrapper" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<img id="gradfill" src="images/gradfill.jpg" alt="gradfill"/>
				<?php
					$page_title = "Tic Tac Toe";
					include ("includes/header.html");
					include ("includes/tictactoe.html");
				?>
			</div>
		</div>			
	</body>

</html>
