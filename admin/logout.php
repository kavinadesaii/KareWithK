<?php
  include("../config/constants.php");
  //redirect to login page
  session_destroy();
  header("location:".SITEURL."./admin/login.php");


?>