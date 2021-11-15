<?php include('partials/menu.php'); ?>


<div class ="main-contant">
     <div class="wrapper">
        <h1>Add Admin</h1>

<br>

<?php

if(isset($_SESSION['add']))// checking the add session
{
    echo $_SESSION['add']; // dispplay the massage
    unset($_SESSION['add']); // removing the session massages
}

?>

        <form action="" method="POST">

        <table class="tbl-30">

                <tr>
                    <td>Full Name:</td>
                    <td><input type ="text" name="full_name" placeholder="Full Name"></td>
                </tr>

                <tr>

                    <td>User Name :</td>
                    <td><input type ="text" name="username" placeholder="Enter user Name"</td>
                    
                </tr>

                    <tr>

                        <td>Password:</td>
                        <td><input type="password" name="password" placeholder="Enter the Password"> </td>
                        

                    </tr>
                        
                    <tr> 
                    <br/><br/>
                        <td colspan="2" ><input type="submit" name="submit" value="Add Admin" class="btn-secondary"></td>

                    </tr>

        </table>




        </form>

</div>
</div>



<?php include('partials/footer.php'); ?>
<?php 
    /*  Form save it to data */
    /*  Check the submit buton is click or not */

        if(isset($_POST['submit']))
        {
            // button clicked  
           // echo "Button clicked";  
        
            //1.get the data from form 
                $full_name = $_POST['full_name'];
                $username = $_POST['username'];
                $password = md5($_POST['password']); //password is maked MD5
        
                //2. SQL Qeury Data save into the data base

                $sql = "INSERT INTO tbl_admin SET
                        full_name='$full_name',
                        username='$username',
                        password='$password'
                        ";

                // 3. excute database and save the date 
                 
                // excuting he query into the data base
                $res = mysqli_query($conn, $sql) or die(mysqli_error());

                if($res==TRUE)
                {
                    //connection sussfully 
                    $_SESSION['add'] = "Admin Add Succfully";
                    header("location:".SITEURL.'admin/manage-admin.php');

                   
                }
                else
                {
                    // not connected 
                    $_SESSION['add'] = "Failed to Admin";
                    header("location:".SITEURL.'admin/add-admin.php');


                }
            
            }
        
?>