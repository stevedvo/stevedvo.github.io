<!DOCTYPE html>

<html lang="en">

	<head>
		<meta name="description" content="Information about Sepsis (aka septicaemia / blood-poisoning): what it is, how it is diagnosed, and how it is treated. More info from UK Sepsis Trust."/>
		<?php
			$page_title = "stevedeveaux.com";
			include ("includes/headinfo.html");
		?>
		<title><?php echo $page_title; ?></title>
		<?php
			include ("javascript/globalJS.php");
			include ("javascript/menus_tabsJS.php");
			include ("css/globalCSS.php");
			include ("css/menus_tabsCSS.php");
		?>
		<script type="text/javascript">
			var AJAXResp;

			function init_sepsis ()
			{
				$("#sepsissections").selectmenu(
				{
					change: function(event, data)
					{
						$(".sepsissection").css('display', 'none');
						$("#"+$("#sepsissections option:selected").val()).css('display', 'block');			
					}
				});
			}

			function preRender ()
			{
				var pages = ["animation", "astropics", "boinc", "index", "links", "maths", "tictactoe"];
				
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
				dest = ["Diagnosis", "Treatment", "Goals", "Links"];
				sections = [];

				for (j=0 ; j<dest.length ; j++)
				{
					sections[j] = new XMLHttpRequest();
					sections[j].open("GET", "includes/sepsis_"+(j+2)+".php", true);
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
						$(".vert_tabs").tabs("refresh");
					}
				}

				preRender();
			}
			document.addEventListener("DOMContentLoaded", init_sepsis, false);
		</script>
	</head>

	<body onload = doAJAX()>
		<div class="container-fluid">
			<div id="wrapper" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<img id="gradfill" src="images/gradfill.png" alt="gradfill"/>
				<?php
					include ("includes/header.html");
					include ("includes/sepsis.html");
				?>
			</div>
		</div>
	</body>

</html>