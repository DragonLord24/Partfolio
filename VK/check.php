<?php 
$conn = mysqli_connect("127.0.0.1", "root", "", "less26");

$select = "SELECT * FROM users WHERE phone='{$_POST['phone']}' AND password='{$_POST['password']}'";

$query = mysqli_query($conn, $select );

$result = $query->fetch_assoc();



if(mysqli_num_rows($query)>0){
	session_start();
	$_SESSION['id']=$result['id'];
	header("Location: account.php");
}
else{
	header("Location: index.php?error= нет такого пользователя или пароль введен не верно");
}	

?>
