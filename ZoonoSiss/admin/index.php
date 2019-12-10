<?php
session_start();
if($_SESSION['usuario']==""){
    echo "<script> window.location.href='docs/page-login.php';</script>";
}
elseif ($_SESSION['usuario']!=""){
    echo "<script> window.location.href='docs/menu.php';</script>";
}