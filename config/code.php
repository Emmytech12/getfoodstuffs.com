<?php require_once 'constants.php';?>

<?php
$action=$_POST['action'];
switch ($action){
	case 'get_form':
		$page=$_POST['page'];
		require_once '../content/form.php';
	break;

	case 'get_form_with_id':
		$page=$_POST['page'];
		$ids=$_POST['ids'];
		require_once '../content/form.php';
	break;
}?>
