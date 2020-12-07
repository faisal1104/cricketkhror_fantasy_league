var u = 0;

function log_val()
{
  
    u = 1;
    
}

   $(function()
     
   {
    var e1 = 0;
    var e2 = 0;
    var e = false;
  
     $("#log2_error").hide();
     $("#log1_error").hide();
     
  

       $("#lname").focusout(function()
       {
        e1= 1;
        if($("#lname").val().length == 0)

         {
            $("#log1_error").html("Email is required.");
             $("#log1_error").show();
             e = true;
        }
        else{
                    
           var name= $("#lname").val();
           var formData = new FormData();
           formData.append('name',name);
           formData.append('nm','nm');

         $.ajax({
          processData:false,
          contentType:false,
          data:formData,
          type:"post",
          url:"data.php",
          success:function(data)
          {
            var msg  = $.trim(data);

            if(msg == "ok")
            {
          $("#log1_error").html("Not match");
         $("#log1_error").show();
               e= true;
            }
            else
            {
               $("#log1_error").hide();
               e = false;
            }
          }
      });
        }
          
       });


        

        //2


        $("#lpass").focusout(function()
          {
            e2 = 1;

          if($("#lpass").val().length == 0)

         {
            $("#log2_error").html("Password is required.");
             $("#log2_error").show();
             e= true;
        } 
        else
        {
          var pass= $("#lpass").val();
           var formData = new FormData();
           formData.append('pass',pass);
           formData.append('ps','ps');

         $.ajax({
          processData:false,
          contentType:false,
          data:formData,
          type:"post",
          url:"data.php",
          success:function(data)
          {
            var msg  = $.trim(data);

            if(msg == "not")
            {
          $("#log2_error").html("Your password is not match.");
         $("#log2_error").show();
               e= true;
            }
            else
            {
               $("#log2_error").hide();
               e = false;
            }
          }
      });

        }

          });

        //chkbox



        //loginh

        $("#log").click(function(event)
       {

        if(u == 1){

          if (e1 == 1)
        {
          if(e2 == 1 )
          {
            if(e == false)
              { event.preventDefault();
                

           var email = $("#lname").val();
           var formData = new FormData();
            formData.append('email',email);
            formData.append('c','c');

         $.ajax({
          processData:false,
          contentType:false,
          data:formData,
          type:"post",
          url:"data.php",
          success:function()
          {  
            var x = 'login';
             window.location = "after_login.php?x="+x;
          }
            
           });
                
              }
              else
            alert ("Error. Information not match.\n Try again");

          }
          else
            alert ("Error.Password field is empty.");

        }
        else
            alert ("Error. Email field is empty.");

        }

        else
          alert("Can not Login. Confirm Box এ ক্লিক করুন অবশ্যই.");
          
          
       });
  
  });