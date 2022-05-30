<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
    }

    .content {
        width: 30%;
        position: fixed;
        top: 40%;
        left: 50%;
        transform: translate(-50%);
        text-align: center;

    }

    input[type=text] {
        width: 100%;
        height: 35px;
        text-align: center;
        font-size: 25px;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        font-weight: bold;

    }

    input:focus {
        outline: none;
    }

    .content p {
        font-size: 20px;
    }

    .content button {
        background-color: #a62424;
        color: white;
        border: 1px #a62424 solid;
        height: 25px;
        width: 30%;
        border-radius: 5px;
    }
</style>

<body>

    <?php


    $email_get = $_POST['email'];
    if (empty($email_get)) {
        header('location:enter-email.php?error=Email không được bỏ trống');
    }
    
   
    $ketnoi=mysqli_connect('localhost','root','','account');
    mysqli_set_charset($ketnoi,'utf-8');
    $sql="select * from infortmation";
    $result= mysqli_query($ketnoi,$sql);
    $check=false;
    foreach ($sesult as $key) {
        if($result['email']==$email_get){
            $check=true;
        }
    }
    if(!$check){
        header('location:enter-email.php?error=Email của bạn chưa được đăng kí');
        exit();
    }
    include 'mail.php';

    $OTP = rand(99999, 1000000);
    sendmail($email_get, $OTP);
    


  


    ?>
    <div class="content">
        <form action="update.php" method="POST">
            <p>
                Nhập mã OTP để xác nhận :
            </p>
            <br> <input type="text" placeholder="Nhập mã" name="ma_OTP">
            <br>
            <br>
            <input type="checkbox"> Xác nhận bạn không phải robot
            <br>
            <br>
            <button>Xác nhận</button>
            
            <input type="hidden" value="<?php echo $email_get ?> " name="email">
            <input type="hidden" value="<?php echo $OTP ?> " name="OTP">
        </form>
    </div>

</body>

</html>