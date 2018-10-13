<!DOCTYPE html>
<html>
<body>
<?php echo "我的第一段 PHP 脚本！"; ?>
<br>
<?php echo "我的第2段 PHP 脚本！"; ?>

<?php
    $text = "hello php";
    $a = 5;
    $b = 6;
    echo "$text", "$a";
    function text(){
        $x = 4;
//        echo "$a";
        echo "$x";
    }
    text();

    class Test{
        var $color;
        function Test($color="blue"){
            $this->color = $color;
        }

        function which_color(){
            return $this->color;
        }
    }
    $t = new Test();
    $tt = new Test('grey');

    echo $t -> which_color();

    echo $tt -> which_color();
?>
<br>
<br>
<br>
<?php
    function ss(){
        static $s=0;
        echo $s;
        $s++;
    }
    ss();
    ss();
    ss();
    ss();
    ss();

?>

</body>
</html>