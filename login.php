<?php

session_start();

include "config/database.php";

$message = "";

if(isset($_POST['login'])){

$email =
$_POST['email'];

$password =
md5(
$_POST['password']
);

$sql =
"SELECT * FROM taikhoan

WHERE email='$email'

AND mat_khau='$password'";

$result =
mysqli_query(
$conn,
$sql
);

if(
mysqli_num_rows(
$result
)>0
){

$user =
mysqli_fetch_assoc(
$result
);

$_SESSION['user'] =
$user;

header(
"Location:index.php"
);

}else{

$message =
"Sai tài khoản hoặc mật khẩu";

}

}

?>

<!DOCTYPE html>

<html>

<head>

<title>Đăng nhập</title>

<link rel="stylesheet"
href="assets/css/style.css">

</head>

<body>

<?php include "components/header.php"; ?>

<div class="login-box">

<h2>Đăng nhập</h2>

<p><?= $message ?></p>

<form method="POST">

<input
class="input"
type="email"
name="email"
placeholder="Email"
required>

<input
class="input"
type="password"
name="password"
placeholder="Mật khẩu"
required>

<button
name="login"
class="btn"
style="
width:100%;
margin-top:20px;
">

Đăng nhập

</button>

</form>

</div>

</body>

</html>