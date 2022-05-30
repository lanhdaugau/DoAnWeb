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
    <div style="color: red">
        <?php
            if(isset($_GET['error'])){
                echo $_GET['error'];
            }
        ?>
    </div>
    <div class="content">
        <form action="confirm-forget.php" method="POST">
            <input style="width: 300px;height: 25px;" type="email" placeholder="Nhập email của bạn" name="email">
            <button style="height: 26px">Gửi</button>
        </form>
       
    </div>
</body>
</html>