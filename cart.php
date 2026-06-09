<?php

session_start();

?>

<!DOCTYPE html>

<html>

<head>

<title>Giỏ hàng</title>

<link rel="stylesheet"
href="assets/css/style.css">

</head>

<body>

<?php include "components/header.php"; ?>

<div class="container"
style="padding-top:150px;">

<h1>

Giỏ hàng

</h1>

<table
border="1"
width="100%"
cellpadding="15">

<tr>

<th>Ảnh</th>

<th>Tên</th>

<th>Giá</th>

<th>Số lượng</th>

<th>Tổng</th>

<th>Xóa</th>

</tr>

<?php

$total = 0;

if(
isset($_SESSION['cart'])
){

foreach(
$_SESSION['cart']
as $item
){

$subtotal =
$item['price']
*
$item['quantity'];

$total +=
$subtotal;

?>

<tr>

<td>

<img
src="assets/images/<?=
$item['image']
?>"
width="80">

</td>

<td>

<?= $item['name'] ?>

</td>

<td>

<?= number_format(
$item['price']
) ?>

đ

</td>

<td>

<?= $item['quantity'] ?>

</td>

<td>

<?= number_format(
$subtotal
) ?>

đ

</td>

<td>

<a
href="
remove-cart.php?id=<?=
$item['id']
?>
">

Xóa

</a>

</td>

</tr>

<?php

}

}

?>

</table>

<h2
style="
margin-top:20px;
">

Tổng tiền:

<?= number_format(
$total
) ?>

đ

</h2>

</div>

<?php include "components/footer.php"; ?>

</body>

</html>