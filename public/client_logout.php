
<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/functions.php"); ?>

<?php
	//simple logout

	$_SESSION["client_id"] =  null;
	$_SESSION["username"] = null;
	$_SESSION["password"] = null;

	redirect_to("log_in.php");
?>