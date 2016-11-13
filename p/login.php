<?php
session_start();

require "lib/twitteroauth/autoload.php";

use Abraham\TwitterOAuth\TwitterOAuth;

define('CONSUMER_KEY','qO2q9HVNixBYAwBRkZVx9878O');
define('CONSUMER_SECRET','SFyrnXknBSc2svYP3XPwennpkW9jndwtmSQQOirRamWsl9zWL8');
define('OAUTH_CALLBACK','http://prototyp.lucascarl.com/callback');

if (!isset($_SESSION['access_token'])) {

	$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET);

	$request_token = $connection->oauth('oauth/request_token', array('oauth_callback' => OAUTH_CALLBACK));
	$_SESSION['oauth_token'] = $request_token['oauth_token'];
	$_SESSION['oauth_token_secret'] = $request_token['oauth_token_secret'];

	$url = $connection->url('oauth/authorize', array('oauth_token' => $request_token['oauth_token']));
	header("Location: $url");

} else {

	$access_token = $_SESSION['access_token'];

	$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $access_token['oauth_token'], $access_token['oauth_token_secret']);

	$user = $connection->get("account/verify_credentials");
	$_SESSION['user_screen_name'] =  $user->screen_name;
	$_SESSION['user_name'] =  $user->name;


	echo "Welcome, $user->name !";
	header("Location: /home");
}

?>
