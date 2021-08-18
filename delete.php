<?php
include './db.php';

if(isset($_POST['delete'])){
    $sql = "DELETE FROM `personal_information` WHERE `id`='" . $_POST['idDelete']."'";
    $sql1 = "DELETE FROM `favorite_products` WHERE `idCustomer`='" . $_POST['idDelete']."'";
    mysqli_query($conn,$sql);
    mysqli_query($conn,$sql1);


}

?>
