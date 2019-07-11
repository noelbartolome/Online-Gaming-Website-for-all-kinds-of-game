<?php
require_once ("setup/setup.php");
//minus
$product_id = $_GET['product_id'];
$account_id =$_SESSION['account_id'];
$query = "SELECT * FROM `cart` WHERE `product_id` = $product_id && `account_id` = $account_id";
$result = mysql_query($query);
while ($row = mysql_fetch_assoc($result)){
    $quantity = $row['quantity'];
    $unit_price = $row['unit_price'];
    //$total_product_price = $row['total_price'];
    $minus_quantity = $quantity - 1;
    if($minus_quantity == 0){
    $query ="DELETE FROM `cart` WHERE `product_id` = '$product_id' && `account_id` = '$account_id'";
    mysql_query($query);
    echo"
        <script>
            alert('product removed from cart!');
            window.location='cart.php';
        </script>
    ";
    
    }else{
        
    $query = "UPDATE `cart` SET `quantity` = '$minus_quantity' WHERE `product_id` ='$product_id' && `account_id` = '$account_id'";
    mysql_query($query);
    $multiply = $minus_quantity * $unit_price ;
    $query = "UPDATE `cart` SET `subtotal`= '$multiply' WHERE `product_id` = '$product_id'&& `account_id` = '$account_id'";
    mysql_query($query);
    header("location: cart.php");
    }
}
?>