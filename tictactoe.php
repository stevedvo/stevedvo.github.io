<!DOCTYPE html>

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
		<link rel="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap.min.css"/>
		<script type="text/javascript" src="javascript/main.js"></script>
		<script type="text/javascript" src="jQuery/jquery-ui-1.11.4/jquery-ui.min.js"></script>
		<script type="text/javascript" src="javascript/OSC.js"></script>
		<script defer type="text/javascript">
			function preRender ()
			{
				var pages = ["astropics", "animation", "boinc", "index", "links", "maths", "sepsis"];
				
				for (i=0 ; i<pages.length ; i++)
				{
					var pre = document.createElement ("link");
					pre.rel = "prerender prefetch";

					pre.href = pages[i]+".php";
					document.getElementsByTagName("head")[0].appendChild(pre);					
				}
			}
		</script>
	</head>

	<body onload = preRender()>
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
