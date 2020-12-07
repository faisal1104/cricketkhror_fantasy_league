$(function()
  {    

    $("#zero").click(function(){ 

       var formdata = new FormData();
        formdata.append('zero','zero');
        

         $.ajax({
          processData:false,
          contentType:false,
          data:formdata,
          type:"post",
          url:"zero.php",
          
          success:function()
          {
            
          }

      });
         alert("All players are set to Zero \n Successfully.");
});
});