   function fetch_data()
       {

        var formdata = new FormData();
        formdata.append('show','show');
        

         $.ajax({
          processData:false,
          contentType:false,
          data:formdata,
          type:"post",
          url:"points_data.php",
          success:function(data)
          {
            $("#dt1").html(data);
           
          }
      });


       }


   $(function()
  {

    fetch_data();

  });