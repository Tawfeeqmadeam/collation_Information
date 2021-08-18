<?php
include './db.php';

if ($_SERVER["REQUEST_METHOD"] == "GET"){
$customerName = $_GET['customerName'];
$gender = $_GET['Gender'];
$email = $_GET['email'];
$phone = $_GET['phone'];
$Address = $_GET['Address'];
$Type = $_GET['Type'];
$favProducts= $_GET['favorite'];

       if(isset($_GET['Submit'])){
      $sql="INSERT INTO `personal_information`( `customerName`, `email`, `Address`, `phone`, `gender`, `Type`) VALUES ('$customerName','$email','$Address','$phone','$gender','$Type')";
        mysqli_query($conn,$sql);

        $Products="`".implode("`,`",$favProducts)."`";    
        $Prod="";
        for ($i = 0; $i < count($favProducts)-1; $i++) {
        $Prod .= "'1',";
        }
        $Prod .= "'1'";
        $sql1  = "INSERT INTO `favorite_products` ($Products) VALUES ($Prod)";
            if( mysqli_query($conn,$sql1)){
                echo "<div>success</div>";
                echo "<a href='admin.php' > Go TO Admin Page</a>";
            }else{
                echo "error";
                echo "<a href='admin.php' > Try other </a>";

            }
            }




     }
?>