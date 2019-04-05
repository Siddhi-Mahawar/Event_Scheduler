<?php
	include_once 'src/Google_Client.php';
	include_once 'src/contrib/Google_Oauth2Service.php';
	
	// Edit Following 3 Lines
	$clientId = '1059580935164-7pimrs76tnau82j7gfb2s9gu69rufgbh.apps.googleusercontent.com'; //Application client ID
	$clientSecret = 'kbBmX1Lw3a-PtoMcNDtBEjXl'; //Application client secret
	$redirectURL = 'http://localhost/Event_Scheduler/'; //Application Callback URL
	
	$gClient = new Google_Client();
	$gClient->setApplicationName('eventscheduler');
	$gClient->setClientId($clientId);
	$gClient->setClientSecret($clientSecret);
	$gClient->setRedirectUri($redirectURL);
	$google_oauthV2 = new Google_Oauth2Service($gClient);
?>