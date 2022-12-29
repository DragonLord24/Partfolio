<?
    $connect = mysqli_connect("127.0.0.1", "root", "", "twitter");

    $insert_T = "INSERT INTO trends(title, number) VALUES ('{$_GET[titleText]}', '{$_GET[number]}')";

    $select_T = "SELECT * FROM trends";

	$result_insert_T = mysqli_query($connect, $insert_T);
    $results_T = mysqli_query($connect, $select_T);

    ob_start();
    $new_url = 'index.php';
    header('Location: '.$new_url);
    ob_end_flush();
?>