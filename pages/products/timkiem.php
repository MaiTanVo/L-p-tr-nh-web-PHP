<style>
    .product-item {
        margin-top: 16px;
    }
    .card-text {
        font-size: 1rem;
        display: block;
        font-weight: 400;
        color: var(--light-blue);
    }
    .product-price {
        color: var(--orange);
        font-size: 1.2rem;
    }
    .card .product-icon {
        margin-left: 54px;
        margin-top: 4px;
    }
    .lookat-product, .add-product {
        font-size: 1rem;
        color: var(--light-blue);
    }
    .lookat-product:hover, .add-product:hover {
        color: var(--orange);
        cursor: pointer;
        transition: var(--smooth);
    }

    @media (min-width: 36em) {
        .card .product-icon {
            margin-left: 42px;
            margin-top: 4px;
        }
    }

    @media (min-width: 48em) {
        .card .product-icon {
            margin-left: 12px;
            margin-top: 4px;
        }
        .col-md-3 {
            flex: 0 0 auto;
            width: 33.33333333%;
        }
    }

    @media (min-width: 62em) {
        .card .product-icon {
            margin-left: -8px;
            margin-top: 4px;
        }
    }
</style>

<?php
    if(isset($_POST['timkiem'])) {
        $tukhoa = $_POST['tukhoa'];
    }
    else {
        $tukhoa = '';
    }
    $sql_products = "SELECT * FROM tbl_products WHERE tbl_products.tensp LIKE '%".$tukhoa."%'";
    $query_products = mysqli_query($conn, $sql_products);
    $cnt = mysqli_num_rows($query_products);
?>

<head>
    <title>Tìm kiếm</title>
</head>
<!-- category -->
<?php
include("pages/main/category.php");
?>

<div class="col-lg-9">
    <!-- Danh muc cac san pham -->
    <div class="title">
        <h2>Có <?php echo "($cnt)" ?> kết quả cho từ khóa: <?php echo "\"$tukhoa\""?></h2>
    </div>
    <div class="product-item">
        <div class="row row-cols-2">
            <?php
                while($row_pro = mysqli_fetch_array($query_products)){
            ?>
            <div class="col-md-3">
                <div class="card">
                    <a href="index.php?quanly=pro_detail&id=<?php echo $row_pro['id_sanpham']?>">
                        <img src="admin/modules/quanlysp/uploads/<?php echo $row_pro['hinhanh']?>" class="card-img-top" alt="...">
                    </a>
                    <div class="card-body">
                        <a href="index.php?quanly=pro_detail&id=<?php echo $row_pro['id_sanpham']?>" class="card-text"><?php echo $row_pro['tensp']?></a>
                        <div class="row product-footer">
                            <div class="col-6">
                                <p class="product-price"><?php echo number_format($row_pro['giasp'],0,',', '.')?><sup>đ</sup></p>
                            </div>
                            <div class="col product-icon">
                                <a href="index.php?quanly=pro_detail&id=<?php echo $row_pro['id_sanpham']?>">
                                    <i class="lookat-product fa-solid fa-eye"></i>
                                </a>
                                <a href="index.php?quanly=giohang">
                                    <i class="add-product fa-solid fa-cart-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                }
            ?>
        </div>
    </div>
</div>