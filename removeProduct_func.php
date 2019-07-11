<?php
require_once ("setup/setup.php");
//remove product
$product_id = $_GET['product_id'];
$account_id =$_SESSION['account_id'];
$query = "SELECT * FROM `cart` WHERE `product_id` = $product_id && `account_id` = $account_id";
$result = mysql_query($query);
while ($row = mysql_fetch_assoc($result)){
    $query ="DELETE FROM `cart` WHERE `product_id` = '$product_id' && `account_id` = '$account_id'";
    mysql_query($query);
     echo"
        <script>
            alert('product removed from cart!');
            window.location='cart.php';
        </script>
    ";
}
?>