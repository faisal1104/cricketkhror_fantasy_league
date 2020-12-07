  

   $(function()
     
   {$("#email_error").hide();

    var e = [20];
    var i=1;
    var j = 0;
    for (;i<20;i++)
      e[i] = 0;


    var error =false;


       $("#name").focusout(function()
       {
        e[1]=1;

        if($("#name").val().length == 0)

         {
            $("#name_error").html("name field is required");
             $("#name_error").show();
             error= true;
        }
        else{
                    
           var name= $("#name").val();
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

            if(msg == "not")
            {
          $("#name_error").html("Name Already Exist");
         $("#name_error").show();
               error= true;
            }
            else
            {
               $("#name_error").hide();
               error = false;
            }
          }
      });
        }
          
       });


       //1

         $("#email").focusout(function()
       {
            e[2]=1;

        if($("#email").val().length == 0)

         {
            $("#email_error").html("Email field is required");
             $("#email_error").show();
             error= true;
        }

       else{

        var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
  
    if(!pattern.test($("#email").val())) {
         $("#email_error").html("Invalid Email Address");
         $("#email_error").show();
         error= true;
       }
       else
       {
        $("#email_error").hide();
           
           var email = $("#email").val();
           var formData = new FormData();
           formData.append('email',email);
           formData.append('em','em');

         $.ajax({
          processData:false,
          contentType:false,
          data:formData,
          type:"post",
          url:"data.php",
          success:function(data)
          {
            var msg  = $.trim(data);

            if(msg ==  "not")
            {
          $("#email_error").html("Email Already Exist");
         $("#email_error").show();
         error= true;
            }
            else
            {
               $("#email_error").hide();
               error = false;
            }
          }
      });

       }
     }

          
       });



       
        //2


        $("#pass").focusout(function()
          {
            e[3]=1;


          if($("#pass").val().length == 0)

         {
            $("#pass_error").html("Password field is required");
             $("#pass_error").show();
             error= true;
        } 
        else
        {

         if( $("#pass").val().length<8)
         {
           $("#pass_error").html("Minimum 8 number or character required");
             $("#pass_error").show();
             error= true;
         }
         else
         {
          
          $("#pass_error").hide();
          error= false;

         }



        }

          });

        //3
        $("#rpass").focusout(function()
       {

        e[4]=1;


        if($("#rpass").val().length == 0)

         {
            $("#rpass_error").html("Retype password field is required");
             $("#rpass_error").show();
             error= true;
        }
        else
        {
          if($("#pass").val() != $("#rpass").val())
          {
           $("#rpass_error").html("Password and retype password not match");
             $("#rpass_error").show();
             error= true;
          }
          else
          {
            $("#rpass_error").hide();
            error = false;
          }
        }
            
        

          
       });

     //team
     $("#tname").focusout(function()
       {
        e[5]=1;

        if($("#tname").val().length == 0)

         {
            $("#tname_error").html("field is required");
             $("#tname_error").show();
             error= true;
        }
        else{
                    
           var t= $("#tname").val();
           var formData = new FormData();
           formData.append('tn',t);
           formData.append('tname','tname');

         $.ajax({
          processData:false,
          contentType:false,
          data:formData,
          type:"post",
          url:"team_data.php",
          success:function(data)
          {
            var msg  = $.trim(data);

            if(msg == "not")
            {
          $("#tname_error").html("Allready Taken.");
         $("#tname_error").show();
               error= true;
            }
            else
            {
               $("#tname_error").hide();
               error = false;
            }
          }
      });
        }
          
       });

      //1
       $("#bat1").focusout(function()
       {
        e[6]=1;

        if($("#bat1").val().length == 0)

         {
            $("#bat1_error").html("field is required");
             $("#bat1_error").show();
             error= true;
        }
        else{
                    
           var bat= $("#bat1").val();
           var formData = new FormData();
           formData.append('bat',bat);
           formData.append('bats','bats');

         $.ajax({
          processData:false,
          contentType:false,
          data:formData,
          type:"post",
          url:"team_data.php",
          success:function(data)
          {
            var msg  = $.trim(data);

            if(msg == "not")
            {
          $("#bat1_error").html("Not Exist");
         $("#bat1_error").show();
               error= true;
            }
            else
            {
               $("#bat1_error").hide();
               error = false;
            }
          }
      });
        }
          
       });


       //2
       $("#bat2").focusout(function()
       {
        e[7]=1;

        if($("#bat2").val().length == 0)

         {
            $("#bat2_error").html("field is required");
             $("#bat2_error").show();
             error= true;
        }
        else{
                    
           var bat= $("#bat2").val();
           var formData = new FormData();
           formData.append('bat',bat);
           formData.append('bats','bats');

         $.ajax({
          processData:false,
          contentType:false,
          data:formData,
          type:"post",
          url:"team_data.php",
          success:function(data)
          {
            var msg  = $.trim(data);

            if(msg == "not")
            {
          $("#bat2_error").html("Not Exist");
         $("#bat2_error").show();
               error= true;
            }
            else
            {
               $("#bat2_error").hide();
               error = false;
            }
          }
      });
        }
          
       });

       
       
        //3
        $("#bat3").focusout(function()
       {
        e[8]=1;

        if($("#bat3").val().length == 0)

         {
            $("#bat3_error").html("field is required");
             $("#bat3_error").show();
             error= true;
        }
        else{
                    
           var bat= $("#bat3").val();
           var formData = new FormData();
           formData.append('bat',bat);
           formData.append('bats','bats');

         $.ajax({
          processData:false,
          contentType:false,
          data:formData,
          type:"post",
          url:"team_data.php",
          success:function(data)
          {
            var msg  = $.trim(data);

            if(msg == "not")
            {
          $("#bat3_error").html("Not Exist");
         $("#bat3_error").show();
               error= true;
            }
            else
            {
               $("#bat3_error").hide();
               error = false;
            }
          }
      });
        }
          
       });

        //4
        $("#bat4").focusout(function()
       {
        e[9]=1;

        if($("#bat4").val().length == 0)

         {
            $("#bat4_error").html("field is required");
             $("#bat4_error").show();
             error= true;
        }
        else{
                    
           var bat= $("#bat4").val();
           var formData = new FormData();
           formData.append('bat',bat);
           formData.append('bats','bats');

         $.ajax({
          processData:false,
          contentType:false,
          data:formData,
          type:"post",
          url:"team_data.php",
          success:function(data)
          {
            var msg  = $.trim(data);

            if(msg == "not")
            {
          $("#bat4_error").html("Not Exist");
         $("#bat4_error").show();
               error= true;
            }
            else
            {
               $("#bat4_error").hide();
               error = false;
            }
          }
      });
        }
          
       });


        //wk
        $("#wk").focusout(function()
       {
        e[10]=1;

        if($("#wk").val().length == 0)

         {
            $("#wk_error").html("field is required");
             $("#wk_error").show();
             error= true;
        }
        else{
                    
           var wk= $("#wk").val();
           var formData = new FormData();
           formData.append('wk',wk);
           formData.append('wkp','wkp');

         $.ajax({
          processData:false,
          contentType:false,
          data:formData,
          type:"post",
          url:"team_data.php",
          success:function(data)
          {
            var msg  = $.trim(data);

            if(msg == "not")
            {
          $("#wk_error").html("Not Exist");
         $("#wk_error").show();
               error= true;
            }
            else
            {
               $("#wk_error").hide();
               error = false;
            }
          }
      });
        }
          
       });

        //all1 
        $("#all1").focusout(function()
       {
        e[11]=1;

        if($("#all1").val().length == 0)

         {
            $("#all1_error").html("field is required");
             $("#all1_error").show();
             error= true;
        }
        else{
                    
           var all = $("#all1").val();
           var formData = new FormData();
           formData.append('all', all);
           formData.append('allr','allr');

         $.ajax({
          processData:false,
          contentType:false,
          data:formData,
          type:"post",
          url:"team_data.php",
          success:function(data)
          {
            var msg  = $.trim(data);

            if(msg == "not")
            {
          $("#all1_error").html("Not Exist");
         $("#all1_error").show();
               error= true;
            }
            else
            {
               $("#all1_error").hide();
               error = false;
            }
          }
      });
        }
          
       });

        //all2
$("#all2").focusout(function()
       {
        e[12]=1;

        if($("#all2").val().length == 0)

         {
            $("#all2_error").html("field is required");
             $("#all2_error").show();
             error= true;
        }
        else{
                    
           var all = $("#all2").val();
           var formData = new FormData();
           formData.append('all', all);
           formData.append('allr','allr');

         $.ajax({
          processData:false,
          contentType:false,
          data:formData,
          type:"post",
          url:"team_data.php",
          success:function(data)
          {
            var msg  = $.trim(data);

            if(msg == "not")
            {
          $("#all2_error").html("Not Exist");
         $("#all2_error").show();
               error= true;
            }
            else
            {
               $("#all2_error").hide();
               error = false;
            }
          }
      });
        }
          
       });


        //all3
        $("#all3").focusout(function()
       {
        e[13]=1;

        if($("#all3").val().length == 0)

         {
            $("#all3_error").html("field is required");
             $("#all3_error").show();
             error= true;
        }
        else{
                    
           var all = $("#all3").val();
           var formData = new FormData();
           formData.append('all', all);
           formData.append('allr','allr');

         $.ajax({
          processData:false,
          contentType:false,
          data:formData,
          type:"post",
          url:"team_data.php",
          success:function(data)
          {
            var msg  = $.trim(data);

            if(msg == "not")
            {
          $("#all3_error").html("Not Exist");
         $("#all3_error").show();
               error= true;
            }
            else
            {
               $("#all3_error").hide();
               error = false;
            }
          }
      });
        }
          
       });

        //8
        $("#bol1").focusout(function()
       {
        e[14]=1;

        if($("#bol1").val().length == 0)

         {
            $("#bol1_error").html("field is required");
             $("#bol1_error").show();
             error= true;
        }
        else{
                    
           var bol= $("#bol1").val();
           var formData = new FormData();
           formData.append('bol',bol);
           formData.append('bolr','bolr');

         $.ajax({
          processData:false,
          contentType:false,
          data:formData,
          type:"post",
          url:"team_data.php",
          success:function(data)
          {
            var msg  = $.trim(data);

            if(msg == "not")
            {
          $("#bol1_error").html("Not Exist");
         $("#bol1_error").show();
               error= true;
            }
            else
            {
               $("#bol1_error").hide();
               error = false;
            }
          }
      });
        }
          
       });

        //9
        $("#bol2").focusout(function()
       {
        e[15]=1;

        if($("#bol2").val().length == 0)

         {
            $("#bol2_error").html("field is required");
             $("#bol2_error").show();
             error= true;
        }
        else{
                    
           var bol= $("#bol2").val();
           var formData = new FormData();
           formData.append('bol',bol);
           formData.append('bolr','bolr');

         $.ajax({
          processData:false,
          contentType:false,
          data:formData,
          type:"post",
          url:"team_data.php",
          success:function(data)
          {
            var msg  = $.trim(data);

            if(msg == "not")
            {
          $("#bol2_error").html("Not Exist");
         $("#bol2_error").show();
               error= true;
            }
            else
            {
               $("#bol2_error").hide();
               error = false;
            }
          }
      });
        }
          
       });

        //10
        $("#bol3").focusout(function()
       {
        e[16]= 1;

        if($("#bol3").val().length == 0)

         {
            $("#bol3_error").html("field is required");
             $("#bol3_error").show();
             error= true;
        }
        else{
                    
           var bol= $("#bol3").val();
           var formData = new FormData();
           formData.append('bol',bol);
           formData.append('bolr','bolr');

         $.ajax({
          processData:false,
          contentType:false,
          data:formData,
          type:"post",
          url:"team_data.php",
          success:function(data)
          {
            var msg  = $.trim(data);

            if(msg == "not")
            {
          $("#bol3_error").html("Not Exist");
         $("#bol3_error").show();
               error= true;
            }
            else
            {
               $("#bol3_error").hide();
               error = false;
            }
          }
      });
        }
          
       });


        $("#cap").focusout(function()
       {
        e[17]=1;

        if($("#cap").val().length == 0)

         {
            $("#cap_error").html("field is required");
             $("#cap_error").show();
             error= true;
        }
        else{
                    
           var cap1= $("#cap").val();
           var formData = new FormData();
           formData.append('cap1',cap1);
           formData.append('cap','cap');

         $.ajax({
          processData:false,
          contentType:false,
          data:formData,
          type:"post",
          url:"team_data.php",
          success:function(data)
          {
            var msg  = $.trim(data);

            if(msg == "not")
            {
              $("#cap_error").html("Not Exist");
              $("#cap_error").show();
                 error= true;
            }
            else
            {
               $("#cap_error").hide();
               error = false;
            }
          }
      });
        }
          
       });

                                  //if($("#pass").val() != $("#rpass").val())
      


        $("#team").click(function(event)
       {
        event.preventDefault();
        

        for(i=1;i<=17;i++){
          if( e[i] == 1)
             j++;
        }
        if(j == 17){
          if(error == false){

        var a1= $("#name").val();
        var a2= $("#email").val();
        var a3= $("#pass").val();
        var b1 = $("#bat1").val();
        var b2 = $("#bat2").val();
        var b3 = $("#bat3").val();
        var b4 = $("#bat4").val();
        var wk = $("#wk").val();
        var all1 = $("#all1").val();
        var all2 = $("#all2").val();
        var all3 = $("#all3").val();
        var b11 = $("#bol1").val();
        var b12 = $("#bol2").val();
        var b13 = $("#bol3").val();
        var tnm = $("#tname").val();
        var cap = $("#cap").val();



     var formdata = new FormData();
     formdata.append('a1', a1);
     formdata.append('a2', a2);
     formdata.append('a3', a3);
     formdata.append('b1', b1);
     formdata.append('b2', b2);
     formdata.append('b3', b3);
     formdata.append('b4', b4);
     formdata.append('b5', wk);
     formdata.append('b6', all1);
     formdata.append('b7', all2);
     formdata.append('b8', all3);
     formdata.append('b9', b11);
     formdata.append('b10', b12);
     formdata.append('b11', b13);
     formdata.append('cap', cap);
     formdata.append('tnm', tnm);
     formdata.append('team', 'team');
     formdata.append('cap', cap);


     $.ajax({

      processData:false,
      contentType: false,
      data: formdata,
      type: "post",
      url : "team_data.php",

      success:function () {

               alert("Reg successFul. Please Login to control your team. ");
               event.preventDefault();
               
             window.location = "login.html";


        
     }

    });
   }
   else
     alert("Unsuccessful. Try again.");

   }
   else
       alert("One or More field is empty");
            
          
       });
          
  });