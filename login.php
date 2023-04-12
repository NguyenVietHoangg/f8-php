<?php
session_start();
include "connect.php";
if(isset($_POST['login']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $sql = " SELECT * FROM tblnguoidung WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    
    if(mysqli_num_rows($result)==1){
        $_SESSION['email'] = $email;
        header("location:index-account.php");
    } else{
        "Tài Khoản hoặc mật khẩu sai";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>F8 Đăng nhập</title>
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
    <link rel="stylesheet" href="./assets/css/login.css" />
</head>

<body>
    <div class="container-fluid bg-login">
        <img src="./assets/img/bg-login.png" class="d-inline" alt="" />
        <div class="modal d-block d-flex align-items-center justify-content-center" id="myModal">
            <div class="modal-dialog form_login">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="container login text-center">
                        <img class="login_img" src="./assets/img/courses/logo.png" alt="logo" />
                        <h2 class="login_title">Chào mừng đến với F8</h2>
                        <form action="./login.php" method="post" class="login_action">
                            <div class="form-group text-start">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Enter email" name="email" />
                            </div>
                            <div class="form-group text-start">
                                <label for="pwd">Password:</label>
                                <input type="password" class="form-control" id="pwd" name="password"
                                    placeholder="Enter password" name="pswd" />
                            </div>
                            <p class="login_desc">
                                Bạn chưa có tài khoản?
                                <a href="./register.php"> Đăng Ký</a>
                            </p>
                            <button type="submit" name="login" class=" btn login_btn">
                                Đăng Nhập
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>