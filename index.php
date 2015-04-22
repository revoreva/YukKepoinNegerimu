<?php
	
	require_once('TweetPHP.php');

	$TweetPHP = new TweetPHP(array(
	  'consumer_key'              => 'SFZNuAt7MfuomHlJCswaNiG14',
	  'consumer_secret'           => 'fIfXkuEYXnHN46QKsxAlt6Bw7HZq8gXWi866dSBFlMDWTCliX9',
	  'access_token'              => '98033802-GVX5xxnR5eemqODJKZq4etJ06DyHhfbNcjvvd2iOG',
	  'access_token_secret'       => 'ZkLklcIxJRjeRWTGnT3RLPmdeBHWsFogGIcPBYJaKLHOB',
	  'twitter_screen_name'       => 'revoreva'
	));

	echo $TweetPHP->get_tweet_list();

	echo __DIR__ . "<br>";
	echo __DIR__ . DIRECTORY_SEPARATOR . 'lib\tmhOAuth\cacert.pem<br>';

	

?>