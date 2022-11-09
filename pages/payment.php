<?php 
if(isset($_POST['oks'])){
    echo '<script>alert("Order  Placed")</script>';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="../css/user.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/user.css">

</head>

<body>
    <div class="container">
        <div class="title">
            <h2>Billing Form</h2>
        </div>
        <div class="d-flex">

            <div class="Yorder">
                <table>
                    <tr>
                        <th colspan="2">Your order</th>
                    </tr>
                    <tr>
                        <td>Product Cost</td>
                        <td>Rs.200.00</td>
                    </tr>

                    <tr>
                        <td>Shipping</td>
                        <td>Rs. 50</td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td>Rs. 250</td>
                    </tr>
                </table><br>
                <div>
                    <input type="radio" name="dbt" value="dbt"> Direct Bank Transfer
                </div>
                <p>
                    Make your payment directly into our bank account. Please use your Order ID as the payment reference.
                    Your order will not be shipped until the funds have cleared in our account.
                </p>
                <form action="" method="post">
                    <div>
                        <input type="radio" name="dbt" value="cd"> Cash on Delivery
                    </div>
                    <div>
                        <input type="radio" name="dbt" value="cd"> Paypal <span>
                            <img src="https://www.logolynx.com/images/logolynx/c3/c36093ca9fb6c250f74d319550acac4d.jpeg"
                                alt="" width="50">
                        </span>
                    </div>

                    <button type="submit" name="oks" ty>Place Order</button>
                </form>
            </div>
            <!-- Yorder -->
        </div>
    </div>

</body>

</html>