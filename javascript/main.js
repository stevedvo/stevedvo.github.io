function resizeBackground ()
{
	var xWidth = $(window).width();
	var yHeight = $(window).height();

	if (yHeight > xWidth)
	{
		$("#background").height(yHeight);
	}
	else
	{
		$("#background").width(xWidth);			
	}

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