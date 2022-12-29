<?
session_start()
?>
<?
$conn = mysqli_connect("127.0.0.1", "root", "", "Blog");

$dir = "img/";
$destination = $dir.basename($_FILES['image']['name']);
$name = $_FILES['image']['tmp_name'];
$upload = move_uploaded_file($name, $destination);

$insert = "INSERT INTO media(img, text, users_id, title) VALUES ('{$destination}', '{$_POST['text']}', '{$_SESSION['id']}', '{$_POST['title']}')";
$result_upload = mysqli_query($conn, $insert);

header("Location: admin.php");
?>