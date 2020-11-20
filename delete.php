<?php
	$connect = mysqli_connect("127.0.0.1", "root", "", "kickstarter");
	$delete = "DELETE FROM projects
				WHERE id = ".$_POST["id"];
	$query = mysqli_query($connect, $delete);
	header("location: account.php");
?>