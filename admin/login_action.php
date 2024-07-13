<?php 
include("connection/config.php");

  $email = $_REQUEST['email'];
  $password = $_REQUEST['password'];


  $checkEmail = "SELECT * FROM `admin` WHERE `email` = '".$email."' AND `password` = '".$password."' ";
    $qryEmail = mysqli_query($con,$checkEmail);
    $countEmail = mysqli_num_rows($qryEmail);
     $countEmail;
    if ($countEmail > 0) 
    {
         $rowEmail = mysqli_fetch_assoc($qryEmail);
        
         $_SESSION['aid'] = $rowEmail['aid']; ?>
        <script type="text/javascript">
        alert("login Succesfully..."); 
        window.location="index.php";
        </script>   
    <?php }
    else
    {
        header("location:login.php");
        echo "Login Not";
    }

?>