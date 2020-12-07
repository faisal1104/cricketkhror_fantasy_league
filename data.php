<?php @ob_start();
if(session_status()!=PHP_SESSION_ACTIVE) 
    session_start();

 include ("connection.php");

   if(isset($_POST['nm']))
  {

       $n = $_POST['name'];


      $sql1 = " SELECT *  FROM user where email = '$n' ";
      $res1 = mysqli_query($conn, $sql1);
      $nr = mysqli_num_rows($res1);
    

    if ($nr == 0)
     
     echo "ok";

    else{

        echo "not";
      }

}
  if(isset($_POST['ps']))
  {

       $pa = $_POST['pass'];


      $sql1 = " SELECT *  FROM user where pass = '$pa' ";
    $res1 = mysqli_query($conn, $sql1);
    $nr = mysqli_num_rows($res1);


    if ($nr == 0)
     echo "not";

    else
        echo "ok";

}

  if(isset($_POST['em']))
  {

       $e = $_POST['email'];


      $sql1 = " SELECT *  FROM user where email = '$e' ";
    $res1 = mysqli_query($conn, $sql1);
    $nr = mysqli_num_rows($res1);


    if ($nr == 0)
         echo "ok";

    else
	      echo "not";

}

   if(isset($_POST['c']))
  {

       $em = $_POST['email'];


      $sql = " SELECT * FROM user where email = '$em' ";
      $res = mysqli_query($conn, $sql);
      $nr = mysqli_num_rows($res);
    

      if ($nr == 1){
      $row = mysqli_fetch_array($res);
      $id = $row['id'];
      $_SESSION['us_id']= $id;
       

  }
}

if(isset($_POST['reg']))
{

  $n = $_POST['name'];
  $em = $_POST['email'];
  $p = $_POST['pass'];

   file_put_contents('log.txt', $n." ". $em."   ".$p);


  $sql = "INSERT INTO user (name, email, pass) VALUES ('$n', '$em', '$p')";

  mysqli_query($conn , $sql);

}

   if(isset($_POST['show']))
  {

    $sql = "SELECT * FROM user";
    $res = mysqli_query ($conn, $sql);
    $data = " ";
    while($row = mysqli_fetch_array($res))
    {
       $data.='
          <tr>
            <td>'.$row['name'].'</td>
            <td>'.$row['team_name'].'</td>                     
            <td>'.$row['points'].'</td>
            </tr>

       ';
    }

    echo $data;
   
  }


 ?>
