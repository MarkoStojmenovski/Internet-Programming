<?php
if(isset($_POST['submit'])){
    $temp = $_POST['temp'];
    $res = (($temp - 32) * 5 / 9);
    echo $res;
}
?>