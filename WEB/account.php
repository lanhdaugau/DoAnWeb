<?php
    require_once "controller.php";
    require_once "connection.php";
    $user=$_SESSION['user'];
    $sql="SELECT * FROM INFORMATION WHERE user='$user'";
    
    $result=mysqli_query($con,$sql);
    $fetch_data=mysqli_fetch_assoc($result);
    $email = $fetch_data['email'];
    $name=$fetch_data['name'];
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tài khoản</title>
    <link rel="stylesheet" href="css/styleaccount.css">
    
            <link rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link rel="shortcut icon"
			href="images/icon.jpg">
</head>
<body>
    <div class="header">
        <span><img
            src="https://icons.iconarchive.com/icons/double-j-design/apple-festival/16/app-phone-icon.png">
        <a href="tel:+0367088853">Hotline: 0367088853</a> </span><span>
        <img
            src="https://icons.iconarchive.com/icons/toma4025/rumax/16/mails-icon.png"><a
            href="mailto:lanhdaugau1605@gmail.com"> Email:
            lanhdaugau1605@gmail.com</a></span> <span>
        <img
            src="https://icons.iconarchive.com/icons/icons8/windows-8/16/Network-Ip-Address-icon.png">
        <a
            href="https://www.google.com/maps/place/Tr%C6%B0%E1%BB%9Dng+%C4%90%E1%BA%A1i+h%E1%BB%8Dc+C%C3%B4ng+ngh%E1%BB%87+Th%C3%B4ng+tin+v%C3%A0+Truy%E1%BB%81n+th%C3%B4ng+Vi%E1%BB%87t+-+H%C3%A0n/@15.9750157,108.2510434,17z/data=!3m1!4b1!4m5!3m4!1s0x3142108997dc971f:0x1295cb3d313469c9!8m2!3d15.9750106!4d108.2532374?hl=vi-VN">Địa
            điểm các cửa hàng</a> </span> <span>
        <img
            src="https://icons.iconarchive.com/icons/google/noto-emoji-objects/16/62894-package-icon.png">Theo
        dõi đơn hàng</span>
    </div>
    <div class="topnav">

        <a  href="home.php">Trang chủ</a>
        <a href="sanpham.html">Sản phẩm</a>
        <a href="#contact">Khuyến mãi</a>
        


    </div>
     
    <div class="content" style="height:580px">
       
        <div class="item">
            <ul>
                <li class="isSelected">
                <img src="https://cf.shopee.vn/file/ba61750a46794d8847c3f463c5e71cc4">
                Tài khoản của tôi
                </li>
                <li onclick="window.open('purchase.php','_self')">
                    <img src="https://cf.shopee.vn/file/f0049e9df4e536bc3e7f140d071e9078" alt="">
                    Đơn mua
                </li>
                <li>
                    <img src="https://cf.shopee.vn/file/e10a43b53ec8605f4829da5618e0717c">
                    Thông báo
                </li>
                
            </ul>
            
        </div>
        <div class="item">
            
            <span style="text-indent: 20px;padding-left: 20px;">
                <br>
                HỒ SƠ CỦA TÔI <br>
                Quản lý thông tin bảo mật
            </span>
            
            <div class="infomation-acount">
               <div class="text">
                   Tên đăng nhập
                   <br>
                   Tên 
                   <br>
                   Email
                   <br>
                   Số điện thoại
                   <br>
                   Giới tính
                   <br>
                   Ngày sinh
                   <br>
                   
               </div>
               <div class="input">
                   <input type="text" value="<?php ECHO $_SESSION['user']?>">
                   <br>
                   <input type="text" value="<?php echo $name ?>">
                   <br>
                   <span class="emai"><?php  echo $email;?></span>
                   <br>
                   <span class="number-phone">036*****12</span>
                    <br>
                    <input type="radio" name="sex" checked> Nam <input type="radio" name="sex"> Nữ <input type="radio" name="sex"> Khác
                    <br>
                    <input type="date" value="2003-01-01">
                    <br><button>
                        Lưu
                    </button>
                </div>
            </div>
            <form action="account.php" method="POST">
                <input type="submit" name="logout" value="Đăng xuất" >
            </form>
            
        </div>
    </div>
</body>
</html>