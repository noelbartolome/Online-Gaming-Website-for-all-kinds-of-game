<?php
require_once ("/setup/setup.php");
echo "<link rel='stylesheet' type='text/css' href='../css/style.css' />";
function echoUrl($url){
       if($url=='csgo'){
           $urlReturn='CSGO.php';
           return $urlReturn;
        }
        if($url=='csgoknife'){
           $urlReturn='CSGOKnife.php';
           return $urlReturn;
        }
        if($url=='csgoprimary'){
           $urlReturn='CSGOPrimary.php';
           return $urlReturn;
        }
        if($url=='csgosecondary'){
           $urlReturn='CSGOSecondary.php';
           return $urlReturn;
        }
        if($url=='dota2'){
           $urlReturn='DotA2.php';
           return $urlReturn;
        }
        if($url=='dota2arcana'){
           $urlReturn='DotA2Arcana.php';
           return $urlReturn;
        }
        if($url=='dota2courier'){
           $urlReturn='DotA2Courier.php';
           return $urlReturn;
        }
        if($url=='dota2immortal'){
           $urlReturn='DotA2Immortal.php';
           return $urlReturn;
        }
        if($url=='pubg'){
           $urlReturn='PUBG.php';
           return $urlReturn;
        }
        if($url=='pubgface'){
           $urlReturn='PUBGFace.php';
           return $urlReturn;
        }
        if($url=='pubgouter'){
           $urlReturn='PUBGOuter.php';
           return $urlReturn;
        }
        if($url=='pubgpants'){
           $urlReturn='PUBGPants.php';
           return $urlReturn;
        }
        if($url=='pubgshirt'){
           $urlReturn='PUBGShirt.php';
           return $urlReturn;
        }    
}
$account_id = $_SESSION['account_id'];
$url = $_GET['url'];
$product_id = $_GET['product_id'];
    if(isset($_GET['product_id'])){
        $query="SELECT * FROM `cart` WHERE `account_id`=$account_id && `product_id` =$product_id";
        $result = mysql_query($query);
        $numRow= mysql_num_rows($result);
        if($numRow>0){
        $return_url=echoUrl($url);
         echo "
                <script type='text/javascript'>
                alert('Product already added to the cart. Please do check your cart:D');
                window.location='$return_url';
                </script>
            ";
        }else{
            $query= "SELECT * FROM `product` WHERE `product_id`=$product_id";
            $result = mysql_query($query);
            $row = mysql_fetch_assoc($result);
            $unit_price = $row['unit_price'];
            $quantity=1;
            if($row['stock']<1){
                echo "
                <script type='text/javascript'>
                alert('Out of stock  D:');
                window.location='$return_url';
                </script>
            "; 
            }
            else{
               $query_cart = "INSERT INTO `cart` (`account_id`, `product_id`, `quantity`, `unit_price`, `subtotal`) VALUES ('$account_id','$product_id','$quantity','$unit_price','$unit_price')";
                mysql_query($query_cart);
                $return_url=echoUrl($url);
                echo "
                <script type='text/javascript'>
                alert('Product added to cart :D');
                window.location='$return_url';
                </script>
                ";  
                
                
                
            }
            
            
            
            
            
            }
        
    }
?>