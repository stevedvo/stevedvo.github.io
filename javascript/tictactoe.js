var playerX, playerO, iconX, iconO, A1, A2, A3, B1, B2, B3, C1, C2, C3, btn, turnX, leftX, leftO, msgs;

function hover()
{
	this.style.background = "aqua";
}

function unhover()
{
	this.style.background = "white";
}

function doTurn()
{
	playerX = document.getElementById("playerX").value;
	playerO = document.getElementById("playerO").value;
	
	if((A1.innerHTML === B1.innerHTML) && (A1.innerHTML === C1.innerHTML) && ((A1.innerHTML === "X") || (A1.innerHTML === "O")))
	{
		A1.style.background = "yellow";
		B1.style.background = "yellow";
		C1.style.background = "yellow";
		if (A1.innerHTML === "X")
		{
			alert(playerX+" wins the game!");
		}
		else
		{
			alert(playerO+" wins the game!");		
		}
	}
	
	if((A2.innerHTML === B2.innerHTML) && (A2.innerHTML === C2.innerHTML) && ((A2.innerHTML === "X") || (A2.innerHTML === "O")))
	{
		A2.style.background = "yellow";
		B2.style.background = "yellow";
		C2.style.background = "yellow";
		if (A2.innerHTML === "X")
		{
			alert(playerX+" wins the game!");
		}
		else
		{
			alert(playerO+" wins the game!");		
		}
	}
	
	if((A3.innerHTML === B3.innerHTML) && (A3.innerHTML === C3.innerHTML) && ((A3.innerHTML === "X") || (A3.innerHTML === "O")))
	{
		A3.style.background = "yellow";
		B3.style.background = "yellow";
		C3.style.background = "yellow";
		if (A3.innerHTML === "X")
		{
			alert(playerX+" wins the game!");
		}
		else
		{
			alert(playerO+" wins the game!");		
		}
	}
	
	if((A1.innerHTML === A2.innerHTML) && (A1.innerHTML === A3.innerHTML) && ((A1.innerHTML === "X") || (A1.innerHTML === "O")))
	{
		A1.style.background = "yellow";
		A2.style.background = "yellow";
		A3.style.background = "yellow";
		if (A1.innerHTML === "X")
		{
			alert(playerX+" wins the game!");
		}
		else
		{
			alert(playerO+" wins the game!");		
		}
	}
	
	if((B1.innerHTML === B2.innerHTML) && (B1.innerHTML === B3.innerHTML) && ((B1.innerHTML === "X") || (B1.innerHTML === "O")))
	{
		B1.style.background = "yellow";
		B2.style.background = "yellow";
		B3.style.background = "yellow";
		if (B1.innerHTML === "X")
		{
			alert(playerX+" wins the game!");
		}
		else
		{
			alert(playerO+" wins the game!");		
		}
	}
	
	if((C1.innerHTML === C2.innerHTML) && (C1.innerHTML === C3.innerHTML) && ((C1.innerHTML === "X") || (C1.innerHTML === "O")))
	{
		C1.style.background = "yellow";
		C2.style.background = "yellow";
		C3.style.background = "yellow";
		if (C1.innerHTML === "X")
		{
			alert(playerX+" wins the game!");
		}
		else
		{
			alert(playerO+" wins the game!");		
		}
	}
	
	if((A1.innerHTML === B2.innerHTML) && (A1.innerHTML === C3.innerHTML) && ((A1.innerHTML === "X") || (A1.innerHTML === "O")))
	{
		A1.style.background = "yellow";
		B2.style.background = "yellow";
		C3.style.background = "yellow";
		if (A1.innerHTML === "X")
		{
			alert(playerX+" wins the game!");
		}
		else
		{
			alert(playerO+" wins the game!");		
		}
	}
	
	if((A3.innerHTML === B2.innerHTML) && (A3.innerHTML === C1.innerHTML) && ((A3.innerHTML === "X") || (A3.innerHTML === "O")))
	{
		A3.style.background = "yellow";
		B2.style.background = "yellow";
		C1.style.background = "yellow";
		if (A3.innerHTML === "X")
		{
			alert(playerX+" wins the game!");
		}
		else
		{
			alert(playerO+" wins the game!");		
		}
	}
	
	if (turnX)
	{
//		iconX.style.visibility = "visible";
		iconX.style.background = "white";
		iconX.onmouseover = hover;
		iconX.onmouseout = unhover;
//		iconO.style.visibility = "hidden";
		iconO.style.background = "#AAA";
		iconO.onmouseover = null;
		iconO.onmouseout = null;
	}
	else
	{
//		iconO.style.visibility = "visible";
		iconO.style.background = "white";
		iconO.onmouseover = hover;
		iconO.onmouseout = unhover;
//		iconX.style.visibility = "hidden";
		iconX.style.background = "#AAA";	
		iconX.onmouseover = null;
		iconX.onmouseout = null;
	}
	
/*	if (leftX = 0)
	{
		iconX.style.visibility = "hidden";
	}
*/	
//	msgs.innerHTML += "Num X left: "+leftX+"<br/>Num O left: "+leftO+"<br/>";
//	msgs.innerHTML += "Player X is: "+playerX+"<br/>Player O is: "+playerO+"<br/>";
	
}

function newGame()
{
	leftX = 5;
	leftO = 4;
	turnX = true;
	
//	msgs.innerHTML += "Num X left: "+leftX+"<br/>Num O left: "+leftO+"<br/>";
	
	A1.innerHTML = "";
	A2.innerHTML = "";
	A3.innerHTML = "";
	B1.innerHTML = "";
	B2.innerHTML = "";
	B3.innerHTML = "";
	C1.innerHTML = "";
	C2.innerHTML = "";
	C3.innerHTML = "";
	
	A1.style.background = "white";
	A2.style.background = "white";
	A3.style.background = "white";
	B1.style.background = "white";
	B2.style.background = "white";
	B3.style.background = "white";
	C1.style.background = "white";
	C2.style.background = "white";
	C3.style.background = "white";
	
	doTurn();

}

function drag(event)
{
	if (turnX && event.target.innerHTML !== "X")
	{
		return false;
	}
	else if (!turnX && event.target.innerHTML === "X")
	{
		return false;
	}
	else
	{
		event.dataTransfer.setData("Text",event.target.innerHTML);
	}
}

function drop(event)
{
	if ((event.target.innerHTML === "X") || (event.target.innerHTML === "O"))
	{
		return false;
	}
	else
	{
		event.preventDefault();
		event.target.innerHTML = event.dataTransfer.getData("Text");
		if ((event.target.innerHTML === "X") || (event.target.innerHTML === "O"))
		{
			(event.target.innerHTML === "X") ? leftX-- : leftO--;
			turnX = !turnX;
			doTurn();
		}
	}
}

function allow(event)
{
	if ((event.target.innerHTML === "X") || (event.target.innerHTML === "O"))
	{
		return false;
	}
	else
	{
		event.preventDefault();
	}
}


function init()
{
	msgs = document.getElementById("msgs");
	iconX = document.getElementById("iconX");
	iconO = document.getElementById("iconO");
	
	A1 = document.getElementById("A1");
	A2 = document.getElementById("A2");
	A3 = document.getElementById("A3");
	B1 = document.getElementById("B1");
	B2 = document.getElementById("B2");
	B3 = document.getElementById("B3");
	C1 = document.getElementById("C1");
	C2 = document.getElementById("C2");
	C3 = document.getElementById("C3");

	newGame();
	
}

document.addEventListener("DOMContentLoaded",init,false);