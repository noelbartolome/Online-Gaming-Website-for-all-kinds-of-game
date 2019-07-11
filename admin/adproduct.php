<?php
require_once ("../setup/setup.php");
if(isset($_SESSION['userLogin'])){
            if($_SESSION['userlevel'] == '0'){
               header("Location:../index.php"); 
            }
    }

	if(isset($_GET['id'])){
		$id = $_GET['id'];
        $query = "DELETE FROM `product` WHERE `product_id` = $id";
		if(mysql_query($query)){
			header("Location:adproduct.php");
		}
	}
    
                    
                        echo"
                            <link rel='stylesheet' type='text/css' href='admincss.css'>
                            <table>
                            <tr>
                                <td id='nav'><a href='auser.php'>delete user</a></td>
                                <td id='nav'><a href='aproduct.php'>add product</a></td>
                                <td style='background-color:black;'><p>delete product</p></td>
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
                        <td>NAME</td>
                        <td>UNIT PRICE</td>
                        <td>STOCK</td>
                        <td>GAME</td>
                        <td>TYPE</td>
                        
                    </tr>
                    ";
                        $query = "SELECT * FROM `product` WHERE `fillornot` = '0'";
                        $result = mysql_query($query);
                        while($row = mysql_fetch_assoc($result)){
                            echo "<tr>
                                    <td>$row[product_id]</td>
                                    <td>$row[name]</td>
                                    <td>$row[unit_price]</td>
                                    <td>$row[stock]</td>
                                    <td>$row[game]</td>
                                    <td>$row[type]</td>
                                    <td id='ahor'><a href='adproduct.php?id=$row[product_id]'>X</a></td>
                                </tr>"
;
                        }
                    
echo"</table>";
?>
<head>
    <title>
    admin page
    </title>
    <link rel='shortcut icon' href="../favicon.png">
<head>