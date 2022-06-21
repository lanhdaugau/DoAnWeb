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
    <div class="content">
        <form action="confirm-forget.php" method="POST">
            <p>
                Nhập mã OTP để xác nhận :
            </p>
            <br> <input type="text" placeholder="Nhập mã" name="otp">
            <br>
            <br>
            <input type="checkbox"> Xác nhận bạn không phải robot
            <br>
            <br>
            <button name="check-reset-otp" type="submit">Xác nhận</button>
            
            
        </form>
    </div>

</body>

</html>