<?php
include './db.php';

$sql="SELECT `Type` FROM `personal_information` WHERE `id`='" . $_GET['id']."'";
$sql1="SELECT * FROM `favorite_products` WHERE `idCustomer`='" . $_GET['id']."'";;
$result=mysqli_query($conn,$sql);
$result2=mysqli_query($conn,$sql1);
$row = mysqli_fetch_array($result);
$row2 = mysqli_fetch_array($result2);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" src="css/style.css">
    <title>edit</title>
</head>
<body>
    

<form action="update.php" method="POST" >
<input type="hidden" name="id" value="<?php echo $_GET['id']?>">
<input type="hidden" name="edit" value="edit">

<div class="form-row align-items-center">
    <div class="col-auto my-1">
      <label class="mr-sm-2" for="inlineFormCustomSelect">Type of customer:</label>
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="Type">
        <option <?php if($row[0]=="private"){echo "selected";} ?>value="private" >private</option>
        <option <?php if($row[0]=="business"){echo "selected";} ?>value="business" >business</option>
        <option <?php if($row[0]=="student"){echo "selected";} ?>value="student" >student</option>
      </select>
    </div> </div>
    <br>

  

  


    
   Favorite products:

    <div class="form-check">
    <label class="form-check-label">
    <input type="checkbox" class="form-check-input" value="iPhone" name="favorite[]" <?php if($row2[1]=="1"){echo "checked='checked'";} ?> >iPhone 
  </label>
</div>
<div class="form-check">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input" value="iPad" name="favorite[]"  <?php if($row2[2]=="1"){echo "checked='checked'";} ?> >iPad 
  </label>
</div>
<div class="form-check">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input" value="macbook" name="favorite[]" <?php if($row2[3]=="1"){echo "checked='checked'";} ?> >Macbook 
  </label>
</div>

<div class="form-check">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input" value="iMac" name="favorite[]" <?php if($row2[4]=="1"){echo "checked='checked'";} ?> >iMac
  </label>
</div>
<div class="form-check">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input" value="airpods" name="favorite[]" <?php if($row2[5]=="1"){echo "checked='checked'";} ?> > Airpods
  </label>
</div>
<div class="form-check">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input" value="appleWatch" name="favorite[]" <?php if($row2[6]=="1"){echo "checked='checked'";} ?> >Apple Watch 
  </label>
</div>
<div class="form-check">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input" value="appleTV" name="favorite[]" <?php if($row2[7]=="1"){echo "checked='checked'";} ?> >AppleTV 
  </label>
</div>

<br>




<input type="submit" name="Submit" value="Submit">
  </div>
</form>
<script  src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>







