<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php (wp_title('') || "test"); ?></title>
</head>
<body>
	<header>
		<section id="header">
			section header
		</section>
		<?php wp_head(); ?>
		<?php wp_nav_menu(); ?>
	</header>
	<hr>