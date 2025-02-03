<?php
	error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED ^ E_WARNING);
	$website_auto_url =(isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	$thename='Get Food Stuffs'; 

	$website_url='http://localhost/projects/getfoodstuffs.com';
	//$website_url='http://192.168.179.51/projects/getfoodstuffs.com';
	//$website_url='https://getfoodstuffs.com';
	$code_version= date('Ymdhis');
?>


<script>
	//////////////////online constants///////////////////////
	//var website_url='https://getfoodstuffs.com';
	var website_url='http://localhost/projects/getfoodstuffs.com';
	//var website_url='http://192.168.179.51/projects/getfoodstuffs.com';
</script>

