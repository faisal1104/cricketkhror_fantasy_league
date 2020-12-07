<?php 

 include ("connection.php");

     if(isset($_POST['set']))
  {
   

    $sql = "SELECT * FROM user";
    $res = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_array($res))
    { 


      $p=0;$p15=0;$p16=0;$p17=0;$p12=0;
      $p1=0;$p2=0;$p3=0;$p4=0;$p5=0;$p6=0;$p7=0;$p8=0; $p9=0;$p10=0;$p11=0;

      $id = $row['id'];
      $b1 = $row['bat1'];
      $b2 = $row['bat2'];
      $b3 = $row['bat3'];
      $b4 = $row['bat4'];
      $wk = $row['wk'];
      $allr1 = $row['all_rounder1'];
      $allr2 = $row['all_rounder2'];
      $allr3 = $row['all_rounder3'];
      $bol1 = $row['bol1'];
      $bol2 = $row['bol2'];
      $bol3 = $row['bol3'];
      $cap = $row['captain'];

      $sql1 = "SELECT * from batsman where name = '$b1' ";
      $res1 = mysqli_query($conn,$sql1);

           while($row1 = mysqli_fetch_array($res1)){
                  $p1 = $row1['points'];
                  $p= $p+$p1;
              }

      $sql2 = "SELECT * from batsman where name = '$b2' ";
      $res2 = mysqli_query($conn,$sql2);

           while($row2 = mysqli_fetch_array($res2)){
                  $p2 = $row2['points'];
                  $p= $p+$p2;
              }
      $sql3 = "SELECT * from batsman where name = '$b3' ";
      $res3 = mysqli_query($conn,$sql3);

           while($row3 = mysqli_fetch_array($res3)){
                  $p3 = $row3['points'];
                $p=$p+$p3;
              }


      $sql4 = "SELECT * from batsman where name = '$b4' ";
      $res4 = mysqli_query($conn,$sql4);

           while($row4 = mysqli_fetch_array($res4)){
                  $p4 = $row4['points'];
                  $p=$p+$p4;
              }


      $sql5 = "SELECT * from w_keeper where name = '$wk' ";
      $res5 = mysqli_query($conn,$sql5);

           while($row5 = mysqli_fetch_array($res5)){
                  $p5 = $row5['points'];
                  $p=$p+$p5;
              }

      $sql6 = "SELECT * from allrounder where name = '$allr1' ";
      $res6 = mysqli_query($conn,$sql6);

           while($row6 = mysqli_fetch_array($res6)) {
                  $p6 = $row6['points'];
                  $p=$p+$p6;
              }

      $sql7 = "SELECT * from allrounder where name = '$allr2' ";
      $res7 = mysqli_query($conn,$sql7);

           while($row7 = mysqli_fetch_array($res7)) {
                  $p7 = $row7['points'];
                  $p=$p+$p7;
              }


       $sql8 = "SELECT * from allrounder where name = '$allr3' ";
      $res8 = mysqli_query($conn,$sql8);

           while($row8 = mysqli_fetch_array($res8)) {
                  $p8 = $row8['points'];
                  $p=$p+$p8;
              }       

      $sql9 = "SELECT * from bowler where name = '$bol1' ";
      $res9 = mysqli_query($conn,$sql9);

           while($row9 = mysqli_fetch_array($res9)){
                  $p9 = $row9['points'];
                  $p=$p+$p9;
              }

     

      $sql10 = "SELECT * from bowler where name = '$bol2' ";
      $res10 = mysqli_query($conn,$sql10);

           while($row10 = mysqli_fetch_array($res10)){
                  $p10 = $row10['points'];
                $p=$p+$p10;
              }

       $sql11 = "SELECT * from bowler where name = '$bol3' ";
      $res11 = mysqli_query($conn,$sql11);

           while($row11 = mysqli_fetch_array($res11)){
                  $p11 = $row11['points'];
                 $p=$p+$p11;
              }



      $sql12 = "SELECT * from batsman where name = '$cap' ";
      $res12 = mysqli_query($conn,$sql12);
      $nr12 = mysqli_num_rows($res12);         

              if ($nr12 == 1) {
                while($row12 = mysqli_fetch_array($res12)){
                  $p12 = $row12['points'];
                  $p= $p+$p12;
                 } 

              }

              else //1
              { 
                 $sql15 = "SELECT * from allrounder where name = '$cap' ";
                 $res15 = mysqli_query($conn,$sql15);
                 $nr15 = mysqli_num_rows($res15);

                 if ($nr15 == 1) {
                   while($row15 = mysqli_fetch_array($res15)){
                          $p15 = $row15['points'];
                          $p= $p+$p15;
                          }
                    }
                  else //2
                  {

                    $sql16 = "SELECT * from w_keeper where name = '$cap' ";
                 $res16 = mysqli_query($conn,$sql16);
                 $nr16 = mysqli_num_rows($res16);

                 if ($nr16 == 1) {
                   while($row16 = mysqli_fetch_array($res16)){
                          $p16 = $row16['points'];
                          $p= $p+$p16;
                          }
                    }
                    else //3
                    {
                        $sql17 = "SELECT * from bowler where name = '$cap' ";
                 $res17 = mysqli_query($conn,$sql17);
                 $nr17 = mysqli_num_rows($res17);

                 if ($nr17 == 1) {
                   while($row17 = mysqli_fetch_array($res17)){
                          $p17 = $row17['points'];
                          $p= $p+$p17;
                          }
                    }

                    }  //3

                  }  //2
                    

              } //1

      

      


      $sql33 = "SELECT * from user where id = '$id' ";
      $res33 = mysqli_query($conn,$sql33);
          while($row33 = mysqli_fetch_array($res33)){
                  $p33 = $row33['points'];
                 $p= $p+$p33;
              }   

        $sql65 =  "UPDATE user SET points = '$p' where id ='$id' " ;
        mysqli_query($conn,$sql65);

    //  file_put_contents("sum1.txt", $p);
     
file_put_contents("points30/$id.txt", "1-$p1 __2- $p2 __3- $p3 __4 -$p4 __5- $p5 __6- $p6 __7- $p7 __8- $p8 __ 9- $p9 __ 10- $p10 __11- $p11 __ 12- $p12 __ 15- $p15 __ 16- $p16 __ 17- $p17 ___  total - $p ");


    }
    
  }
  
      


     if(isset($_POST['show']))
  {
    $i=1;


    $sqlv = "SELECT * FROM user ORDER BY points DESC";
    $resv = mysqli_query ($conn, $sqlv);
    $data = " ";
    while($rowv = mysqli_fetch_array($resv))
    {
       $data.='
          <tr>
             <td>'.$i.'</td>
            <td>'.$rowv['name'].'</td>
            <td>'.$rowv['team_name'].'</td>
            <td>'.$rowv['points'].'</td>         
           </tr>
       ';
       $i++;

    }

    echo $data;

  }

 ?>