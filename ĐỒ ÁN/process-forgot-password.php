<?php
    $password=$_POST['password'];
   
    
    $ketnoi=mysqli_connect('localhost','root','','account');
    mysqli_set_charset($ketnoi,'utf-8');
    $email=$_POST['email'];
    
    
    $sql="update information
        set password='$password'
        where email='$email'";
    mysqli_query($ketnoi,$sql);
    
        header('location:dangnhap.php?notification=Reset mật khẩu thành công');
    
    
   