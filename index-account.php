<?php
session_start();
if(!isset($_SESSION['email'])){
    header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>F8-Học Lập Trình Để Đi Làm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./assets/fonts/stylesheet.css" />
    <link rel="stylesheet" href="./assets/css/reset.css" />
    <link rel="stylesheet" href="./assets/css/global.css" />
    <link rel="stylesheet" href="./assets/css/index.css" />
</head>

<body>
    <header class="fixed-top container-fluid header d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-3 p-0 d-flex align-items-center">
                    <a href="./index.html" class="header_link">
                        <img src="./assets/img/courses/logo.png" alt="logo" />
                    </a>
                    <p class="header_title">Học Lập Trình Để Đi Làm</p>
                </div>
                <div class="col-4 offset-1 header_search d-flex align-items-center">
                    <span><i class="fa-solid fa-magnifying-glass"></i></span>
                    <input type="text" class="header_search_input" name="headerSearch"
                        placeholder=" tìm kiếm khóa học, bài viết, video,... " />
                </div>
                <div class="col-2 offset-2">
                    <div class="dropdown dropdown_redesign">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                            data-bs-toggle="dropdown" aria-expanded="false"><?php echo $_SESSION['email']  ?>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li>
                                <a class="dropdown-item" href="#"><span><i class="fa-solid fa-gear"></i></span>
                                    Cài đặt</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="./logout.php"> <button type="submit"
                                        name="logout"><span><i class="fa-solid fa-arrow-right-from-bracket"></i></span>
                                        Đăng Xuất</button></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container-fluid body">
        <div class="main container">
            <div class="row">
                <div class="col-1 navbar d-flex flex-column text-center">
                    <div class="navbar_item">
                        <span><i class="fa-solid fa-plus"></i></span>
                    </div>
                    <div class="navbar_item navbar_item-active">
                        <span><i class="fa-solid fa-house"></i></span>
                        <p class="navbar_desc">Home</p>
                    </div>
                    <div class="navbar_item">
                        <span><i class="fa-solid fa-road"></i></span>
                        <p class="navbar_desc">Lộ trình</p>
                    </div>
                    <div class="navbar_item">
                        <span> <i class="fa-solid fa-lightbulb"></i></span>
                        <p class="navbar_desc">Học</p>
                    </div>
                    <div class="navbar_item">
                        <span><i class="fa-brands fa-blogger"></i></span>
                        <p class="navbar_desc">Blog</p>
                    </div>
                </div>
                <div class="col-10 offset-2">
                    <div class="slideshow">
                        <!-- Carousel -->
                        <div id="demo" class="carousel slide" data-bs-ride="carousel">
                            <!-- The slideshow/carousel -->
                            <div class="carousel-inner slideshow_img">
                                <div class="carousel-item active">
                                    <img src="./assets/img/decorates/decorate01.png" alt="Los Angeles" class="d-block"
                                        style="width: 100%" />
                                </div>
                                <div class="carousel-item">
                                    <img src="./assets/img/decorates/decorate02.png" alt="decorate02" class="d-block"
                                        style="width: 100%" />
                                </div>
                                <div class="carousel-item">
                                    <img src="./assets/img/decorates/decorate03.png" alt="decorate03" class="d-block"
                                        style="width: 100%" />
                                </div>
                                <div class="carousel-item">
                                    <img src="./assets/img/decorates/decorate04.png" alt="decorate04" class="d-block"
                                        style="width: 100%" />
                                </div>
                            </div>

                            <!-- Left and right controls/icons -->
                            <button class="carousel-control-prev slideshow_prev" type="button" data-bs-target="#demo"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon slideshow_icon">
                                    <i class="fa-solid fa-chevron-left"></i>
                                </span>
                            </button>
                            <button class="carousel-control-next slideshow_next" type="button" data-bs-target="#demo"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon slideshow_icon">
                                    <i class="fa-solid fa-chevron-right"></i></span>
                            </button>

                            <!-- Indicators/dots -->
                            <div class="carousel-indicators text-start slideshow_btn">
                                <button type="button" data-bs-target="#demo" data-bs-slide-to="0"
                                    class="active"></button>
                                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                                <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                                <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
                            </div>
                        </div>
                    </div>
                    <div class="courses_pro">
                        <div class="content_heading d-flex justify-content-between">
                            <div class="content_heading_title">
                                Khóa học Pro
                            </div>
                        </div>
                        <div class="d-flex content_courses_block">

                            <?php
                            include "connect.php";
                            $sql = "SELECT * FROM tbllistkhoahoc WHERE coin > 0";
                            $result = mysqli_query($conn, $sql);
                            while($row = mysqli_fetch_array($result)) {
                                
                            ?>
                            <a class="content_courses_lick">
                                <div class="card content_courses_item">
                                    <img class="card-img-top" src="./assets/img/<?php echo $row['image']?>"
                                        alt="HTML, CSS pro" style="width: 100%" />
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            <?php echo $row['tenkhoahoc']?>
                                        </h4>
                                        <p class="card-text"><?php echo $row['coin']?>đ</p>
                                    </div>
                                </div>
                            </a>
                            <?php }?>
                        </div>
                    </div>
                    <div class="courses_free">
                        <div class="content_heading d-flex justify-content-between">
                            <div class="content_heading_title">
                                Khóa học miễn phí
                            </div>
                            <div class="content_heading_Link">
                                <a href="#"> Xem lộ trình</a>
                                <i class="fa-solid fa-chevron-right"></i>
                            </div>
                        </div>
                        <div class="d-flex content_courses_block">
                            <?php
                            include "connect.php";
                            $sql = "SELECT * FROM tbllistkhoahoc WHERE coin = 0";
                            $result = mysqli_query($conn, $sql);
                            while($row = mysqli_fetch_array($result)) {
                                
                            ?>
                            <a class="content_courses_lick">
                                <div class="card content_courses_item">
                                    <img class="card-img-top" src="./assets/img/<?php echo $row['image']?>"
                                        alt="HTML, CSS pro" style="width: 100%" />
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            <?php echo $row['tenkhoahoc']?>
                                        </h4>
                                        <p class="card-text card_color_thin">
                                            <i class="fa-solid fa-user-group"></i>
                                            <?php echo $row['soluonghoc']?>
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <?php }?>

                        </div>
                    </div>
                    <div class="blog">
                        <div class="content_heading d-flex justify-content-between">
                            <div class="content_heading_title">
                                Bài viết nổi bật
                            </div>
                            <div class="content_heading_Link">
                                <a href="#"> Xem tất cả </a>
                                <i class="fa-solid fa-chevron-right"></i>
                            </div>
                        </div>
                        <div class="d-flex content_courses_block">
                            <?php
                            include "connect.php";
                            $sql = "SELECT * FROM tblblog";
                            $result = mysqli_query($conn, $sql);
                            while($row = mysqli_fetch_array($result)) {
                                
                            ?>
                            <a class="content_courses_lick">
                                <div class="card content_courses_item">
                                    <img class="card-img-top" src="./assets/img/<?php echo $row['desc']?>"
                                        alt="HTML, CSS pro" style="width: 100%" />
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            <?php echo $row['title']?>
                                        </h4>
                                        <p class="card-text d-flex align-items-center gap-3">
                                            <img src="./assets/img/user/user02.png" alt="avatar" />
                                            <span class="card_color_thick">Sơn Đặng
                                            </span>
                                            <span class="card_color_thin">
                                                . 12 phút đọc</span>
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <?php }?>
                        </div>
                    </div>
                    <div class="video">
                        <div class="content_heading d-flex justify-content-between">
                            <div class="content_heading_title">
                                Videos nổi bật
                            </div>
                            <div class="content_heading_Link">
                                <a href="#"> Xem tất cả </a>
                                <i class="fa-solid fa-chevron-right"></i>
                            </div>
                        </div>
                        <div class="d-flex content_courses_block">
                            <?php
                            include "connect.php";
                            $sql = "SELECT * FROM tblvideo";
                            $result = mysqli_query($conn, $sql);
                            while($row = mysqli_fetch_array($result)) {
                                
                            ?>
                            <a class="content_courses_lick">
                                <div class="card content_courses_item">
                                    <img class="card-img-top" src="./assets/img/<?php echo $row['video']?>"
                                        alt="HTML, CSS pro" style="width: 100%" />
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            <?php echo $row['title']?>
                                        </h4>
                                        <p class="card-text d-flex align-items-center gap-3 card_color_thin">
                                            <span><i class="fa-solid fa-eye"></i>
                                                <?php echo $row['eye']?>
                                            </span>
                                            <span><i class="fa-solid fa-thumbs-up"></i>
                                                <?php echo $row['like']?>
                                            </span>
                                            <span><i class="fa-solid fa-comment"></i>
                                                <?php echo $row['comment']?>
                                            </span>
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <footer class="container-fluid footer">
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <ul class="footer_list">
                        <li>
                            <a href="#" class="d-flex align-items-center">
                                <img class="footer_img" src="./assets/img/courses/logo.png" alt="logo" />
                                <p class="footer_item_heading">
                                    Học Lập Trình Để Đi<br />
                                    Làm
                                </p>
                            </a>
                        </li>
                        <li>Điện thoại: 0246.329.1102</li>
                        <li>Email: contact@fullstack.edu.vn</li>
                        <li>
                            Địa chỉ: Số 26 Dương Đình Nghệ, <br />Phường Yên
                            Hòa, Quận Cầu Giấy, <br />
                            TP. Hà Nội
                        </li>
                        <li>
                            <a href="#"><img src="./assets/img/nhataitro.png" alt="" /></a>
                        </li>
                    </ul>
                </div>
                <div class="col-2">
                    <ul class="footer_list">
                        <li class="footer_item_heading">VỀ F8</li>
                        <li><a href="#">Giới thiệu</a></li>
                        <li><a href="#">Liên hệ</a></li>
                        <li><a href="#">Điều khoản</a></li>
                        <li><a href="#">Bảo mật</a></li>
                        <li><a href="#">Cơ hội việc làm</a></li>
                    </ul>
                </div>
                <div class="col-2">
                    <ul class="footer_list">
                        <li class="footer_item_heading">SẢN PHẨM</li>
                        <li><a href="#">Game Nester</a></li>
                        <li><a href="#">Game CSS Selectors</a></li>
                        <li><a href="#">Game Froggy</a></li>
                        <li><a href="#">Game Froggy Pro</a></li>
                        <li><a href="#">Game Scoops</a></li>
                    </ul>
                </div>
                <div class="col-2">
                    <ul class="footer_list">
                        <li class="footer_item_heading">CÔNG CỤ</li>

                        <li><a href="#">Tạo CV xin việc</a></li>
                        <li><a href="#">Rút gọn liên kết</a></li>
                        <li><a href="#">Clip-path maker</a></li>
                        <li><a href="#">Snippet generator</a></li>
                        <li><a href="#">Cảnh báo sờ tay lên mặt</a></li>
                    </ul>
                </div>
                <div class="col-3">
                    <ul class="footer_list">
                        <li class="footer_item_heading">
                            CÔNG TY CỔ PHẦN CÔNG NGHỆ GIÁO DỤC F8
                        </li>
                        <li><a href="#">Mã số thuế: 0109922901</a></li>
                        <li><a href="#">Ngày thành lập: 04/03/2022</a></li>
                        <li>
                            <a href="#">Lĩnh vực: Công nghệ, giáo dục, lập trình.
                                F8 xây dựng và phát triển những sản phẩm
                                mang lại giá trị cho cộng đồng.</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row footer_bottom d-flex align-items-center">
                <div class="col-5">
                    <p>
                        © 2018 - 2023 F8. Nền tảng học lập trình hàng đầu
                        Việt Nam
                    </p>
                </div>
                <div class="col-1 offset-6 d-flex justify-content-between">
                    <a href="">
                        <img src="./assets/img/fb-icon.png" alt="fb" />
                    </a>
                    <a href="">
                        <img src="./assets/img/youtube-icon.png" alt="youtube" />
                    </a>
                    <a href="">
                        <img src="./assets/img/tiktok-icon.webp" alt="tiktok" />
                    </a>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>