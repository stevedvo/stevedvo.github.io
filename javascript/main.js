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
	
	$("#filling_2y").hide();

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

	$(".left").mouseover(function()
	{
		$(this).css('font-weight', 'bold');
	});

	$(".left").mouseout(function()
	{
		$(this).css('font-weight', 'normal');
		$(this).animate({backgroundColor: jQuery.Color({alpha: 0}), color: "#white"}, 250);
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

	$("#burger_2y").click(function()
	{
		$("#filling_2y").slideToggle("slow");
	});

	$("#filling_2y").click(function()
	{
		$("#filling_2y").slideToggle("slow");
	});

	$(".sections").hide();
	$(".largest").css('visibility', 'hidden');
	$(".default").show("fold", 1000);
	$(".largest").css('display', 'block');
	$(".temphdr").animate({backgroundColor: jQuery.Color({alpha: 0})}, 1500);

	$(".li_1").click(function()
	{
		$(".sections").hide();
		$(".largest").css('visibility', 'hidden');
		$(".temphdr").css("background", "yellow");
		$("#section_1").show("fold", 1000);
		$(".largest").css('display', 'block');
		$(".temphdr").animate({backgroundColor: jQuery.Color({alpha: 0})}, 1500);		
	});

	$(".li_2").click(function()
	{
		$(".sections").hide();
		$(".largest").css('visibility', 'hidden');
		$(".temphdr").css("background", "yellow");
		$("#section_2").show("fold", 1000);
		$(".largest").css('display', 'block');
		$(".temphdr").animate({backgroundColor: jQuery.Color({alpha: 0})}, 1500);
	});

	$(".li_3").click(function()
	{
		$(".sections").hide();
		$(".largest").css('visibility', 'hidden');
		$(".temphdr").css("background", "yellow");
		$("#section_3").show("fold", 1000);
		$(".largest").css('display', 'block');
		$(".temphdr").animate({backgroundColor: jQuery.Color({alpha: 0})}, 1500);
	});

	$(".li_4").click(function()
	{
		$(".sections").hide();
		$(".largest").css('visibility', 'hidden');
		$(".temphdr").css("background", "yellow");
		$("#section_4").show("fold", 1000);
		$(".largest").css('display', 'block');
		$(".temphdr").animate({backgroundColor: jQuery.Color({alpha: 0})}, 1500);
	});

	$(".li_5").click(function()
	{
		$(".sections").hide();
		$(".largest").css('visibility', 'hidden');
		$(".temphdr").css("background", "yellow");
		$("#section_5").show("fold", 1000);
		$(".largest").css('display', 'block');
		$(".temphdr").animate({backgroundColor: jQuery.Color({alpha: 0})}, 1500);
	});

	$(".li_6").click(function()
	{
		$(".sections").hide();
		$(".largest").css('visibility', 'hidden');
		$(".temphdr").css("background", "yellow");
		$("#section_6").show("fold", 1000);
		$(".largest").css('display', 'block');
		$(".temphdr").animate({backgroundColor: jQuery.Color({alpha: 0})}, 1500);
	});

	$(".lrg").click(function()
	{
		$(".largest").css('visibility', 'visible');
	});

	$(".thumb").attr('title', 'Click to see larger version');

	$(".thumb").click(function()
	{
		lrgStr = $(this).attr('src').replace("thb", "lrg");
		lrgImg = window.open(lrgStr, "PopUp", "top=0,left=0,width="+window.screen.availWidth+",height="+window.screen.availHeight+",location=no");
	});

	$(".interests_acc").accordion(
	{
		collapsible: true,
		active: false,
		animate: false,
		heightStyle: "content"
	});

	$(".interests_acc").accordion().addClass("hidden-xs");

	$(".periods_acc").accordion(
	{
		collapsible: true,
		// active: false,
		animate: false,
		heightStyle: "content"
	});

	$(".periods_acc").accordion().addClass("hidden-xs");

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

	$("#boincsections").selectmenu(
	{
		change: function(event, data)
		{
			$(".boincsection").css('display', 'none');
			$("#"+$("#boincsections option:selected").val()).css('display', 'block');			
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

}

document.addEventListener("DOMContentLoaded", init, false);