$(function()
  {    

    $("#sum").click(function(){



       var formdata = new FormData();
        formdata.append('set','set');
        

         $.ajax({
          processData:false,
          contentType:false,
          data:formdata,
          type:"post",
          url:"points_data.php",
          
          success:function()
          {
            
          }

      });
         alert("Points Calculation Done.");
});
});