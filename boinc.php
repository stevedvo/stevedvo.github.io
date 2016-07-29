<!DOCTYPE html>

<html lang="en">

	<head>
		<meta name="description" content="My interest and history with participation in distributed computing projects."/>
		<?php
			$page_title = "stevedeveaux.com";
			include ("includes/headinfo.html");
		?>
		<img src="http://boincstats.com/signature/-1/user/2736906/sig.png" style="display:none;"/>
		<title><?php echo $page_title; ?></title>
		<?php
			include ("javascript/globalJS.php");
			include ("javascript/menus_tabsJS.php");
			include ("css/globalCSS.php");
			include ("css/menus_tabsCSS.php");
		?>
		<script type="text/javascript">
			var AJAXResp;

			function init_boinc ()
			{
				$("#boincsections").selectmenu(
				{
					change: function(event, data)
					{
						$(".boincsection").css('display', 'none');
						$("#"+$("#boincsections option:selected").val()).css('display', 'block');			
					}
				});
			}

			function preRender ()
			{
				var pages = ["animation", "astropics", "index", "links", "maths", "sepsis", "tictactoe"];
				
				for (i=0 ; i<pages.length ; i++)
				{
					var pre = document.createElement ("link");
					pre.rel = "prerender prefetch dns-prefetch";

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
			document.addEventListener("DOMContentLoaded", init_boinc, false);
		</script>
		<style type="text/css">
			#boinc_acronym
			{
				border: thin yellow solid;
				float: left;
				margin: 0px 10px 10px 0px;
				padding: 5px 5px 0px 5px;
			}
		</style>
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
