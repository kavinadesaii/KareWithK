<?php include("partials/menu.php") ?>
<div class="main-content">
    <div class="wrapper">
    <h1>Add Form</h1>
    <br><br>
    <?php
        if(isset($_SESSION['upload'])){
            echo $_SESSION['upload'];
            unset($_SESSION['upload']);
        }
        if(isset($_SESSION['add'])){
            echo $_SESSION['add'];
            unset($_SESSION['add']);
        }
    ?>
    <form action="" method="POST" enctype="multipart/form-data">
        <table class="tbl-full">
            <tr>
                <td>Title  </td>
                <td>
                    <input type="text" name="title" placeholder="title of the product">
                </td>
            </tr>
            <tr>
                <td>Description</td>
                <td><textarea name="desc" cols="30" rows="8" placeholder="Add Description"></textarea></td>
            </tr>
        <tr>
            <td>Price</td>
            <td><input type="number" name="price" placeholder="Enter Price"/></td>
        </tr>
        <tr>
            <td>Select Image</td>
            <td><input type="file" name="image"></td>
        </tr>
        <tr>
            <td>Featured:</td>
            <td>
                <input type="radio" name="featured" value="Yes">Yes
                <input type="radio" name="featured" value="No">No
            </td>
        </tr>
        <tr>
            <td>Active:</td>
            <td>
                <input type="radio" name="active" value="Yes">Yes
                <input type="radio" name="active" value="No">No
            </td>
        </tr>

        <tr>
            <td colspan="2" class="text-center">
                <input type="submit" name="submit" value="Add Food" class="btn-secondary">
            </td>
        </tr>
        </table>
    
    
    
    
    
    </form>
    </div>
</div>
<?php include("partials/footer.php") ?>
<?php
 //check whether submit button is clicked
  if(isset($_POST['submit'])){
      //button clicked
      //get data from form
      $title=$_POST['title'];
      $desc=$_POST['desc'];
      $price=$_POST['price'] ;
  }
  if(isset($_POST['featured'])){
        $featured=$_POST['featured'];}
        else{
            $featured="No";
        }
   if(isset($_POST['actuve'])){
        $active=$_POST['active'];}
        else{
            $active="No";
        }
   if(isset($_FILES['image']['name'])){
        $image_name = $_FILES['image']['name'];
        if($image_name!=""){
            $ext = end(explode('.',$image_name));
        }

        $src=$_FILES['image']['tap_name'];
        $dst = "../images/products".$image_name;

        $upload = move_uploaded_file($src,$dst);

        if($upload==false){
            $_SESSION['upload'] = "<div class='failed'>Failed to Upload Image!!</div>"; 
            header('loaction:'.SITEURL.'/admin/add_products.php');
            die();
        }
   }
   else{
       $image_name="";
   }
      //query to store data
      $sql = "INSERT INTO tbl_product SET
      title='$title',
      description='$desc',
      price='$price',
      image_name='$image_name'
      ";  
      $res = mysqli_query($conn,$sql) or die(mysqli_error($conn));
      //check whether query is executed or not by displayin message
      if($res==TRUE){
          //data inserted
          //echo "Data Inserted";
          //create session variable
          $_SESSION['add'] = "<div class='success'>Product Added Successfully!!</div>";   
          header("location:".SITEURL."/admin/manage_products.php");     
      }
      else{
          //data not inserted
        //   echo "not inserted";
        $_SESSION['add'] = "<div class='failed'>Failed to Add Product!!</div>";   
        header("location:".SITEURL."/admin/add_products.php");     
      }

?>