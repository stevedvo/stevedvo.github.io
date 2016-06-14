function init_maths ()
{
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

document.addEventListener("DOMContentLoaded", init_maths, false);