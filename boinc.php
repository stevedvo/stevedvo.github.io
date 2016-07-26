﻿<!DOCTYPE html>

<html lang="en">

	<head>
		<meta name="description" content="My interest and history with participation in distributed computing projects."/>
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
				var pages = ["animation", "astropics", "index", "links", "maths", "sepsis", "tictactoe"];
				
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
				dest = ["asteroids", "climate", "cosmology", "einstein", "lhc", "milkyway", "seti", "yoyo"];
				sections = [];

				for (j=0 ; j<dest.length ; j++)
				{
					sections[j] = new XMLHttpRequest();
					sections[j].open("GET", "includes/boinc_"+dest[j]+".php", true);
					sections[j].send(null);
				}

				sections[0].onreadystatechange = function()
				{
					if ((sections[0].readyState === 4) && (sections[0].status === 200))
					{
						AJAXResp = sections[0].responseText;
						$("#"+dest[0]+"_menu, #"+dest[0]+"_tab").html(AJAXResp);
					}
				}

				sections[1].onreadystatechange = function()
				{
					if ((sections[1].readyState === 4) && (sections[1].status === 200))
					{
						AJAXResp = sections[1].responseText;
						$("#"+dest[1]+"_menu, #"+dest[1]+"_tab").html(AJAXResp);
					}
				}

				sections[2].onreadystatechange = function()
				{
					if ((sections[2].readyState === 4) && (sections[2].status === 200))
					{
						AJAXResp = sections[2].responseText;
						$("#"+dest[2]+"_menu, #"+dest[2]+"_tab").html(AJAXResp);
					}
				}

				sections[3].onreadystatechange = function()
				{
					if ((sections[3].readyState === 4) && (sections[3].status === 200))
					{
						AJAXResp = sections[3].responseText;
						$("#"+dest[3]+"_menu, #"+dest[3]+"_tab").html(AJAXResp);
					}
				}

				sections[4].onreadystatechange = function()
				{
					if ((sections[4].readyState === 4) && (sections[4].status === 200))
					{
						AJAXResp = sections[4].responseText;
						$("#"+dest[4]+"_menu, #"+dest[4]+"_tab").html(AJAXResp);
					}
				}

				sections[5].onreadystatechange = function()
				{
					if ((sections[5].readyState === 4) && (sections[5].status === 200))
					{
						AJAXResp = sections[5].responseText;
						$("#"+dest[5]+"_menu, #"+dest[5]+"_tab").html(AJAXResp);
					}
				}

				sections[6].onreadystatechange = function()
				{
					if ((sections[6].readyState === 4) && (sections[6].status === 200))
					{
						AJAXResp = sections[6].responseText;
						$("#"+dest[6]+"_menu, #"+dest[6]+"_tab").html(AJAXResp);
					}
				}

				sections[7].onreadystatechange = function()
				{
					if ((sections[7].readyState === 4) && (sections[7].status === 200))
					{
						AJAXResp = sections[7].responseText;
						$("#"+dest[7]+"_menu, #"+dest[7]+"_tab").html(AJAXResp);
						$(".vert_tabs").tabs("refresh");
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
					include ("includes/boinc.html");
				?>
			</div>
		</div>		
	</body>

</html>
