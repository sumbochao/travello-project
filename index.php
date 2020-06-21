<?php include('include/header.php');

function product_price($priceFloat)
{
    $symbol = ' đ';
    $symbol_thousand = '.';
    $decimal_place = 0;
    $price = number_format($priceFloat, $decimal_place, '', $symbol_thousand);
    return $price . $symbol;
}
?>

<!-- SEARCH -->
<div class="d-flex justify-content-center align-items-center ">


    <form class="search" id="search">
        <h5>TÌM KIẾM TOUR</h5>
        <div class="form-row">
            <div class="col-xs-8 input-group-lg">
                <select class="custom-select" id="inlineFormCustomSelect">
                    <option selected>Nơi Đi</option>
                    <option value="1">TP. Hồ Chí Minh</option>
                    <option value="2">Hà Nội</option>
                    <option value="3">Đà Nẵng</option>
                    <option value="3">Huế</option>
                </select>
            </div>
            <div class="col-xs-8 input-group-lg">
                <select class="custom-select" id="inlineFormCustomSelect">
                    <option selected>Nơi Đến</option>
                    <option value="1">TP. Hồ Chí Minh</option>
                    <option value="2">Hà Nội</option>
                    <option value="3">Đà Nẵng</option>
                    <option value="3">Huế</option>
                </select>
            </div>
            <div class="col-xs-8 input-group-lg align-middle">
                <input type="date" class="form-control" placeholder="Thời Gian">
            </div>
            <div class="col-xs-8">
                <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i></button>
            </div>
        </div>
    </form>
</div>



<div class="card-group">
    <div class="card">
        <img class="card-img-top" src="img/travello.jpg" alt="Card image cap">
        <div class="dark-overlay">
            <div class="card-body">
                <h5 class="card-title">Tour Đặt Nhiều</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                    additional content. This content is a little bit longer.</p>
                <a href="#" class="btn btn-primary">Xem Ngay</a>
            </div>
        </div>
    </div>
    <div class="card">
        <img class="card-img-top" src="img/travel-2.jpg" alt="Card image cap">
        <div class="dark-overlay">
            <div class="card-body">
                <h5 class="card-title">Tour Trong Nước</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.
                </p>
                <a href="#" class="btn btn-primary">Xem Ngay</a>
            </div>
        </div>
    </div>
    <div class="card">
        <img class="card-img-top" src="img/travel-1.jpg" alt="Card image cap">
        <div class="dark-overlay">
            <div class="card-body">
                <h5 class="card-title">Tour Nước Ngoài</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                    additional content. This card has even longer content than the first to show that equal height
                    action.</p>
                <a href="#" class="btn btn-primary">Xem Ngay</a>
            </div>
        </div>

    </div>
</div>

<div class="intro">
    <div class="row">
        <div class="col">
            <div class="intro_container">
                <div class="row">
                    <div class="col-lg-4 intro-col">
                        <div class="intro-item d-flex flex-row align-items-end justify-content-start">
                            <div class="intro-icon"><img src="img/beach.svg"></div>
                            <div class="intro-content">
                                <div class="intro-title">ĐIỂM ĐẾN HẤP DẪN</div>
                                <div class="intro-subtitle">Lorem ipsum dolor sit amet consectetur adipisicing.</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="intro-item d-flex flex-row align-items-end justify-content-start">
                            <div class="intro-icon"><img src="img/wallet.svg"></div>
                            <div class="intro-content">
                                <div class="intro-title">GIÁ CẢ TỐT NHẤT</div>
                                <div class="intro-subtitle">Lorem ipsum dolor sit amet consectetur adipisicing.</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="intro-item d-flex flex-row align-items-end justify-content-start">
                            <div class="intro-icon"><img src="img/suitcase.svg"></div>
                            <div class="intro-content">
                                <div class="intro-title">DỊCH VỤ TUYỆT VỜI</div>
                                <div class="intro-subtitle">Lorem ipsum dolor sit amet consectetur adipisicing.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- TOUR ĐẶT NHIỀU -->
<section class="tour-hot">
    <h5>TOUR ĐẶT NHIỀU</h5>
    <div class="card-deck">
        <div class="card">
            <img class="card-img-top" src="img/travello.jpg" alt="Card image cap">
            <div class="dark-overlay">
                <div class="card-body">
                    <h5 class="card-title">Hawai</h5>
                    <p class="card-text">Từ 5.000.000 VNĐ</p>
                    <a href="#" class="btn btn-primary">Đặt Ngay</a>
                </div>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="img/travel-2.jpg" alt="Card image cap">
            <div class="dark-overlay">
                <div class="card-body">
                    <h5 class="card-title">Hawai</h5>
                    <p class="card-text">Từ 5.000.000 VNĐ</p>
                    <a href="#" class="btn btn-primary">Đặt Ngay</a>
                </div>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="img/travel-1.jpg" alt="Card image cap">
            <div class="dark-overlay">
                <div class="card-body">
                    <h5 class="card-title">Hawai</h5>
                    <p class="card-text">Từ 5.000.000 VNĐ</p>
                    <a href="#" class="btn btn-primary">Đặt Ngay</a>
                </div>
            </div>

        </div>

    </div>
    <div class="card-deck">
        <div class="card">
            <img class="card-img-top" src="img/travello.jpg" alt="Card image cap">
            <div class="dark-overlay">
                <div class="card-body">
                    <h5 class="card-title">Hawai</h5>
                    <p class="card-text">Từ 5.000.000 VNĐ</p>
                    <a href="#" class="btn btn-primary">Đặt Ngay</a>
                </div>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="img/travel-2.jpg" alt="Card image cap">
            <div class="dark-overlay">
                <div class="card-body">
                    <h5 class="card-title">Hawai</h5>
                    <p class="card-text">Từ 5.000.000 VNĐ</p>
                    <a href="#" class="btn btn-primary">Đặt Ngay</a>
                </div>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="img/travel-1.jpg" alt="Card image cap">
            <div class="dark-overlay">
                <div class="card-body">
                    <h5 class="card-title">Hawai</h5>
                    <p class="card-text">Từ 5.000.000 VNĐ</p>
                    <a href="#" class="btn btn-primary">Đặt Ngay</a>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- TOUR TRONG NƯỚC -->
<section class="tour-hot">
    <?php
    $query = "SELECT * from loaitourdulich";
    $result = mysqli_query($connection, $query);
    $query2 = "SELECT * from tourdulich where MaLoaiTour='1'";
    $result2 = mysqli_query($connection, $query2);
    $query3 = "SELECT * from loaitourdulich where MaLoaiTour='1'";
    $result3 = mysqli_query($connection, $query3);
    $rows3 = mysqli_fetch_array($result3);
    ?>
    <h5><?php echo $rows3['TenLoaiTour'] ?></h5>
    <div class="card-deck">
        <div class="row">
            <?php
            while ($rows = @mysqli_fetch_array($result2)) {
            ?>

                <div class="card col-6">
                    <img class="card-img-top" src="admin/img/tour-du-lich/<?php echo $rows['Anh'] ?>" alt="Card image cap">
                    <div class="dark-overlay">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $rows['TenTour'] ?></h5>
                            <p class="card-text">Từ <?php echo product_price($rows['GiaTien']) ?></p>
                            <a href="chi-tiet-tour.php?tour=<?php echo $rows['MaTour']; ?>" class="btn btn-primary">Đặt Ngay</a>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</section>


<!-- TOUR NƯỚC NGOÀI -->
<section class="tour-hot">
    <?php
    $query = "SELECT * from loaitourdulich";
    $result = mysqli_query($connection, $query);
    $query2 = "SELECT * from tourdulich where MaLoaiTour='2'";
    $result2 = mysqli_query($connection, $query2);
    $query3 = "SELECT * from loaitourdulich where MaLoaiTour='2'";
    $result3 = mysqli_query($connection, $query3);
    $rows3 = mysqli_fetch_array($result3);
    ?>
    <h5><?php echo $rows3['TenLoaiTour'] ?></h5>
    <div class="card-deck">
        <div class="row">
            <?php
            while ($rows = @mysqli_fetch_array($result2)) {
            ?>

                <div class="card col-6">
                    <img class="card-img-top" src="admin/img/tour-du-lich/<?php echo $rows['Anh'] ?>" alt="Card image cap">
                    <div class="dark-overlay">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $rows['TenTour'] ?></h5>
                            Từ <p class="card-text"><?php echo product_price($rows['GiaTien']) ?></p>
                            <a href="chi-tiet-tour.php?tour=<?php echo $rows['MaTour']; ?>" class="btn btn-primary">Đặt Ngay</a>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</section>



<!-- TEST -->

<section class="tour-list">
    <?php
    $query = "SELECT * from loaitourdulich";
    $result = mysqli_query($connection, $query);
    $query2 = "SELECT * from tourdulich where MaLoaiTour='2'";
    $result2 = mysqli_query($connection, $query2);
    $query3 = "SELECT * from loaitourdulich where MaLoaiTour='2'";
    $result3 = mysqli_query($connection, $query3);
    $rows3 = mysqli_fetch_array($result3);
    ?>
    <h5><?php echo $rows3['TenLoaiTour'] ?></h5>
    <div class="cardd-deck">
        <div class="row">
            <?php
            while ($rows = @mysqli_fetch_array($result2)) {
            ?>

                <div class="cardd col-4">
                    <div class="cardd-inner">
                        <div class="card-img">
                            <img class="cardd-img-top" src="admin/img/tour-du-lich/<?php echo $rows['Anh'] ?>" alt="Card image cap">
                            <div class="sale">10%</div>
                            <div class="tour-like"><i class="fa fa-heart"></i></div>
                        </div>
                        <div class="cardd-body">
                            <h5 class="cardd-title"><?php echo $rows['TenTour'] ?></h5>
                            <div class="card-bottom">
                                <div class="left-bot-card">
                                    <a href="chi-tiet-tour.php?tour=<?php echo $rows['MaTour']; ?>" class="btn btn-primary">Đặt Ngay</a>
                                </div>
                                <div class="right-bot-card">
                                    Từ <p class="cardd-text" style="display:inline"><?php echo product_price($rows['GiaTien']) ?></p>
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
</section>


<!-- FOOTER -->


<div class="footer">
    <div class="row">
        <div class="col-md-4">
            <h3>Travello</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                At quisquam deserunt error nesciunt earum, alias minima pariatur?<p>
        </div>
        <div class="col-md-2">
            <h5>Thành Viên</h5>
            <p>Cao Duy Triều</p>
            <p>Nguyễn Đắc Huề</p>
        </div>
        <div class="col-md-2">
            <h5>Hỗ Trợ</h5>
            <p>Lorem ipsum</p>
            <p>Lorem ipsum</p>
        </div>
        <div class="col-md-4">
            <h5>Liên Hệ</h5>
            <p>140 Lê Trọng Tấn, P.Tây Thạnh, Q.Tân Phú, TP.HCM</p>
            <p>(+84) 32 6805 211</p>
            <p>travello@gmail.com</p>
            <p>www.travello.co</p>
        </div>
    </div>

    <div class="footer-copyright">

        <i class="fab fa-twitter-square"></i> <i class="fab fa-facebook-square"></i> <i class="fab fa-google-plus-square"></i>
    </div>
</div>


</body>
<script src="scripts/jquery-3.5.1.slim.min.js"></script>
<script src="scripts/popper.min.js"></script>
<script src="scripts/bootstrap.min.js"></script>
<script src="scripts/fontawesome-kit.js"></script>
<script src="scripts/scroll.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="scripts/cus.js"></script>

</html>