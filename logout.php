<?php
include('conn.php');
include(ROOT_PATH.'/includes/public_function.php');
session_start();
unset($_SESSION);
session_destroy();
session_start();
$_SESSION['message'] = "Logged out successfully";
if(isset($_GET['ref'])):
	header('Location: '.$_GET['ref']);
	exit(0);
else:
	header('Location: '.BASE_URL);
	exit(0);
endif;
?>