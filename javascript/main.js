function init ()
{

	// $("#burger").hide();
	$("#burger").css('color', '#337ab7');
	$("#filling").hide();
	
	// $("#burger_2y").hide();
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

	$("#burger_2y").click(function()
	{
		$("#filling_2y").slideToggle("slow");
	});

	$(".sections").hide();
	$(".largest").css('visibility', 'hidden');
	$(".default").show("fold", 1000);
	$(".largest").css('display', 'block');
	// $("#section_1").css('display', 'block');
	$(".temphdr").animate({backgroundColor: jQuery.Color({alpha: 0})}, 1500);

	$(".li_1").click(function()
	{
		$(".sections").hide();
		$(".largest").css('visibility', 'hidden');
		$(".temphdr").css("background", "yellow");
		$("#section_1").show("fold", 1000);
		$(".largest").css('display', 'block');
		// $(".sections").css('visibility', 'hidden');
		// $("#section_1").css('visibility', 'visible');
		// $("#section_1").css('display', 'block');
		$(".temphdr").animate({backgroundColor: jQuery.Color({alpha: 0})}, 1500);
		
	});

	$(".li_2").click(function()
	{
		$(".sections").hide();
		$(".largest").css('visibility', 'hidden');
		$(".temphdr").css("background", "yellow");
		$("#section_2").show("fold", 1000);
		$(".largest").css('display', 'block');
		// $(".sections").css('visibility', 'hidden');
		// $("#section_2").css('visibility', 'visible');
		// $("#section_2").css('display', 'block');
		$(".temphdr").animate({backgroundColor: jQuery.Color({alpha: 0})}, 1500);
		
	});

	$(".li_3").click(function()
	{
		$(".sections").hide();
		$(".largest").css('visibility', 'hidden');
		$(".temphdr").css("background", "yellow");
		$("#section_3").show("fold", 1000);
		$(".largest").css('display', 'block');
		// $(".sections").css('visibility', 'hidden');
		// $("#section_3").css('visibility', 'visible');
		// $("#section_3").css('display', 'block');
		$(".temphdr").animate({backgroundColor: jQuery.Color({alpha: 0})}, 1500);
		
	});

	$(".li_4").click(function()
	{
		$(".sections").hide();
		$(".largest").css('visibility', 'hidden');
		$(".temphdr").css("background", "yellow");
		$("#section_4").show("fold", 1000);
		$(".largest").css('display', 'block');
		// $(".sections").css('visibility', 'hidden');
		// $("#section_4").css('visibility', 'visible');
		// $("#section_4").css('display', 'block');
		$(".temphdr").animate({backgroundColor: jQuery.Color({alpha: 0})}, 1500);
		
	});

	$(".li_5").click(function()
	{
		$(".sections").hide();
		$(".largest").css('visibility', 'hidden');
		$(".temphdr").css("background", "yellow");
		$("#section_5").show("fold", 1000);
		$(".largest").css('display', 'block');
		// $(".sections").css('visibility', 'hidden');
		// $("#section_5").css('visibility', 'visible');
		// $("#section_5").css('display', 'block');
		$(".temphdr").animate({backgroundColor: jQuery.Color({alpha: 0})}, 1500);
		
	});

	$(".li_6").click(function()
	{
		$(".sections").hide();
		$(".largest").css('visibility', 'hidden');
		$(".temphdr").css("background", "yellow");
		$("#section_6").show("fold", 1000);
		$(".largest").css('display', 'block');
		// $(".sections").css('visibility', 'hidden');
		// $("#section_6").css('visibility', 'visible');
		// $("#section_6").css('display', 'block');
		$(".temphdr").animate({backgroundColor: jQuery.Color({alpha: 0})}, 1500);
		
	});

	$(".lrg").click(function()
	{
		$(".largest").css('visibility', 'visible');
	});

	$(".sections").width($(".largest").width());

	// xImg = $("#gradfill").width();
	// yImg = $("#gradfill").height();
	// ratioImg = xImg/yImg;

	

	$(".thumb").attr('title', 'Click to see larger version');

	$(".thumb").click(function()
	{
		lrgStr = $(this).attr('src').replace("thb", "lrg");
		lrgImg = window.open(lrgStr, "PopUp", "top=0,left=0,width="+window.screen.availWidth+",height="+window.screen.availHeight+",location=no");
	});
}

document.addEventListener("DOMContentLoaded", init, false);