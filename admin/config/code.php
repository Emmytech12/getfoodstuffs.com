<?php include '../../config/constants.php';?>

<?php
$action=$_POST['action'];

switch ($action){
	case 'password_reset_successful':
		$page=$action;
		require_once('../content/page-content.php');
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

	case 'get_edit_page_form':
		$page=$_POST['page'];
		$publish_id=$_POST['publish_id'];
		require_once('../content/form.php');
	break;

	case 'get_user_details':
		$page=$_POST['page'];
		$ids=$_POST['ids'];
		require_once('../content/user-details.php');
	break;

}
?>

