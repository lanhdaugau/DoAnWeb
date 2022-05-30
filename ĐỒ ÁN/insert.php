
<?php 
          
      $ma_OTP= $_POST['ma_OTP'];

      $OTP= $_POST['OTP'];
      

      if($ma_OTP[0] === $OTP[0] && $ma_OTP[1] === $OTP[1] && $ma_OTP[2] === $OTP[2] && $ma_OTP[3] === $OTP[3] 
      && $ma_OTP[4] === $OTP[4] && $ma_OTP[5] === $OTP[5]){
        
        $user = $_POST['user'];

        $password=$_POST['password'];

        $email=$_POST['email'];

        $ketnoi = mysqli_connect('localhost','root','','account');

        mysqli_set_charset($ketnoi,'utf8');    

        $sql="insert into information(user,password,email)

        values('$user','$password','$email')";
        
       mysqli_query($ketnoi, $sql);
        


        

        header('location:dangnhap.php?notification=Đăng ký thành công');
         
       
      }
      else{
        header('location:dangky.php?error=MÃ OTP KHÔNG HỢP LỆ !') ;
      }