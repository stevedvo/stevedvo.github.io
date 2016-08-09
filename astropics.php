<!DOCTYPE html>

<html lang="en">

	<head>
		<meta name="description" content="Astronomy Pictures, mostly taken through my Orion SkyQuest XT8 Dobsonian reflecting telescope using my Nikon E4500 digital camera."/>
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

			function init_astropics ()
			{
				$("#astrosections").selectmenu(
				{
					change: function(event, data)
					{
						$(".astrosection").css('display', 'none');
						$("#"+$("#astrosections option:selected").val()).css('display', 'block');			
					}
				});
			}

			function preRender ()
			{
				var pages = ["animation", "boinc", "index", "links", "maths", "sepsis", "tictactoe"];
				
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
				dest = ["Sun", "Moon", "Planets", "Constellations", "Events", "Other"];
				sections = [];

				for (j=0 ; j<dest.length ; j++)
				{
					sections[j] = new XMLHttpRequest();
					sections[j].open("GET", "includes/astropics_"+(j+1)+".php", true);
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
						$(".vert_tabs").tabs("refresh");
						$(".thumb").attr('title', 'Click to see larger version');
						$(".thumb").click(function()
						{
							lrgStr = $(this).attr('src').replace("thb", "lrg");
							lrgImg = window.open(lrgStr, "PopUp", "top=0,left=0,width="+window.screen.availWidth+",height="+window.screen.availHeight+",location=no");
						});
					}
				}

				preRender();
			}
			document.addEventListener("DOMContentLoaded", init_astropics, false);
		</script>
		<style type="text/css">
			.screenshot-container, .astropic-container
			{
				padding-bottom: 30px;
			}

			.astropic-container
			{
				margin-top: 10px;
			}

			.screenshot, .thumb, .astropic
			{
				width: 100%;
			}

			@media only screen and (max-width: 479px)
			{
				.screenshot-container, .astropic-container
				{
					float: left;
					width: 50%;
				}
			}

			@media only screen and (min-width: 480px) and (max-width: 767px)
			{
				.screenshot-container, .astropic-container
				{
					float: left;
					width: 33.33333333%;
				}
			}
		</style>
	</head>

	<body onload = doAJAX()>
		<div class="container-fluid">
			<div id="wrapper" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<img id="gradfill" src="images/gradfill.png" alt="gradfill"/>
				<?php
					include ("includes/header.html");
					include ("includes/astropics.html");
				?>
			</div>
		</div>		
	</body>

</html>
