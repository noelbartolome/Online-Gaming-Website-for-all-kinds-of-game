<?php 
require_once ("setup/setup.php");
require_once ("subtotalOutput_func.php");
if(isset($_SESSION['userlogin'])){
        if($_SESSION['userlevel'] == '1'){
                   header("Location:admin/auser.php"); 
        }
        
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    
    <title>
        Steam Market
    </title>

    <meta name="keywords" content="">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100' rel='stylesheet' type='text/css'>

    <!-- styles -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">

    <!-- theme stylesheet -->
    <link href="css/style.default.css" rel="stylesheet" id="theme-stylesheet">

    <!-- your stylesheet with modifications -->
    <link href="css/custom.css" rel="stylesheet">

    <script src="js/respond.min.js"></script>

    <link rel="shortcut icon" href="favicon.png">



</head>

<body>
 
      <!-- *** TOPBAR ***
 _________________________________________________________ -->
    <div id="top">
        <div class="container">
            <div class="col-md-6 offer" data-animate="fadeInDown">
              
            </div>
            <div class="col-md-6" data-animate="fadeInDown">
                <ul class="menu">
                    <?php
                    if(isset($_SESSION['userlogin'])){
                        echo"
                        <li>
                            <a href='customer-account.php'>$_SESSION[uname]</a>
                        </li>
                        <li>
                            <a href='logout.php'>Log Out</a>
                        </li>
                        ";
                    }
                    else{
                       echo"
                        <li>
                            <a href='#' data-toggle='modal' data-target='#login-modal'>Login</a>
                        </li>
                        <li>
                            <a href='register.php'>Register</a>
                        </li>
                        ";      
                        }
                    ?>
                </ul>
            </div>
        </div>
        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
            <div class="modal-dialog modal-sm">

                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="Login">Customer login</h4>
                    </div>
                    <div class="modal-body">
                        <form action="login.php" method="post" id="form">
                            <div class="form-group">
                                <input name="uname" type="text" class="form-control" id="email-modal" placeholder="username" required>
                            </div>
                            <div class="form-group">
                                <input name="pw" type="password" class="form-control" id="password-modal" placeholder="password" required>
                            </div>

                            <p class="text-center">
                                <button type="submit" form="form" value="submit" class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in</button>
                            </p>

                        </form>

                        <p class="text-center text-muted">Not registered yet?</p>
                        <p class="text-center text-muted"><a href="register.php"><strong>Register now</strong></a>! It is easy and done in 1&nbsp;minute and gives you access to special discounts and much more!</p>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- *** TOP BAR END *** -->

    <!-- *** NAVBAR ***
 _________________________________________________________ -->

    <div class="navbar navbar-default yamm" role="navigation" id="navbar">
        <div class="container">
            <div class="navbar-header">

                <a class="navbar-brand home" href="index.php" data-animate-hover="bounce">
                    <img src="img/logox3.png" alt="Steam Market Logo" class="hidden-xs">
                    <img src="img/logosmallx3.png" alt="Steam Market Logo" class="visible-xs"><span class="sr-only">go to homepage</span>
                </a>
                <div class="navbar-buttons">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-align-justify"></i>
                    </button>
                  <?php
                  
                        
                  
                        if(isset($_SESSION['userlogin'])){
                            echo"
                            <a class='btn btn-default navbar-toggle' href='cart.php'>
                                <i class='fa fa-shopping-cart'></i>  <span class='hidden-xs'></span>
                            </a>
                    
                            ";

                        }
                    ?>
   
                    
                </div>
            </div>
            <!--/.navbar-header -->

            <div class="navbar-collapse collapse" id="navigation">

                <ul class="nav navbar-nav navbar-left">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="dropdown yamm-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Products<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="yamm-content">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5>DotA 2</h5>
                                            <ul>
                                                <li>
                                                    <a href="DotA2Immortal.php">Immortals</a>
                                                </li>
                                                <li>
                                                    <a href="DotA2Arcana.php">Arcanas</a>
                                                </li>
                                                <li>
                                                    <a href="DotA2Courier.php">Couriers</a>
                                                </li>
                                                <li>
                                                    <a href="DotA2.php">All/Others</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h5>CSGO</h5>
                                            <ul>
                                                <li>
                                                    <a href="CSGOPrimary.php">Primary Weapon</a>
                                                </li>
                                                <li>
                                                    <a href="CSGOSecondary.php">Secondary</a>
                                                </li>
                                                <li>
                                                    <a href="CSGOKnife.php">Knife</a>
                                                </li>
                                                <li>
                                                    <a href="CSGO.php">All/Others</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h5>PUBG</h5>
                                            <ul>
                                                <li>
                                                    <a href="PUBGShirt.php">Shirt</a>
                                                </li>
                                                <li>
                                                    <a href="PUBGPants.php">Pants</a>
                                                </li>
                                                <li>
                                                    <a href="PUBGOuter.php">Outer Garments</a>
                                                </li>
                                                <li>
                                                    <a href="PUBGFace.php">Face</a>
                                                </li>
                                                <li>
                                                    <a href="PUBG.php">All/Others</a>
                                                </li>
                                               
                                            </ul>
                                        </div>
                                    
                                    </div>
                                </div>
                                <!-- /.yamm-content -->
                            </li>
                        </ul>
                    </li>
                    <li>
                         <a href="about.php">About Us</a>
                    </li>
                    <li >
                         <a href="contact.php">Contact Us</a>
                    </li>
                    
                </ul>

            </div>
            <!--/.nav-collapse -->

            <div class="navbar-buttons">
                <?php
                    if(isset($_SESSION['userlogin'])){
                        $query = "SELECT * FROM `cart` WHERE `account_id` = '$_SESSION[account_id]'";
                        $result = mysql_query($query);
                        $rowcount = mysql_num_rows($result);
                        echo"
                        <div class='navbar-collapse collapse right' id='basket-overview'>
                            <a href='cart.php' class='btn btn-primary navbar-btn'><i class='fa fa-shopping-cart'></i><span class='hidden-sm'>$rowcount items in cart</span></a>
                        </div>
                        ";    
                    }
                ?>
                <!--/.nav-collapse -->
            </div>
            <!--/.nav-collapse -->

        </div>
        <!-- /.container -->
    </div>
    <!-- /#navbar -->

    <!-- *** NAVBAR END *** -->


    <div id="all">

        <div id="content">
            <div class="container">

                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="index.php">Home</a>
                        </li>
                        <li>Shopping cart</li>
                    </ul>
                </div>

                <div class="col-md-9" id="basket">

                    <div class="box">

                        <form method="post" action="checkout1.php">

                            <h1>Shopping cart</h1>
                            <p class="text-muted">You currently have 3 item(s) in your cart.</p>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>Remove one</th>
                                            <th>Quantity</th>
                                            <th>Add one</th>
                                            <th>Unit price</th>
                                            <th colspan="2">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $query = "SELECT * FROM `cart` WHERE `account_id` = $_SESSION[account_id] ";
                                        $result = mysql_query($query);
                                        while($row = mysql_fetch_assoc($result)){
                                            $query_product = "SELECT * FROM `product` WHERE `product_id` = $row[product_id]";
                                            $result_product = mysql_query($query_product);
                                            $row_product = mysql_fetch_assoc($result_product);
                                            echo"
                                                <tr>
                                                    <td>$row_product[name]</td>
                                                    <td style='text-align:center;'>
                                                        <a class='btn btn-primary' href='removeOne_func.php?product_id=$row[product_id]' ><i class='fa fa-minus'></i></a> 
                                                    </td>
                                                    <td>    
                                                        <input type='number' value='$row[quantity]' readonly>
                                                    </td>
                                                    <td style='text-align: center;'>
                                                        <a class='btn btn-primary' href='addOne_func.php?product_id=$row[product_id]'><i class='fa fa-plus'></i></a>
                                                    </td>
                                                    <td>&#8369 $row_product[unit_price]</td>
                                                    <td>&#8369 $row[subtotal]</td>
                                                    <td>
                                                        <a href='removeProduct_func.php?product_id=$row[product_id]'><i class='fa fa-trash-o'></i></a>
                                                    </td>
                                                </tr>
                                            ";
                                        }
                                        ?> 
                                    </tbody>
                         
                                    <tfoot>
                                        <tr>
                                            <th colspan="5">Subtotal</th>
                                            <th colspan="2"><?php subtotal("subtotal")?></th>
                                        </tr>
                                    </tfoot>
                                </table>

                            </div>
                            <!-- /.table-responsive -->

                            <div class="box-footer">
                                <div class="pull-left">
                                    <a href="index.php" class="btn btn-default"><i class="fa fa-chevron-left"></i> Continue shopping</a>
                                </div>
                                <div class="pull-right">
                                    <button type="submit" class="btn btn-primary">Proceed to checkout <i class="fa fa-chevron-right"></i>
                                    </button>
                                </div>
                            </div>

                        </form>

                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col-md-9 -->

                <div class="col-md-3">
                    <div class="box" id="order-summary">
                        <div class="box-header">
                            <h3>Order summary</h3>
                        </div>
                        <p class="text-muted">Papaluge ba kame?  may shipping fee din</p>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Order subtotal</td>
                                        <th><?php subtotal("subtotal")?></th>
                                    </tr>
                                    <tr>
                                        <td>Delivery Fee</td>
                                        <th>₱ 100</th>
                                    </tr>
                                    <tr class="total">
                                        <td>Total</td>
                                        <th><?php subtotal("total") ?></th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
                <!-- /.col-md-3 -->

            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->

     <!-- *** FOOTER ***
 _________________________________________________________ -->
        <div id="footer" data-animate="fadeInUp">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <h4>Pages</h4>

                        <ul>
                            <li><a href="text.php">About us</a>
                            </li>
                            <li><a href="text.php">Terms and conditions</a>
                            </li>
                            <li><a href="contact.php">Contact us</a>
                            </li>
                        </ul>



                        

                        <hr class="hidden-md hidden-lg hidden-sm">

                    </div>
                    <!-- /.col-md-3 -->

                    <div class="col-md-3 col-sm-6">
                        
                        <h4>User section</h4>
                        <ul>
                            <?php
                                if(isset($_SESSION['userlogin'])){
                                    echo"
                            <li>
                                <a href='cart.php'>$_SESSION[uname]</a>
                            </li>
                            <li>
                                <a href='logout.php'>Log Out</a>
                            </li>
                                ";
                            }   
                            else{
                               echo"
                                <li>
                                    <a href='#' data-toggle='modal' data-target='#login-modal'>Login</a>
                                </li>
                                <li>
                                    <a href='register.php'>Register</a>
                                </li>
                                ";      
                                }
                            ?>
                        </ul>
                    </div>
                    <!-- /.col-md-3 -->

                    <div class="col-md-3 col-sm-6">
                        <hr class="hidden-md hidden-lg hidden-sm">
                        <h4>Where to find us</h4>

                        <p><strong>Laging Late Squad.inc</strong>
                            <br>Capitol View Park
                            <br>Brgy. Bulihan
                            <br>Malolos City
                            <br>Bulacan
                            <br>
                            <strong>Philippines</strong>
                        </p>

                        <a href="contact.php">Go to contact page</a>

                        <hr class="hidden-md hidden-lg">

                    </div>
                    <!-- /.col-md-3 -->



                    <div class="col-md-3 col-sm-6">

                        <h4>Members</h4>

                        <p class="text-muted">
                        <strong>Noel R. Bartolome</strong>
                        <br>Tommy Salamat
                        <br>James Patrick Oaquiera
                        <br>Laurence Grant Payad
                        </p>

                        <form>

                            <!-- /input-group -->
                        </form>

                        <hr>

                        <h4>Stay in touch</h4>

                        <p class="social">
                            <a href="#" class="facebook external" data-animate-hover="shake"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="twitter external" data-animate-hover="shake"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="instagram external" data-animate-hover="shake"><i class="fa fa-instagram"></i></a>
                        </p>


                    </div>
                    <!-- /.col-md-3 -->

                </div>
                <!-- /.row -->

            </div>
            <!-- /.container -->
        </div>
        <!-- /#footer -->

        <!-- *** FOOTER END *** -->




        <!-- *** COPYRIGHT ***
 _________________________________________________________ -->
        <div id="copyright">
            <div class="container">
                <div class="col-md-6">
                    <p class="pull-left">© 2017 Laging Late Squad.</p>

                </div>

            </div>
        </div>
        <!-- *** COPYRIGHT END *** -->






    </div>
    <!-- /#all -->


    

    <!-- *** SCRIPTS TO INCLUDE ***
 _________________________________________________________ -->
    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.cookie.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/modernizr.js"></script>
    <script src="js/bootstrap-hover-dropdown.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/front.js"></script>



</body>

</html>