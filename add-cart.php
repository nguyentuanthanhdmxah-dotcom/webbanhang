<?php

session_start();

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

if(
isset($_SESSION['cart'][$id])
){

$_SESSION['cart'][$id]['quantity']++;

}
else{

$_SESSION['cart'][$id] = [

'id' => $product['id'],

'name' => $product['ten_san_pham'],

'price' => $product['gia'],

'image' => $product['hinh_anh'],

'quantity' => 1

];

}

header(
"Location: cart.php"
);

?>