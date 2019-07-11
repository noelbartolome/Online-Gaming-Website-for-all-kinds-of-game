<?php

?>
<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <?php
            session_start();
           
            $a1=$_SESSION['userlogin'];
            $a2=$_SESSION['uname'];
            $a3=$_SESSION['userlevel'];
            $a4=$_SESSION['account_id'];
        
            $a5=$_SESSION['fname'];
            $a6=$_SESSION['lname'];
            $a7=$_SESSION['address'];
            $a8=$_SESSION['mobile_num'];
            $a9=$_SESSION['email'];

        ?>
        <p>userlogin: <?php echo("$a1"."<br />");?></p>
        <p>uname: <?php echo("$a2"."<br />");?></p>
        <p>userlevel: <?php echo("$a3"."<br />");?></p>
        <p>account_id: <?php echo("$a4"."<br />");?></p>
        <p>fname: <?php echo("$a5"."<br />");?></p>
        <p>lname: <?php echo("$a6"."<br />");?></p>
        <p>address: <?php echo("$a7"."<br />");?></p>
        <p>mobile_num: <?php echo("$a8"."<br />");?></p>
        <p>email: <?php echo("$a9"."<br />");?></p>
        
    </body>
</html>