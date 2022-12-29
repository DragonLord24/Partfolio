<?
	$connect = mysqli_connect("127.0.0.1", "root", "", "twitter");

    $insert = "INSERT INTO tweets(name, text, avatar, image) VALUES ('{$_GET[autor]}', '{$_GET[maintext]}', 'img/1.jpg', 'img/2.png')";
    
    $select = "SELECT * FROM tweets";

    $result_insert = mysqli_query($connect, $insert);
    $results = mysqli_query($connect, $select);

    ob_start();
    $new_url = 'index.php';
    header('Location: '.$new_url);
    ob_end_flush();
?>