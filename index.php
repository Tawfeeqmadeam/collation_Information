<?php
include './db.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" src="css/style.css">
  
    <title>task</title>
</head>
<body>
    

<form id="form" action="form.php" method="GET">
<div style="padding:50px;">
<h1>Please enter your information</h1>
<div class="form-group">
    <label >Customer Name:</label>
<input class="form-control" type="text" placeholder="Customer Name" name="customerName">
</div><br>


<div class="form-row align-items-center">
    <div class="col-auto my-1">
      <label class="mr-sm-2" for="inlineFormCustomSelect">Type of customer:</label>
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="Type">
        <option selected>Choose a Type:</option>
        <option value="private" >private</option>
        <option value="business" >business</option>
        <option value="student" >student</option>
      </select>
    </div> </div>
    <br>

  <div class="form-group">
    <label for="exampleInputEmail1">Email address:</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
  </div>
  <br>


  <div class="form-group">
  <label for="phone"> phone number:</label>
  <input type="number" id="phone" name="phone" >
  </div>
  <br>


  <div class="form-group">
    <label for="inputAddress">Address:</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="Address">
  </div>
  <br>



  <div class="form-row align-items-center">
    <div class="col-auto my-1">
      <label class="mr-sm-2" for="inlineFormCustomSelect">Gender:</label>
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="Gender">
        <option selected >Choose a Gender:</option>
        <option value="man">man</option>
        <option value="woman">woman</option>
        <option value="other">other</option>
      </select>
      </div></div>

    <br>


    
   Favorite products:

    <div class="form-check">
    <label class="form-check-label">
    <input type="checkbox" class="form-check-input" value="iPhone" name="favorite[]">iPhone 
  </label>
</div>
<div class="form-check">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input" value="iPad" name="favorite[]">iPad 
  </label>
</div>
<div class="form-check">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input" value="macbook" name="favorite[]">Macbook 
  </label>
</div>

<div class="form-check">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input" value="iMac" name="favorite[]">iMac
  </label>
</div>
<div class="form-check">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input" value="airpods" name="favorite[]"> Airpods
  </label>
</div>
<div class="form-check">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input" value="appleWatch" name="favorite[]">Apple Watch 
  </label>
</div>
<div class="form-check">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input" value="appleTV" name="favorite[]">AppleTV 
  </label>
</div>

<br>



<input type="submit" name="Submit" value="Submit">
  </div>
</form>
<script  src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script  src="js/index.js"></script>

</body>
</html>







