<!DOCTYPE html>
<?php

	$page = explode('/', $_SERVER['REQUEST_URI'])[2];

	switch ($page)
	{
		case '':
			$load = 'includes/home.php';
			break;
		case 'home':
			$load = 'includes/home.php';
			break;
		case 'animation':
			$load = 'includes/animation.php';
			break;
		case 'astropics':
			$load = 'includes/astropics.php';
			break;
		case 'boinc':
			$load = 'includes/boinc.php';
			break;
		case 'links':
			$load = 'includes/links.php';
			break;
		case 'maths':
			$load = 'includes/maths.php';
			break;
		case 'sepsis':
			$load = 'includes/sepsis.php';
			break;
		case 'tictactoe':
			$load = 'includes/tictactoe.php';
			break;
		default:
			$load = 'includes/404.html';
	}

	include ($load);