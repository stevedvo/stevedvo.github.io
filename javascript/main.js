var	xImg;
var	yImg;
var	ratioImg;

function resizeBackground ()
{
	xWind = $(window).width();
	yWind = $(window).height();
	ratioWind = xWind/yWind;

	xImg = $("#background").width();
	yImg = $("#background").height();
	newImgRatio = xImg/yImg;

	if (ratioImg > ratioWind)
	{
		$("#background").height(yWind);
		$("#background").width(yImg*ratioImg);
	}
	else
	{
		$("#background").width(xWind);
		$("#background").height(xImg/ratioImg);
	}

}

function init ()
{
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
	});

	$(".sections").css('display', 'none');
	$("#section_5").css('visibility', 'hidden');
	$("#section_5").css('display', 'block');
	$("#section_1").show("fold", 500);
	// $("#section_1").css('display', 'block');
	$(".temphdr").animate({backgroundColor: jQuery.Color({alpha: 0})}, 1000);

	$("#li_1").click(function()
	{
		$(".sections").css('display', 'none');
		$("#section_5").css('visibility', 'hidden');
		$("#section_5").css('display', 'block');
		// $(".sections").css('visibility', 'hidden');
		// $("#section_1").css('visibility', 'visible');
		$(".temphdr").css("background", "yellow");
		$("#section_1").show("fold", 500);
		// $("#section_1").css('display', 'block');
		$(".temphdr").animate({backgroundColor: jQuery.Color({alpha: 0})}, 1000);
		resizeBackground();
	});

	$("#li_2").click(function()
	{
		$(".sections").css('display', 'none');
		$("#section_5").css('visibility', 'hidden');
		$("#section_5").css('display', 'block');
		// $(".sections").css('visibility', 'hidden');
		// $("#section_2").css('visibility', 'visible');
		$(".temphdr").css("background", "yellow");
		$("#section_2").show("fold", 500);
		// $("#section_2").css('display', 'block');
		$(".temphdr").animate({backgroundColor: jQuery.Color({alpha: 0})}, 1000);
		resizeBackground();
	});

	$("#li_3").click(function()
	{
		$(".sections").css('display', 'none');
		$("#section_5").css('visibility', 'hidden');
		$("#section_5").css('display', 'block');
		// $(".sections").css('visibility', 'hidden');
		// $("#section_3").css('visibility', 'visible');
		$(".temphdr").css("background", "yellow");
		$("#section_3").show("fold", 500);
		// $("#section_3").css('display', 'block');
		$(".temphdr").animate({backgroundColor: jQuery.Color({alpha: 0})}, 1000);
		resizeBackground();
	});

	$("#li_4").click(function()
	{
		$(".sections").css('display', 'none');
		$("#section_5").css('visibility', 'hidden');
		$("#section_5").css('display', 'block');
		// $(".sections").css('visibility', 'hidden');
		// $("#section_4").css('visibility', 'visible');
		$(".temphdr").css("background", "yellow");
		$("#section_4").show("fold", 500);
		// $("#section_4").css('display', 'block');
		$(".temphdr").animate({backgroundColor: jQuery.Color({alpha: 0})}, 1000);
		resizeBackground();
	});

	$("#li_5").click(function()
	{
		$(".sections").css('display', 'none');
		// $(".sections").css('visibility', 'hidden');
		$("#section_5").css('visibility', 'visible');
		$(".temphdr").css("background", "yellow");
		$("#section_5").show("fold", 500);
		// $("#section_5").css('display', 'block');
		$(".temphdr").animate({backgroundColor: jQuery.Color({alpha: 0})}, 1000);
		resizeBackground();
	});

	xImg = $("#background").width();
	yImg = $("#background").height();
	ratioImg = xImg/yImg;

	resizeBackground();
}

document.addEventListener("DOMContentLoaded", init, false);
window.addEventListener("resize", resizeBackground, false);