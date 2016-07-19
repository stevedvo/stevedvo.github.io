function getTime()
{
	now = new Date();
	$("#datetime").html(now.toUTCString());
	blah = setTimeout(function(){getTime()}, 1000);
}

function init ()
{
	getTime();

	$("#burger").css('color', '#337ab7');
	$("#filling").hide();
	
	$(".navitem").mouseover(function()
	{
		$(this).css('background', 'yellow');
		$(this).css('color', 'black');
		$(this).css('text-decoration', 'none');
	});

	$(".top").mouseout(function()
	{
		$(this).animate({backgroundColor: jQuery.Color({alpha: 0}), color: "#337ab7"}, 250);
	});

	$(".navitem").click(function()
	{
		$(this).css('background', 'green');
		$(this).css('color', 'black');
		$(this).animate({backgroundColor: jQuery.Color({alpha: 0}), color: "#white"}, 750);
	});

	$("#burger").click(function()
	{
		$("#filling").slideToggle("slow");
	});

	$("#filling").click(function()
	{
		$("#filling").slideToggle("slow");
	});

	$(".thumb").attr('title', 'Click to see larger version');

	$(".thumb").click(function()
	{
		lrgStr = $(this).attr('src').replace("thb", "lrg");
		lrgImg = window.open(lrgStr, "PopUp", "top=0,left=0,width="+window.screen.availWidth+",height="+window.screen.availHeight+",location=no");
	});

	$("#viewinterest").selectmenu(
	{
		change: function(event, data)
		{
			$(".interest").css('display', 'none');
			$("#"+$("#viewinterest option:selected").val()).css('display', 'block');			
		}
	});

	$("#viewperiod").selectmenu(
	{
		change: function(event, data)
		{
			$(".period").css('display', 'none');
			$("#"+$("#viewperiod option:selected").val()).css('display', 'block');			
		}
	});

	$("#aboutsections").selectmenu(
	{
		change: function(event, data)
		{
			$(".aboutsection").css('display', 'none');
			$("#"+$("#aboutsections option:selected").val()).css('display', 'block');			
		}
	});

	$("#astrosections").selectmenu(
	{
		change: function(event, data)
		{
			$(".astrosection").css('display', 'none');
			$("#"+$("#astrosections option:selected").val()).css('display', 'block');			
		}
	});

	$("#boincsections").selectmenu(
	{
		change: function(event, data)
		{
			$(".boincsection").css('display', 'none');
			$("#"+$("#boincsections option:selected").val()).css('display', 'block');			
		}
	});

	$("#sepsissections").selectmenu(
	{
		change: function(event, data)
		{
			$(".sepsissection").css('display', 'none');
			$("#"+$("#sepsissections option:selected").val()).css('display', 'block');			
		}
	});

	$("#mathssections").selectmenu(
	{
		change: function(event, data)
		{
			$(".mathssection").css('display', 'none');
			$("#"+$("#mathssections option:selected").val()).css('display', 'block');			
		}
	});

    $(".vert_tabs").tabs(
    {
    	heightStyle: "auto"
    });
	$(".vert_tabs").tabs().addClass("ui-tabs-vertical ui-helper-clearfix");
    $(".vert_tabs li").removeClass("ui-corner-top").addClass("ui-corner-left");

    $(".ui-tabs-anchor").mouseover(function()
    {
    	$(this).css({'color': 'black', 'background': 'yellow'});
    });

    $(".ui-tabs-anchor").mouseout(function()
    {
    	$(this).animate({backgroundColor: jQuery.Color({alpha: 0}), color: "#white"}, 250);
    });

    $(".ui-tabs-anchor").click(function()
	{
		$(this).css({'color': 'black', 'background': 'green'});
		$(this).animate({backgroundColor: jQuery.Color({alpha: 0}), color: "#white"}, 750);
	});

    $(window).scroll(function()
    {
    	$(".vert_tabs").tabs(
    	{
    		heightStyle: "auto"
    	});	
    });

}

document.addEventListener("DOMContentLoaded", init, false);