<!DOCTYPE html>

<html lang="EN">
	<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<title>Basic Page</title>
		<style type="text/css">
			*
			{
				margin: 0px;
				padding: 0px;
				font-family: Trebuchet MS,Tahoma,Verdana,Arial,sans-serif;
			}

			#wrapper, #header, #topnav
			{
				width: 100%;
			}

			#wrapper
			{
				background: blue; /* For browsers that do not support gradients */
				background: -webkit-linear-gradient(black, black, grey); /* For Safari 5.1 to 6.0 */
				background: -o-linear-gradient(black, black, grey); /* For Opera 11.1 to 12.0 */
				background: -moz-linear-gradient(black, black, grey); /* For Firefox 3.6 to 15 */
				background: linear-gradient(black, black, grey); /* Standard syntax */
				position: absolute;
			}

			#header
			{
				text-align: center;
			}

			#header
			{
				position: fixed;
				height: 90px;
				background: rgba(0,0,0,0.9);
			}

			#btnnav
			{
				margin: 5px 20px 0px 0px;
				float: right;
			}

			#btnnav>button
			{
				height: 30px;
				width: 30px;
				border: 0px;
			}

			#header>header>h1
			{
				text-shadow: 1px 1px 5px lime;
				color: black;
				margin-top:	35px;
				font-size: 30px;
				width: 100%;
			}

			#topnav
			{
				display: none;
			}

			#topnav>button
			{
				background: grey;
				border: 0px;
				margin: 0px 5px 0px 5px;
				line-height: 300%;
				padding-left: 5px;
				padding-right: 5px;
				border-radius: 5px 5px 5px 5px;
			}

			#sidepanel
			{
				display: none;
				float: left;
				color: white;
				margin-top: 90px;
			}

			#mainbody
			{
				width: 100%;
				float: left;
				color: white;
				margin-top: 90px;
				text-align: justify;
			}

			#sidepanel>nav, #mainbody>article
			{
				padding: 0px 20px;
			}


			#mainbody>article>h2
			{
				text-align: center;
				margin-bottom: 20px;
			}

			@media only screen and (min-width: 768px)
			{
				#header
				{
					height: 105px;
				}

				#sidepanel, #mainbody
				{
					margin-top: 105px;
				}

				#header>header>h1
				{
					margin-top: 0px;
					font-size: 40px;
				}

				#btnnav
				{
					display: none;
				}

				#topnav
				{
					display: block;
				}

				#topnav>button
				{
					padding-left: 10px;
					padding-right: 10px;
					margin: 0px 10px 0px 10px;
				}

				#sidepanel
				{
					display: block;
					width: 25%;
				}

				#mainbody
				{
					width: 75%;
				}
			}

			@media only screen and (min-width: 992px)
			{
				#header
				{
					height: 120px;
				}

				#sidepanel, #mainbody
				{
					margin-top: 120px;
				}

				#header>header>h1
				{
					font-size: 50px;
				}

				#topnav>button
				{
					padding-left: 15px;
					padding-right: 15px;
					margin: 0px 15px 0px 15px;
				}

				#sidepanel
				{
					width: 20%;
				}

				#mainbody
				{
					width: 80%;
				}
			}

			@media only screen and (min-width: 1200px)
			{
				#header
				{
					height: 135px;
				}

				#sidepanel, #mainbody
				{
					margin-top: 135px;
				}

				#header>header>h1
				{
					font-size: 60px;
				}

				#topnav>button
				{
					padding-left: 20px;
					padding-right: 20px;
					margin: 0px 20px 0px 20px;
				}

				#sidepanel
				{
					width: 15%;
				}

				#mainbody
				{
					width: 85%;
				}
			}

			#topnav>button:hover
			{
				background: blue;
				color: white;
			}

			#sidepanel>nav>ul
			{
				list-style-type: none;
				text-align: right;
				line-height: 300%;
			}

		</style>
	</head>
	<body>
		<div id="wrapper">
			<section id="header">
				<nav id="btnnav">
					<button>Nav1</button>
					<button>Nav2</button>
					<button>Nav3</button>
					<button>Nav4</button>
					<button>Nav5</button>
				</nav>
				<header>
					<h1>BASIC WEB PAGE</h1>
				</header>
				<nav id="topnav">
					<button>Nav1</button>
					<button>Nav2</button>
					<button>Nav3</button>
					<button>Nav4</button>
					<button>Nav5</button>
				</nav>
			</section>
			<section id="sidepanel">
				<nav>
					<ul>
						<li>Side1</li>
						<li>Side2</li>
						<li>Side3</li>
						<li>Side4</li>
						<li>Side5</li>
					</ul>
				</nav>				
			</section>
			<section id="mainbody">
				<article>
					<h2>Title</h2>
					<p>W3Schools is optimized for learning, testing, and training. Examples might be simplified to improve reading and basic understanding. Tutorials, references, and examples are constantly reviewed to avoid errors, but we cannot warrant full correctness of all content. While using this site, you agree to have read and accepted our terms of use, cookie and privacy policy. Copyright 1999-2016 by Refsnes Data. All Rights Reserved.</p>
					<p>W3Schools is optimized for learning, testing, and training. Examples might be simplified to improve reading and basic understanding. Tutorials, references, and examples are constantly reviewed to avoid errors, but we cannot warrant full correctness of all content. While using this site, you agree to have read and accepted our terms of use, cookie and privacy policy. Copyright 1999-2016 by Refsnes Data. All Rights Reserved.</p>
					<p>W3Schools is optimized for learning, testing, and training. Examples might be simplified to improve reading and basic understanding. Tutorials, references, and examples are constantly reviewed to avoid errors, but we cannot warrant full correctness of all content. While using this site, you agree to have read and accepted our terms of use, cookie and privacy policy. Copyright 1999-2016 by Refsnes Data. All Rights Reserved.</p>
					<p>W3Schools is optimized for learning, testing, and training. Examples might be simplified to improve reading and basic understanding. Tutorials, references, and examples are constantly reviewed to avoid errors, but we cannot warrant full correctness of all content. While using this site, you agree to have read and accepted our terms of use, cookie and privacy policy. Copyright 1999-2016 by Refsnes Data. All Rights Reserved.</p>
					<p>W3Schools is optimized for learning, testing, and training. Examples might be simplified to improve reading and basic understanding. Tutorials, references, and examples are constantly reviewed to avoid errors, but we cannot warrant full correctness of all content. While using this site, you agree to have read and accepted our terms of use, cookie and privacy policy. Copyright 1999-2016 by Refsnes Data. All Rights Reserved.</p>
					<p>W3Schools is optimized for learning, testing, and training. Examples might be simplified to improve reading and basic understanding. Tutorials, references, and examples are constantly reviewed to avoid errors, but we cannot warrant full correctness of all content. While using this site, you agree to have read and accepted our terms of use, cookie and privacy policy. Copyright 1999-2016 by Refsnes Data. All Rights Reserved.</p>
					<p>W3Schools is optimized for learning, testing, and training. Examples might be simplified to improve reading and basic understanding. Tutorials, references, and examples are constantly reviewed to avoid errors, but we cannot warrant full correctness of all content. While using this site, you agree to have read and accepted our terms of use, cookie and privacy policy. Copyright 1999-2016 by Refsnes Data. All Rights Reserved.</p>
					<p>W3Schools is optimized for learning, testing, and training. Examples might be simplified to improve reading and basic understanding. Tutorials, references, and examples are constantly reviewed to avoid errors, but we cannot warrant full correctness of all content. While using this site, you agree to have read and accepted our terms of use, cookie and privacy policy. Copyright 1999-2016 by Refsnes Data. All Rights Reserved.</p>
					<p>W3Schools is optimized for learning, testing, and training. Examples might be simplified to improve reading and basic understanding. Tutorials, references, and examples are constantly reviewed to avoid errors, but we cannot warrant full correctness of all content. While using this site, you agree to have read and accepted our terms of use, cookie and privacy policy. Copyright 1999-2016 by Refsnes Data. All Rights Reserved.</p>
					<p>W3Schools is optimized for learning, testing, and training. Examples might be simplified to improve reading and basic understanding. Tutorials, references, and examples are constantly reviewed to avoid errors, but we cannot warrant full correctness of all content. While using this site, you agree to have read and accepted our terms of use, cookie and privacy policy. Copyright 1999-2016 by Refsnes Data. All Rights Reserved.</p>
				</article>
			</section>
		</div>
	</body>
</html>