<?php
require_once ("../setup/setup.php");
if(isset($_SESSION['userLogin'])){
            if($_SESSION['userlevel'] == '0'){
               header("Location:../index.php"); 
            }
    }

	if(isset($_GET['id'])){
		$id = $_GET['id'];
        $query = "DELETE FROM `accounts` WHERE `account_id` = $id";
		if(mysql_query($query)){
			echo"
                alert('User Deleted D:');
                </script>
                ";
			header("Location:auser.php");
		}
	}
    
                    
                        echo"
                            <link rel='stylesheet' type='text/css' href='admincss.css'>
                            <table>
                            <tr>
                                <td style='background-color:black;'><p>delete user</p></td>
                                <td id='nav'><a href='aproduct.php'>add product</a></td>
                                <td id='nav'><a href='adproduct.php'>delete product</a></td>
                                <td id='nav'><a href='aeproduct.php'>edit product</a></td>
                            <tr>
                            </table>
                            <br>
                            <br>
                            <p>you are now logged in as <strong style='background-color:black;'>[$_SESSION[uname]]</strong></br><a href='../logout.php'>xXx_Log Out_xXx</a></p>
                            <br>
                            <br>
                         
                        ";


echo"<table>";
echo"
                    <tr>
                        <td>ID</td> 
                        <td>UNAME</td>
                        <td>PASSWORD</td>
                       
                    </tr>
                    ";
                        $query = "SELECT * FROM `accounts` WHERE `userlevel` = 0";
                        $result = mysql_query($query);
                        while($row = mysql_fetch_assoc($result)){
                            echo "<tr>
                                    <td>$row[account_id]</td>
                                    <td>$row[uname]</td>
                                    <td>$row[pw]</td>
                                    <td  id='ahor'><a href='auser.php?id=$row[account_id]'>delete</a></td>
                                </tr>";
                        }
                    
echo"</table>";
?>
<head>
    <title>
    admin page
    </title>
    <link rel='shortcut icon' href="../favicon.png">
<head>