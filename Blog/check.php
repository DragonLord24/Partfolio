<?php 
$conn = mysqli_connect("127.0.0.1", "root", "", "Blog");

$select = "SELECT * FROM users WHERE login='{$_POST['login']}' AND password='{$_POST['password']}'";

$query = mysqli_query($conn, $select );

$result_check = $query->fetch_assoc();



if(mysqli_num_rows($query)>0){
	session_start();
	$_SESSION['id']=$result_check['id'];
	header("Location: index.php");
}
else{
	header("Location: login.php?error= нет такого пользователя или пароль введен не верно");
}	

?>
