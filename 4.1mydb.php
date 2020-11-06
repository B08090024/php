<?php
    error_reporting(0);
    $conn = mysqli_connect("localhost", "root", "", "mydb"); //$conn :mysqli數據庫服務器的連接 localhost,root, mydb
    
    $result=mysqli_query($conn, "select * from user");      //$result:取出mysqli從$conn, "select * from user")

    $row=mysqli_fetch_array($result);                       //取出 item1 的值
 
    echo $row[id]. + " " .+ $row[pwd];                        //取出id 以及密碼
?>