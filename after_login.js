var y = 0;

function team_val()
{
  
    y = 1;
    
}
 
          function edit()
    {

      var formdata = new FormData();
      formdata.append('edit','edit');

        $.ajax({
          processData:false,
          contentType:false,
          data:formdata,
          type:"post",
          url:"login_data.php",

          success:function(data)
          {


            var user = JSON.parse(data);

            $("#tname").val(user.team_name);
            $("#bat1").val(user.bat1);
            $("#bat2").val(user.bat2);
            $("#bat3").val(user.bat3);
            $("#bat4").val(user.bat4);
            $("#wk").val(user.wk);
            $("#all1").val(user.all_rounder1);
            $("#all2").val(user.all_rounder2);
            $("#all3").val(user.all_rounder3);
            $("#bol1").val(user.bol1);
            $("#bol2").val(user.bol2);
            $("#bol3").val(user.bol3);
            $("#cap").val(user.captain);

          
           $("#3f").modal('show');


          }
      });

    }

    function fetch_data()
       {
        var formdata = new FormData();
        formdata.append('show','show');
        

         $.ajax({
          processData:false,
          contentType:false,
          data:formdata,
          type:"post",
          url:"login_data.php",
          success:function(data)
          {
           $("#login_data").html(data);

          }
      });


       }
    


   $(function()
     
   {
    fetch_data();

    var e = [20];
    var f = 0;
    var i=1;
    var j = 0;
    for (;i<20;i++)
      e[i] = 0;


    var error =false;
      //1
       $("#bat1").focusout(function()
       {
        e[1]=1;

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
        e[2]=1;

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
        e[3]=1;

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
        e[4]=1;

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
        e[5]=1;

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
        e[6]=1;

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
        e[7]=1;

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
        e[8]=1;

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
        e[9]=1;

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
        e[10]=1;

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
        e[11]= 1;

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
      


        $("#update").click(function(event)
       {
        
         
        for(i=1;i<=11;i++){
          if( e[i] == 1)
             j++;
        }
        
                if(y == 1) {

          if(j < 2){
          if(error == false){

        var b1 = $("#bat1").val();
        var b2 = $("#bat2").val();
        var b3 = $("#bat3").val();
        var b4 = $("#bat4").val();
        var wk = $("#wk").val();
        var allr1 = $("#all1").val();
        var allr2 = $("#all2").val();
        var allr3 = $("#all3").val();
        var c1 = $("#bol1").val();
        var c2 = $("#bol2").val();
        var c3 = $("#bol3").val();
        var cap = $("#cap").val();

     var formdata = new FormData();
     formdata.append('b1', b1);
     formdata.append('b2', b2);
     formdata.append('b3', b3);
     formdata.append('b4', b4);
     formdata.append('b5', wk);
     formdata.append('b6', allr1);
     formdata.append('b7', allr2);
     formdata.append('b8', allr3);
     formdata.append('b9', c1);
     formdata.append('b10', c2);
     formdata.append('b11', c3);
     formdata.append('b12', cap);  

      formdata.append('up1','up1');


      $.ajax({
          processData:false,
          contentType:false,
          data:formdata,
          type:"post",
          url:"login_data.php",

          success:function(data)
          {

            var msg  = $.trim(data);

            if(msg == "1")
            {
              alert("Your Team is update Successfully.");
              $("#3f").modal('hide');
              fetch_data();
        
            }

            else if (msg == "not")
              alert("           Can not update your team.\n\nবিদেশী প্লেয়ার সংখ্যা ৪ জনের বেশী হয়ে গেছে ।");


            else
              alert("            Can not update your team.\n\nপ্লেয়ার চেন্জ করার সময় শেষ, দুঃখিত ।। ");
            
            
          }
  
      });

    }
    else
      alert("     One or more field is missing.\n\n Read all the rules again carefully & try again");


   }
   else
       alert("              Unsuccessful.\n\nআপনি ১ জনের বেশী প্লেয়ার চেন্জ করেছেন ।");
                      

        }

        else     
          alert("              Unsuccessful.\n\nConfirm Box এ ক্লিক করুন অবশ্যই. ");
           
        
        

        
                      
       });
          
  });