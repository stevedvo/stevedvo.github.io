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
	</head>

	<body>
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
