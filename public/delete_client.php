<?php require_once("../includes/db_connection.php"); ?> 
<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php require_once("../includes/validation_functions.php"); ?>
<?php confirm_logged_in(); ?>

<?php 
	$client = find_client_by_id($_GET["id"]);

	if(!$client) {
		//client ID was missing or invalid or
		//client couldn't be found in database
		redirect_to("manage_clients.php");
	}

	$id = $client["id"];	
	$query = "DELETE FROM clients WHERE id = {$id} LIMIT 1";
	$result = mysqli_query($connection, $query);

	if($result && mysqli_affected_rows($connection) == 1){
		// success
		//$_SESSION["message"] = "Client successfully deleted!";
		//redirect_to("manage_clients.php");
		$message = "Client successfully deleted!";
        echo "<script type='text/javascript'>alert('$message'); window.location.replace(\"manage_clients.php\");</script>"; 
	}else{
		//failure
		//$_SESSION["message"] = "Client deletion failed!";
		//redirect_to("manage_clients.php");
		$message = "Client deletion failed!";
        echo "<script type='text/javascript'>alert('$message'); window.location.replace(\"manage_clients.php\");</script>"; 
	}

?>