<?php
$a= $_GET['x'];

  if($a == "login")

 echo   '

<html>

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <title>User information</title>
    <link rel="shortcut icon" href="assets/images/logo/favicon.png">
    <link href="assets/vendors/datatables/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/app.min.css" rel="stylesheet">

    <style>
  .brt { 
    width: 730px;
    height: 780px;
    padding: 20px;
    border: 10px solid yellowgreen;
  }
</style>

<meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="-1" />
    
</head> 

<body style="overflow-x:auto">
    <div class="app">
        <div class="layout">
            <!-- Header START -->
            <div >
                
                

            </div>
           
            <div class="col-md-36"style="margin-left: 100px; " >
                <div class="main-content">
                    <div class="card">
                        <div class="col-md-36" ><br><br><br><br>
                          
                            <b><h1 style="color:green; margin-left: 100px; "><u> Your team for Current Phase</u></h1></b><br>

                            <div class="modal fade" id="3f" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"> EDIT Your Team</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form>
          <span > <p style="color:red"> 
          বিঃদ্রঃ -- আপনি যে ১ জন প্লেয়ার চেন্জ করবেন কেবল ঐ ১ জনের নামের বক্সে ক্লিক করবেন ।
বাকী প্লেয়ারদের নামের বক্স গুলোতে ভুলেও ক্লিক করবেন না । <br>
 Error আসবে ।। টিম চেন্জ হবেনা ।<br>
 ।। </p></span>

             <div class="form-group" >
                            <label for="exampleInputName"> Team Name </label>
                            <input type="Name" disabled name="Name" class="form-control" id="tname" placeholder="" required>
                        </div>

              <div class="form-group">
                            <label for="exampleInputName"> Batsman 1 </label>
                            <input type="Name" name="Name" class="form-control" id="bat1" placeholder="" required>
                 <span > <p id="bat1_error" style="color:red">  </p></span> 
                        </div>


                        <div class="form-group">
                            <label for="exampleInputName"> Batsman 2 </label>
                            <input type="Name" name="Name" class="form-control" id="bat2" placeholder="" required>
                 <span > <p id="bat2_error" style="color:red">  </p></span> 
                        </div>

                        <div class="form-group">
                            <label for="exampleInputName"> Batsman 3 </label>
                            <input type="Name" name="Name" class="form-control" id="bat3" placeholder="" required>
                 <span > <p id="bat3_error" style="color:red">  </p></span>
                        </div>

                                  <input type="hidden" id="175">

                        <div class="form-group">
                            <label for="exampleInputName"> Batsman 4 </label>
                            <input type="Name" name="Name" class="form-control" id="bat4" placeholder="" required>
                <span > <p id="bat4_error" style="color:red">  </p></span>
                        </div>
 
                       
                       <div class="form-group">
                            <label for="exampleInputName"> Wicket Keeper </label>
                            <input type="Name" name="Name" class="form-control" id="wk" placeholder="" required>
                 <span > <p id="wk_error" style="color:red">  </p></span>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputName"> All Rounder 1 </label>
                            <input type="Name" name="Name" class="form-control" id="all1" placeholder="" required>
                 <span > <p id="all1_error" style="color:red">  </p></span>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputName"> All Rounder 2 </label>
                            <input type="Name" name="Name" class="form-control" id="all2" placeholder="" required>
                 <span > <p id="all2_error" style="color:red">  </p></span>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputName"> All Rounder 3 </label>
                            <input type="Name" name="Name" class="form-control" id="all3" placeholder="" required>
                <span > <p id="all3_error" style="color:red">  </p></span>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputName"> Bowler 1 </label>
                            <input type="Name" name="Name" class="form-control" id="bol1" placeholder=" " required>
                 <span > <p id="bol1_error" style="color:red">  </p></span>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputName"> Bowler 2 </label>
                            <input type="Name" name="Name" class="form-control" id="bol2" placeholder="" required>
                  <span > <p id="bol2_error" style="color:red">  </p></span>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputName"> Bowler 3 </label>
                            <input type="Name" name="Name" class="form-control" id="bol3"> 
                 <span > <p id="bol3_error" style="color:red">  </p></span>
                        </div>

                         <div class="form-group">
                            <label for="exampleInputName"> Team Captain </label>
                            <span > <p style="color:red"> আপনি ক্যাপ্টেন চেন্জ করতে পারবেন না এই ফেইজে ।।
                              </p ></span>
                            <input type="Name" name="Name" class="form-control" id="cap" disabled>
                 <span > <p id="cap_error" style="color:red">  </p></span> 
                        </div>


</form>


<div class="form-check"><h4>

 <form>
                                    
 <input type="checkbox" id ="chk2" class="form-check-input" onclick="team_val()" style="width: 35px;height: 35px;margin-top: 30px;" >
    <label class="form-check-label" for="exampleCheck1" style="color:red">&nbsp; &nbsp;&nbsp;&nbsp;⚠️ Confirm to change? <br> 
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Update Team এ ক্লিক করার পূর্বে এই কনফার্ম <br> &nbsp; &nbsp; &nbsp;&nbsp; বক্সটিতে অবশ্যই  ক্লিক করুন </label>
   </form> 
   </h4> 
        

  </div>



      </div>
      <div class="modal-footer">
      <br>
                <span >আপনি যে  ১ জন প্লেয়ার চেন্জ করবেন কেবল ঐ ১ জনের নামের বক্সে ক্লিক করবেন ।
বাকী প্লেয়ারদের নামের বক্স গুলোতে ভুলেও ক্লিক করবেন না । <br>
 Error আসবে ।। টিম চেন্জ হবেনা ।<br>
 </p><b></span>

       
        <button type="submit"class="btn btn-success" data-dismiss="modal" id = "update" >Update Your Team</button>
      </div>
    </div>
  </div>
</div>

                            
                                
                                
                                 <div class="brt">   <h3>    
                                    <p id ="login_data">
  
                                    </p></h3></div>
                                <br>
                                <br><br>
                                
                                <br>
                                </div>
                               
                               
                                <div class="col-md-10" style="margin-left: 60px;">
                                <h3> <span>  <p style="color:green"> 
          <u><b> বিঃদ্রঃ -- টিম আপডেট করার সময় যেসব বিষয় মাথায় রাখবেন ।</u></b>  <br><p>

<p style="color:red"><br>
১) যদি টিম আপডেট করতে প্রথম বার কোন কারণে ভুল করেন, তবে ব্রাউজার হতে বের
হয়ে আবার ডুকবেন এবং নতুন করে লগিন করে টিম ঠিকমত চেন্জ করার চেষ্টা করবেন ।<br>
২) আপনি বিদেশী প্লেয়ার 4 জনের বেশী নিতে পারবেন না ।<br>
৩) কোয়ালিফায়ার ফেইজ হতে কোন ব্যাটসম্যান যদি বোলিং করে তবে সে বোলিং এর পয়েন্ট পাবে ।।
একইভাবে কোন বোলার যদি রান করে সেও রান করার পয়েন্টস পাবে ।।
আরেকটি তথ্য হলো, ফাইনাল ম্যাচের আগে আরো একটি পরিবর্তন করার সুযোগ থাকবে ।।   <br>এবং ফাইনাল ম্যাচের ম্যান অফ দ্যা ম্যাচ যে হবে তার পয়েন্টস ডাবল হবে ।
><br><br> </p>
       
      <center> <button class="btn btn-waring" onclick = "edit()" ><u><h1> Edit Your Team for Final Phase</h1></u></button></center>
                                <br>

  <br>
<p style="color:green">
৪) আপনি যে ১ জন প্লেয়ার চেন্জ করবেন কেবল ঐ ১ জনের নামের বক্সে ক্লিক করবেন ।
বাকী প্লেয়ারদের নামের বক্স গুলোতে ভুলেও ক্লিক করবেন না । <br>
 Error আসবে ।। টিম চেন্জ হবেনা ।<br>
 ।। </p> <br>
          
          
          <br>

          </p></span></h3>
         
                           
                            
                               
                                    <div style="align-content: left">
                            <span class="text-white"></span>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a  href="#">Developed by:- faisal1104vai@gmail.com</a>
                                </li>
                            </ul>
                            <br>
                        </div>
                                
                      







                             </div>  

                            </div>
                           
                           
                        </div>

                    </div>

                </div>
            </div>


        </div>

    </div>





</body>


<script src="assets/js/vendors.min.js"></script>
<script src="assets/js/pages/datatables.js"></script>
<script src="assets/js/app.min.js"></script>
<script src="after_login.js"></script>


</html>



'

?>
