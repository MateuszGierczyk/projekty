<?php
    require_once '../functions/cube.php';
    require_once '../functions/rectangle.php';
    if (isset($_POST)){
        switch($_POST['geometricFigure']){
            case 'cube':
                if(!$_POST['a']){
                    echo "<script>history.back();</script>";
                    exit();
                }
                $a=$_POST['a'];
                echo "Pole wynosi: ".cube($a)." cm<sup>2</sup>";
                break;
            case 'rectangle':
                if(!$_POST['a'] || !$_POST['b']){
                    echo "<script>history.back();</script>";
                    exit();
                }
                $a=$_POST['a'];
                $b=$_POST['b'];
                echo "Pole wynosi: ".rectangle($a, $b)." cm<sup>2</sup>";
                break;
        }
    }

?>