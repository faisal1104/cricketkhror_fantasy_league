<?php 
session_start();

 include ("connection.php");

   if(isset($_POST['a11']))
  {

    $id3 = "admin";

      $_SESSION['uu'] = $id3;
  }

   if(isset($_POST['show1']))
  {


    $sql = "SELECT * FROM batsman";
    $res = mysqli_query ($conn, $sql);
    $data = " ";
    while($row = mysqli_fetch_array($res))
    {
       $data.='
          <tr>
            <td>'.$row['name'].'</td>
            <td>'.$row['points'].'</td>
            
            <td> <button  class="btn btn-waring" onclick = "edit1('.$row['id'].')" >EDIT</button></td>

       ';
    }

    echo $data;

  }

     if(isset($_POST['show2']))
  {


    $sql = "SELECT * FROM w_keeper";
    $res = mysqli_query ($conn, $sql);
    $data = " ";
    while($row = mysqli_fetch_array($res))
    {
       $data.='
          <tr>
            <td>'.$row['name'].'</td>
            <td>'.$row['points'].'</td>
            
            <td> <button  class="btn btn-waring" onclick = "edit2('.$row['id'].')" >EDIT</button></td>

       ';
    }

    echo $data;

  }

     if(isset($_POST['show3']))
  {


    $sql = "SELECT * FROM allrounder";
    $res = mysqli_query ($conn, $sql);
    $data = " ";
    while($row = mysqli_fetch_array($res))
    {
       $data.='
          <tr>
            <td>'.$row['name'].'</td>
            <td>'.$row['points'].'</td>
            
            <td> <button  class="btn btn-waring" onclick = "edit3('.$row['id'].')" >EDIT</button></td>

       ';
    }

    echo $data;

  }

     if(isset($_POST['show4']))
  {


    $sql = "SELECT * FROM bowler";
    $res = mysqli_query ($conn, $sql);
    $data = " ";
    while($row = mysqli_fetch_array($res))
    {
       $data.='
          <tr>
            <td>'.$row['name'].'</td>
            <td>'.$row['points'].'</td>
            
            <td> <button  class="btn btn-waring" onclick = "edit4('.$row['id'].')" >EDIT</button></td>

       ';
    }

    echo $data;

  }




 if(isset($_POST['edit1']))
{

  $x = $_POST['h'];

  $sql = "SELECT * FROM batsman WHERE id =$x";
  
  $res = mysqli_query($conn , $sql);
  $row = mysqli_fetch_array($res);

  echo json_encode($row);

}

 if(isset($_POST['edit2']))
{

  $x = $_POST['h'];

  $sql = "SELECT * FROM w_keeper WHERE id =$x";
  
  $res = mysqli_query($conn , $sql);
  $row = mysqli_fetch_array($res);

  echo json_encode($row);

}


 if(isset($_POST['edit3']))
{

  $x = $_POST['h'];

  $sql = "SELECT * FROM allrounder WHERE id =$x";
  
  $res = mysqli_query($conn , $sql);
  $row = mysqli_fetch_array($res);

  echo json_encode($row);

}


 if(isset($_POST['edit4']))
{

  $x = $_POST['h'];

  $sql = "SELECT * FROM bowler WHERE id =$x";
  
  $res = mysqli_query($conn , $sql);
  $row = mysqli_fetch_array($res);

  echo json_encode($row);

}


 if(isset($_POST['up1']))
{

  $id = $_POST['id'];
  $p = $_POST['points'];

  //file_put_contents('test.txt',$id);

  $sql = " UPDATE batsman set points = '$p'  where id = '$id'";

  mysqli_query($conn , $sql);

}
 if(isset($_POST['up2']))
{

  $id = $_POST['id'];
  $p = $_POST['points'];

  //file_put_contents('test.txt',$id);

  $sql = " UPDATE w_keeper set points = '$p'  where id = '$id'";

  mysqli_query($conn , $sql);

}
 if(isset($_POST['up3']))
{

  $id = $_POST['id'];
  $p = $_POST['points'];

  //file_put_contents('test.txt',$id);

  $sql = " UPDATE allrounder set points = '$p'  where id = '$id'";

  mysqli_query($conn , $sql);

}
 if(isset($_POST['up4']))
{

  $id = $_POST['id'];
  $p = $_POST['points'];

  //file_put_contents('test.txt',$id);

  $sql = " UPDATE bowler set points = '$p'  where id = '$id'";

  mysqli_query($conn , $sql);

}

 ?>