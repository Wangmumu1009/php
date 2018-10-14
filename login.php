<?php
    $flag = true;
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['username'];
        $p = $_POST['pwd'];
        if ($name == 'zl' && $p =='123'){
            $flag = false;
        }else{
            $flag = true;
        }
    }

?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    if ($flag){
?>
<form action="login.php" method="post">
    用户名：<input type="text" name="username">
    <br>
    密码：<input type="password" name="pwd">
    <br>
    性别：<input type="radio" name="sex" value="M">男
         <input type="radio" name="sex" value="F">女<br>
    爱好：<input type="checkbox" name="hobby[]" value="篮球">篮球
         <input type="checkbox" name="hobby[]" value="排球">排球
         <input type="checkbox" name="hobby[]" value="足球">足球<br>
    学校：<select name="school">
            <option value="林大">林大</option>
            <option value="农大">农大</option>
            <option value="理工">理工</option>
         </select>
    <input type="submit" value="登录">
    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            echo '用户名密码错误';
        }
    ?>
</form>
<?php }else{
        echo '登陆成功';
}?>
</body>
</html>