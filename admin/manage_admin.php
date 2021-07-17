<html>
    <head>
    <title>Product Order -Home Page</title>
        <link rel="stylesheet" href="../css/admin.css">
    </head>
    
    <body>
        <!--Menu Section Starts-->
    <?php include("partials/menu.php"); ?>
        <div class="main-content">
            <div class="wrapper">
                <h1>Manage Admin</h1>
                <br><br>
                <?php if(isset($_SESSION['add'])){
                    echo $_SESSION['add'];
                    unset($_SESSION['add']);
                } 
                   if(isset($_SESSION['delete'])){
                    echo $_SESSION['delete'];
                    unset($_SESSION['delete']); 
                }
                if(isset($_SESSION['update'])){
                    echo $_SESSION['update'];
                    unset($_SESSION['update']); 
                }
                ?>

                <br><br>
                <!--Button to add admin-->
                <a href="add_admin.php" class="btn-primary">Add Admin</a>
                <br> <br>
                <br>
                <table class="tbl-full"> 
                    <tr>
                        <th>Sr.No</th>
                        <th>Full Name</th>
                        <th>Username</th>
                        <th>Actions</th>
                    </tr>
                       <?php
                         //get all admin data 
                          $sql = "SELECT * FROM tbl_admin";
                         //execute the query
                         $res = mysqli_query($conn,$sql);
                         //check whether we have data in database
                         if($res == TRUE)
                         {
                            $count = mysqli_num_rows($res);
                            $sn = 1;
                            
                            if($count>0){
                                 //we have data in database
                                 while($rows = mysqli_fetch_assoc($res)){
                                     //using while loop to get all database 
                                     //and while loop will run as long as we have data in database
                                    $id =$rows['id'];
                                    $full_name = $rows['full_name'];
                                    $username = $rows['username']; ?>                               
                                    
                                    <tr>
                                        <td><?php echo $sn++; ?></td>
                                        <td><?php echo $full_name; ?></td>
                                        <td><?php echo $username; ?></td>
                                        <td>
                                        <a href="<?php echo SITEURL; ?>/admin/update_admin.php?id=<?php echo $id; ?>"class="btn-secondary">Update Admin</a>
                                        <a href="<?php echo SITEURL; ?>/admin/del_admin.php?id=<?php echo $id; ?> " class="btn-danger">Delete Admin </a>
                                
                                         </td>    
                        
                                    </tr>
                                    <?php
                                }
                             }  

                             else{
                                 //we do not
                             }
                         }
                       ?>                    
                </table>
            </div>
        </div>
       <?php include("partials/footer.php"); ?>
    </body>
</html>