<?php
    $user= $_POST['user'];
    $password= $_POST['password'];
    $ketnoi=mysqli_connect('localhost','root','','account');
    $sql="select * from information";
    mysqli_set_charset($ketnoi,'utf-8');
    $result=mysqli_query($ketnoi,$sql);
    foreach ($result as $key ) {
        if($key['user']==$user && $key['password']==$password){
            header("location:home.php?account=$user");
            exit();
        }
    }
    header('location:dangnhap.php?error=Tên đăng nhập hoặc mật khẩu của bạn không chính xác .Vui lòng thử lại');