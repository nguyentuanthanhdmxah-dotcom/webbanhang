<?php
session_start();
?>

<header>

<div class="container navbar">

<div class="logo">

PHONE STORE

</div>

<div class="search-box">

<input
type="text"
placeholder="Tìm điện thoại..."
>

</div>

<nav class="menu">

<a href="index.php">
Trang chủ
</a>

<a href="products.php">
Sản phẩm
</a>

<a href="cart.php">
Giỏ hàng
</a>

<a href="login.php">
Đăng nhập
</a>

<a href="logout.php">

Đăng xuất

</a>

<?php

if(isset($_SESSION['user'])){

echo
"Xin chào, "
.
$_SESSION['user']['ho_ten'];

}

?>
</nav>

</div>

</header>