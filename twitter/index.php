<!DOCTYPE html>
<html>
<head>
	<title>Главная</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta charset="utf-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<?php
	  //1 это айпи, 2 имя, 3 пароль, 4 название базы данных.
    $connect = mysqli_connect("127.0.0.1", "root", "", "twitter");
    if ($connect== false) {
    	  echo "не подключено";
    } else{
    	  echo "подключено";
    }
    $text_query = 'SELECT * FROM tweets';
    $query = mysqli_query($connect, $text_query);

    if ($query==false) {
    	 echo " Запрос не работает";
    }else{
    	echo " запрос работает";
    }

	?>
</head>
<body class="">												
	<div class="main mt-3">
		<div class="container">
			<div class="row">
				<!-- левая колонка --> 
				<div class="col-3">
					<div class="mt-3">
						<h4 class="fw-normal">Главная</h4>
					</div>
					<div class="mt-4">
						<h4 class="fw-normal">Обзор</h4>
					</div>
					<div class="mt-4">
						<h4 class="fw-normal">Уведомления</h4>
					</div>
					<div class="mt-4">
						<h4 class="fw-normal">Сообщения</h4>
					</div>
					<div class="mt-4">
						<h4 class="fw-normal">Закладки</h4>
					</div>
					<div class="mt-4">
						<h4 class="fw-normal">Списки</h4>
					</div>
					<div class="mt-4">
						<h4 class="fw-normal">Профиль</h4>
					</div>
					<div class="mt-4">
						<button class="rounded-pill btn btn-primary w-75 py-2">Твитнуть</button>
					</div>
					
				</div>

				<!-- Средняя колонка -->
				<div class="col-6 border-end border-start">
					<!--Добавить твит форма-->
					<div class="pt-2 bg-white">						
						<div class="row">							
							<div class="col-1">
								<img src="img/1.jpg" class="rounded-circle">
							</div>							
							<div class="col-10">
								<div class="col-12">
									<form action="insert.php" method="GET">
									<input value="img/1.jpg" name="avatar" hidden></input>
									<input type="text" name="autor" class="form-control " placeholder="Автор">
									<textarea name="maintext" class="form-control mt-2" placeholder="Что нового?"></textarea>
									<button type="submit" class="btn btn-primary mt-2">Твитнуть</button>
									</form>
								</div>								
							</div>
						</div>				
							
					</div>

					<!--Вывод постов тут-->
					<div style="margin-top: 10px;" class="row border">
						<div class="col-2">
							<img class="rounded-circle" src="<?php echo $_GET['avatar']; ?>" >
						</div>
						<div class="col-10">
							<h5><?php echo $_GET['autor'] ?></h5>
							<?php echo $_GET['maintext'] ?>
						</div>
					</div>

					<?
					for ($i=0; $i < 1 + $result["id"]; $i++) { 
    				$result = $query->fetch_assoc();
					?>

					<div style="margin-top: 10px;" class="row border">
						<div class="col-2">
							<img class="rounded-circle w-100" src="<?php echo $result['avatar']; ?>" >
						</div>
						<div class="col-7">
							<h5><?php echo $result['name']; ?></h5>
							<?php echo $result['text']; ?>
							<img class="w-100" src="<?php echo $result['image']; ?>" >
						</div>
						<div class="row col-6">
							<button class="col-12 btn btn_update_open btn-info">Редактировать</button>
							<form action="update.php" class="change" style="display: none;" method="GET">
								<input style="display: none;" type="text" name="id" value="<? echo $result['id']; ?>">
								<input type="text" name="name" placeholder="заголовок">
								<input type="text" name="text" placeholder="текст">
								<input type="text" name="image" placeholder="фото">
								<button class="col-12 btn btn_update btn-success">Принять изменения</button>
							</form>
							<form action="deleteTweet.php" method="GET">
								<input style="display: none;" type="text" name="id" value="<? echo $result['id']; 	?>">
								<button class="btn btn-danger mt-2">Удалить</button>
							</form>
						</div>
					</div>
					<?
					}
					?>
				</div>

				

				<!--Правая колонка-->
				<div class="col-3">
				<h5>Актуальные темы для вас</h5>
				<div class="pt-2 bg-white">															
						<div class="col-10">
							<div class="col-12">
								<form action="insert2.php" method="GET">
									<input type="number" name="number">
								<textarea name="titleText" class="form-control mt-2" placeholder="Актуальные темы"></textarea>
								<button type="submit" class="btn btn-primary mt-2">Твитнуть</button>
								</form>
							</div>								
						</div>
					</div>

					<?
						for ($i=0; $i < 4; $i++) {
							$result_T = $query->fetch_assoc();
					?>
					<div>
						<h6><? echo $result_T['title'];?></h6>
						<p><? echo $result_T['number'];?></p>
					</div>
					
					<?
						}
					?>

				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		let btn_update_open = document.querySelectorAll(".btn_update_open");
		let btn_update = document.querySelectorAll(".btn_update");
		let change = document.querySelectorAll(".change");

		for(let i=0; i<change.length; i++){
			btn_update_open[i].onclick = function() {
				change[i].style.display = "block";
				btn_update_open[i].style.display = "none";
			}
		}
	</script>
</body>
</html>