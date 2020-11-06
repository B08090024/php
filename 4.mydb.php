<?php
    error_reporting(0);                                    //設置PHP 的報錯級別並返回當前級別(警告訊息的意思)
    
    $conn = mysqli_connect("localhost","root","", "mydb");//$conn :mysqli數據庫服務氣的連接 localhost,root, mydb
    if (mysqli_connect_error($conn))                      //如果mysqli_connect_error是錯誤
        die("資料庫連線錯誤");                             //參數表示 :資料庫連線錯誤

    mysqli_set_charset($conn, "utf8");                    //如果mysqli_connect_error是utf-8
    $result=mysqli_query($conn, "select * from user");    //$result:取出mysqli從$conn, "select * from user")  符合顯示
    while ($row=mysqli_fetch_array($result)) {            //while都是用來處理連續的程序
        echo $row[id];                                    //取出id
        echo " ";                                         
        echo $row[pwd];                                   //取出pwd
        echo "<br>";                                      //換行
    }
?>