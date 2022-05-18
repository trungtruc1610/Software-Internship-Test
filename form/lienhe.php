<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css"/>
</head>

</html>
<body>

    <form method="post" action="lienhe.php" class="form">

        <h2>Form Liên Hệ</h2>
        Họ và Tên: <input type="text" name="username" value="" required>
        <br><br>
        Email: <input type="email" name="email" value="" required/>
        <br><br>
        Số Điện Thoại: <input type="text" name="phone" value="" required/>
        <br><br>
        Nội Dung Liên Hệ: <input type="text" name="noidung" value="" required/>
        <br><br>
        <input type="submit" name="submit" value="Submit"/>
        <input type="submit" name="clear" value="clear"/>

        <?php require 'xuly.php';?>
    </form>

</body>
</html>