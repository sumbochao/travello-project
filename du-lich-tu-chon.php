<?php
include('include/header.php');

$query = "SELECT * FROM vitri";
$result = mysqli_query($connection, $query);
?>
<title>Du Lịch Tự Chọn | Travello</title>
<!-- NỘI DUNG -->

<section class="container destination-content">

    <h3 class="text-center" style="font-size: 35px;margin:40px 0">DANH SÁCH ĐIỂM ĐẾN</h5>
    <div class="row">
        <?php
        while ($rows = mysqli_fetch_array($result)) {
        ?>
            <div class="col-md-3">
                <a href="tour-tu-chon.php?diem-den=<?php echo $rows["MaViTri"]?>">
                    <div class="card">
                        <img class="card-img-top" src="admin/img/diem-den/<?php echo $rows["Anh"];?>" alt="Card image cap">
                        <h5 class="title"><?php echo $rows["TenViTri"];?></h5>
                    </div>
                </a>

            </div>
        <?php
        }
        ?>


</section>

<!-- END -->

<?php
include('include/footer.php')
?>