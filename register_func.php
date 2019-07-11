<?php
require_once ("setup/setup.php");
if(isset($_POST['uname'])&&isset($_POST['pw']))
    $uname = $_POST['uname'];
    $pw = $_POST['pw'];
    $query = "SELECT * FROM `accounts` WHERE `uname` = '$uname'";
    $result = mysql_query($query);
    $numRow = mysql_num_rows($result);
    if($numRow>0){
        echo"
                    <script type='text/javascript'>
                    alert('Username Already Exist! D:');
                    window.location='register.php';
                    </script>
        ";
        
    }
    else{
        $query = "INSERT INTO `accounts`(`uname`,`pw`,`userlevel`) VALUES ('$uname','$pw','0')";
        if(mysql_query($query)){
            echo "
                <script type='text/javascript'>alert('SignUp Successful :D');
                window.location='index.php';
                </script>
            ";
        }
    }

?>