<div class="card">

<img
src="assets/images/<?=
$product['hinh_anh']
?>"
alt=""
>

<div class="card-content">

<h3>

<?= $product['ten_san_pham'] ?>

</h3>

<p class="price">

<?= number_format(
$product['gia']
) ?>

đ

</p>

<a
href="
product-detail.php?id=<?=
$product['id']
?>
">

<button class="btn card-btn">

Xem chi tiết

</button>

</a>

</div>

</div>