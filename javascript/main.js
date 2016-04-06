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
	}

	if (imgWidth<xWidth)
	{
		$("#background").width(xWidth);
		$("#background").height(xWidth*imgHeight/imgWidth);
	}

	if (imgHeight<yHeight)
	{
		$("#background").height(yHeight);
		$("#background").width(yHeight*imgWidth/imgHeight);
	}

	console.log ("Window width is: "+xWidth+"; Img width is: "+imgWidth);
	console.log ("Window height is: "+yHeight+"; Img height is: "+imgHeight);

}

function init ()
{
	$(".navitem").mouseover(function()
	{
		$(this).css('background', 'yellow');
		$(this).css('color', 'black');
	});

	$(".navitem").mouseout(function()
	{
		$(this).animate({backgroundColor: jQuery.Color({alpha: 0}), color: "#337ab7"}, 250);
	});

	$(".navitem").click(function()
	{
		$(this).css('background', 'green');
		$(this).css('color', 'black');
	});

	resizeBackground();
}

document.addEventListener("DOMContentLoaded", init, false);
window.addEventListener("resize", resizeBackground, false);