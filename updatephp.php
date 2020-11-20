<?php
	$connect = mysqli_connect("127.0.0.1", "root", "", "kickstarter");
	$update= "UPDATE projects
	SET title={$_POST["title"]}, description={$_POST["description"]}, goal={$_POST["goal"]}, img={$_POST["img"]}
	WHERE id=".$_POST["id"]." ";
	$query = mysqli_query($connect, $update);
	header("location:account.php");
?>