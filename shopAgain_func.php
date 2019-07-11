<?php
require_once("setup/setup.php");

    $query = "SELECT * FROM `cart` WHERE `account_id` = $_SESSION[account_id] ";
    $result = mysql_query($query);
    while($row = mysql_fetch_assoc($result)){
    $query_product = "SELECT * FROM `product` WHERE `product_id` = $row[product_id]";
    $result_product = mysql_query($query_product);
    $row_product = mysql_fetch_assoc($result_product);
    $rowProductStock = $row_product['stock'];
    $rowCartStock = $row['stock'];
    $stockNew = $rowProductStock - $rowCartStock;
    $rowProductId = $row['product_id'];   
        
        
        
        
    $query_update = "UPDATE `product` SET `stock` = '$stockNew' WHERE `product_id` ='$rowProductID'";
    mysql_query($query_update);
        }


$account_id= $_SESSION['account_id'];
mysql_query("DELETE FROM `cart` WHERE `account_id` = '$account_id'");
header("Location:index.php");
?>