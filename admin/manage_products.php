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
                <p>Manage Products</p> 
                <br>
                <!--Button to add admin-->
                <a href="<?php echo SITEURL; ?>/admin/add_products.php" class="btn-primary">Add Product</a>
                <br> <br>
                <br>
                <table class="tbl-full"> 
                    <tr>
                        <th>Sr.No</th>
                        <th>Full Name</th>
                        <th>Username</th>
                        <th>Actions</th>
                    </tr>
                    <tr>
                        <td>1.</td>
                        <td>Kavina desai</td>
                        <td>kavina_16</td>
                        <td>
                         <a href="#" class="btn-secondary">Update Admin</a>
                         <a href="#" class="btn-danger">Delete Admin </a>
                                
                        </td>    
                        
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td>Meet Panchal</td>
                        <td>meet_29</td>
                        <td>
                        <a href="#" class="btn-secondary">Update Admin</a>
                         <a href="#" class="btn-danger">Delete Admin </a>        
                        </td>    
                        
                    </tr>
                    <tr>
                        <td>3.</td>
                        <td>Jeet Patel</td>
                        <td>jeet_24</td>
                        <td>
                        <a href="#" class="btn-secondary">Update Admin</a>
                         <a href="#" class="btn-danger ">Delete Admin </a>   
                        </td>    
                        
                    </tr>
                </table>
            </div>
        </div>
       <?php include("partials/footer.php"); ?>
    </body>

 


</html>