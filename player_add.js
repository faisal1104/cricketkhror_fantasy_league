     $(function()
     
   {

    var error1 = true;
    var error2 = true;
    var error3 = true;
    var error4 = true;
     

       $("#bat").focusout(function()
       {

        if($("#bat").val().length == 0)
             error1 = true;
         else
         	error1 = false;

       });


        $("#bat1").click(function()
       {

       	if(error1 == false){

       	var b1= $("#bat").val();

       	var formdata = new FormData();
       	formdata.append('p1',b1);
        formdata.append('add1','add1');
        

         $.ajax({
          processData:false,
          contentType:false,
          data:formdata,
          type:"post",
          url:"player_add_data.php",
          success:function(data)
          {
           alert(" Success. Player is added.");

          }
      });
     }
     else
     	alert("field Empty");
          
  });


//12

               $("#wk").focusout(function()
       {

        if($("#wk").val().length == 0)
             error2= true;
         else
         	error2 = false;

       });


        $("#wk1").click(function()
       {

       	if(error2 == false){

       	var b2= $("#wk").val();

       	var formdata = new FormData();
       	formdata.append('p2',b2);
        formdata.append('add2','add2');
        

         $.ajax({
          processData:false,
          contentType:false,
          data:formdata,
          type:"post",
          url:"player_add_data.php",
          success:function(data)
          {
           alert(" Success. Player is added.");

          }
      });
     }
     else
     	alert("field Empty");
          
  });

        //1444444444

               $("#allr").focusout(function()
       {

        if($("#allr").val().length == 0)
             error3= true;
         else
         	error3 = false;

       });


        $("#allr1").click(function()
       {

       	if(error3 == false){

       	var b3= $("#allr").val();

       	var formdata = new FormData();
       	formdata.append('p3',b3);
        formdata.append('add3','add3');
        

         $.ajax({
          processData:false,
          contentType:false,
          data:formdata,
          type:"post",
          url:"player_add_data.php",
          success:function(data)
          {
           alert(" Success. Player is added.");

          }
      });
     }
     else
     	alert("field Empty");
          
  });

//1eeeeeeeeeeeeeeeeeeeeee

           $("#bol23").focusout(function()
       {

        if($("#bol23").val().length == 0)
             error4= true;
         else
         	error4 = false;

       });


        $("#bol01").click(function()
       {

       	if(error4 == false){

       	var b4 = $("#bol23").val();

       	var formdata = new FormData();
       	formdata.append('p4',b4);
        formdata.append('add4','add4');
        

         $.ajax({
          processData:false,
          contentType:false,
          data:formdata,
          type:"post",
          url:"player_add_data.php",
          success:function(data)
          {
           alert("Success. Player is added.");

          }
      });
     }

     else
     	alert("field Empty");
          
  });



});