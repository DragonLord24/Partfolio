<?
$connect = mysqli_connect("127.0.0.1", "root", "", "twitter");

	$delete_T = "DELETE FROM trends WHERE id = {$_GET['id']}";
	$result_delete_T = mysqli_query($connect, $delete_T);

	ob_start();
    $new_url = 'index.php';
    header('Location: '.$new_url);
    ob_end_flush();

?>