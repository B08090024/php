<?php                                                       //< ? ? >這裡是多行 PHP 註解
    if (($_GET[id] == "john") && ($_GET[pwd]=="john1234"))  //如果密碼是join和密碼是joihn1234密碼是john1234
         echo "Welcome";                                    //則字串會出現 成功登入
    else                                                    //如果不是
        echo "fail login";                                  //則是登入失敗
?>