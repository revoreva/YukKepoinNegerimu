<?php
	require 'ctwitter_stream.php';

	$t = new ctwitter_stream();

	$t->login('revoreva', 'aremag2c2');

	$t->start(array('facebook', 'fbook', 'fb'));
?>