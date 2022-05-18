<?php
    header('Content-Type: text/html; charset=utf-8');
    $conn = mysqli_connect('localhost', 'root', '', 'data') or die ('Lỗi kết nối'); mysqli_set_charset($conn, "utf8");

    if(isset($_POST['submit'])){
        $username = trim($_POST['username']);
        $email = trim($_POST['email']);
        $phone = trim($_POST['phone']);
        $noidung = trim($_POST['noidung']);


        if (empty($username)) {
            array_push($errors, "Username bắt buộc"); 
        }
        if (empty($email)) {
            array_push($errors, "Email bắt buộc"); 
        }
        if (empty($phone)) {
            array_push($errors, "SDT bắt buộc"); 
        }
        if (empty($noidung)) {
            array_push($errors, "Noidung bắt buộc"); 
        }

        $sql = "SELECT * FROM member WHERE username = '$username' OR email = '$email'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0)
        {
            echo '<script language="javascript">alert("Bị trùng tên hoặc chưa nhập tên!"); window.location="lienhe.php";</script>';

            die ();
        }
        else {
            $sql = "INSERT INTO member (username, email, phone, noidung) VALUES ('$username','$email','$phone','$noidung')";
            echo '<script language="javascript">alert("Lưu dữ liệu vào data thành công!"); window.location="lienhe.php";</script>';

            if (mysqli_query($conn, $sql)){
                echo "Họ và Tên: ".$_POST['username']."<br/>";
                echo "Email: ".$_POST['email']."<br/>";
                echo "Số điện thoại: ".$_POST['phone']."<br/>";
                echo "Nội Dung: " .$_POST['noidung']."<br/>";
            }
            else {
                echo '<script language="javascript">alert("Có lỗi trong quá trình xử lý"); window.location="lienhe.php";</script>';
            }
        }
    }
?>