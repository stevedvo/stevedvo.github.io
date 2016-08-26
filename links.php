<!DOCTYPE html>

<html lang="en">

	<head>
		<meta name="description" content="Useful links and resources for information and updates on current events."/>
		<?php
			$page_title = "stevedeveaux.com";
			include ("includes/headinfo.html");
		?>
		<img src="images/bbc_news.jpg" style="display:none;"/>
		<img src="images/bbc_weather.jpg" style="display:none;"/>
		<img src="images/wikipedia.jpg" style="display:none;"/>
		<img src="images/wiktionary.jpg" style="display:none;"/>
		<title><?php echo $page_title; ?></title>
		<?php
			include ("javascript/globalJS.php");
			include ("css/globalCSS.php");
		?>
		<script type="text/javascript">
			var AJAXResp;

			function preRender ()
			{
				var pages = ["animation", "astropics", "boinc", "index", "maths", "sepsis", "tictactoe"];
				
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
				dest = ["sport", "dev", "science", "travel", "shopping", "movies", "social", "other"];
				sections = [];

				for (j=0 ; j<dest.length ; j++)
				{
					sections[j] = new XMLHttpRequest();
					sections[j].open("GET", "includes/links_"+dest[j]+".php", true);
					sections[j].send(null);
				}

				sections[0].onreadystatechange = function()
				{
					if ((sections[0].readyState === 4) && (sections[0].status === 200))
					{
						AJAXResp = sections[0].responseText;
						$("#"+dest[0]+"_links").html(AJAXResp);
					}
				}

				sections[1].onreadystatechange = function()
				{
					if ((sections[1].readyState === 4) && (sections[1].status === 200))
					{
						AJAXResp = sections[1].responseText;
						$("#"+dest[1]+"_links").html(AJAXResp);
					}
				}

				sections[2].onreadystatechange = function()
				{
					if ((sections[2].readyState === 4) && (sections[2].status === 200))
					{
						AJAXResp = sections[2].responseText;
						$("#"+dest[2]+"_links").html(AJAXResp);
					}
				}

				sections[3].onreadystatechange = function()
				{
					if ((sections[3].readyState === 4) && (sections[3].status === 200))
					{
						AJAXResp = sections[3].responseText;
						$("#"+dest[3]+"_links").html(AJAXResp);
					}
				}

				sections[4].onreadystatechange = function()
				{
					if ((sections[4].readyState === 4) && (sections[4].status === 200))
					{
						AJAXResp = sections[4].responseText;
						$("#"+dest[4]+"_links").html(AJAXResp);
					}
				}

				sections[5].onreadystatechange = function()
				{
					if ((sections[5].readyState === 4) && (sections[5].status === 200))
					{
						AJAXResp = sections[5].responseText;
						$("#"+dest[5]+"_links").html(AJAXResp);
					}
				}

				sections[6].onreadystatechange = function()
				{
					if ((sections[6].readyState === 4) && (sections[6].status === 200))
					{
						AJAXResp = sections[6].responseText;
						$("#"+dest[6]+"_links").html(AJAXResp);
					}
				}

				sections[7].onreadystatechange = function()
				{
					if ((sections[7].readyState === 4) && (sections[7].status === 200))
					{
						AJAXResp = sections[7].responseText;
						$("#"+dest[7]+"_links").html(AJAXResp);
					}
				}

				preRender();
			}
		</script>
		<style type="text/css">
			.screenshot-container, .astropic-container
			{
				padding-bottom: 30px;
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
					include ("includes/links.html");
				?>
			</div>
		</div>		
	</body>

</html>
