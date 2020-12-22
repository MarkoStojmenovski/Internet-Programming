<?php
session_start();

if(isset($_SESSION['sIndex']))
$_SESSION['sIndex']="4193";
echo "Session variables are set.";
?>