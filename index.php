<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php
	$connect = mysqli_connect("127.0.0.1", "root", "", "kickstarter")	
?>	
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
<div class="col-10 mx-auto">
	<h4 class="">Explore <span class="text-success font-weight-bold"><!--Вывести количество проектов--></span></h4>
	<p></p>
	<div class="row mt-5">

		<!--Вывести сами проекты здесь-->
		<?php
			$select = "SELECT * FROM projects";
			$query = mysqli_query($connect, $select);
			for ($i=0; $i < $query->num_rows; $i++) { 
				$project = $query->fetch_assoc();
			
		?>
		<div class="col-4">
			<h3>
				<?php
					echo $project["title"];
				?>
			</h3>
			<div style="background-image: url(<?php echo $project["img"];?>);background-size: cover; background-position:center; height: 450px">
			</div>
			<p>
				<?php
					echo $project["user"];
				?>
			</p>
			<p>
				<?php
					echo $project["description"];
				?>
			</p>
			<h3>
				<?php
					echo $project["donated"];
				?>
			</h3>
			<p>
				<?php
					echo $project["goal"];
				?>
			</p>
			<p>
				<?php
					echo $project["place"];
				?>
			</p>
			<form action="donate.php" action="GET">
				<input type="hidden" name="id" value="<?php echo $project["id"]?>">
				<button class="donate">donate</button>
			</form>
		</div>

		<?php	
			}
		?>
	</div>
</div>
</body>
</html>