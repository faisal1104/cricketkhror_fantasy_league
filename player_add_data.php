<?php 
include ("connection.php");

if(isset($_POST['add1']))
{

  $n = $_POST['p1'];

  $sql = "INSERT INTO batsman (name) VALUES ('$n')";

  mysqli_query($conn , $sql);

}

if(isset($_POST['add2']))
{

  $n = $_POST['p2'];

  $sql = "INSERT INTO w_keeper (name) VALUES ('$n')";

  mysqli_query($conn , $sql);

}

if(isset($_POST['add3']))
{

  $n = $_POST['p3'];

  $sql = "INSERT INTO allrounder (name) VALUES ('$n')";

  mysqli_query($conn , $sql);

}
if(isset($_POST['add4']))
{

  $n1 = $_POST['p4'];

  $sql = "INSERT INTO bowler (name) VALUES ('$n1')";

  mysqli_query($conn , $sql);

}

 ?>
