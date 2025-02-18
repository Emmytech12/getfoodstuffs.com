<?php
	error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED ^ E_WARNING);
	$website_auto_url =(isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	$thename='Get Food Stuffs'; 

	$website_url='http://localhost/projects/getfoodstuffs.com';
	//$website_url='http://192.168.94.51/projects/getfoodstuffs.com';
	//$website_url='https://getfoodstuffs.com';
	$code_version= date('Ymdhis');
?>


<script>
	//////////////////online constants///////////////////////
	//var website_url='https://getfoodstuffs.com';
	var website_url='http://localhost/projects/getfoodstuffs.com';
	//var website_url='http://192.168.94.51/projects/getfoodstuffs.com';

	var indexLocalUrl=website_url+'/config/code'; /// For Site local_url //
	var accountLocalUrl=website_url+'/account/config/code'; /// For Account local_url //
	var adminLocalUrl=website_url+'/admin/config/code'; /// For Admin Login local_url //
</script>

