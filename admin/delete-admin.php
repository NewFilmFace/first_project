<?php

    include('../config/constants.php');

    // Delete the admin ID 
    $id = $_GET['id'];

    $sql = "DELETE From tbl_admin Where id = $id";
    $res = mysqli_query($conn,$sql);


    if($res==TRUE)
    {
        echo "Admin Deleted";
    }
    else
    {
            echo " Fail to deleted";
    }

?>