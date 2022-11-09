<?php require("../connection.inc.php");
if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $addr=$_POST['addr'];
  $city=$_POST['city'];
  $state=$_POST['state'];
  $zip=$_POST['zip'];

    $sub=mysqli_query($con,"insert into checkout(name,email,phone,addr,city,state,zip) values ('$name','$email','$phone','$addr','$city','$state','$zip')");
    if($sub){
      echo '<script>alert("Your Order is Placed")</script>';
    }
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
<style>
        body {
    background-image: url('../images/bg-image.jpg') ;
    
}

    </style>

<body>
  
    <p >

  <!-- logo -->
    <div class="container">
        <div class="logo">
          <img src="../images/logo.png" width="350px" height="100px" class="d-inline-block align-top"
            alt="">
        </div>
    </div>
     
    <!-- form -->
    <div class="container-2">
      <div class="error"></div>

    <form  method="post">
        <div class="form-group">
            <label for="name">Full Name</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Full Name Here" minlength="2" required>
        </div>
        <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="required|email">
                </div>
                <div class="form-group col-md-6">
                  <label for="phoneNumber">Phone Number</label>
                  <input type="text" class="form-control" id="phoneNumber" placeholder="Phone number" name="phone">
                </div>
              </div>
              <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" name="addr" placeholder="1234 Main St">
              </div>
              
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="city">City</label>
                  <input type="text" class="form-control" id="city" name="city">
                </div>
                <div class="form-group col-md-2">
                    <label for="state">State</label>
                    <input type="text" class="form-control" id="state" name="state">
                  </div>
                <div class="form-group col-md-2">
                  <label for="zip">Zip</label>
                  <input type="text" class="form-control" id="zip" name="zip">
                </div>
              </div>
              <div class="form-group">
                
              </div>
                   
            
               
                   
                

        
        <a type="submit" class="btn btn-primary" href="payment.php" id="submitButton">Submit</a>
    </form>
</div>
<div class="resultContainer"></div>
<div class="confirmContainer"></div>

<!-- links to js files -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://www.gstatic.com/firebasejs/live/3.0/firebase.js"></script>
<!-- <script src="https://www.gstatic.com/firebasejs/4.12.0/firebase.js"></script> -->
<script src="assets/javascript/user.js"></script>



    
</body>

</html>
