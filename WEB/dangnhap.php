<?php
require 'controller.php'
?>
<!DOCTYPE html>
<html lang="vie">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<div class="container">

    <section>
        <a href="index.html" style="text-decoration: none;font-size: larger;padding: 20px 20px;font-weight: bolder;">
            HOME
        </a>

        <video autoplay muted loop style="width: 700px;height: auto;">
            <source src="video/video.mp4" type="video/mp4">

        </video>
        <article>

            <div class="dangnhap" style="margin-top: +20%">
                <h1 class="dangnhap-heading">Đăng nhập</h1>

                <div style="text-align:center;color: red">
                    <?php
                    if (count($errors) == 1) {
                    ?>
                        <div>
                            <?php
                            foreach ($errors as $showerror) {
                                echo $showerror;
                            }
                            ?>
                        </div>
                    <?php
                    } elseif (count($errors) > 1) {
                    ?>
                        <div>
                            <?php
                            foreach ($errors as $showerror) {
                            ?>
                                <li> <?php echo $showerror; ?> </li>
                            <?php
                            }
                            ?>
                        </div>
                    <?php
                    }
                    ?>
                </div>

                <br>
                <div style="text-align: center;color:#047534 ;margin-top: -20px;">
                    <?php
                    if (isset($_GET['notification'])) {
                        echo $_GET['notification'];
                    }
                    ?>
                </div>
                <form action="dangnhap.php" method="POST">
                    <label for="fullname" class="dangnhap-label"></label>
                    <input type="text" id="fullname" class="input" placeholder="Tên đăng nhập" name="user">
                    <label for="pass" class="dangnhap-label"></label>
                    <input type="password" id="pass" class="input" placeholder="Mật khẩu" name="password">
                    <button class="dangnhap-submit" name="login">Đăng nhập</button>
                </form>
                <p class="dangky" onclick="window.open('enter-email.php','_self')">Quên mật khẩu</p>
                <p class="dangky" onclick="window.open('dangky.php','_self')"> Chưa có tải khoản</p>
            </div>
        </article>
    </section>


</div>

</body>

</html>