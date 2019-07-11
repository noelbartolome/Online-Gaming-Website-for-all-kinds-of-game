<?php
require_once ("setup/setup.php");
 
    if(isset($_POST['uname'])&&isset($_POST['pw'])){
        $uname = $_POST['uname'];
        $pw = $_POST['pw'];
        $query = "SELECT * FROM `accounts` WHERE `uname` = '$uname' AND `pw` = '$pw'";
        $result = mysql_query($query,$conn);
        $numRows = mysql_num_rows($result);
            if($numRows>0){
                $row = mysql_fetch_assoc($result);
                $_SESSION['userlogin'] = "1";
                $_SESSION['uname'] = $row['uname'];
                $_SESSION['userlevel'] = $row['userlevel'];
                $_SESSION['account_id'] = $row['account_id'];
                if($row['userlevel'] == '1'){
                    header("Location:admin/auser.php");
                }else{
                    header("Location:index.php");	
                }
            }else{
                echo"
                <script type='text/javascript'>
                    alert('Incorrect Username or Password D:');
                    window.location='index.php';
                </script>
                ";
            }
        }






?>