<?php
	session_start();
	
	$old_session = @$_SESSION['session'];

	if(empty($old_session)) {
		unset($_SESSION['session']);
		session_destroy();
		header('Location: ./index.php');
		exit;
	}
	else {
		//echo "Invalid Access";
	}
?>
