<?php

include "../config/database.php";

$product_count =
mysqli_num_rows(
mysqli_query(
$conn,
"SELECT * FROM sanpham"
)
);

$user_count =
mysqli_num_rows(
mysqli_query(
$conn,
"SELECT * FROM taikhoan"
)
);

?>

<h1>

Dashboard

</h1>

<h3>

Tổng sản phẩm:

<?= $product_count ?>

</h3>

<h3>

Tổng tài khoản:

<?= $user_count ?>

</h3>