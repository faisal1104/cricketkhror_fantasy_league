 <?php 


 include ("connection.php");

   if(isset($_POST['show']))
  {
   
       $sql = "SELECT * FROM user ";
    $res = mysqli_query ($conn, $sql);
    $data = " ";
    while($row = mysqli_fetch_array($res))
    {
       $data.='
          <tr>
             <td>'.$row['id'].'</td>
            <td>'.$row['name'].'</td>
            <td>'.$row['team_name'].'</td>
            <td>'.$row['points'].'</td>
            <td>'.$row['bat1'].'</td>
            <td>'.$row['bat2'].'</td>
            <td>'.$row['bat3'].'</td>
            <td>'.$row['bat4'].'</td>
            <td>'.$row['wk'].'</td>
            <td>'.$row['all_rounder1'].'</td>
            <td>'.$row['all_rounder2'].'</td>
            <td>'.$row['all_rounder3'].'</td>
            <td>'.$row['bol1'].'</td>
            <td>'.$row['bol2'].'</td>
            <td>'.$row['bol3'].'</td>
            <td>'.$row['captain'].'</td>

       ';
    }
    echo $data;
  



  }
?>