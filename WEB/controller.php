<?php
session_start();
require "connection.php";
$email = "";
$user = "";
$errors = array();

//if user signup button
if (isset($_POST['signup'])) {
    $user = mysqli_real_escape_string($con, $_POST['user']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $email_check = "SELECT * FROM information WHERE email = '$email'";
    $res = mysqli_query($con, $email_check);
    if (mysqli_num_rows($res) > 0) {
        $errors['email'] = "Email này đã tồn tại!";
    }
    $user_check = "SELECT * FROM information WHERE user = '$user'";
    $res1 = mysqli_query($con, $user_check);
    if (mysqli_num_rows($res1) > 0) {
        $errors['user'] = "Tên tài khoản đã tồn tại!";
    }
    if (count($errors) === 0) {
        $encpass = password_hash($password, PASSWORD_BCRYPT);
        $code = rand(999999, 111111);
        $status = "notverified";
        $insert_data = "INSERT INTO information(user,email,password, code, status)
                        values('$user','$email','$encpass', '$code', '$status')";
        $data_check = mysqli_query($con, $insert_data);
        if ($data_check) {
            include 'mail.php';

            sendmail($email, $code);
            header('location:confirm.php');
        } else {
            $errors['db-error'] = "Lỗi trong quá trình thêm dữ liệu người dùng!";
        }
    }
}
//if user click verification code submit button
if (isset($_POST['check'])) {

    $otp_code = mysqli_real_escape_string($con, $_POST['otp']);
    $check_code = "SELECT * FROM information WHERE code = $otp_code";
    $code_res = mysqli_query($con, $check_code);
    if (mysqli_num_rows($code_res) > 0) {
        $fetch_data = mysqli_fetch_assoc($code_res);
        $fetch_code = $fetch_data['code'];
        $email = $fetch_data['email'];
        $code = 0;
        $status = 'verified';
        $update_otp = "UPDATE information SET code = $code, status = '$status' WHERE code = $fetch_code";
        $update_res = mysqli_query($con, $update_otp);
        if ($update_res) {
            $_SESSION['user'] = $user;
            $_SESSION['email'] = $email;
            header('location: dangnhap.php?notification = Đăng ký tải khoản thành công');
            exit();
        } else {
            $errors['otp-error'] = "Lỗi trong quá trình đăng ký!";
        }
    } else {
        $errors['otp-error'] = "Bạn nhập OTP không hợp lệ!";
    }
}

//if user click login button
if (isset($_POST['login'])) {
    $user = mysqli_real_escape_string($con, $_POST['user']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $user_check = "SELECT * FROM information WHERE user = '$user'";
    $res = mysqli_query($con, $user_check);
    if (mysqli_num_rows($res) > 0) {
        $fetch = mysqli_fetch_assoc($res);
        $fetch_pass = $fetch['password'];
        if (password_verify($password, $fetch_pass)) {
            $_SESSION['email'] = $email;
            $status = $fetch['status'];
            if ($status == 'verified') {
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;
                header('location: home.php');
            } else {

                header('location: confirm.php');
            }
        } else {
            $errors['email'] = "Tên tài khoản hoặc mật khẩu không hợp lệ";
        }
    } else {
        $errors['email'] = "Tên tài khoản chưa được đăng ký !";
    }
}

//if user click continue button in forgot password form
if (isset($_POST['check-email'])) {
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $check_email = "SELECT * FROM information WHERE email='$email'";
    $run_sql = mysqli_query($con, $check_email);
    if (mysqli_num_rows($run_sql) > 0) {
        $code = rand(999999, 111111);
        $insert_code = "UPDATE information SET code = '$code' WHERE email = '$email'";
        $run_query =  mysqli_query($con, $insert_code);
        if ($run_query) {
            include 'mail.php';
            sendmail($email, $code);
        } else {
            $errors['db-error'] = "Không hợp lệ!";
        }
    } else {
        $errors['email'] = "Email này đã tồn tại!";
    }
}

//if user click check reset otp button
if (isset($_POST['check-reset-otp'])) {
    $otp_code = mysqli_real_escape_string($con, $_POST['otp']);
    $check_code = "SELECT * FROM information WHERE code = $otp_code";
    $code_res = mysqli_query($con, $check_code);
    if (mysqli_num_rows($code_res) > 0) {
        $fetch_data = mysqli_fetch_assoc($code_res);
        $email = $fetch_data['email'];
        $_SESSION['email'] = $email;

        header('location: update.php');
        exit();
    } else {
        $errors['otp-error'] = "Bạn nhập mã OTP không hợp lệ!";
    }
}

//if user click change password button
if (isset($_POST['change-password'])) {

    $password = mysqli_real_escape_string($con, $_POST['password']);


    $code = 0;
    $email = $_SESSION['email']; //getting this email using session
    $encpass = password_hash($password, PASSWORD_BCRYPT);
    $update_pass = "UPDATE information SET code = $code, password = '$encpass' WHERE email = '$email'";
    $run_query = mysqli_query($con, $update_pass);
    if ($run_query) {
      
        header('Location: dangnhap.php?notification= Thay đôi mật khẩu thành công');
    } else {
        $errors['db-error'] = "Lỗi trong quá khi thay đổi mật khẩu!";
    }
}
