

<!DOCTYPE html>


<?php

	$page = array(
		'page_id'	=> '0',
		'title' 	=> 'Home | PHP Practice',
	);

	$page_links = array(

		'home'		=> '/php-test/index.php',
		'about'		=> 'templates/public.page.1.php'

	);

?>


<html>
	<head>
		<title><?= $page['title'] ?></title>
	</head>
	<body>
		<h1><?= $page['title'] ?></h1>

		<?php foreach($page_links as $key => $link) { ?>

			<a href="<?= rawurldecode($link) ?>"><?= ucwords($key); ?></a>

		<?php } ?>