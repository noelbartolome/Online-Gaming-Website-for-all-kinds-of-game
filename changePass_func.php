<?php
require_once ("setup/setup.php");
$account_id = $_SESSION['account_id'];
$newpw = $_POST['newpw'];
$oldpw = $_POST['oldpw'];
$query = "SELECT `account_id`, `uname`, `pw`, `userlevel` FROM `accounts` WHERE `pw` = '$oldpw' AND `account_id` = '$account_id'";
$result = mysql_query($query);
$numRows = mysql_num_rows($result);
    if($numRows>0){
       $query_newpw = "UPDATE `accounts` SET `pw`='$newpw' WHERE `account_id` = '$account_id' ";
        mysql_query($query_newpw); 
        echo"
            <script type='text/javascript'>
                alert('Sucessfully updated your password');
                window.location='customer-account.php';
            </script>
        ";
    }else{
        echo"
            <script type='text/javascript'>
                alert('old password doesnt match');
                window.location='customer-account.php';
            </script>
        ";
    }
?>