<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="col-12">
	<div class="row">
		<div class="col-2 pt-3">
			<a href="" class="text-dark ml-3">Explore</a>
			<a href="" class="text-dark ml-3">Start a project</a>
		</div>
		<div class="col-8 text-center">
			<img src="logo.png" class="w-25">
			<p>#BlackLivesMatter</p>
		</div>
		<div class="col-2 text-left pt-3">
			<a href="account.php" >личный аккаунт</a>
			<a href="" > <i class="fa fa-search"></i> Search</a>
			<a href=""><img src="lk.png" class="rounded-circle" ></a>

		</div>
	</div>
</div>
<div class="col-6 mx-auto">
	<?php
		$connect = mysqli_connect("127.0.0.1", "root", "", "kickstarter");
		$select = "SELECT * FROM projects WHERE id={$_POST["id"]}";
		$query = mysqli_query($connect, $select);
		$project = $query->fetch_assoc();
	?>
	<form action="updatephp.php" method="POST">
		<input type="hidden" name="id">
		<input type="" name="title" class="col-12" value="<?php echo $project["title"]?>">
		<input type="" name="description" class="col-12" value="<?php echo $project["description"]?>">
		<input type="" name="img"  class="col-12" value="<?php echo $project["img"]?>">
		<input type="" name="goal" class="col-12" value="<?php echo $project["goal"]?>">
		<button>Редактировать</button>
	</form>
</div>
</body>
</html>