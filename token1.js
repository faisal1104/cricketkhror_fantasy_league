  $(function()

   {
     $("#tkn_error").hide();

        var e1 = 0;
        var error = true;
     

       $("#tkn").focusout(function()
       {
        e1= 1;

        if($("#tkn").val().length == 0)

         {
            $("#tkn_error").html("Token id must be required");
             $("#tkn_error").show();
             error= true;
        }
        else{
                    
          
            if($("#tkn").val() == "$_fantsay_$")
            {
              $("#tkn_error").hide();
               error = false;
          
            }
            else
            {
              $("#tkn_error").html("Token ID not matched. ");
              $("#tkn_error").show();
               error= true;
               
            } 
          }

      });




        $("#token1").click(function(event)
       {  event.preventDefault();

        if ( e1 == 1){
             
                if (error == false)
                {

                  var formdata = new FormData();
                  formdata.append('t','t');
  


     $.ajax({

      processData:false,
      contentType: false,
      data: formdata,
      type: "post",
      url : "token_data.php",

      success:function () {
               event.preventDefault();
               
             window.location.href = "user.php";
        
     }

    });
   
 }
              
                else{
                  alert("Not ok");
                  $("#tkn_error").html("Token ID not matched. ");
                 $("#tkn_error").show();
                }


                 
        } 


        else{
          alert("Not ok");
        $("#tkn_error").html("Token ID not matched. ");
        $("#tkn_error").show();

           }

});


});