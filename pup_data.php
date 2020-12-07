<?php 
 include ("connection.php");

     if(isset($_POST['set']))
  {
      

    $sql1 = "UPDATE user set pup = 1";
    $res1 = mysqli_query ($conn, $sql1);


  }

 ?>