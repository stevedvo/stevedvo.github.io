var ctx, w, h, x, y, dx, dy;
 
function paint() 
{
	ctx.clearRect(0,0,w,h);
	ctx.fillStyle = linear1;
	ctx.fillRect(0, 0, w, h);

	ctx.beginPath();
	ctx.arc(x2,y2,r2,0, Math.PI * 2, true);
	ctx.fillStyle = linear2;
	ctx.fill();
	
	ctx.beginPath();
	ctx.arc(x1,y1,r1,0, Math.PI * 2, true);
	radial1 = ctx.createRadialGradient(x1, y1, 0, x1, y1, r1);
	radial1.addColorStop(0, "blue");
	radial1.addColorStop(1, "black");
	ctx.fillStyle = radial1;
	ctx.fill();
	
}

function position() 
{
	paint();
	if ( (x1+r1+dx1 > w) || (x1-r1+dx1 < 0) ) dx1 = -dx1;
	if ( (y1+r1+dy1 > h) || (y1-r1+dy1 < 0) ) dy1 = -dy1;
	x1 += dx1; y1 += dy1;  

	if ( (x2+r2+dx2 > w) || (x2-r2+dx2 < 0) ) dx2 = -dx2;
	if ( (y2+r2+dy2 > h) || (y2-r2+dy2 < 0) ) dy2 = -dy2;
	x2 += dx2; y2 += dy2;  

}

function init() 
{
	canvas = O("canvas");
	ctx = canvas.getContext("2d");
	$("#canvas").css('margin-left', '15px');	
	xWind = $(window).width();
	$("#canvas").width(xWind/2);
	$("#canvas").height(xWind/4);
	w = canvas.width; 
	h = canvas.height;
	
	x1=20; y1=20; r1=20;
	dx1=3; dy1=1;
	
	x2=30; y2=40; r2=30;
	dx2=2; dy2=3;
	
	linear1 = ctx.createLinearGradient(0, 0, w, 0);
	linear1.addColorStop(0.00, "red");
	linear1.addColorStop(0.17, "orange");
	linear1.addColorStop(0.33, "yellow");
	linear1.addColorStop(0.50, "green");
	linear1.addColorStop(0.67, "blue");
	linear1.addColorStop(0.83, "indigo");
	linear1.addColorStop(1.00, "violet");

	linear2 = ctx.createLinearGradient(0, h, w, 0);
	linear2.addColorStop(0.00, "black");
	linear2.addColorStop(1.00, "white");
	
	S(canvas).background = "purple";
	S(canvas).border="6px solid #09F";


	setInterval(position, 25);
	
}

document.addEventListener("DOMContentLoaded", init, false);