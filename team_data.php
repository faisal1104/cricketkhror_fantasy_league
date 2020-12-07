<?php 

 include ("connection.php");

    if(isset($_POST['tname']))
  {

       $n = $_POST['tn'];


      $sql1 = " SELECT *  FROM user where team_name = '$n' ";
    $res1 = mysqli_query($conn, $sql1);
    $nr = mysqli_num_rows($res1);


    if ($nr == 0)
     echo "ok";

    else
        echo "not";

}

   if(isset($_POST['bats']))
  {

       $n = $_POST['bat'];


    $sql1 = " SELECT *  FROM batsman where name = '$n' ";
    $res1 = mysqli_query($conn, $sql1);
    $nr = mysqli_num_rows($res1);


    if ($nr == 1)
     echo "ok";

    else
        echo "not";

}

   if(isset($_POST['wkp']))
  {

       $n = $_POST['wk'];


      $sql1 = " SELECT *  FROM w_keeper where name = '$n' ";
    $res1 = mysqli_query($conn, $sql1);
    $nr = mysqli_num_rows($res1);


    if ($nr == 1)
     echo "ok";

    else
        echo "not";

}

   if(isset($_POST['allr']))
  {

       $n = $_POST['all'];


      $sql1 = " SELECT *  FROM allrounder where name = '$n' ";
    $res1 = mysqli_query($conn, $sql1);
    $nr = mysqli_num_rows($res1);


    if ($nr == 1)
     echo "ok";

    else
        echo "not";

}

   if(isset($_POST['bolr']))
  {

       $n = $_POST['bol'];


      $sql1 = " SELECT *  FROM bowler where name = '$n' ";
    $res1 = mysqli_query($conn, $sql1);
    $nr = mysqli_num_rows($res1);


    if ($nr == 1)
     echo "ok";

    else
        echo "not";

}

   if(isset($_POST['cap']))
  {

      $n = $_POST['cap1'];

    $sql1 = " SELECT *  FROM bowler where name = '$n' ";
    $res1 = mysqli_query($conn, $sql1);
    $nr1 = mysqli_num_rows($res1);

    $sql2 = " SELECT *  FROM batsman where name = '$n' ";
    $res2 = mysqli_query($conn, $sql2);
    $nr2 = mysqli_num_rows($res2);

    $sql3 = " SELECT *  FROM w_keeper where name = '$n' ";
    $res3 = mysqli_query($conn, $sql3);
    $nr3 = mysqli_num_rows($res3);

   $sql4 = " SELECT *  FROM allrounder where name = '$n' ";
    $res4 = mysqli_query($conn, $sql4);
    $nr4 = mysqli_num_rows($res4);


    if ($nr1 == 1 || $nr2 == 1 || $nr3 == 1 || $nr4 == 1)
     echo "ok";

    else
        echo "not";

}


if(isset($_POST['team']))
{

  $n0 = $_POST['tnm'];
  $n1 = $_POST['b1'];
  $n2 = $_POST['b2'];
  $n3 = $_POST['b3'];
  $n4 = $_POST['b4'];
  $n5 = $_POST['b5'];
  $n6 = $_POST['b6'];
  $n7 = $_POST['b7'];
  $n8 = $_POST['b8'];
  $n9 = $_POST['b9'];
  $n10 = $_POST['b10'];
  $n11 = $_POST['b11'];
  $n12 = $_POST['cap'];
  $p1 = $_POST['a1'];
  $p2 = $_POST['a2'];
  $p3 = $_POST['a3'];  




  $sql = "INSERT INTO user (name,email,pass,team_name,bat1,bat2,bat3,bat4,wk,all_rounder1,all_rounder2,all_rounder3,bol1,bol2,bol3,captain) VALUES ('$p1','$p2','$p3','$n0','$n1','$n2','$n3','$n4','$n5','$n6','$n7','$n8','$n9','$n10','$n11','$n12') ";

  mysqli_query($conn , $sql);

}

 ?>
