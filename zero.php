<?php 
 include ("connection.php");

     if(isset($_POST['zero']))
  {
      
      file_put_contents("zero11.txt", "total - 100 ");

    $sql1 = "UPDATE batsman set points =0 ";
    $res1 = mysqli_query ($conn, $sql1);

    $sql2 = "UPDATE allrounder SET  points =0 ";
    $res2 = mysqli_query ($conn, $sql2);

    $sql3 = "UPDATE bowler set points =0 ";
    $res3 = mysqli_query ($conn, $sql3);

    $sql4 = "UPDATE w_keeper set points =0 ";
    $res4 = mysqli_query ($conn, $sql4);


  }

 ?>