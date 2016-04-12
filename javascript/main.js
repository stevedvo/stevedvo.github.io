function resizeBackground ()
{
	var xWidth = $(window).width();
	var yHeight = $(window).height();

	var imgWidth = $("#background").width();
	var imgHeight = $("#background").height();

	
	if (imgWidth>xWidth && imgHeight>yHeight)
	{
		$("#background").width(xWidth);
		$("#background").height(xWidth*imgHeight/imgWidth);
		/*$("#wrapper").width(xWidth);
		$("#wrapper").height(xWidth*imgHeight/imgWidth);
	*/}

	if (imgWidth<xWidth)
	{
		$("#background").width(xWidth);
		$("#background").height(xWidth*imgHeight/imgWidth);
/*		$("#wrapper").width(xWidth);
		$("#wrapper").height(xWidth*imgHeight/imgWidth);
*/	}

	if (imgHeight<yHeight)
	{
		$("#background").height(yHeight);
		$("#background").width(yHeight*imgWidth/imgHeight);
/*		$("#wrapper").height(yHeight);
		$("#wrapper").width(yHeight*imgWidth/imgHeight);
*/	}

	console.log ("Window width is: "+xWidth+"; Img width is: "+imgWidth);
	console.log ("Window height is: "+yHeight+"; Img height is: "+imgHeight);

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

	$(".left").mouseout(function()
	{
		$(this).animate({backgroundColor: jQuery.Color({alpha: 0}), color: "#white"}, 250);
	});

	$(".navitem").click(function()
	{
		$(this).css('background', 'green');
		$(this).css('color', 'black');
	});

	$(".sections").css('display', 'none');
	$("#section_1").css('display', 'block');
	$(".temphdr").css("background", "yellow");
	$(".temphdr").animate({backgroundColor: jQuery.Color({alpha: 0})}, 2000);

	$("#li_1").click(function()
	{
		$(".sections").css('display', 'none');
		$(".temphdr").css("background", "yellow");
		$("#section_1").show("fold", 1000);
		$(".temphdr").animate({backgroundColor: jQuery.Color({alpha: 0})}, 2000);
	});

	$("#li_2").click(function()
	{
		$(".sections").css('display', 'none');
		$(".temphdr").css("background", "yellow");
		$("#section_2").show("fold", 1000);
		$(".temphdr").animate({backgroundColor: jQuery.Color({alpha: 0})}, 2000);
	});

	$("#li_3").click(function()
	{
		$(".sections").css('display', 'none');
		$(".temphdr").css("background", "yellow");
		$("#section_3").show("fold", 1000);
		$(".temphdr").animate({backgroundColor: jQuery.Color({alpha: 0})}, 2000);
	});

	$("#li_4").click(function()
	{
		$(".sections").css('display', 'none');
		$(".temphdr").css("background", "yellow");
		$("#section_4").show("fold", 1000);
		$(".temphdr").animate({backgroundColor: jQuery.Color({alpha: 0})}, 2000);
	});

	$("#li_5").click(function()
	{
		$(".sections").css('display', 'none');
		$(".temphdr").css("background", "yellow");
		$("#section_5").show("fold", 1000);
		$(".temphdr").animate({backgroundColor: jQuery.Color({alpha: 0})}, 2000);
	});

	resizeBackground();
}

document.addEventListener("DOMContentLoaded", init, false);
window.addEventListener("resize", resizeBackground, false);