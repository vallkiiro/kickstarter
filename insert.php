<?php  
	$connect = mysqli_connect("127.0.0.1", "root", "", "kickstarter");
	$insert = "INSERT INTO projects (title, description, goal, img, user, place, donated)
	VALUES ('{$_POST["title"]}', '{$_POST["description"]}', '{$_POST["goal"]}', '{$_POST["img"]}', '{$_POST["user"]}', '{$_POST["place"]}', 0)";
	$query = mysqli_query($connect, $insert);
	header("location: account.php?user=".$_POST["user"]);
?>