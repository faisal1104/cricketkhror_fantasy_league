<!DOCTYPE html>
<html>

<head>
    <title> Token Validation </title>
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
    <div class="app">
        <div class="container-fluid p-0 h-100">
            <div class="row no-gutters h-100 full-height">

                <div class="col-lg-4 d-none d-lg-flex bg" style="background-image:url('assets/images/others/login-1.jpg')">
                    <div class="d-flex h-100 p-h-40 p-v-15 flex-column justify-content-between">
                        <div><br><br><br>
                             <h1 class="text-white m-b-20 font-weight-normal">Fantasy League</h1>
                        </div>
                        <div> <h1 class="text-white m-b-20 font-weight-normal">Powered by</h1>
                            <h1 class="text-white m-b-20 font-weight-normal">&emsp; ©CricketKhor</h1>
                            
                        </div>
                        <div class="d-flex justify-content-between">
                            <span class="text-white"></span>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a class="text-white text-link" href="#">Developed by faisal1104vai@gmail.com</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 bg-white">
                    <div class="container h-100">
                        <div class="row no-gutters h-100 align-items-center">
                            <div class="col-md-8 col-lg-7 col-xl-6 mx-auto">
                                <h1>Registration in Fantasy League</h1><br><br>
                                <h3>
                                <p class="m-b-30" style="color:blue" > আপনি যদি ফ্যান্টাসী লীগের রেজী ফী প্রদান করে থাকেন, তবে আপনাকে একটি টোকেন আইডি দেয়া হইছে । টোকেনটি নিচে দিন এবং ফ্যান্টাসী লীগে রেজীঃ করুন ।  </p></h3>
                                <form>

                                    <div class="form-group">
                            <label for="">Token ID</label>
                            <input type="name" name="Email" class="form-control" id="tkn" aria-describedby="" placeholder="Enter token id">
                 <span > <p id="tkn_error" style="color:red"> Su </p></span>
                        </div>



                        <button type="submit" id="token1" class="btn btn-success"> Submit </button>

                                </form>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
<script src="js/ajax.min.js"> </script>
<script src="token1.js"></script>

</html>
