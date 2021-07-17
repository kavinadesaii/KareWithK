<html>
    <head>
    <title>Product Order -Home Page</title>
        <link rel="stylesheet" href="../css/admin.css">
    </head>
    
    <body>
    <?php include("partials/menu.php"); ?>  
        
        <div class="main-content">
            <div class="wrapper">
              <h1><strong>DASHBOARD</strong>  </h1>
              <br><br>
              <?php if(isset($_SESSION['login'])){
                    echo $_SESSION['login'];
                    unset($_SESSION['login']);
                } 
                if(isset($_SESSION['user'])){
                    echo $_SESSION['user'];
                    unset($_SESSION['user']);
                } 
                ?>
                <br><br>
              <div class="col-4 text-center">
                  <h1>120</h1>
                  <br>
                    Products
              </div>
              <div class="col-4 text-center">
                  <h1>120</h1>
                  <br>
                    Products
              </div>
              <div class="col-4 text-center">
                  <h1>120</h1>
                  <br>
                    Products
              </div>
              <div class="col-4 text-center">
                  <h1>120</h1>
                  <br>
                  Products
              </div>
              <div class="clearfix"></div>
            </div>
        </div>
        
       <?php include("partials/footer.php"); ?>
    </body>
</html>