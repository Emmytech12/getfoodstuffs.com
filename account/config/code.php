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

	case 'get_form':
		$page=$_POST['page'];
		require_once('../content/form.php');
	break;

	case 'get_form_with_id':
		$page=$_POST['page'];
		$ids=$_POST['ids'];
		require_once('../content/form.php');
	break;

	case 'get_content':
		$page = trim($_POST['content']);
		require_once('../content/page-content.php');
	break;
}
?>

