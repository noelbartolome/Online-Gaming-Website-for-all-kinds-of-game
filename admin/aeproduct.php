<?php
require_once ("../setup/setup.php");
if(isset($_SESSION['userLogin'])){
            if($_SESSION['userlevel'] == '0'){
               header("Location:../index.php"); 
            }
    }
if(isset($_POST['stock'])){
        $product_id = $_POST['product_id'];
        $stock = $_POST['stock'];
        $query = "UPDATE `product` SET `stock`='$stock' WHERE `product_id` = '$product_id'";
        if(mysql_query($query)){
           header("location:aeproduct.php");
        }
        else{
            echo"mayerror";
        }

}

if(isset($_POST['name'])&&isset($_POST['unit_price'])&&isset($_POST['stock'])&&isset($_POST['game'])&&isset($_POST['type'])){
        $product_id = $_POST['product_id'];
        $name = $_POST['name'];
        $unit_price = $_POST['unit_price'];
        $stock = $_POST['stock'];
        $game = $_POST['game'];
        $type = $_POST['type'];
        $query = "UPDATE `product` SET `name`='$name',`unit_price`='$unit_price',`stock`='$stock',`game`='$game',`type`='$type' WHERE `product_id` = '$product_id'";
        if(mysql_query($query)){
           header("location:aeproduct.php");
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
                                <td id='nav'><a href='aproduct.php'>add product</a></td>
                                <td id='nav'><a href='adproduct.php'>delete product</a></td>
                                <td style='background-color:black;'><p>edit product</p></td>
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
                                    <td id='ahor'><a href='aeproduct.php?id=$row[product_id]&edit=1'>edit</a></td>
                                    <td id='ahor'><a href='aeproduct.php?id=$row[product_id]&addstock=1'>add stock</a></td>
                                </tr>"
;
                        }
                    
echo"</table>";
if(isset($_GET['addstock'])){
    $product_id = $_GET['id'];
    $query = "SELECT `product_id`, `name`, `unit_price`, `stock`, `game`, `type` FROM `product` WHERE `product_id` = '$product_id'";
    $result = mysql_query($query);
    $row = mysql_fetch_assoc($result);
    $name = $row['name'];
    echo"
    </br>
    </br>
    <div id='btm'> <p>Item being edited <strong>$name</strong></p> </div>
    
    <div id='formdiv'>
    <form id='form' method='post' action='aeproduct.php'/>
        <input type='text' name='product_id' placeholder='Product id $row[product_id]'value='$row[product_id]' readonly/></br><input type='text' name='stock' placeholder='stock' required/></br>
        <input type='submit' id='submit' name='submit' value='addproduct'/>
    </form>
    
    ";
    
    
    
    
    
}
if(isset($_GET['edit'])){
    $product_id = $_GET['id'];
    $query = "SELECT `product_id`, `name`, `unit_price`, `stock`, `game`, `type` FROM `product` WHERE `product_id` = '$product_id'";
    $result = mysql_query($query);
    $row = mysql_fetch_assoc($result);
    $name = $row['name'];
    echo"
    </br>
    </br>
    <div id='btm'> <p>Item being edited <strong>$name</strong></p> </div>
    
    <div id='formdiv'>
    <form id='form' method='post' action='aeproduct.php'/>
        <input type='text' name='product_id' placeholder='Product id $row[product_id]'value='$row[product_id]' readonly/></br>
        <input type='text' name='name' placeholder='product name' required enctype='multipart/form-data'></br>
        <input type='text' name='unit_price' placeholder='price per unit' required/></br>
        <input type='text' name='stock' placeholder='stock' required/></br>
        <input type='text' name='game' placeholder='game' required/></br>
        <input type='text' name='type' placeholder='type' required/></br>
        <input type='submit' id='submit' name='submit' value='addproduct'/>
    </form>
    
    ";
    
    
    
    
    
}
?>



<head>
    <title>
    admin page
    </title>
    <link rel='shortcut icon' href="../favicon.png">
<head>