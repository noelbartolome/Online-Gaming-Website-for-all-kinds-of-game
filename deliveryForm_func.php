<?php
    require_once ("setup/setup.php");
    $_SESSION['fname'] = $_POST['fname'];
    $_SESSION['lname'] = $_POST['lname'];
    $_SESSION['address'] = $_POST['address'];
    $_SESSION['mobile_num'] = $_POST['mobile_num'];
    $_SESSION['email'] = $_POST['email'];
    header("Location:checkout2.php");  
?>