<?php include("partials/menu.php") ?>

<div class="main-content">
    <div class="wrapper">
     <h2>Update Admin</h2>
     <br><br>
     <?php
      //Get Id
        $id = $_GET['id'];
      //Create the query to get the details
        $sql = "SELECT * FROM tbl_admin WHERE id=$id";
      //execute the quesry
        $res = mysqli_query($conn,$sql);
      //check whether the query executed sucessfully
      if($res == true)
      {
          //query executed
          $count = mysqli_num_rows($res);
          if($count == 1){
                $row = mysqli_fetch_assoc($res);
                $full_name = $row['full_name'];
                $username = $row['username'];
          }
            
          }
        else
         {
         //query not executed
                header("location:".SITEURL."/admin/update_admin.php");
         }
    ?>
    <form action="" method="POST">
    <table class="tbl30" style="width: 35%;">        <tr>
        <td>Full Name</td>
        <td><input type="text" name="full_name" placeholder="<?php echo $full_name; ?>"></td>
        <td></td>
        </tr>
        <tr>
            <td>Username</td>
            <td><input type="text" name="username" placeholder="<?php echo $username; ?>"></td>
        </tr>
        
        <tr>
            <br>
            <td colspan="2"><input type="submit" name="submit" value="Update Admin" class="btn-secondary">
            </td>
        </tr>
        </table>
    </form>
    </div>
</div>
<?php
   if(isset($_POST['submit'])){
       //get all values
       echo $id = $_POST['id'];
       echo $full_name = $_POST['full_name'];
       echo $username =$_POST['username'];

       //sql query
       $sql ="UPDATE tbl_admin SET full_name = '$full_name' , username='$username',
             WHERE id = '$id'
             ";
       
       $res = mysqli_query($conn,$sql);

       if($res==TRUE){
        //data inserted
        //echo "Data Inserted";
        //create session variable
        $_SESSION['update'] = "<div class='success'>Admin Updated Successfully!!</div>";   
        header("location:".SITEURL."/admin/manage_admin.php");     
    }
    else{
        //data not inserted
      //   echo "not inserted";
      $_SESSION['update'] = "<div class='failed'>Failed to Update Admin!!</div>";   
      header("location:".SITEURL."/admin/manage_admin.php");     
    }
  }
?>

<?php include("partials/footer.php") ?>