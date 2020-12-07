$(function()
  {    

    $("#pup").click(function(){



       var formdata = new FormData();
        formdata.append('set','set');
        

         $.ajax({
          processData:false,
          contentType:false,
          data:formdata,
          type:"post",
          url:"pup_data.php",
          
          success:function()
          {
            
          }

      });
         alert("Done................");
});
});