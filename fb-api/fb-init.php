<?php
require './fb-api/vendor/autoload.php';

$fb = new Facebook\Facebook([
	'app_id' => '458592488106980',
	'app_secret' => 'b01a807caaae020df26b35c173b58ab1',
	'default_graph_version' => 'v2.7'
]);

$helper = $fb->getRedirectLoginHelper();
$loginUrl = $helper->getLoginUrl("http://localhost/mag/");

//print_r($loginUrl);

try{
	$accessToken = $helper->getAccessToken();
	if (isset($accessToken)) {
		$_SESSION['access_token'] = (string)$accessToken;
		header("Location:../index.php");
	}
}catch(Exception $e){
	echo $e->getTraceAsString();
}

if (isset($_SESSION['access_token'])) {
	try {
		$fb->setDefaultAccessToken($_SESSION['access_token']);
		$res = $fb->get('/me?locale=en_UG&fields=name');
		$user = $res->getGraphUser();
		$_SESSION['userName']=$user->getField('name');
	} catch (Exception $e) {
		echo $e->getTraceAsString();
	}
}

?>