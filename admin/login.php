<?php include("../config/constants.php") ?>    
    <title>Login-KwK</title>
    <style>
        .login{
            width: 30%;
            border: 1px solid rgb(87, 79, 79);  
            margin: 5% auto;
            padding: 1%;
         }
        body{background-image: url(../images/login_bg.jpg);
            background-position:bottom;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
    <link rel="stylesheet" href="../css/admin.css">
</head>
<body>
    <div class="login">
        <h2 class="text-center">Login</h2>
        <br><br>
        <?php if(isset($_SESSION['login'])){
                    echo $_SESSION['login'];
                    unset($_SESSION['login']);
                } 
                ?>
        <br><br>
        <!-- login form starts here -->
        <form action="" method="POST">
            Username:  <input type="text" name="username" placeholder="Enter Your Username"><br><br>
            Password:  <input type="password" name="password" placeholder="Enter Yout Password"><br><br>
            <input type="submit" name="submit" id="" class="btn-primary">
        
        </form>
        <!-- login form ends here -->

        <p class="text-center">Created By <a href="#">Kavina Desai</a></p>
    </div>

</body>
</html>
<?php
 if(isset($_POST['submit'])){
      $username = $_POST['username'];
      $password = md5($_POST['password']);
      $sql = "SELECT * FROM tbl_admin WHERE username='$username' AND
      password='$password'" ;

      $res = mysqli_query($conn,$sql);
      $count = mysqli_num_rows($res);
      if ($count ==1){
          $_SESSION['login'] = "<div class='success'>Login Successful</div>";
          $_SESSION['user'] = " $username logged in.";

          header("location:".SITEURL."/admin/index.php");
        }
      else{
          $_SESSION['login'] = "<div class='error'>Login Unsuccessfull</div>";
          header("location:".SITEURL."/admin/login.php");
        } 
 }
   


?>