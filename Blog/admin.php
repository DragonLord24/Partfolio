<?
session_start()
?>
<?
$conn = mysqli_connect("127.0.0.1", "root", "", "Blog");
$select = "SELECT * FROM media INNER JOIN users ON media.users_id = users.id WHERE users.id = {$_SESSION['id']}";
$query = mysqli_query($conn, $select);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
	<div class="col-12 px-3 mx-auto">
		<form action="index.php">
			<button>Назад</button>
		</form>
		<form action="upload.php" method="POST" enctype="multipart/form-data" class="mt-1">
			<input type="file" name="image" id="file-input" style="display: none;" multiple>
			<label for="file-input" class="bg-secondary border border-dark">Выберете фаил</label>
			<input type="text" name="title" placeholder="заголовок">
			<input type="text" name="text" placeholder="описание">
			<input type="" name="id" value="<? echo $_SESSION['id'];?>" disabled>
			<button>загрузить</button>
		</form>
		<div class="col-12 mt-4 row">
			<?
				for ($i=0; $i < $query->num_rows; $i++) { 
			    $result_upload = $query->fetch_assoc();
			?>
			<div class="col-3 bg-secondary border id-<?echo $_SESSION['id']?>">
				<h4><?echo $result_upload['title']?></h4>
				<img class="w-100" src="<?echo $result_upload['img']?>">
				<p style="word-wrap: break-word;"><?echo $result_upload['text']?></p>
				<p>user <?echo $result_upload['users_id']?></p>
			</div>
			<?
				}
			?>
		</div>
	</div>
</body>
</html>