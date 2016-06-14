<!DOCTYPE html>

<html lang="en">

	<head>
		<?php
			include ("includes/headinfo.html");
		?>
		<meta name="description" content="Puzzles to test the brain."/>
		<script type="text/javascript" src="javascript/maths.js"></script>
		<link rel="stylesheet" type="text/css" href="css/maths.css"/>
	</head>

	<body>
		<div class="container-fluid">
			<div id="wrapper" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<img id="gradfill" src="images/gradfill.png" alt="gradfill"/>
				<?php
					$page_title = "Maths Puzzles";
					include ("includes/header.html");
					include ("includes/maths.html");
				?>
			</div>
		</div>
	</body>

</html>