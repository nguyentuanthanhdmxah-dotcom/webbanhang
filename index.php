<?php
include "config/database.php";
?>

<!DOCTYPE html>
<html lang="vi">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>PHONE STORE</title>

    <link rel="stylesheet"
        href="assets/css/style.css">

</head>

<body>

    <?php include "components/header.php"; ?>

    <button id="topBtn">
↑
</button>

<script>

document
.getElementById("topBtn")
.onclick=function(){

window.scrollTo({

top:0,

behavior:"smooth"

});

}

</script>

    <!-- Banner -->

    <section class="hero">

        <div class="hero-content">

            <h1>
                iPhone & Xiaomi
            </h1>

            <p>
                Khám phá công nghệ tương lai
            </p>

            <a href="products.php">
                <button class="btn">
                    Mua ngay
                </button>
            </a>

        </div>

    </section>

    <!-- Danh mục -->

    <section class="section">

        <div class="container">

            <h2 class="section-title">

                Danh mục nổi bật

            </h2>

            <div class="categories">

                <div class="category">
                    Apple
                </div>

                <div class="category">
                    Xiaomi
                </div>

                <div class="category">
                    Samsung
                </div>

                <div class="category">
                    Oppo
                </div>

            </div>

        </div>

    </section>

    <!-- Sản phẩm nổi bật -->

    <section class="section">

        <div class="container">

            <h2 class="section-title">

                Sản phẩm nổi bật

            </h2>

            <div class="products">

                <?php

                $sql =
                    "SELECT * FROM sanpham
                     ORDER BY id DESC
                     LIMIT 6";

                $result =
                    mysqli_query(
                        $conn,
                        $sql
                    );

                while (
                    $product =
                    mysqli_fetch_assoc(
                        $result
                    )
                ) {

                ?>

                    <div class="card">

                        <img
                            src="assets/images/<?=
                                                $product['hinh_anh']
                                                ?>"
                            alt="">

                        <div class="card-content">

                            <h3>

                                <?=
                                $product['ten_san_pham']
                                ?>

                            </h3>

                            <p class="price">

                                <?=
                                number_format(
                                    $product['gia']
                                )
                                ?>

                                đ

                            </p>

                            <a href="product-detail.php?id=<?=
                                                            $product['id']
                                                            ?>">

                                <button
                                    class="btn card-btn">

                                    Xem chi tiết

                                </button>

                            </a>

                        </div>

                    </div>

                <?php } ?>

            </div>

        </div>

    </section>

    <!-- Khuyến mãi -->

    <section class="section">

        <div class="container">

            <div class="promo">

                <h2>

                    Giảm giá đến 30%

                </h2>

                <p>

                    Áp dụng cho toàn bộ điện thoại Apple và Xiaomi

                </p>

            </div>

        </div>

    </section>

    <!-- Đánh giá -->

    <section class="section">

        <div class="container">

            <h2 class="section-title">

                Khách hàng nói gì

            </h2>

            <div class="review-grid">

                <div class="review">

                    ⭐⭐⭐⭐⭐

                    <br><br>

                    Dịch vụ rất tốt,
                    giao hàng nhanh.

                </div>

                <div class="review">

                    ⭐⭐⭐⭐⭐

                    <br><br>

                    Sản phẩm chính hãng,
                    giá hợp lý.

                </div>

                <div class="review">

                    ⭐⭐⭐⭐⭐

                    <br><br>

                    Nhân viên hỗ trợ
                    nhiệt tình.

                </div>

            </div>

        </div>

    </section>

    <?php include "components/footer.php"; ?>

</body>

</html>