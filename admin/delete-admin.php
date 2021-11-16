<?php

    include('../config/constants.php');

    // Delete the admin ID 
    $id = $_GET['id'];

    $sql = "DELETE From tbl_admin Where id = $id";
    $res = mysqli_query($conn, $sql);


     if($res==TRUE)
    {
        $_SESSION['delete'] = " Admin Deleted Successfully .";
        
        header('location:'.SITEURL.'admin/manage-admin.php');
    }
    else
    {
            $_SESSION['delete'] = " Failed to Delete the admin ,Try again.";
            
            header('location:'.SITEURL.'admin/manage-admin.php');
    }

?>