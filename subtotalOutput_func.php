 <?php


function subtotal($test)
    {
        $total = 0;
        $product = mysql_query("SELECT * FROM `cart` WHERE `account_id` =  '$_SESSION[account_id]'")or die(mysql_error());	
        while($row=mysql_fetch_array($product))
        {
            $product_id = $row['product_id'];
            $prod_price = mysql_query("SELECT * FROM `cart` WHERE `product_id`='$product_id' && `account_id` = '$_SESSION[account_id]'")or die(mysql_error());
            while($p_price=mysql_fetch_array($prod_price))
            {
				$product_price = array($p_price['subtotal']);
				$values = array_sum($product_price);
                $total +=$values;
            }
        }
        if($test=="subtotal")
        {
           echo "&#8369;".$total;  
        }
        if($test=="total")
        {
            $totalWithFee = $total+100;
            echo "&#8369;".$totalWithFee; 
        }
    }
   ?>