<?
	$connect = mysqli_connect("127.0.0.1", "root", "", "twitter");

	$delete = 'DELETE FROM contacts WHERE id = "9"';
	$query_delete = mysqli_query($connect, $delete);

?>