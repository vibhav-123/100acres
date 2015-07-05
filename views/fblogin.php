<?php
	define('FACEBOOK_SDK_V4_SRC_DIR', '/home/vibhav/Downloads/fb-php-sdk-v4/src/Facebook/');
	require __DIR__ . '/home/vibhav/Downloads/facebook-php-sdk-v4/autoload.php';
	use Facebook\FacebookSession;
	// add other classes you plan to use, e.g.:
	// use Facebook\FacebookRequest;
	// use Facebook\GraphUser;
	// use Facebook\FacebookRequestException;
	FacebookSession::setDefaultApplication('YOUR_APP_ID', 'YOUR_APP_SECRET');
?>	