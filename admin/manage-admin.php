
        <?php include('partials/menu.php'); ?>

            <!-- Main Content Section Starts -->
            <div class ="main-contant">
                <div class="wrapper">
               <h1> Manage Admin</h1>

                <br>


                <?php

                        if(isset($_SESSION['add']))
                        {
                            echo $_SESSION['add'];
                            unset($_SESSION['add']); // removing the session massages
                        }

                ?>
                <!-- button admin-->
                <a href="add-admin.php" class="btn-primary">Add Admin</a>

                <br />
                <br />
                <br/>

               <table class ="tbl-full">

                        <tr>
                            <th>S.N.</th>
                            <th>Full Name</th>
                            <th>Username</th>
                            <th>Actions</th>

                        </tr>

                        <?php // display the table valus
                                $sql = "SELECT  * from tbl_admin";
                                $res = mysqli_query($conn,$sql);
                                if($res==TRUE)
                                {
                                    //count the code in data base
                                    $count = mysqli_num_rows($res); // rows in the data bse

                                    $sn=1;

                                    if($count>0)

                                    {
                                        while($rows=mysqli_fetch_assoc($res))
                                            {
                                                $id=$rows['id'];
                                                $full_name=$rows['full_name'];
                                                $username=$rows['username'];
                                            
                                                    ?>
                                                      <tr>
                            <td><?php echo $sn++;?></td>
                            <td><?php echo $full_name;?></td>
                            <td><?php echo $username;?></td>
                            <td>
                            <a href="#" class="btn-secondary">update Admin</a>
                            <a href="<?php echo SITEURL; ?>admin/delete-admin.php?id=<?php echo $id; ?>" class="btn-danger">Delete Admin</a>
                            </td>

                        </tr>

                                                    <?php


        
                                            }
                                    }
                                    else
                                    {

                                    }
                                }

                        ?>

                        
                </table>
            </div>
            </div>
            <!-- main Content Secton End -->
           
<?php include('partials/footer.php'); ?>