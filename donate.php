<?php
	$connect = mysqli_connect("127.0.0.1", "root", "", "kickstarter");
	$select = "SELECT * FROM projects WHERE id =".$_GET["id"];
	$query =  mysqli_query($connect, $select);
	$project = $query->fetch_assoc();

	$project['donated'] = $project['donated'] + 10;

	$update1 = "UPDATE projects
	SET donated = {$project['donated']}
	WHERE id =".$_GET["id"];
	$query1 =  mysqli_query($connect, $update1);
	header('location:index.php');
?>	