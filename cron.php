<?php
//include the abraham's twitteroauth library
require_once ('twitteroauth.php');
require_once ('config.php');
//create an app and get the settings from dev.twitter.com
$consumerKey = ""; //add the key from your app
$consumerSecret = ""; //add the secret from your app
$accessToken = ""; //add the access token from your app
$accessSecret = ""; //add the access secret from your app
$message = "Why don't you try this one?";
$connection = new TwitterOAuth($consumerKey,$consumerSecret,$accessToken,$accessSecret);
$connection -> post('statuses/update', array('status' => $message ));
?>
