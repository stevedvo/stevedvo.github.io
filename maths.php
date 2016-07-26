<!DOCTYPE html>

<html lang="en">

	<head>
		<meta name="description" content="Puzzles to test the brain."/>
		<script type="text/javascript" src="javascript/maths.js"></script>
		<link rel="stylesheet" type="text/css" href="css/maths.css"/>
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
			var AJAXResp;

			function preRender ()
			{
				var pages = ["animation", "astropics", "boinc", "index", "links", "sepsis", "tictactoe"];
				
				for (i=0 ; i<pages.length ; i++)
				{
					var pre = document.createElement ("link");
					pre.rel = "prerender prefetch";

					pre.href = pages[i]+".php";
					document.getElementsByTagName("head")[0].appendChild(pre);					
				}
			}

			function doAJAX ()
			{
				dest = ["sub", "mul", "div"];
				sections = [];

				for (j=0 ; j<dest.length ; j++)
				{
					sections[j] = new XMLHttpRequest();
					sections[j].open("GET", "includes/maths_"+dest[j]+".php", true);
					sections[j].send(null);
				}

				sections[0].onreadystatechange = function()
				{
					if ((sections[0].readyState === 4) && (sections[0].status === 200))
					{
						AJAXResp = sections[0].responseText;
						$("#"+dest[0]+"_menu, #"+dest[0]+"_tab").html(AJAXResp);
						init_maths();
					}
				}

				sections[1].onreadystatechange = function()
				{
					if ((sections[1].readyState === 4) && (sections[1].status === 200))
					{
						AJAXResp = sections[1].responseText;
						$("#"+dest[1]+"_menu, #"+dest[1]+"_tab").html(AJAXResp);
						init_maths();
					}
				}

				sections[2].onreadystatechange = function()
				{
					if ((sections[2].readyState === 4) && (sections[2].status === 200))
					{
						AJAXResp = sections[2].responseText;
						$("#"+dest[2]+"_menu, #"+dest[2]+"_tab").html(AJAXResp);
						$(".vert_tabs").tabs("refresh");
						init_maths();
					}
				}

				preRender();
			}
		</script>
	</head>

	<body onload = doAJAX()>
		<div class="container-fluid">
			<div id="wrapper" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<img id="gradfill" src="images/gradfill.png" alt="gradfill"/>
				<?php
					include ("includes/header.html");
					include ("includes/maths.html");
				?>
			</div>
		</div>
	</body>

</html>