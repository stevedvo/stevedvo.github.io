<html lang="en">

	<head>
		<meta name="description" content="Tic Tac Toe / Noughts & Crosses game made using JavaScript."/>
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

			var playerX, playerO, iconX, iconO, A1, A2, A3, B1, B2, B3, C1, C2, C3, btn, turnX, leftX, leftO, msgs;

			function doTurn()
			{
				playerX = O("playerX").value;
				playerO = O("playerO").value;

				if (turnX)
				{
					if ($(this).html() !== "")
					{
						return false;
					}
					else
					{
						$(this).html("X");
						turnX = !turnX;
						S(iconO).background = "aqua";
						S(iconX).background = "#444";	
					}
				}
				else
				{
					if ($(this).html() !== "")
					{
						return false;
					}
					else
					{
						$(this).html("O");
						turnX = !turnX;
						S(iconX).background = "aqua";
						S(iconO).background = "#444";
					}
				}

				
				if((A1.innerHTML === B1.innerHTML) && (A1.innerHTML === C1.innerHTML) && ((A1.innerHTML === "X") || (A1.innerHTML === "O")))
				{
					S(A1).background = "yellow";
					S(B1).background = "yellow";
					S(C1).background = "yellow";
					if (A1.innerHTML === "X")
					{
						alert(playerX+" wins the game!");
					}
					else
					{
						alert(playerO+" wins the game!");		
					}
				}
				
				if((A2.innerHTML === B2.innerHTML) && (A2.innerHTML === C2.innerHTML) && ((A2.innerHTML === "X") || (A2.innerHTML === "O")))
				{
					S(A2).background = "yellow";
					S(B2).background = "yellow";
					S(C2).background = "yellow";
					if (A2.innerHTML === "X")
					{
						alert(playerX+" wins the game!");
					}
					else
					{
						alert(playerO+" wins the game!");		
					}
				}
				
				if((A3.innerHTML === B3.innerHTML) && (A3.innerHTML === C3.innerHTML) && ((A3.innerHTML === "X") || (A3.innerHTML === "O")))
				{
					S(A3).background = "yellow";
					S(B3).background = "yellow";
					S(C3).background = "yellow";
					if (A3.innerHTML === "X")
					{
						alert(playerX+" wins the game!");
					}
					else
					{
						alert(playerO+" wins the game!");		
					}
				}
				
				if((A1.innerHTML === A2.innerHTML) && (A1.innerHTML === A3.innerHTML) && ((A1.innerHTML === "X") || (A1.innerHTML === "O")))
				{
					S(A1).background = "yellow";
					S(A2).background = "yellow";
					S(A3).background = "yellow";
					if (A1.innerHTML === "X")
					{
						alert(playerX+" wins the game!");
					}
					else
					{
						alert(playerO+" wins the game!");		
					}
				}
				
				if((B1.innerHTML === B2.innerHTML) && (B1.innerHTML === B3.innerHTML) && ((B1.innerHTML === "X") || (B1.innerHTML === "O")))
				{
					S(B1).background = "yellow";
					S(B2).background = "yellow";
					S(B3).background = "yellow";
					if (B1.innerHTML === "X")
					{
						alert(playerX+" wins the game!");
					}
					else
					{
						alert(playerO+" wins the game!");		
					}
				}
				
				if((C1.innerHTML === C2.innerHTML) && (C1.innerHTML === C3.innerHTML) && ((C1.innerHTML === "X") || (C1.innerHTML === "O")))
				{
					S(C1).background = "yellow";
					S(C2).background = "yellow";
					S(C3).background = "yellow";
					if (C1.innerHTML === "X")
					{
						alert(playerX+" wins the game!");
					}
					else
					{
						alert(playerO+" wins the game!");		
					}
				}
				
				if((A1.innerHTML === B2.innerHTML) && (A1.innerHTML === C3.innerHTML) && ((A1.innerHTML === "X") || (A1.innerHTML === "O")))
				{
					S(A1).background = "yellow";
					S(B2).background = "yellow";
					S(C3).background = "yellow";
					if (A1.innerHTML === "X")
					{
						alert(playerX+" wins the game!");
					}
					else
					{
						alert(playerO+" wins the game!");		
					}
				}
				
				if((A3.innerHTML === B2.innerHTML) && (A3.innerHTML === C1.innerHTML) && ((A3.innerHTML === "X") || (A3.innerHTML === "O")))
				{
					S(A3).background = "yellow";
					S(B2).background = "yellow";
					S(C1).background = "yellow";
					if (A3.innerHTML === "X")
					{
						alert(playerX+" wins the game!");
					}
					else
					{
						alert(playerO+" wins the game!");		
					}
				}
				
			}

			function newGame()
			{
				leftX = 5;
				leftO = 4;
				turnX = true;
				
				A1.innerHTML = "";
				A2.innerHTML = "";
				A3.innerHTML = "";
				B1.innerHTML = "";
				B2.innerHTML = "";
				B3.innerHTML = "";
				C1.innerHTML = "";
				C2.innerHTML = "";
				C3.innerHTML = "";
				
				S(A1).background = "white";
				S(A2).background = "white";
				S(A3).background = "white";
				S(B1).background = "white";
				S(B2).background = "white";
				S(B3).background = "white";
				S(C1).background = "white";
				S(C2).background = "white";
				S(C3).background = "white";
				
				S(iconX).background = "aqua";
				S(iconO).background = "#444";
			}

			function init_tictactoe()
			{
				msgs = O("msgs");
				iconX = O("iconX");
				iconO = O("iconO");
				
				A1 = O("A1");
				A2 = O("A2");
				A3 = O("A3");
				B1 = O("B1");
				B2 = O("B2");
				B3 = O("B3");
				C1 = O("C1");
				C2 = O("C2");
				C3 = O("C3");

				newGame();

				$("#btn").click(newGame);

				$(".gridPlace").click(doTurn);
			}

			function preRender ()
			{
				var pages = ["astropics", "animation", "boinc", "index", "links", "maths", "sepsis"];
				
				for (i=0 ; i<pages.length ; i++)
				{
					var pre = document.createElement ("link");
					pre.rel = "prerender prefetch dns-prefetch";

					pre.href = pages[i]+".php";
					document.getElementsByTagName("head")[0].appendChild(pre);					
				}
			}

			document.addEventListener("DOMContentLoaded", init_tictactoe, false);
		</script>
		<style type="text/css">
			table, #btn
			{
				color: black;
			}

			.pName
			{
				color: white;
			}

			table.icons
			{
				border:medium blue solid;
				font-size:x-large;
			}

			table.icons td
			{
				width:60px;
				height:60px;
				border:thin blue solid;
				text-align: center;
			}

			table.grid td
			{
				border:thin blue solid;
				text-align: center;
				width:60px;
				height:60px;
			}

			table.grid
			{
				border:medium blue solid;
				border-collapse:collapse;
				font-size:x-large;
			}

			#btn
			{
				background: red;
				font-size: small;
				font-weight: bold;
			}
		</style>
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
