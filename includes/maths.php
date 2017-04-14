<html lang="en">

	<head>
		<meta name="description" content="Puzzles to test the brain."/>
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

			function init_maths ()
			{
				$("#mathssections").selectmenu(
				{
					change: function(event, data)
					{
						$(".mathssection").css('display', 'none');
						$("#"+$("#mathssections option:selected").val()).css('display', 'block');			
					}
				});

				$(".addEasy").click(function()
				{
					num1 = Math.round(9*Math.random())+1;
					num2 = Math.round(9*Math.random())+1;

					solution = num1 + num2;

					$(".addArea").html("<p class='numsentence col-lg-4 col-md-6 col-sm-9'>"+num1+" + "+num2+" = <input class='userInput addAns_menu hidden-lg hidden-md hidden-sm' type='number' min='0'/><input class='userInput addAns_tab hidden-xs' type='number' min='0'/></p><button class='userSubmit addSubmit_menu hidden-lg hidden-md hidden-sm'>Submit</button><button class='userSubmit addSubmit_tab btn btn-sm col-lg-1 col-md-2 col-sm-3 hidden-xs'>Submit</button>");
					$(".vert_tabs").tabs("refresh");

					$(".addSubmit_menu, .addSubmit_tab").click(function()
					{
						if (($(".addAns_menu")[0].value == solution) || ($(".addAns_tab")[1].value == solution))
						{
							$(".addArea").append("<p class='goodAns col-lg-12 col-md-12 col-sm-12'>CORRECT!!</p>");
							$(".vert_tabs").tabs("refresh");
						}
						else
						{
							$(".addArea").append("<p class='badAns col-lg-12 col-md-12 col-sm-12'>Incorrect, please try again.</p>");
							$(".vert_tabs").tabs("refresh");
						}
					});
				});

				$(".addMedium").click(function()
				{
					num1 = Math.round(89*Math.random())+10;
					num2 = Math.round(89*Math.random())+10;

					solution = num1 + num2;

					$(".addArea").html("<p class='numsentence col-lg-4 col-md-6 col-sm-9'>"+num1+" + "+num2+" = <input class='userInput addAns_menu hidden-lg hidden-md hidden-sm' type='number' min='0'/><input class='userInput addAns_tab hidden-xs' type='number' min='0'/></p><button class='userSubmit addSubmit_menu hidden-lg hidden-md hidden-sm'>Submit</button><button class='userSubmit addSubmit_tab btn btn-sm col-lg-1 col-md-2 col-sm-3 hidden-xs'>Submit</button>");
					$(".vert_tabs").tabs("refresh");

					$(".addSubmit_menu, .addSubmit_tab").click(function()
					{
						if (($(".addAns_menu")[0].value == solution) || ($(".addAns_tab")[1].value == solution))
						{
							$(".addArea").append("<p class='goodAns col-lg-12 col-md-12 col-sm-12'>CORRECT!!</p>");
							$(".vert_tabs").tabs("refresh");
						}
						else
						{
							$(".addArea").append("<p class='badAns col-lg-12 col-md-12 col-sm-12'>Incorrect, please try again.</p>");
							$(".vert_tabs").tabs("refresh");
						}
					});
				});

				$(".addHard").click(function()
				{
					num1 = Math.round(989*Math.random())+10;
					num2 = Math.round(899*Math.random())+100;

					solution = num1 + num2;

					$(".addArea").html("<p class='numsentence col-lg-4 col-md-6 col-sm-9'>"+num1+" + "+num2+" = <input class='userInput addAns_menu hidden-lg hidden-md hidden-sm' type='number' min='0'/><input class='userInput addAns_tab hidden-xs' type='number' min='0'/></p><button class='userSubmit addSubmit_menu hidden-lg hidden-md hidden-sm'>Submit</button><button class='userSubmit addSubmit_tab btn btn-sm col-lg-1 col-md-2 col-sm-3 hidden-xs'>Submit</button>");
					$(".vert_tabs").tabs("refresh");

					$(".addSubmit_menu, .addSubmit_tab").click(function()
					{
						if (($(".addAns_menu")[0].value == solution) || ($(".addAns_tab")[1].value == solution))
						{
							$(".addArea").append("<p class='goodAns col-lg-12 col-md-12 col-sm-12'>CORRECT!!</p>");
							$(".vert_tabs").tabs("refresh");
						}
						else
						{
							$(".addArea").append("<p class='badAns col-lg-12 col-md-12 col-sm-12'>Incorrect, please try again.</p>");
							$(".vert_tabs").tabs("refresh");
						}
					});
				});

				$(".addSHard").click(function()
				{
					num1 = Math.round(9899*Math.random())+100;
					num2 = Math.round(9899*Math.random())+100;

					solution = num1 + num2;

					$(".addArea").html("<p class='numsentence col-lg-4 col-md-6 col-sm-9'>"+num1+" + "+num2+" = <input class='userInput addAns_menu hidden-lg hidden-md hidden-sm' type='number' min='0'/><input class='userInput addAns_tab hidden-xs' type='number' min='0'/></p><button class='userSubmit addSubmit_menu hidden-lg hidden-md hidden-sm'>Submit</button><button class='userSubmit addSubmit_tab btn btn-sm col-lg-1 col-md-2 col-sm-3 hidden-xs'>Submit</button>");
					$(".vert_tabs").tabs("refresh");

					$(".addSubmit_menu, .addSubmit_tab").click(function()
					{
						if (($(".addAns_menu")[0].value == solution) || ($(".addAns_tab")[1].value == solution))
						{
							$(".addArea").append("<p class='goodAns col-lg-12 col-md-12 col-sm-12'>CORRECT!!</p>");
							$(".vert_tabs").tabs("refresh");
						}
						else
						{
							$(".addArea").append("<p class='badAns col-lg-12 col-md-12 col-sm-12'>Incorrect, please try again.</p>");
							$(".vert_tabs").tabs("refresh");
						}
					});
				});

				$(".subEasy").click(function()
				{
					valid = false;
					
					while (valid == false)
					{
						num1 = Math.round(9*Math.random())+1;
						num2 = Math.round(9*Math.random())+1;
						
						solution = num1 - num2;

						if (solution > 0)
						{
							valid = true;
						}
					}

					$(".subArea").html("<p class='numsentence col-lg-4 col-md-6 col-sm-9'>"+num1+" - "+num2+" = <input class='userInput subAns_menu hidden-lg hidden-md hidden-sm' type='number' min='0'/><input class='userInput subAns_tab hidden-xs' type='number' min='0'/></p><button class='userSubmit subSubmit_menu hidden-lg hidden-md hidden-sm'>Submit</button><button class='userSubmit subSubmit_tab btn btn-sm col-lg-1 col-md-2 col-sm-3 hidden-xs'>Submit</button>");
					$(".vert_tabs").tabs("refresh");

					$(".subSubmit_menu, .subSubmit_tab").click(function()
					{
						if (($(".subAns_menu")[0].value == solution) || ($(".subAns_tab")[1].value == solution))
						{
							$(".subArea").append("<p class='goodAns col-lg-12 col-md-12 col-sm-12'>CORRECT!!</p>");
							$(".vert_tabs").tabs("refresh");
						}
						else
						{
							$(".subArea").append("<p class='badAns col-lg-12 col-md-12 col-sm-12'>Incorrect, please try again.</p>");
							$(".vert_tabs").tabs("refresh");
						}
					});
				});

				$(".subMedium").click(function()
				{
					valid = false;
					
					while (valid == false)
					{
						num1 = Math.round(99*Math.random())+1;
						num2 = Math.round(89*Math.random())+10;
						
						solution = num1 - num2;

						if (solution > 0)
						{
							valid = true;
						}
					}

					$(".subArea").html("<p class='numsentence col-lg-4 col-md-6 col-sm-9'>"+num1+" - "+num2+" = <input class='userInput subAns_menu hidden-lg hidden-md hidden-sm' type='number' min='0'/><input class='userInput subAns_tab hidden-xs' type='number' min='0'/></p><button class='userSubmit subSubmit_menu hidden-lg hidden-md hidden-sm'>Submit</button><button class='userSubmit subSubmit_tab btn btn-sm col-lg-1 col-md-2 col-sm-3 hidden-xs'>Submit</button>");
					$(".vert_tabs").tabs("refresh");

					$(".subSubmit_menu, .subSubmit_tab").click(function()
					{
						if (($(".subAns_menu")[0].value == solution) || ($(".subAns_tab")[1].value == solution))
						{
							$(".subArea").append("<p class='goodAns col-lg-12 col-md-12 col-sm-12'>CORRECT!!</p>");
							$(".vert_tabs").tabs("refresh");
						}
						else
						{
							$(".subArea").append("<p class='badAns col-lg-12 col-md-12 col-sm-12'>Incorrect, please try again.</p>");
							$(".vert_tabs").tabs("refresh");
						}
					});
				});

				$(".subHard").click(function()
				{
					valid = false;
					
					while (valid == false)
					{
						num1 = Math.round(999*Math.random())+1;
						num2 = Math.round(899*Math.random())+100;
						
						solution = num1 - num2;

						if (solution > 0)
						{
							valid = true;
						}
					}

					$(".subArea").html("<p class='numsentence col-lg-4 col-md-6 col-sm-9'>"+num1+" - "+num2+" = <input class='userInput subAns_menu hidden-lg hidden-md hidden-sm' type='number' min='0'/><input class='userInput subAns_tab hidden-xs' type='number' min='0'/></p><button class='userSubmit subSubmit_menu hidden-lg hidden-md hidden-sm'>Submit</button><button class='userSubmit subSubmit_tab btn btn-sm col-lg-1 col-md-2 col-sm-3 hidden-xs'>Submit</button>");
					$(".vert_tabs").tabs("refresh");

					$(".subSubmit_menu, .subSubmit_tab").click(function()
					{
						if (($(".subAns_menu")[0].value == solution) || ($(".subAns_tab")[1].value == solution))
						{
							$(".subArea").append("<p class='goodAns col-lg-12 col-md-12 col-sm-12'>CORRECT!!</p>");
							$(".vert_tabs").tabs("refresh");
						}
						else
						{
							$(".subArea").append("<p class='badAns col-lg-12 col-md-12 col-sm-12'>Incorrect, please try again.</p>");
							$(".vert_tabs").tabs("refresh");
						}
					});
				});

				$(".subSHard").click(function()
				{
					valid = false;
					
					while (valid == false)
					{
						num1 = Math.round(9999*Math.random())+1;
						num2 = Math.round(8999*Math.random())+1000;
						
						solution = num1 - num2;

						if (solution > 0)
						{
							valid = true;
						}
					}

					$(".subArea").html("<p class='numsentence col-lg-4 col-md-6 col-sm-9'>"+num1+" - "+num2+" = <input class='userInput subAns_menu hidden-lg hidden-md hidden-sm' type='number' min='0'/><input class='userInput subAns_tab hidden-xs' type='number' min='0'/></p><button class='userSubmit subSubmit_menu hidden-lg hidden-md hidden-sm'>Submit</button><button class='userSubmit subSubmit_tab btn btn-sm col-lg-1 col-md-2 col-sm-3 hidden-xs'>Submit</button>");
					$(".vert_tabs").tabs("refresh");

					$(".subSubmit_menu, .subSubmit_tab").click(function()
					{
						if (($(".subAns_menu")[0].value == solution) || ($(".subAns_tab")[1].value == solution))
						{
							$(".subArea").append("<p class='goodAns col-lg-12 col-md-12 col-sm-12'>CORRECT!!</p>");
							$(".vert_tabs").tabs("refresh");
						}
						else
						{
							$(".subArea").append("<p class='badAns col-lg-12 col-md-12 col-sm-12'>Incorrect, please try again.</p>");
							$(".vert_tabs").tabs("refresh");
						}
					});
				});

				$(".mulEasy").click(function()
				{
					num1 = Math.round(11*Math.random())+1;
					num2 = Math.round(11*Math.random())+1;
					
					solution = num1 * num2;

					$(".mulArea").html("<p class='numsentence col-lg-4 col-md-6 col-sm-9'>"+num1+" &times; "+num2+" = <input class='userInput mul mulAns_menu hidden-lg hidden-md hidden-sm' type='number' min='0'/><input class='userInput mul mulAns_tab hidden-xs' type='number' min='0'/></p><button class='userSubmit mulSubmit_menu hidden-lg hidden-md hidden-sm'>Submit</button><button class='userSubmit mulSubmit_tab btn btn-sm col-lg-1 col-md-2 col-sm-3 hidden-xs'>Submit</button>");
					$(".vert_tabs").tabs("refresh");

					$(".mulSubmit_menu, .mulSubmit_tab").click(function()
					{
						if (($(".mulAns_menu")[0].value == solution) || ($(".mulAns_tab")[1].value == solution))
						{
							$(".mulArea").append("<p class='goodAns col-lg-12 col-md-12 col-sm-12'>CORRECT!!</p>");
							$(".vert_tabs").tabs("refresh");
						}
						else
						{
							$(".mulArea").append("<p class='badAns col-lg-12 col-md-12 col-sm-12'>Incorrect, please try again.</p>");
							$(".vert_tabs").tabs("refresh");
						}
					});
				});

				$(".mulMedium").click(function()
				{
					num1 = Math.round(10*Math.random())+2;
					num2 = Math.round(89*Math.random())+11;
					
					solution = num1 * num2;

					$(".mulArea").html("<p class='numsentence col-lg-4 col-md-6 col-sm-9'>"+num1+" &times; "+num2+" = <input class='userInput mul mulAns_menu hidden-lg hidden-md hidden-sm' type='number' min='0'/><input class='userInput mul mulAns_tab hidden-xs' type='number' min='0'/></p><button class='userSubmit mulSubmit_menu hidden-lg hidden-md hidden-sm'>Submit</button><button class='userSubmit mulSubmit_tab btn btn-sm col-lg-1 col-md-2 col-sm-3 hidden-xs'>Submit</button>");
					$(".vert_tabs").tabs("refresh");

					$(".mulSubmit_menu, .mulSubmit_tab").click(function()
					{
						if (($(".mulAns_menu")[0].value == solution) || ($(".mulAns_tab")[1].value == solution))
						{
							$(".mulArea").append("<p class='goodAns col-lg-12 col-md-12 col-sm-12'>CORRECT!!</p>");
							$(".vert_tabs").tabs("refresh");
						}
						else
						{
							$(".mulArea").append("<p class='badAns col-lg-12 col-md-12 col-sm-12'>Incorrect, please try again.</p>");
							$(".vert_tabs").tabs("refresh");
						}
					});
				});

				$(".mulHard").click(function()
				{
					num1 = Math.round(89*Math.random())+11;
					num2 = Math.round(89*Math.random())+11;
					
					solution = num1 * num2;

					$(".mulArea").html("<p class='numsentence col-lg-4 col-md-6 col-sm-9'>"+num1+" &times; "+num2+" = <input class='userInput mul mulAns_menu hidden-lg hidden-md hidden-sm' type='number' min='0'/><input class='userInput mul mulAns_tab hidden-xs' type='number' min='0'/></p><button class='userSubmit mulSubmit_menu hidden-lg hidden-md hidden-sm'>Submit</button><button class='userSubmit mulSubmit_tab btn btn-sm col-lg-1 col-md-2 col-sm-3 hidden-xs'>Submit</button>");
					$(".vert_tabs").tabs("refresh");

					$(".mulSubmit_menu, .mulSubmit_tab").click(function()
					{
						if (($(".mulAns_menu")[0].value == solution) || ($(".mulAns_tab")[1].value == solution))
						{
							$(".mulArea").append("<p class='goodAns col-lg-12 col-md-12 col-sm-12'>CORRECT!!</p>");
							$(".vert_tabs").tabs("refresh");
						}
						else
						{
							$(".mulArea").append("<p class='badAns col-lg-12 col-md-12 col-sm-12'>Incorrect, please try again.</p>");
							$(".vert_tabs").tabs("refresh");
						}
					});
				});

				$(".mulSHard").click(function()
				{
					num1 = Math.round(989*Math.random())+11;
					num2 = Math.round(989*Math.random())+11;
					
					solution = num1 * num2;

					$(".mulArea").html("<p class='numsentence col-lg-4 col-md-6 col-sm-9'>"+num1+" &times; "+num2+" = <input class='userInput mul mulAns_menu hidden-lg hidden-md hidden-sm' type='number' min='0'/><input class='userInput mul mulAns_tab hidden-xs' type='number' min='0'/></p><button class='userSubmit mulSubmit_menu hidden-lg hidden-md hidden-sm'>Submit</button><button class='userSubmit mulSubmit_tab btn btn-sm col-lg-1 col-md-2 col-sm-3 hidden-xs'>Submit</button>");
					$(".vert_tabs").tabs("refresh");

					$(".mulSubmit_menu, .mulSubmit_tab").click(function()
					{
						if (($(".mulAns_menu")[0].value == solution) || ($(".mulAns_tab")[1].value == solution))
						{
							$(".mulArea").append("<p class='goodAns col-lg-12 col-md-12 col-sm-12'>CORRECT!!</p>");
							$(".vert_tabs").tabs("refresh");
						}
						else
						{
							$(".mulArea").append("<p class='badAns col-lg-12 col-md-12 col-sm-12'>Incorrect, please try again.</p>");
							$(".vert_tabs").tabs("refresh");
						}
					});
				});

				$(".divEasy").click(function()
				{
					valid = false;
					
					while (valid == false)
					{
						num1 = Math.round(143*Math.random())+1;
						num2 = Math.round(10*Math.random())+2;
						
						solution = num1 / num2;

						if ((num1 % num2 == 0) && (num1 != num2))
						{
							valid = true;
						}
					}

					$(".divArea").html("<p class='numsentence col-lg-4 col-md-6 col-sm-9'>"+num1+" &divide; "+num2+" = <input class='userInput divAns_menu hidden-lg hidden-md hidden-sm' type='number' min='0'/><input class='userInput divAns_tab hidden-xs' type='number' min='0'/></p><button class='userSubmit divSubmit_menu hidden-lg hidden-md hidden-sm'>Submit</button><button class='userSubmit divSubmit_tab btn btn-sm col-lg-1 col-md-2 col-sm-3 hidden-xs'>Submit</button>");
					$(".vert_tabs").tabs("refresh");

					$(".divSubmit_menu, .divSubmit_tab").click(function()
					{
						if (($(".divAns_menu")[0].value == solution) || ($(".divAns_tab")[1].value == solution))
						{
							$(".divArea").append("<p class='goodAns col-lg-12 col-md-12 col-sm-12'>CORRECT!!</p>");
							$(".vert_tabs").tabs("refresh");
						}
						else
						{
							$(".divArea").append("<p class='badAns col-lg-12 col-md-12 col-sm-12'>Incorrect, please try again.</p>");
							$(".vert_tabs").tabs("refresh");
						}
					});
				});

				$(".divMedium").click(function()
				{
					valid = false;
					
					while (valid == false)
					{
						num1 = Math.round(999*Math.random())+1;
						num2 = Math.round(10*Math.random())+2;
						
						solution = num1 / num2;

						if ((num1 % num2 == 0) && (num1 != num2))
						{
							valid = true;
						}
					}

					$(".divArea").html("<p class='numsentence col-lg-4 col-md-6 col-sm-9'>"+num1+" &divide; "+num2+" = <input class='userInput divAns_menu hidden-lg hidden-md hidden-sm' type='number' min='0'/><input class='userInput divAns_tab hidden-xs' type='number' min='0'/></p><button class='userSubmit divSubmit_menu hidden-lg hidden-md hidden-sm'>Submit</button><button class='userSubmit divSubmit_tab btn btn-sm col-lg-1 col-md-2 col-sm-3 hidden-xs'>Submit</button>");
					$(".vert_tabs").tabs("refresh");

					$(".divSubmit_menu, .divSubmit_tab").click(function()
					{
						if (($(".divAns_menu")[0].value == solution) || ($(".divAns_tab")[1].value == solution))
						{
							$(".divArea").append("<p class='goodAns col-lg-12 col-md-12 col-sm-12'>CORRECT!!</p>");
							$(".vert_tabs").tabs("refresh");
						}
						else
						{
							$(".divArea").append("<p class='badAns col-lg-12 col-md-12 col-sm-12'>Incorrect, please try again.</p>");
							$(".vert_tabs").tabs("refresh");
						}
					});
				});

				$(".divHard").click(function()
				{
					valid = false;
					
					while (valid == false)
					{
						num1 = Math.round(999*Math.random())+1;
						num2 = Math.round(89*Math.random())+10;
						
						solution = num1 / num2;

						if ((num1 % num2 == 0) && (num1 != num2))
						{
							valid = true;
						}
					}

					$(".divArea").html("<p class='numsentence col-lg-4 col-md-6 col-sm-9'>"+num1+" &divide; "+num2+" = <input class='userInput divAns_menu hidden-lg hidden-md hidden-sm' type='number' min='0'/><input class='userInput divAns_tab hidden-xs' type='number' min='0'/></p><button class='userSubmit divSubmit_menu hidden-lg hidden-md hidden-sm'>Submit</button><button class='userSubmit divSubmit_tab btn btn-sm col-lg-1 col-md-2 col-sm-3 hidden-xs'>Submit</button>");
					$(".vert_tabs").tabs("refresh");

					$(".divSubmit_menu, .divSubmit_tab").click(function()
					{
						if (($(".divAns_menu")[0].value == solution) || ($(".divAns_tab")[1].value == solution))
						{
							$(".divArea").append("<p class='goodAns col-lg-12 col-md-12 col-sm-12'>CORRECT!!</p>");
							$(".vert_tabs").tabs("refresh");
						}
						else
						{
							$(".divArea").append("<p class='badAns col-lg-12 col-md-12 col-sm-12'>Incorrect, please try again.</p>");
							$(".vert_tabs").tabs("refresh");
						}
					});
				});

				$(".divSHard").click(function()
				{
					valid = false;
					
					while (valid == false)
					{
						num1 = Math.round(9999*Math.random())+1;
						num2 = Math.round(989*Math.random())+10;
						
						solution = num1 / num2;

						if ((num1 % num2 == 0) && (num1 != num2))
						{
							valid = true;
						}
					}

					$(".divArea").html("<p class='numsentence col-lg-4 col-md-6 col-sm-9'>"+num1+" &divide; "+num2+" = <input class='userInput divAns_menu hidden-lg hidden-md hidden-sm' type='number' min='0'/><input class='userInput divAns_tab hidden-xs' type='number' min='0'/></p><button class='userSubmit divSubmit_menu hidden-lg hidden-md hidden-sm'>Submit</button><button class='userSubmit divSubmit_tab btn btn-sm col-lg-1 col-md-2 col-sm-3 hidden-xs'>Submit</button>");
					$(".vert_tabs").tabs("refresh");

					$(".divSubmit_menu, .divSubmit_tab").click(function()
					{
						if (($(".divAns_menu")[0].value == solution) || ($(".divAns_tab")[1].value == solution))
						{
							$(".divArea").append("<p class='goodAns col-lg-12 col-md-12 col-sm-12'>CORRECT!!</p>");
							$(".vert_tabs").tabs("refresh");
						}
						else
						{
							$(".divArea").append("<p class='badAns col-lg-12 col-md-12 col-sm-12'>Incorrect, please try again.</p>");
							$(".vert_tabs").tabs("refresh");
						}
					});
				});
			}

			function preRender ()
			{
				var pages = ["animation", "astropics", "boinc", "home", "links", "sepsis", "tictactoe"];
				
				for (i=0 ; i<pages.length ; i++)
				{
					var pre = document.createElement ("link");
					pre.rel = "prerender prefetch dns-prefetch";

					pre.href = "includes/"+pages[i]+".php";
					document.getElementsByTagName("head")[0].appendChild(pre);					
				}
			}

			function doAJAX ()
			{
				dest = ["sub", "mul", "div"];
				sections = [];

				for (j=0 ; j<dest.length ; j++)
				{
					sections[j] = new XMLHttpRequest();
					sections[j].open("GET", "includes/maths_"+dest[j]+".php", true);
					sections[j].send(null);
				}

				sections[0].onreadystatechange = function()
				{
					if ((sections[0].readyState === 4) && (sections[0].status === 200))
					{
						AJAXResp = sections[0].responseText;
						$("#"+dest[0]+"_menu, #"+dest[0]+"_tab").html(AJAXResp);
						init_maths();
					}
				}

				sections[1].onreadystatechange = function()
				{
					if ((sections[1].readyState === 4) && (sections[1].status === 200))
					{
						AJAXResp = sections[1].responseText;
						$("#"+dest[1]+"_menu, #"+dest[1]+"_tab").html(AJAXResp);
						init_maths();
					}
				}

				sections[2].onreadystatechange = function()
				{
					if ((sections[2].readyState === 4) && (sections[2].status === 200))
					{
						AJAXResp = sections[2].responseText;
						$("#"+dest[2]+"_menu, #"+dest[2]+"_tab").html(AJAXResp);
						$(".vert_tabs").tabs("refresh");
						init_maths();
					}
				}

				preRender();
			}
			document.addEventListener("DOMContentLoaded", init_maths, false);
		</script>
		<style type="text/css">
			.numsentence
			{
				font-size: 24px;
			}

			.userInput, .userSubmit
			{
				color: black;
			}

			.userInput
			{
				width: 90px;
				text-align: right;
			}

			.mul
			{
				width: 120px;
			}

			.goodAns
			{
				font-size: 30px;
				background: green;
			}

			.badAns
			{
				font-size: 18px;
				background: red;
			}

			@media only screen and (min-width: 480px)
			{
				.btn-sm
				{
					padding: 10px 16px !important;
					font-size: 18px !important;
					line-height: 1.33333333 !important;
					border-radius: 6px !important;		
				}
			}

			@media only screen and (min-width: 1200px)
			{
				.userSubmit
				{
					width: 10%;
				}
			}

			@media only screen and (max-width: 479px)
			{
				.numsentence
				{
					width: 100%;
				}
				.userSubmit
				{
					float: right;
					width: 50%;
				}
			}

			@media only screen and (min-width: 480px) and (max-width: 767px)
			{
				.numsentence
				{
					width: 75%;
				}
				.userSubmit
				{
					float: right;
					width: 20%;		
				}
			}

			@media only screen and (max-width: 767px)
			{
				.numsentence
				{
					float: left;
					padding: 0px;
				}
				.goodAns, .badAns
				{
					float: left;
					width: 100%;		
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
					include ("includes/maths.html");
				?>
			</div>
		</div>
	</body>

</html>