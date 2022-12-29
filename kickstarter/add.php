<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title></title>
	<?
		$connect = mysqli_connect("127.0.0.1", "root", "", "kickstarter");
	?>
</head>
<body>

<form action="insertProject.php" method="GET">
	<div class="col-12" style='overflow:hidden'>
		<div class="d-flex mt-2 flex-wrap">
			<!--карточка проекта-->
			<div class="col-4 p-3 text-dark mt-2" >
				<div class="col-12 bg-light rounded p-3" >
					<input type="file" name="img">
					<div class="rounded" style="background-image: url(); background-size: cover; background-position: center; height:500px">				
					</div>
					<div>
						<!--Заголовок проекта-->
						<input type="text" name="title" placeholder="Заголовок проекта">
						<!--Описание проекта-->
						<input type="text" name="text" placeholder="Описание проекта">
						<p> <span class="fw-bold"> Всего собрать: </span>  руб.</p>
						<input type="" name="goal">
						<input type="" class="input_don" style="display: none;" name="donated">
						<button class="btn btn-success">Создать проект</button>		
					</div>
				</div>
			</div>	
		</div>
	</div>
</form>

<script type="text/javascript">
	let input = document.querySelector(".input_don");
	  let donated = Math.floor(Math.random() * 100000);
	  input.value = donated;
</script>

</body>
</html>