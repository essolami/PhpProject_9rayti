<?php
session_start();
if (!isset($_SESSION['langa'])) {
	$_SESSION['langa']="ar";
}
elseif (isset($_GET['langa']) && $_SESSION['langa']!= $_GET['langa'] && !empty($_GET['langa'])) {
	if ($_GET['langa']=="ar") {
		$_SESSION['langa']="ar";
		
	}
	else{
		$_SESSION['langa']="en";
	}
}
include "langage/".$_SESSION['langa'].".php";
?>