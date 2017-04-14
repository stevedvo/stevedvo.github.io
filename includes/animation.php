<html lang="en">

	<head>
		<meta name="description" content="Animation using the HTML5 Canvas and JavaScript."/>
		<?php
			$page_title = "stevedeveaux.com";
			include ("includes/headinfo.html");
		?>
		<title><?php echo $page_title; ?></title>
		<?php
			include ("javascript/globalJS.php");
			include ("css/globalCSS.php");
		?>
		<script type="text/javascript">
			function O(i) { return typeof i == 'object' ? i : document.getElementById(i) }
			function S(i) { return O(i).style                                            }
			function C(i) { return document.getElementsByClassName(i)                    }

			var ctx, w, h, x, y, dx, dy;
			 
			function paint() 
			{
				ctx.clearRect(0,0,w,h);
				ctx.fillStyle = linear1;
				ctx.fillRect(0, 0, w, h);

				ctx.beginPath();
				ctx.arc(x2,y2,r2,0, Math.PI * 2, true);
				ctx.fillStyle = linear2;
				ctx.fill();
				
				ctx.beginPath();
				ctx.arc(x1,y1,r1,0, Math.PI * 2, true);
				radial1 = ctx.createRadialGradient(x1, y1, 0, x1, y1, r1);
				radial1.addColorStop(0, "blue");
				radial1.addColorStop(1, "black");
				ctx.fillStyle = radial1;
				ctx.fill();
				
			}

			function position() 
			{
				paint();
				if ( (x1+r1+dx1 > w) || (x1-r1+dx1 < 0) ) dx1 = -dx1;
				if ( (y1+r1+dy1 > h) || (y1-r1+dy1 < 0) ) dy1 = -dy1;
				x1 += dx1; y1 += dy1;  

				if ( (x2+r2+dx2 > w) || (x2-r2+dx2 < 0) ) dx2 = -dx2;
				if ( (y2+r2+dy2 > h) || (y2-r2+dy2 < 0) ) dy2 = -dy2;
				x2 += dx2; y2 += dy2;  

			}
			
			function init_animation ()
			{
				canvas = O("canvas");
				ctx = canvas.getContext("2d");
				$("#canvas").css('margin-left', '15px');	
				$("#canvas").css('position', 'relative');	
				xWind = $(window).width();
				$("#canvas").width(xWind*5/6);
				$("#canvas").height(xWind*5/12);
				w = canvas.width; 
				h = canvas.height;
				
				x1=w*5/15; y1=x1; r1=x1/8;
				dx1=x1/40; dy1=x1/120;
				
				x2=w*6/15; y2=x2/2; r2=x2/8;
				dx2=x2/120; dy2=x2/90;
				
				linear1 = ctx.createLinearGradient(0, 0, w, 0);
				linear1.addColorStop(0.00, "red");
				linear1.addColorStop(0.17, "orange");
				linear1.addColorStop(0.33, "yellow");
				linear1.addColorStop(0.50, "green");
				linear1.addColorStop(0.67, "blue");
				linear1.addColorStop(0.83, "indigo");
				linear1.addColorStop(1.00, "violet");

				linear2 = ctx.createLinearGradient(0, h, w, 0);
				linear2.addColorStop(0.00, "black");
				linear2.addColorStop(1.00, "white");
				
				S(canvas).background = "purple";
				S(canvas).border="6px solid #09F";

				setInterval(position, 25);

			}

			function preRender ()
			{
				var pages = ["astropics", "boinc", "home", "links", "maths", "sepsis", "tictactoe"];
				
				for (i=0 ; i<pages.length ; i++)
				{
					var pre = document.createElement ("link");
					pre.rel = "prerender prefetch dns-prefetch";

					pre.href = "includes/"+pages[i]+".php";
					document.getElementsByTagName("head")[0].appendChild(pre);					
				}
			}
			document.addEventListener("DOMContentLoaded", init_animation, false);
		</script>
	</head>

	<body onload = preRender()>
		<div class="container-fluid">
			<div id="wrapper" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<img id="gradfill" src="images/gradfill.png" alt="gradfill"/>
				<?php
					include ("includes/header.html");
					include ("includes/animation.html");
				?>
			</div>
		</div>			
	</body>

</html>