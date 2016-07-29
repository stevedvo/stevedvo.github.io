<!-- <?php




$page = $_SERVER['REQUEST_URI'];


switch ($page) {
	case '/stevedvo.github.io/':
		$load = 'about.html';
		break;
	case '/stevedvo.github.io/animation':
		$load = 'animation.html';
		break;
	default:
		$load = '404.html';
}

?>

 -->
<!DOCTYPE html>

<html lang="en">

	<head>
		<meta name="description" content="About Steve DeVeaux: graduate of Sheffield University; Product Owner in Agile Scrum; Web Developer in HTML5, CSS3, JavaScript, jQuery, Bootstrap, PHP."/>
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

			function init_index ()
			{
				$("#aboutsections").selectmenu(
				{
					change: function(event, data)
					{
						$(".aboutsection").css('display', 'none');
						$("#"+$("#aboutsections option:selected").val()).css('display', 'block');			
					}
				});
			}

			function preRender ()
			{
				var pages = ["animation", "astropics", "boinc", "links", "maths", "sepsis", "tictactoe"];
				
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
				edu = new XMLHttpRequest();
				edu.open("GET", "includes/about_edu_menu.php", true);
				edu.send(null);
				edu.onreadystatechange = function()
				{
					if ((edu.readyState === 4) && (edu.status === 200))
					{
						AJAXResp = edu.responseText;
						$("#Education_menu, #Education_tab").html(AJAXResp);
					}
				}

				dev = new XMLHttpRequest();
				dev.open("GET", "includes/about_dev_menu.php", true);
				dev.send(null);
				dev.onreadystatechange = function()
				{
					if ((dev.readyState === 4) && (dev.status === 200))
					{
						AJAXResp = dev.responseText;
						$("#Dev_menu, #Dev_tab").html(AJAXResp);
					}
				}

				int_menu = new XMLHttpRequest();
				int_menu.open("GET", "includes/about_int_menu.php", true);
				int_menu.send(null);
				int_menu.onreadystatechange = function()
				{
					if ((int_menu.readyState === 4) && (int_menu.status === 200))
					{
						AJAXResp = int_menu.responseText;
						$("#Interests_menu").html(AJAXResp);
						$("#viewinterest").selectmenu(
						{
							change: function(event, data)
							{
								$(".interest").css('display', 'none');
								$("#"+$("#viewinterest option:selected").val()).css('display', 'block');			
							}
						});
					}
				}

				blog_menu = new XMLHttpRequest();
				blog_menu.open("GET", "includes/about_blog_menu.php", true);
				blog_menu.send(null);
				blog_menu.onreadystatechange = function()
				{
					if ((blog_menu.readyState === 4) && (blog_menu.status === 200))
					{
						AJAXResp = blog_menu.responseText;
						$("#Blog_menu").html(AJAXResp);
						$("#viewperiod").selectmenu(
						{
							change: function(event, data)
							{
								$(".period").css('display', 'none');
								$("#"+$("#viewperiod option:selected").val()).css('display', 'block');			
							}
						});
					}
				}

				int_tab = new XMLHttpRequest();
				int_tab.open("GET", "includes/about_int_tab.php", true);
				int_tab.send(null);
				int_tab.onreadystatechange = function()
				{
					if ((int_tab.readyState === 4) && (int_tab.status === 200))
					{
						AJAXResp = int_tab.responseText;
						$("#Interests_tab").html(AJAXResp);
					}
				}

				blog_tab = new XMLHttpRequest();
				blog_tab.open("GET", "includes/about_blog_tab.php", true);
				blog_tab.send(null);
				blog_tab.onreadystatechange = function()
				{
					if ((blog_tab.readyState === 4) && (blog_tab.status === 200))
					{
						AJAXResp = blog_tab.responseText;
						$("#Blog_tab").html(AJAXResp);
						$(".vert_tabs").tabs("refresh");
					}
				}

				preRender();
			}
			document.addEventListener("DOMContentLoaded", init_index, false);
		</script>
		<style type="text/css">
			@media only screen and (max-width: 479px)
			{
				.musicItem, .comicItem
				{
					float: left;
					width: 100%;
				}
				.bandsocial, .venuesocial
				{
					float: left;
					width: 50%;
				}
				.bandwiki, .venuelink
				{
					float: left;
					width: 50%;
				}

			}

			@media only screen and (min-width: 480px) and (max-width: 767px)
			{
				.musicItem, .comicItem
				{
					float: left;
					width: 50%;
				}
				.bandsocial, .venuesocial
				{
					float: left;
					width: 50%;
				}
				.bandwiki, .venuelink
				{
					float: left;
					width: 50%;
				}
			}

			.comicItem:hover, .musicItem:hover
			{
				background: #55acee;
			}

			#viewperiod-button
			{
				margin-top: 10px;
			}

			.ui-accordion-content
			{
				background: transparent !important;
			}

			.Img_20160629, .Img_20160719, .Img_20160727
			{
				float: left;
				width: 100%;
				max-width: 420px;
				margin: 0px 20px 10px 0px;
			}

			.vidEmbed
			{
				height: 315px;
			}
		</style>
	</head>

	<body onload = doAJAX()>
		<div class="container-fluid">
			<div id="wrapper" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<img id="gradfill" src="images/gradfill.png" alt="gradfill"/>
				<?php
					include ("includes/header.html");
					include ("includes/about.html");
					// include ("includes/" . $load);
				?>
			</div>
		</div>
	</body>

</html>
