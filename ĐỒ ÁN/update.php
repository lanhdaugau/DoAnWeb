<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    input:focus{
        outline: none;
    }
</style>
<body>
    <?php
   
        $ma_OTP = $_POST['ma_OTP'];
        $OTP = $_POST['OTP'];
        if (!($ma_OTP[0] === $OTP[0] && $ma_OTP[1] === $OTP[1] && $ma_OTP[2] === $OTP[2] && $ma_OTP[3] === $OTP[3]
        && $ma_OTP[4] === $OTP[4] && $ma_OTP[5] === $OTP[5])) {
        header('location:enter-email.php?error=Mã OTP không đúng');
        exit();
            }
    
     
    $email = $_POST['email'];
    ?>
    <div style="color: red">
        <?php
            if(isset($_GET['error'])){
                echo $_GET['error'];
            }
        ?>
    </div>
    <form action="process-forgot-password.php" method="POST">
        Nhập mật khẩu mới <input style="margin-left: +20px" type="password" name="password">
        
        <br>
        <br>
        <button style="margin-left: 150px;">Ok</button>
        <input type="hidden" value="<?php echo $email ?>" name="email">
       

    </form>

</body>

</html>