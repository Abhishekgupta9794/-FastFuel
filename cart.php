<?php require('connection.inc.php');
if(isset($_POST['update'])){
    $type=$_POST['type'];
    $price=$_POST['price'];
    $qty=$_POST['qty'];
    $total=$price*$qty;
    

    $upd=mysqli_query($con,"insert into cart(type,price,qty,total) values('$type','$price','$qty','$total')");
    echo '<script>
   window.location.href="pages/user.php" 
    </script>';
}


?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Cart || Asbab - eCommerce HTML5 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">


    <!-- All css files are included here. -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="cart_css/bootstrap.min.css">
    <!-- Owl Carousel min css -->
    <link rel="stylesheet" href="cart_css/owl.carousel.min.css">
    <link rel="stylesheet" href="cart_css/owl.theme.default.min.css">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="cart_css/core.css">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="cart_css/shortcode/shortcodes.css">
    <!-- Theme main style -->
    <link rel="stylesheet" href="cart_css/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="cart_css/responsive.css">
    <!-- User style -->
    <link rel="stylesheet" href="cart_css/custom.css">


    <!-- Modernizr JS -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <style>
        body {
    background-image: url('images/bg-image.jpg') ;
    
}

    </style>
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- Body main wrapper start -->
    <div class="wrapper">
        <div class="body__overlay"></div>

        <!-- cart-main-area start -->
        <div class="cart-main-area ptb--100 ">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <form action="" method="post">
                            <div class="table-content table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="product-thumbnail">Fuel Type</th>
                                            <th class="product-name">Price</th>
                                            <th class="product-quantity">Quantity</th>
                                            <th class="product-subtotal">Total</th>
                                          
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>

                                            <td class="product-name"><select name="type"  style="padding:20px; border-radius:10px;font-size:15px" onchange=upd(this.value) required>
                                                    <option value="1">Please select fuel type</option>
                                                    <option value="petrol">Petrol</option>
                                                    <option value="diesel">Diesel</option>

                                                </select></td>

                                            <td class="product-price"><span class="amount">
                                                    <input type="text" id="show" name="price" />


                                                </span></td>
                                            <td class="product-quantity"><input type="number" value="1" id="qty"
                                                    onchange=prc_upd(this.value) name="qty" />
                                            </td>
                                            <td class="product-subtotal"><input type="text" id="tlt" name="tlt" value=""/>
                                            </td>
                                         
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="buttons-cart--inner">
                                        
                                        <div class="buttons-cart checkout--btn">
                                            <button class="btn btn-primary" type="submit" name="update"> Checkout</button>
                                          
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- cart-main-area end -->
        <!-- End Banner Area -->
        <!-- Start Footer Area -->

    </div>
    <!-- Body main wrapper end -->

    <!-- Placed js at the end of the document so the pages load faster -->

    <!-- jquery latest version -->
    <script src="js/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap framework js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All js plugins included in this file. -->
    <script src="js/plugins.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <!-- Waypoints.min.js. -->
    <script src="js/waypoints.min.js"></script>
    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="js/main.js"></script>
    <script>
    function upd(val) {
        var $vals = document.getElementById("show");
        var $tlt = document.getElementById("tlt");
       
        if (val == 'petrol') {
            $vals.value = "100";
            $tlt.value="100";
            

        } else {
            $vals.value = "90";
            $tlt.value="90";
           
        }
    }

    function prc_upd(val){
        var $tlt = document.getElementById("tlt");
         var $show = document.getElementById("show").value;
         var $qty = document.getElementById("qty").value;

         $fn=$show*$qty;
         $tlt.value=$fn;


    }
    </script>

</body>

</html>