<?php

include "config/database.php";

$id = $_GET['id'];

$sql =
"SELECT * FROM sanpham
WHERE id = $id";

$result =
mysqli_query(
$conn,
$sql
);

$product =
mysqli_fetch_assoc(
$result
);

?>

<!DOCTYPE html>

<html>

<head>

<title>

<?= $product['ten_san_pham'] ?>

</title>

<link rel="stylesheet"
href="assets/css/style.css">

</head>

<body>

<?php include "components/header.php"; ?>

<div
class="container"
style="
padding-top:150px;
">

<div
style="
display:grid;
grid-template-columns:
1fr 1fr;
gap:50px;
"
>

<img
src="assets/images/<?=
$product['hinh_anh']
?>"
style="
width:100%;
border-radius:20px;
">

<div>

<h1>

<?= $product['ten_san_pham'] ?>

</h1>

<h2
style="
color:red;
margin:20px 0;
"
>

<?= number_format(
$product['gia']
) ?>

đ

</h2>

<p>

<?= $product['mo_ta'] ?>

</p>

<p
style="
margin-top:15px;
">

Hãng:

<?= $product['hang'] ?>

</p>

<a href="add-cart.php?id=<?= $product['id'] ?>">

<button
class="btn"
style="
margin-top:20px;
">

Thêm vào giỏ hàng

</button>

</a>

</div>

</div>

</div>

<?php include "components/footer.php"; ?>

</body>

</html>