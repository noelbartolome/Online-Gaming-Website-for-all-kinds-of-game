
<?php
require_once ("setup/setup.php");
//add
$product_id = $_GET['product_id'];
$account_id =$_SESSION['account_id'];
$query = "SELECT * FROM `cart` WHERE `product_id` = $product_id && `account_id` = $account_id";
$result = mysql_query($query);
while ($row = mysql_fetch_assoc($result)){
    $quantity = $row['quantity'];
    $unit_price = $row['unit_price'];
    //$total_product_price = $row['total_price'];
    $added_quantity = $quantity + 1 ;
    $query = "UPDATE `cart` SET `quantity` = '$added_quantity' WHERE `product_id` ='$product_id' && `account_id` = '$account_id'";
    mysql_query($query);
    $multiply = $added_quantity * $unit_price ;
    $query = "UPDATE `cart` SET `subtotal`= '$multiply' WHERE `product_id` = '$product_id'&& `account_id` = '$account_id'";
    mysql_query($query);
    header("location: cart.php");
}
?>