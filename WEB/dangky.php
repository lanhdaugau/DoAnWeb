<?php
    require_once 'controller.php'
?>
<!DOCTYPE html>
<html lang="vie">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
    <link rel="stylesheet" href="style.css">
</head>
<div class="container">
    
    <section>
        <img style="width: 650px;height:400px;padding-top: 10%;" src="https://phapluatbandoc.mediacdn.vn//150157425591193600/2020/8/11/2020070716320763410-15971147028401677168894.gif" alt="banner1">

        <article>

            <div class="dangnhap">
                <h1 class="dangnhap-heading">Đăng ký</h1>
                <div style="text-align:center;color: red">
                <?php
                        if(count($errors) == 1){
                            ?>
                            <div >
                                <?php
                                foreach($errors as $showerror){
                                    echo $showerror;
                                }
                                ?>
                            </div>
                            <?php
                        }
                        elseif(count($errors) > 1){
                            ?>
                            <div >
                                <?php
                                foreach($errors as $showerror){
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

                <form action="dangky.php" method="post">
                    <label for="pass" class="dangnhap-label"></label>
                    <input type="text" class="input" placeholder="Tên đầy đủ">
                    <label for="pass" class="dangnhap-label"></label>
                    <input type="email" id="fullname" class="input" name="email" placeholder="Email">
                    <label for="pass" class="dangnhap-label"></label>
                    <input type="text" class="input" name="user" placeholder="Tên tài khoản">
                    <label for="pass" class="dangnhap-label"></label>
                    <input type="password" id="pass" class="input" name="password" placeholder="Mật khẩu">
                   
                    <button class="dangnhap-submit" name="signup" >Đăng ký</button>
                </form>

                <div style="text-align: center;padding-top: 20px;">
                    <span class="dangky" onclick="window.open('enter-email.php','_self')">Quên mật khẩu</span> <span onclick="window.open('dangnhap.php','_self')" class="dangky">Đã có tài khoản</span>
                </div>
               



            </div>
        </article>
    </section>


</div>

</body>

</html>