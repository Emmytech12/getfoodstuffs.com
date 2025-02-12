<?php include '../../config/constants.php';?>

<?php
$action=$_POST['action'];

switch ($action){
	case 'password_reset_successful':
		$page=$action;
		require_once('../content/page-content.php');
	break;

	case 'otp_form':
		$email=$_POST['email'];
		$page=$action;
		require_once('../content/form.php');
	break;

	case 'get_page':
		$page=$_POST['page'];
		require_once('../content/page-content.php');
	break;
}
?>

