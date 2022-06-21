<?php
    require 'controller.php'
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
    input:focus{
        outline: none;
    }
</style>
<body>
    
   
    
    <div class="content">
        <form action="enter-email.php" method="POST">
            <input style="width: 300px;height: 25px;" type="email" placeholder="Nhập email của bạn" name="email">
            <button style="height: 26px" name="check-email">Gửi</button>
        </form>
       
    </div>
    <div style="color: red">
        <?php
        if (count($errors) == 1) {
        ?>
            <div>
                <?php
                foreach ($errors as $showerror) {
                    echo $showerror;
                }
                ?>
            </div>
        <?php
        } elseif (count($errors) > 1) {
        ?>
            <div>
                <?php
                foreach ($errors as $showerror) {
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
</body>
</html>