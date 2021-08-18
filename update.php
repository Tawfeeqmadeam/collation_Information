<?php
include './db.php';

if(isset($_POST['edit'])){

   
   $sql = "UPDATE `personal_information` SET `Type` = '" . $_POST['Type']."' WHERE `id` = '" . $_POST['id']."'";
   mysqli_query($conn,$sql);
   $arr = array("0","0","0","0","0","0","0");
    $fav=$_POST['favorite'];
    print_r($fav);
    for ($i = 0; $i < count($_POST['favorite']); $i++) {
        if($fav[$i]=="iPhone"){
            $arr[0]="1";
        } if($fav[$i]=="iPad"){
            $arr[1]="1";
            } if($fav[$i]=="macbook"){
                $arr[2]="1";
            } if($fav[$i]=="iMac"){
                $arr[3]="1";
            } if($fav[$i]=="airpods"){
                $arr[4]="1";
            } if($fav[$i]=="appleWatch"){
                $arr[5]="1";
            } if($fav[$i]=="appleTV"){
                $arr[6]="1";
            } 
        }

    $sql1 = "UPDATE `favorite_products` SET `iPhone` = '" . $arr[0]."' , 
                                            `iPad` = '" . $arr[1]."' , 
                                            `macbook` = '" . $arr[2]."' , 
                                            `iMac` = '" . $arr[3]."' , 
                                            `airpods` = '" . $arr[4]."' , 
                                            `appleWatch` = '" . $arr[5]."' , 
                                            `appleTV` = '" . $arr[6]."'
                                             WHERE `idCustomer` = '" . $_POST['id']."'";  
                                             echo $sql1;
        mysqli_query($conn,$sql1);
           


}

?>
