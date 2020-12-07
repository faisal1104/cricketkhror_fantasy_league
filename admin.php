<?php
session_start();
$a = $_SESSION['uu'];

if($a == "admin")
 echo   '

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <!-- <meta name="csrf-token" content="{{ csrf_token() }}"> -->
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
    <meta http-equiv="cache-control" content="no-cache" />
       <meta http-equiv="Pragma" content="no-cache" />
         <meta http-equiv="Expires" content="-1" />
    <title>Update Points</title>

    <link rel="shortcut icon" href="assets/images/logo/favicon.png">

    <link href="assets/vendors/datatables/dataTables.bootstrap.min.css" rel="stylesheet">
    <!-- Core css -->
    <link href="assets/css/app.min.css" rel="stylesheet">

</head>

<body style="overflow-x:auto">
    <div class="app">
        <div class="layout">
            <!-- Header START -->
            <div class="header">
                <div class="logo logo-dark">
                    <a href="index.html">
                        <img src="assets/images/logo/logo1.png" alt="Logo">
                        <img class="logo-fold" src="assets/images/logo/logo-fold11.png" alt="Logo">
                    </a>
                </div>
                <div class="logo logo-white">
                    <a href="index.html">
                        <img src="assets/images/logo/logo-white.png" alt="Logo">
                        <img class="logo-fold" src="assets/images/logo/logo-fold-white1.png" alt="Logo">
                    </a>
                </div>

            </div>
            <!-- Header END -->

            <!-- Side Nav START -->
           
            <div class="page-container">
                <div class="main-content">
                    <div class="card">
                        <div class="card-body">
                            <h4>Data Table</h4>

                            <div class="modal fade" id="1f" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"> EDIT Modal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form>

  <div class="form-group">
    <label for="Roll">Batsman Name</label>
    <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Player Name">
                           <input type="hidden" id="175">
  </div>



  <div class="form-group">
    <label for="Roll">New Ponits</label>
    <input type="text" class="form-control" id="points" aria-describedby="emailHelp" placeholder="">
    </div>


</form>

      </div>
      <div class="modal-footer">
       
        <button type="submit" id="reg" class="btn btn-success" data-dismiss="modal" onclick = "update1()" >Update</button>
      </div>
    </div>
  </div>
</div>





<div class="modal fade" id="2f" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"> EDIT Modal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form>

  <div class="form-group">
    <label for="Roll">Batsman Name</label>
    <input type="text" class="form-control" id="2name" aria-describedby="emailHelp" placeholder="Player Name">
                           <input type="hidden" id="275">
  </div>



  <div class="form-group">
    <label for="Roll">New Ponits</label>
    <input type="text" class="form-control" id="2points" aria-describedby="emailHelp" placeholder="">
    </div>


</form>

      </div>
      <div class="modal-footer">
       
        <button type="submit" id="reg" class="btn btn-success" data-dismiss="modal" onclick = "update2()" >Update</button>
      </div>
    </div>
  </div>
</div>



<div class="modal fade" id="3f" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"> EDIT Modal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form>

  <div class="form-group">
    <label for="Roll">Batsman Name</label>
    <input type="text" class="form-control" id="3name" aria-describedby="emailHelp" placeholder="Player Name">
                           <input type="hidden" id="375">
  </div>



  <div class="form-group">
    <label for="Roll">New Ponits</label>
    <input type="text" class="form-control" id="3points" aria-describedby="emailHelp" placeholder="">
    </div>


</form>

      </div>
      <div class="modal-footer">
       
        <button type="submit" id="reg" class="btn btn-success" data-dismiss="modal" onclick = "update3()" >Update</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="4f" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"> EDIT Modal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form>

  <div class="form-group">
    <label for="Roll">Batsman Name</label>
    <input type="text" class="form-control" id="4name" aria-describedby="emailHelp" placeholder="Player Name">
                           <input type="hidden" id="475">
  </div>



  <div class="form-group">
    <label for="Roll">New Ponits</label>
    <input type="text" class="form-control" id="4points" aria-describedby="emailHelp" placeholder="">
    </div>


</form>

      </div>
      <div class="modal-footer">
       
        <button type="submit" id="reg" class="btn btn-success" data-dismiss="modal" onclick = "update4()" >Update</button>
      </div>
    </div>
  </div>
</div>
                            <div class="m-t-25">
                                <table id="data-table" class="table" border ="5">
                                    <thead>
                                        <tr bgcolor="red">
                                            <th  > Batsman Name </th>
                                            <th> Points </th>
                                            
                                            <th> EDIT </th>
                                            <th> Delete </th>
                                            
                                        </tr>
                                    </thead >
                                    <tbody  id ="batp">
                                        
                                        
                                    </tbody>
                                    
                                </table>
                            </div>
                            <br><br>
                            <div class="m-t-25">
                                <table id="data-table" class="table" border ="5">
                                    <thead>
                                       <tr bgcolor="red">
                                            <th> Wicket Kepeer Name </th>
                                            <th> Points </th>
                                            
                                            <th> EDIT </th>
                                            
                                            
                                        </tr>
                                    </thead >
                                    <tbody  id ="wkp">
                                        
                                        
                                    </tbody>
                                    
                                </table>
                            </div>
                           
                           <br><br>
                            <div class="m-t-25">
                                <table id="data-table" class="table" border ="5">
                                    <thead>
                                        <tr bgcolor="red">
                                            <th> All Rounder Name </th>
                                            <th> Points </th>
                                            
                                            <th> EDIT </th>
                                            
                                        </tr>
                                    </thead >
                                    <tbody  id ="allp">
                                        
                                        
                                    </tbody>
                                    
                                </table>
                            </div>

                            <br><br>
                            <div class="m-t-25">
                                <table id="data-table" class="table" border ="5">
                                    <thead>
                                        <tr bgcolor="red">
                                            <th>Bowler Name </th>
                                            <th> Points </th>
                                            
                                            <th> EDIT </th>

                                            
                                        </tr>
                                    </thead >
                                    <tbody  id ="bolp">
                                        
                                        
                                    </tbody>
                                    
                                </table>
                            </div>
                           
                        </div>
                    </div>

                </div>
            </div>


        </div>
    </div>





</body>


<script src="assets/js/vendors.min.js"></script>

<script src="assets/js/app.min.js"></script>
<script src="admin_points.js"></script>


</html>
'

?>
