<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
    }
    .content{
        width: 30%;
        position: fixed;
        top: 40%;
        left: 50%;
        transform: translate(-50%);
        text-align: center;
        
    }
    input[type=text]{
        width: 100%;
        height: 35px;
        text-align: center;
        font-size: 25px;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        font-weight: bold;
        
    }
    input:focus{
        outline: none;
    }
    .content p{
        font-size: 20px;
    }
    .content button{
        background-color: #a62424;
        color: white ;
        border: 1px #a62424 solid;
        height: 25px;
        width: 30%;
        border-radius: 5px;
    }
</style>
<body>
    
    <?php 
        $user = $_POST['user'];

        $password=$_POST['password'];   
         
        $email_get=$_POST['email'];
        if(empty($user) || empty($password) || empty($email_get))
        {
                header('location:dangky.php?error=Bạn phải điền đầy đủ thông tin');
        }
        $ketnoi=mysqli_connect('localhost','root','','account');
        mysqli_set_charset($ketnoi,'utf-8');
        $sql="select * from information";
        $result=mysqli_query($ketnoi,$sql);
        foreach ($result as $key ) {
            if($key['user']==$user){
                header('location:dangky.php?error=Tên tài khoản của bạn đã được sử dụng');
            }
            if($key['email']==$email_get){
                header('location:dangky.php?error=Email của bạn đã được sử dụng');
            }
        }
        mysqli_close($ketnoi);
        include 'mail.php';
        $email=$_POST['email'];
        $OTP=rand(99999,1000000);
        sendmail($email,$OTP);

    ?>
    <div class="content">
        <form action="insert.php" method="POST">
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
            <input type="hidden" value="<?php echo $_POST['user'] ?>" name="user">
            <input type="hidden" value="<?php echo $_POST['password'] ?>" name="password">
            <input type="hidden" value="<?php echo $OTP ?> " name="OTP">
            <input type="hidden" value="<?php echo $email ?> " name="email">
        </form>
    </div>

</body>
</html>