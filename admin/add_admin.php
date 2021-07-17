<?php include("../admin/partials/menu.php");
?>
<?php include("../config/constants.php") ?>
<div class="main-content">
    <div class="wrapper">
        <h2>AddAdmin</h2>
          <br><br>
                <?php if(isset($_SESSION['add'])){
                    echo $_SESSION['add'];
                    unset($_SESSION['add']);
                }  ?>
        <form action="" method="POST">
        <table class="tbl-30" style="width: 35%;">        <tr>
        <td>Full Name</td>
        <td><input type="text" name="full_name" placeholder="Enter Name"></td>
        <td></td>
        </tr>
        <tr>
            <td>Username</td>
            <td><input type="text" name="username" placeholder="Enter username"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="password" placeholder="Enter password"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="submit" value="Add Admin" class="btn-secondary"></ td>
        </tr>
        </table>    
        </form>
    </div>
</div>

<?php include("../admin/partials/footer.php") ?>
<!--Process the values to database-->
<?php
 //check whether submit button is clicked
  if(isset($_POST['submit'])){
      //button clicked
      //get data from form
      $full_name=$_POST['full_name'];
      $username=$_POST['username'];
      $password=md5($_POST['password']) ;
      
      //query to store data
      $sql = "INSERT INTO tbl_admin SET
      full_name='$full_name',
      username='$username',
      password='$password'
      ";  
      $res = mysqli_query($conn,$sql) or die(mysqli_error($conn));
      //check whether query is executed or not by displayin message
      if($res==TRUE){
          //data inserted
          //echo "Data Inserted";
          //create session variable
          $_SESSION['add'] = "<div class='success'>Admin Added Successfully!!</div>";   
          header("location:".SITEURL."/admin/manage_admin.php");     
      }
      else{
          //data not inserted
        //   echo "not inserted";
        $_SESSION['add'] = "<div class='failed'>Failed to Add Admin!!</div>";   
        header("location:".SITEURL."/admin/add_admin.php");     
      }
    }

?>