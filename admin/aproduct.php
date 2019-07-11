<?php
require_once ("../setup/setup.php");
if(isset($_SESSION['userLogin'])){
            if($_SESSION['userlevel'] == '0'){
               header("Location:../index.php"); 
            }
    }

	
	if(isset($_POST['name'])&&isset($_POST['unit_price'])&&isset($_POST['stock'])&&isset($_POST['game'])&&isset($_POST['type'])){
        $name = $_POST['name'];
        $unit_price = $_POST['unit_price'];
        $stock = $_POST['stock'];
        $game = $_POST['game'];
        $type = $_POST['type'];
        $query = "INSERT INTO `product` (`name`,`unit_price`,`stock`,`game`,`type`,`fillornot`)VALUES ('$name','$unit_price','$stock','$game','$type','0')";
        if(mysql_query($query)){
            echo"
            <script type='text/javascript'>alert('Product added sucessfully :D');
                window.location='aproduct.php';
                </script>";
        }
        else{
            echo"mayerror";
        }
        
    }
			
        
                    
                        echo"
                            <link rel='stylesheet' type='text/css' href='admincss.css'>
                            <table>
                            <tr>
                                <td id='nav'><a href='auser.php'>delete user</a></td>
                                <td style='background-color:black;'><p>add product</p></td>
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



echo"
<div id='formdiv'>
    <form id='form' method='post' action='aproduct.php'/>
        <input type='text' name='name' placeholder='product name' required enctype='multipart/form-data'></br>
        <input type='text' name='unit_price' placeholder='price per unit' required/></br>
        <input type='text' name='stock' placeholder='stock' required/></br>
        <input type='text' name='game' placeholder='game' required/></br>
        <input type='text' name='type' placeholder='type' required/></br>
        <input type='submit' id='submit' name='submit' value='addproduct'/>
    </form>

</div>
<div id='btm'>
    <p><Strong>Item types<Strong></p>
    <p>dota2 immortal</br>
    dota2 arcana</br>
    dota2 courier</br>
    csgo primary</br>
    csgo secondary</br>
    csgo knife</br>
    pubg shirt</br>
    pubg pants</br>
    pubg outer</br>
    pubg face</p>
    
</div>












";



echo"</table>";
?>

<head>
    <title>
    admin page
    </title>
    <link rel='shortcut icon' href="../favicon.png">
<head>