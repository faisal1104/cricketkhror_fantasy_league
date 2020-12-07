     $(function()
     
   {

    var e1 = 0;
    var e2 = 0;

    var error = true;
     
     $("#aemail_error").hide();
     $("#apass_error").hide();


       //1
       $("#aemail").focusout(function()
       {
        e1 = 1;

        if($("#aemail").val().length == 0)

         {
            $("#aemail_error").html("Email field is required");
             $("#aemail_error").show();
             error= true;
        }

       else{

        if($("#aemail").val() == "fantasy@cpl.com"){

          $("#aemail_error").hide(); error = false;
        }
          

        else{
          error = true;
          $("#aemail_error").html("not match");
             $("#aemail_error").show();
        }
     }

          
       });


       
        //2


        $("#apass").focusout(function()
          {
            e2= 1;

          if($("#apass").val().length == 0)

         {
            $("#apass_error").html("password field is required");
             $("#apass_error").show();
             error= true;
        } 
        else
        {
           if($("#apass").val() == "123+456")
            error = false;

          else
            error =  true;


        }

          });

        //3


        $("#admin1").click(function(event)
       { event.preventDefault();

        if ( e1 == 0)
              alert("Not ok");
        else{
          if (e2 == 0)
             alert("Not ok");
           
           else{
            if (error == true )
                  alert ("Not ok");
                else
              {
                event.preventDefault();

              var formdata = new FormData();
              formdata.append('a11','a11');
        

         $.ajax({
          processData:false,
          contentType:false,
          data:formdata,
          type:"post",
          url:"admin_data.php",
          success:function(data)
          {
             event.preventDefault();
               
             window.location.href = "player_up.php";

          }
      });
              }

              }   
            }
          
       });

                $("#admin2").click(function(event)
       {

        if ( e1 == 0)
              alert("Not ok");
        else{
          if (e2 == 0)
             alert("Not ok");
           
           else{
            if (error == true )
                  alert ("Not ok");
                else
              {
                event.preventDefault();

              var formdata = new FormData();
              formdata.append('a11','a11');
        

         $.ajax({
          processData:false,
          contentType:false,
          data:formdata,
          type:"post",
          url:"admin_data.php",
          success:function(data)
          {
             event.preventDefault();
               
             window.location.href = "admin.php";

          }
      });
              }

              }   
            }
          
       });
          
  });