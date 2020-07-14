<?php
session_start();
require_once("database/db_config.php");
if (isset($_POST["BtnDangKy"])) {
    $email = $_POST["txtEmail"];
    $matkhau = $_POST["txtMatKhau"];
    $hoten = $_POST["txtHoTen"];
    $sdt = $_POST["txtSDT"];
    $ngaysinh = $_POST["txtNgaySinh"];
    $gioitinh = $_POST["txtGioiTinh"];
    $diachi = $_POST["txtDiaChi"];
    $message = "";

    if ($email == "" || $matkhau == "" || $hoten == "" || $sdt == "" || $ngaysinh = "" || $gioitinh == "" || $diachi == "") {
        $_SESSION['status'] = "Vui lòng điền đầy đủ thông tin";
        header("Location: register.php");
    } else {
        //Kiểm tra tồn tại email
        $sql = "SELECT * FROM khachhang where Email = '$email'";
        $rs_sql = mysqli_query($connection, $sql);

        if (mysqli_num_rows($rs_sql) > 0) {
            $_SESSION['register-status'] = "Email đã tồn tại!";
            header("Location: register.php");
        } else {
            $sql = "INSERT INTO khachhang(`Email`, `MatKhau`, `TenKH`, `SDT`, `GioiTinh`, `NgaySinh`, `DiaChi`)
                VALUES ('$email', '$matkhau', '$hoten', '$sdt', '$gioitinh', '$ngaysinh', '$diachi')";
            $rs = mysqli_query($connection, $sql);

            if ($rs) {
                $_SESSION['register-status'] = "Đăng ký thành công, vui lòng đăng nhập!";
                header("Location: register.php");
            } else {
                $_SESSION['register-status'] = "Đăng ký thất bại!";
                header("Location: register.php");
            }
        }
    }
}
