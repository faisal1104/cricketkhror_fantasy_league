<?php
session_start();
$a = $_SESSION['uu'];

if($a == "admin")

echo '
<!DOCTYPE html>
<html>

<head>
    <title> Player Update </title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.grid.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.grid.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.css">       
    <link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.min.css">
    <link rel="shortcut icon" href="assets/images/logo/favicon.png">
    <link href="assets/css/app.min.css" rel="stylesheet">
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="-1" />
    <meta charset="utf-8"/>
</head>

<body>
<div class="col-md-8 col-lg-7 col-xl-6 mx-auto">
                                <h1>Add played to database</h1>
                                <br>
                                <br>
                                <center><h3 style="color:red">Batsman</h3></center>
                                <form>

                                    <div class="form-group">
                            <label for="name">Batsman Name</label>
                            <input type="name" name="Email" class="form-control" id="bat" aria-describedby="" placeholder="Enter batsman name">
                
                        </div>

                        <button type="submit" id="bat1" class="btn btn-success"> Add </button>
                                </form>

                                <br>
                                <br>
                                <center><h3 style="color:red">Wicket Keeper</h3></center>
                                <form>

                                    <div class="form-group">
                            <label for="">W Keeper Name</label>
                            <input type="" name="Email" class="form-control" id="wk" aria-describedby="" placeholder="Enter  keepere name">
            
                        </div>

                        <button type="submit" id="wk1" class="btn btn-success"> Add </button>
                                </form>



                                <br>
                                <br>
                                <center><h3 style="color:red">All rounder</h3></center>
                                <form>

                                    <div class="form-group">
                            <label for="">All Rounder Name</label>
                            <input type="" name="Email" class="form-control" id="allr" aria-describedby="" placeholder="Enter All rounder name">
                
                        </div>

                        <button type="submit" id="allr1" class="btn btn-success">Add </button>
                                </form>



                                <br>
                                <br>
                                <center> <h3 style="color:red">Bowler </h3> </center>
                                <form>

                                    <div class="form-group">
                            <label for="">Bowler Name</label>
                            <input type="" name="Email" class="form-control" id="bol23" aria-describedby="" placeholder="Enter name">
               
                        </div>

                        <button type="submit" id="bol01" class="btn btn-success"> Add </button>
                                </form>



                            </div>

</body>
<script src="js/ajax.min.js"> </script>
<script src="player_add.js"></script>

</html>
'

?>