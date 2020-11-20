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
			<a href="index.php" >back</a>
			<a href="" > <i class="fa fa-search"></i> Search</a>
			<a href=""><img src="lk.png" class="rounded-circle" ></a>

		</div>
	</div>
</div>

<div class="col-4 mx-auto">
	<form action="insert.php" method="POST">
		<input type="" name="title" class="col-12" placeholder="Заголовок">
		<input type="" name="description" class="col-12" placeholder="Описание">
		<input type="" name="goal" class="col-12" placeholder="Необходимая сумма">
		<input type="" name="img" class="col-12" placeholder="Обложка">
		<input type="" name="city" class="col-12" placeholder="Город">
		<input type="" name="user" class="col-12" placeholder="user">
		<button class="col-12">Добавить</button>
	</form>
</div>
	<?php
		$connect = mysqli_connect("127.0.0.1", "root", "", "kickstarter");
		$select = "SELECT * FROM projects WHERE user = '".$_GET["user"]."'";
		$query = mysqli_query($connect, $select);
		
	?>
	<div class="col-8 mx-auto">
		<h2>My projects</h2>
		<?php
			for ($i=0; $i < $query->num_rows; $i++) { 
				$project = $query->fetch_assoc();
		?>
		<div>
			<h2 class="text-center">
				<?php
					echo $project["title"];
				?>
			</h2>
			<p class="text-center">
				<?php
					echo $project["description"];
				?>
			</p>
			<div class="d-flex col-10 mx-auto">
				<div class="col-10" style="background-image: url(<?php echo $project["img"];?>); background-size: cover; width: 50%; height: 50vh;"></div>
				<div class="col-2">
					<p>Собрано</p>
					<h2>
						<?php
							echo $project["donated"];
						?>
					</h2>
					<p>Необходимая сумма</p>
					<h4>
						<?php
							echo $project["goal"];
						?>
					</h4>
					<form action="update.php" method="POST">
						<input type="" name="id" value="<?php echo  $project["id"];?>">
						<button>Редактировать</button>
					</form>

					<form action="delete.php" method="POST">
						<input type="hidden" name="id"  value="<?php echo  $project["id"];?>">
						<button>Удалить</button>
					</form>
				</div>
			</div>
			

		</div>
		<?php
			}
		?>
	</div>
	
</body>
</html>