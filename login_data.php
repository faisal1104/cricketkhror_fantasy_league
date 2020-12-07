<?php @ob_start();
if(session_status()!=PHP_SESSION_ACTIVE) 
session_start();
  
$uid = $_SESSION['us_id'];

 include ("connection.php");

   if(isset($_POST['show'])) 
  {
   
$sql = "SELECT * FROM user where id = '$uid' ";
    $res = mysqli_query ($conn, $sql);
    $data = " ";
    while($row = mysqli_fetch_array($res))
    { 
       $data.=' 
          
           <p style="color:blue">
            ✪ User name &emsp; :: &nbsp;'.$row['name'].'<br>
            ✪ Team Name &nbsp; :: &nbsp;'.$row['team_name'].'<br>
            ✪ Points &nbsp;&nbsp;&nbsp;&emsp;&emsp;&nbsp;:: &emsp;'.$row['points'].'<br></p>

            <p style="color:red">
            🏏 Batsman 1&nbsp; ::&emsp;'.$row['bat1'].'<br>
            🏏 Batsman 2&nbsp; ::&emsp;'.$row['bat2'].'<br>
            🏏 Batsman 3&nbsp; ::&emsp;'.$row['bat3'].'<br>
            🏏 Batsman 4&nbsp; ::&emsp;'.$row['bat4'].'<br></p>

            <p style="color:green">
            🙌 Wicket Keeper&nbsp; :: &emsp;'.$row['wk'].'<br>
            </p>
            <p style="color:DarkSlateBlue">
            🏏⚾  All Rounder 1&nbsp; :: &emsp;'.$row['all_rounder1'].'<br>
            🏏⚾ All Rounder 2&nbsp; :: &emsp;'.$row['all_rounder2'].'<br>
            🏏⚾ All Rounder 3&nbsp; :: &emsp;'.$row['all_rounder3'].'<br></p>

            <p style="color:DarkCyan">
            ⚾ Bowler 1 &nbsp;::&emsp;'.$row['bol1'].'<br>
            ⚾ Bowler 2&nbsp; ::&emsp;'.$row['bol2'].'<br>
            ⚾ Bowler 3&nbsp; ::&emsp;'.$row['bol3'].'<br></p>
            <br>
            
           <center style="color:MediumVioletRed" >♕ &nbsp;<u>Team Captain &nbsp;:: &emsp;'.$row['captain'].'</u>  &nbsp;♕</center>
            

       ';
    }
    echo $data;

  }

   if(isset($_POST['edit']))
{


  $sql = "SELECT * FROM user WHERE id =' $uid' ";
  
  $res = mysqli_query($conn , $sql);

  $row = mysqli_fetch_array($res);

  echo json_encode($row);

}

if(isset($_POST['up1']))
{ 
  $a=0;
  $rowZ = 0;

$sql3 = "SELECT * FROM user where id = '$uid' ";
$res3 = mysqli_query ($conn, $sql3);
while($row = mysqli_fetch_array($res3))
{
  $chk= $row['pup'];
  $k=0;

  if( $chk == 0 )
  {
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
  $n12 = $_POST['b12'];



  $sql01 = " SELECT * FROM zz WHERE name IN ('$n1','$n2','$n3','$n4','$n5','$n6','$n7','$n8','$n9','$n10','$n11') ";

  $res01 = mysqli_query ($conn, $sql01);

  $rowZ= mysqli_num_rows($res01);

  //file_put_contents("z er man", $rowZ);

  if($rowZ < 5) {
  $sql = "UPDATE user SET bat1='$n1' ,bat2='$n2' ,bat3='$n3' ,bat4='$n4' ,wk='$n5' ,
  all_rounder1='$n6',all_rounder2='$n7',all_rounder3='$n8',bol1='$n9' ,bol2= '$n10',bol3='$n11' ,captain='$n12', pup ='1' where id = '$uid'";

  mysqli_query($conn , $sql);

  echo "1"; 
}

 else
    echo "not";


  }

  else
    echo "not_ok";
}


}

 ?>

