<?php @ob_start();
if(session_status()!=PHP_SESSION_ACTIVE) 
session_start();
$h = $_SESSION['tid'];


  if($h == "userVU")

echo '

<!DOCTYPE html>
<html lang="en">


<head>

    <title> Registration </title>
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="-1" />
    <meta charset="utf-8"/>
    <link rel="shortcut icon" href="assets/images/logo/favicon.png">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.grid.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.grid.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.css">       
    <link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.min.css">
    <link rel="shortcut icon" href="assets/images/logo/favicon.png">
    <link href="assets/css/app.min.css" rel="stylesheet">
    


</head>

<body>
    <div class="app">
        <div class="container-fluid p-0 h-100">
            <div class="row no-gutters h-100 full-height">

                <div class="col-lg-4 d-none d-lg-flex bg" style="background-image:url("assets/images/others/login-1.jpg")">
                    <div class="d-flex h-100 p-h-40 p-v-15 flex-column justify-content-between">
                        <div><br><br><br>
                             <h1 class="text-black m-b-20 font-weight-normal">Fantasy League</h1>
                        </div>
                        <div> <h1 class="text-blcak m-b-20 font-weight-normal">Powered by</h1>
                            <h1 class="text-black m-b-20 font-weight-normal">&emsp; ©CricketKhor</h1>
                            
                        </div>
                        <div class="d-flex justify-content-between">
                            <span class="text-white"></span>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a class="text-black text-link" href="#">Developed by faisal1104vai@gmail.com</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>


                <div class="col-lg-8 bg-white">
                    <div class="container h-100">
                        <div class="row no-gutters h-100 align-items-center">
                            <div class="col-md-8 col-lg-7 col-xl-6 mx-auto">
                                <h2>Registration for Fantasy League</h2>
                                <p class="m-b-30">Fill up all these field to complete your registration. </p><br>
                                <span > <p id="_error" style="color:red"> রেজীঃ করার পূর্বে নিচের বক্সটিতে ক্লিক করে রুলস সমূহ জেনে । রুলস না মেনে দল করলে আপনার টিম বাতিল হবে । </p></span>




<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
  Click here to read the rules. Read carefully.
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        যেভাবে দল সাবমিট করবেনঃ<br><br>

==> আপনি আপনার দলে ৪ জন ব্যাটসম্যান, ১ জন উইকেটরক্ষক, ৩ জন অলরাউন্ডার ও ৩ জন বোলার নিতে পারবেন।<br><br>
==. আপনি আপনার দলে সর্বোচ্চ ৪ জন বিদেশী নিতে পারবেন। এর বেশী নিলে আপনার টিম বাতিল বলে গণ্য হবে ।<br><br>
==> একই প্লেয়ার দুইবার দলে নিলে আপনার টিম বাতিল বলে গণ্য হবে ।<br><br>
==>  আপনি কোনভাবেই ব্যাটসম্যান কে অলরাউন্ডার, অলরাউন্ডার কে বোলার বা ব্যাটসম্যান, বোলারকে অলরাউন্ডার, উইকেট কিপারকে ব্যাটসম্যান হিসেবে এন্ট্রি করতে পারবেন না। এভাবে এন্ট্রি করলেও আপনার দল গ্রহণযোগ্য হবে না।<br><br>


® স্পেশালঃ<br><br>
এবারেও আমাদের ফ্যান্টাসি লীগ ৩ টি ফেইজে অনুষ্ঠিত হবে। প্রতি ফেইজের পর আপনি আপনার দলের কমপক্ষে ৩ টি চেঞ্জের সুযোগ পাবেন।<br><br>


সো শ্রদ্ধেয় ক্রিকেটখোরবাসীরা চ্যাম্পিয়ন হতে চাইলে রেজিষ্ট্রেশন আপনাদের দল তৈরি করে ফেলুন আর মেতে উঠুন ফ্যান্টাসির আনন্দে....<br><br>

সার্বিক সহযোগিতা আপনাদের পাশে থাকবে__<br>
Md Atikur Rahman<br>
Faijul Islam<br>
Faiza Sultana<br>
AI Tushar<br>
Mahir Shohag<br>
Abu Hanif Joy<br>
Saidor Rahman Shanto<br>
Ashik Hasan<br>
Muhammad Mahtab Uddin Anik<br>
Md Ilias<br>
Jakir hasan<br>
Al Arfin Rupok<br>
Md A J Rabel<br>

#স্টে_ক্রিকেটখোর

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>




















                                <br><br><br>
                                <form>


                                       <div class="form-group">
                            <label for="exampleInputName">Facebook User Name</label>
                            <input type="Name" name="Name" class="form-control" id="name" placeholder="Enter Name" required>
               <span > <p id="name_error" style="color:red">  </p></span>
                        </div>
                        
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" name="Email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                 <span > <p id="email_error" style="color:red"> </p></span>
                            
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" name="Pass" class="form-control" id="pass" placeholder="Password">
                 <span > <p id="pass_error" style="color:red"> </p></span>
                        </div>
             
             <div class="form-group">
                <label for="exampleInputPassword1">Retype Password</label>
                <input type="password" name="Pass" class="form-control" id="rpass" placeholder="Retype Password">
                 <span> <p style="color:red" id="rpass_error">   </p></span>
              </div>
                    
                        <div class="form-group">
                            <label for="exampleInputName"> Team Name</label>
                            <input type="Name" name="Name" class="form-control" id="tname" placeholder="Enter Name" required>
               <span > <p id="tname_error" style="color:red">  </p></span>
                        </div>
                        
                        <div class="form-group">
                            <label for="exampleInputName"> Batsman 1 </label>
                            <input type="Name" name="Name" class="form-control" id="bat1" placeholder="Enter Name" required>
               <span > <p id="bat1_error" style="color:red">  </p></span>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputName"> Batsman 2 </label>
                            <input type="Name" name="Name" class="form-control" id="bat2" placeholder="Enter Name" required>
               <span > <p id="bat2_error" style="color:red">  </p></span>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputName"> Batsman 3 </label>
                            <input type="Name" name="Name" class="form-control" id="bat3" placeholder="Enter Name" required>
               <span > <p id="bat3_error" style="color:red">  </p></span>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputName"> Batsman 4 </label>
                            <input type="Name" name="Name" class="form-control" id="bat4" placeholder="Enter Name" required>
               <span > <p id="bat4_error" style="color:red">  </p></span>
                        </div>

                        
                       
                       <div class="form-group">
                            <label for="exampleInputName"> Wicket Keeper </label>
                            <input type="Name" name="Name" class="form-control" id="wk" placeholder="Enter Name" required>
               <span > <p id="wk_error" style="color:red">  </p></span>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputName"> All Rounder 1</label>
                            <input type="Name" name="Name" class="form-control" id="all1" placeholder="Enter Name" required>
               <span > <p id="all1_error" style="color:red">  </p></span>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputName"> All Rounder 2</label>
                            <input type="Name" name="Name" class="form-control" id="all2" placeholder="Enter Name" required>
               <span > <p id="all2_error" style="color:red">  </p></span>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputName"> All Rounder 3</label>
                            <input type="Name" name="Name" class="form-control" id="all3" placeholder="Enter Name" required>
               <span > <p id="all3_error" style="color:red">  </p></span>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputName"> Bowler 1 </label>
                            <input type="Name" name="Name" class="form-control" id="bol1" placeholder="Enter Name" required>
               <span > <p id="bol1_error" style="color:red">  </p></span>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputName"> Bowler 2 </label>
                            <input type="Name" name="Name" class="form-control" id="bol2" placeholder="Enter Name" required>
               <span > <p id="bol2_error" style="color:red">  </p></span>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputName"> Bowler 3 </label>
                            <input type="Name" name="Name" class="form-control" id="bol3" placeholder="Enter Name" required>
               <span > <p id="bol3_error" style="color:red">  </p></span>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputName"> Team Captain </label>
                            <span > <p style="color:red">আপনার টিমের যেকোন একজনকে অধিনায়ক হিসেবে দিন ।  </p></span>
                            <input type="Name" name="Name" class="form-control" id="cap" placeholder="Enter Name" required>
               <span > <p id="cap_error" style="color:red">  </p></span>
                        </div>

                        
                        <button type="submit" id="team" class="btn btn-success">Submit</button>
                                </form>
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
    <script src="js/ajax.min.js"></script>
<script type="text/javascript" src="team_validate.js"></script>
</html>

'
?>