<?php 
    //include constants.php file here
    include('../config/constants.php');
    //Get Id of the admin to be data

    //sql query to del dat
    
    $id = $_GET['id'];

    //Query to del data
    $sql = "DELETE FROM tbl_admin WHERE id=$id";
    //
    //execute thhe query
    $res = mysqli_query($conn,$sql);
    //check whether the query executed sucessfully
    if($res == true)
    {
        //query executed
        $_SESSION['delete'] = "<div class='success'>Admin Deleted Successfully</div>";
        header('location:'.SITEURL.'/admin/manage_admin.php');
    }
    else
    {
        $_SESSION['delete'] = "<div class='failed'>Admin Not Deleted</div>";
        header('location:'.SITEURL.'/admin/manage_admin.php');
    }
    //redirect message to admin page
?>