<?php

include "config/database.php";

$message = "";

if(isset($_POST['register'])){

    $hoten = $_POST['hoten'];

    $email = $_POST['email'];

    $password = md5($_POST['password']);

    $check =
    mysqli_query(
        $conn,
        "SELECT * FROM taikhoan
        WHERE email='$email'"
    );

    if(mysqli_num_rows($check)>0){

        $message =
        "Email đã tồn tại";

    }else{

        mysqli_query(
            $conn,

            "INSERT INTO taikhoan
            (
            ho_ten,
            email,
            mat_khau
            )

            VALUES
            (
            '$hoten',
            '$email',
            '$password'
            )"
        );

        $message =
        "Đăng ký thành công";

    }

}

?>

<!DOCTYPE html>
<html>

<head>

<title>Đăng ký</title>

<link rel="stylesheet"
href="assets/css/style.css">

</head>

<body>

<?php include "components/header.php"; ?>

<div class="login-box">

<h2>Đăng ký</h2>

<p><?= $message ?></p>

<form method="POST">

<input
class="input"
type="text"
name="hoten"
placeholder="Họ và tên"
required>

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
name="register"
class="btn"
style="
width:100%;
margin-top:20px;
">

Đăng ký

</button>

</form>

</div>

</body>

</html>