<?php 
session_start();

   if(isset($_POST['t']))
  {

    $id = "userVU";
    $_SESSION['tid'] = $id;
    //file_put_contents('filenameeeee.txt',  $_SESSION['tokenid']);
  }

?>