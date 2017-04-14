<!DOCTYPE html>
<?php

	$page = explode('/', $_SERVER['REQUEST_URI'])[2];

	switch ($page)
	{
		case '':
			$load = 'home.php';
			break;
		case 'home':
			$load = 'home.php';
			break;
		case 'animation':
			$load = 'animation.php';
			break;
		case 'astropics':
			$load = 'astropics.php';
			break;
		case 'boinc':
			$load = 'boinc.php';
			break;
		case 'links':
			$load = 'links.php';
			break;
		case 'maths':
			$load = 'maths.php';
			break;
		case 'sepsis':
			$load = 'sepsis.php';
			break;
		case 'tictactoe':
			$load = 'tictactoe.php';
			break;
		default:
			$load = 'includes/404.html';
	}

	include ($load);