<!DOCTYPE html>

<html lang="en">

	<head>
		<?php
			include ("includes/headinfo.html");
		?>
		<meta name="description" content="Animation using the HTML5 Canvas and JavaScript."/>
		<script type="text/javascript" src="javascript/animation.js"></script>
		<script type="text/javascript" src="javascript/OSC.js"></script>
	</head>

	<body>
		<div class="container-fluid">
			<div id="wrapper" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<img id="gradfill" src="images/gradfill.png" alt="gradfill"/>
				<?php
					$page_title = "Canvas Animation";
					include ("includes/header.html");
					include ("includes/animation.html");
				?>
			</div>
		</div>			
	</body>

</html>
