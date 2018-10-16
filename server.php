<?php
//    $name = $_GET['username'];
//    $p = $_GET['pwd'];

//    echo 'success';

//    if ($name=='admin' && $p =='123'){
//        echo '登陆成功';
//    }else{
//        echo '登陆失败';
//    }




       $name = $_GET['name'];
       $p1 = $_GET['p1'];
       $p2 = $_GET['p2'];
       if($name == ''){
           echo 'nameErr';
       }elseif ($p1 == ''){
           echo 'p1Err';
       }elseif ($p2 == ''){
           echo ('p2Err');
       }elseif ($p1 != $p2){
           echo ('Error');
       }else{
           echo 'success';
       }
?>