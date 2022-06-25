<?php
    require_once 'controller.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    input:focus {
        outline: none;
    }
</style>

<body>

    <form action="update.php" method="POST">
        Nhập mật khẩu mới <input style="margin-left: +20px" type="password" name="password">

        <br>
        <br>
        <button style="margin-left: 150px;" name="change-password" type="submit">Ok</button>


    </form>

</body>

</html>