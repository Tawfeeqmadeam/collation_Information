<?php
include './db.php';


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Admin</title>
</head>
<body>
    


<input class="form-control" id="myInput" type="text" placeholder="Search..">


<?php
 function check($array){
   $a="";
   if($array[9]==1){
    $a.="iPhone, ";
  } if($array[10]==1){
      $a.="iPad, ";
    } if($array[11]==1){
      $a.="Macbook, ";
    } if($array[12]==1){
      $a.="iMac, ";
    } if($array[13]==1){
      $a.="Airpods, ";
    } if($array[14]==1){
      $a.="Apple Watch, ";
    } if($array[15]==1){
      $a.="AppleTV ";
    } 
    return $a;
 }



$sql = "SELECT * FROM `personal_information` INNER JOIN `favorite_products` ON personal_information.id=favorite_products.idCustomer" ;
$result = mysqli_query($conn,$sql);
if($result){
if(mysqli_num_rows($result) > 0){
    echo "<table class='table'>";
            echo "<thead>";
            echo "<tr>";
                echo "<th>id</th>";
                echo "<th>customerName</th>";
                echo "<th>email</th>";
                echo "<th>Address</th>";
                echo "<th>phone</th>";
                echo "<th>image</th>";
                echo "<th>gender</th>";
                echo "<th>Type</th>";
                echo "<th>favorite</th>";
                echo "<th>delete</th>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody id='myTable'>";
    while($row = mysqli_fetch_array($result)){
      echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['customerName'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['Address'] . "</td>";
                echo "<td>0" . $row['phone'] . "</td>";
                echo "<td><img src='" . $row['image'] . "' higth='120px' width='120px' ></img></td>";
                echo "<td>" . $row['gender'] . "</td>";
                echo "<td>" . $row['Type'] . "</td>"; 
                echo "<td>";

                echo check($row);
                
                echo "</td>";
                echo "<td> <button  id='".$row['id']."' type='button' class='btn btn-danger'>Delete</button> </td>";
                echo "<td> <a href='edit.php?id=".$row['id']."'> <button  id='".$row['id']."' type='button' class='btn btn-success'>Edite</button></a> </td>";

                echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}












?>
 


<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/index.js"></script>
</body>
</html>

