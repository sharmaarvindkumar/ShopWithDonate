<?php include("connection/config.php"); ?>
<?php
    if ($_SESSION['aid']=="") {
     header("location:login.php");
    }
 ?>



<!DOCTYPE html>
<html lang="en">


<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
<title>Shop With Donate</title>
<link rel="icon" type="image/x-icon" href="assets/img/favicon.ico"/>
<link href="assets/css/loader.css" rel="stylesheet" type="text/css" />
<script src="assets/js/loader.js"></script>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="assets/css/plugins.css" rel="stylesheet" type="text/css" />
<link href="plugins/apex/apexcharts.css" rel="stylesheet" type="text/css">
<link href="assets/css/dashboard/dash_1.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <!-- BEGIN LOADER -->
        <div id="load_screen"> <div class="loader"> <div class="loader-content">
        <div class="spinner-grow align-self-center"></div>
        </div></div></div>
    <!--  END LOADER -->






<div class="main-container" id="container">
        <?php  include("template/header.php");?>
        <?php include("template/sidebar.php"); ?>        
        <?php
            @$page = $_REQUEST['page'];
            if ($page == "" && basename($_SERVER['PHP_SELF'])=='index.php')
            {$page='home';}
            if($page != "" && file_exists('middlepage/'.$page.'.php'))
            {include "middlepage/".$page.'.php';}
            else
            {include 'error.php';}
        ?>
        <?php  include ("template/footer.php"); ?>
</div>






<script src="assets/js/libs/jquery-3.1.1.min.js"></script>
<script src="bootstrap/js/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="assets/js/app.js"></script>
<script>
    $(document).ready(function() {
        App.init();
    });
</script>
<script src="assets/js/custom.js"></script>
<script src="plugins/apex/apexcharts.min.js"></script>
<script src="assets/js/dashboard/dash_1.js"></script>


</body>


</html>