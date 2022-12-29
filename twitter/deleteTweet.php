<?
	$connect = mysqli_connect("127.0.0.1", "root", "", "twitter");

	$delete = "DELETE FROM tweets WHERE id = {$_GET['id']}";
	$result_delete = mysqli_query($connect, $delete);

	ob_start();
    $new_url = 'index.php';
    header('Location: '.$new_url);
    ob_end_flush();
?>