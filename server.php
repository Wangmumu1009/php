<?php
    $name = $_GET['username'];
    $p = $_GET['pwd'];

    if ($name=='admin' && $p =='123'){
        echo '登陆成功';
    }else{
        echo '登陆失败';
    }

?>