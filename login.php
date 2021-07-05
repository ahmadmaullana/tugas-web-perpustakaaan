<?php
session_start();
require 'function.php';
    if( isset($_POST["login"]) ) {

        $username = $_POST["username"];
        $password = $_POST["password"];
        echo $password;

        $result = mysqli_query($conn, "SELECT * FROM `admin` WHERE username = '$username'");

        //cek username
        if($result) {
            //cek password
            $row = mysqli_fetch_assoc($result);
            if ($password == $row["password"]) {
                $_SESSION['username'] = $row['username'];
                $_SESSION['login'] = true;
                header("Location: halaman.php");
                exit;
            }else {
            }
        }else {
            echo "tidak ada";
        }
    }else {
        echo "loginya gk masuk";
    }
?>
</body>
</html>