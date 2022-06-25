<?php
require_once "controller.php";
require_once "connection.php";

$user = $_SESSION['user'];
$sql = "SELECT * FROM PRODUCT p,PRO_DETAIL d WHERE user='$user' and p.id=d.id ";

$result = mysqli_query($con, $sql);
$fetch_data = mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đơn mua</title>
    <link rel="stylesheet" href="css/styleaccount.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="images/icon.jpg">
</head>

<body style="overflow: auto;">
    <div class="header">
        <span><img src="https://icons.iconarchive.com/icons/double-j-design/apple-festival/16/app-phone-icon.png">
            <a href="tel:+0367088853">Hotline: 0367088853</a> </span><span>
            <img src="https://icons.iconarchive.com/icons/toma4025/rumax/16/mails-icon.png"><a href="mailto:lanhdaugau1605@gmail.com"> Email:
                lanhdaugau1605@gmail.com</a></span> <span>
            <img src="https://icons.iconarchive.com/icons/icons8/windows-8/16/Network-Ip-Address-icon.png">
            <a href="https://www.google.com/maps/place/Tr%C6%B0%E1%BB%9Dng+%C4%90%E1%BA%A1i+h%E1%BB%8Dc+C%C3%B4ng+ngh%E1%BB%87+Th%C3%B4ng+tin+v%C3%A0+Truy%E1%BB%81n+th%C3%B4ng+Vi%E1%BB%87t+-+H%C3%A0n/@15.9750157,108.2510434,17z/data=!3m1!4b1!4m5!3m4!1s0x3142108997dc971f:0x1295cb3d313469c9!8m2!3d15.9750106!4d108.2532374?hl=vi-VN">Địa
                điểm các cửa hàng</a> </span> <span>
            <img src="https://icons.iconarchive.com/icons/google/noto-emoji-objects/16/62894-package-icon.png">Theo
            dõi đơn hàng</span>
    </div>
    <div class="topnav">

        <a href="home.php">Trang chủ</a>
        <a href="sanpham.html">Sản phẩm</a>
        <a href="#contact">Khuyến mãi</a>


    </div>

    <div class="content">
        <div class="item">
            <ul>
                <li onclick="window.open('account.php','_self')">
                    <img src="https://cf.shopee.vn/file/ba61750a46794d8847c3f463c5e71cc4">
                    Tài khoản của tôi
                </li>
                <li class="isSelected">
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
            <div class="menubar">
                <ul>
                    <li>Tất cả</li>
                    <li>Chờ xác nhận</li>
                    <li>Chờ lấy hàng</li>
                    <li>Đang giao</li>
                    <li>Đã giao</li>
                    <li>Đã hủy</li>
                </ul>
                <div class="Tfo7DW">
                    <input autocomplete="off" placeholder="Tìm kiếm theo Tên Shop, ID đơn hàng hoặc Tên Sản phẩm" value="">
                </div>
                
                <div class="product">
                    ShopGiaDung <span style="background-color:
                            #a62424;color:white;padding: 5px 20px;margin-left:
                            +20px;border-radius: 3px;cursor: pointer;"> Chat
                    </span>
                    <span style="border: 1px solid grey;margin-left:
                            +20px;padding: 5px 19px;border-radius: 3px;cursor:
                            pointer;">Xem shop</span>


                    <!-- <hr width="99%"> -->

                    <table style="text-align: center;" >
                        <?php
                        foreach ($result as $key) {
                        ?>

                            <tr>
                                <td rowspan="3" style="background-size:
                                cover;width: 10vw;height:150px;background-image: url('<?php echo $key['image']; ?>');">

                                </td>
                                <td style="width: 15vw;" class="inf">
                                    <?php
                                    echo $key['produce_name'];
                                    ?>
                                </td>
                                <td style="width: 30vw;text-align: end;" class="inf">
                                    <?php
                                    echo number_format($key['price'],0,'.','.') . " VND";
                                    ?>
                                </td>   
                            </tr>
                            <tr>
                                <td class="inf">
                                    <?php
                                    echo "Phân loại: " . $key['classify'];
                                    ?>
                                </td>
                                <td>
                                  <form action="purchase.php?id=<?=$key['id'] ?>" method="POST" >
                                        <input type="submit" class="delete-btn" onclick="return confirm('bạn có muốn xóa sản phẩm này kh');" value="Xóa" name="delete">
                                  </form>
                                
                                 
                                  
        
                                </td>
                                
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <form action="purchase.php?id=<?=$key['id'] ?>" method="post">
                                   Số lượng <input type="number" value="<?php echo $key['quantity']?>" style="width: 30px;padding-left: 10px;" name="quantity">
                                    <input type="submit" name="update" value="Cập nhật">
                                    </form>
                                </td>
                                

                            </tr>
                            <tr>
                                <td colspan="3" style="background-color: grey;height: 40px;padding: 10px;">
                                    <span style="float: left;color:white;">
                                        <?php
                                        echo $key['quantity'] . " sản phẩm";
                                        ?>
                                    </span>
                                    <span style="float:right;font-size: 20px;color:white;">
                                        <?php
                                        echo "Tổng thành tiền: " . number_format($key['price']*$key['quantity'],0,',',',') . "VND";
                                        ?>
                                    </span>
                                </td>
                            </tr>
                            <br>

                        <?php

                        }

                        ?>

                    </table>

                    <br>


                </div>
            </div>
            <br>



        </div>

    </div>
</body>

</html>