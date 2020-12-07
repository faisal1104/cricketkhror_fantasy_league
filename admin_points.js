       function update1()
    {
      var id = $("#175").val();
      var formdata = new FormData();
      formdata.append('id',id);   
      formdata.append('points',$("#points").val());
      formdata.append('up1','up1');


      $.ajax({
          processData:false,
          contentType:false,
          data:formdata,
          type:"post",
          url:"admin_data.php",

          success:function(data)
          {


            fetch_data1();
          
           $("#1f").modal('hide');


          }
      });

    }


       function update2()
    {
      var id = $("#275").val();
      var formdata = new FormData();
      formdata.append('id',id);   
      formdata.append('points',$("#2points").val());
      formdata.append('up2','up2');


      $.ajax({
          processData:false,
          contentType:false,
          data:formdata,
          type:"post",
          url:"admin_data.php",

          success:function(data)
          {


            fetch_data2();
          
           $("#2f").modal('hide');


          }
      });

    }




           function update3()
    {
      var id = $("#375").val();
      var formdata = new FormData();
      formdata.append('id',id);   
      formdata.append('points',$("#3points").val());
      formdata.append('up3','up3');


      $.ajax({
          processData:false,
          contentType:false,
          data:formdata,
          type:"post",
          url:"admin_data.php",

          success:function(data)
          {


            fetch_data3();
          
           $("#3f").modal('hide');


          }
      });

    }






           function update4()
    {
      var id = $("#475").val();
      var formdata = new FormData();
      formdata.append('id',id);   
      formdata.append('points',$("#4points").val());
      formdata.append('up4','up4');


      $.ajax({
          processData:false,
          contentType:false,
          data:formdata,
          type:"post",
          url:"admin_data.php",

          success:function(data)
          {


            fetch_data4();
          
           $("#4f").modal('hide');


          }
      });

    }






















      function edit1(data)
    {

      $("#175").val(data);


      var formdata = new FormData();
      formdata.append('h',data);
      formdata.append('edit1','edit1');

        $.ajax({
          processData:false,
          contentType:false,
          data:formdata,
          type:"post",
          url:"admin_data.php",

          success:function(data)
          {


            var bat1 = JSON.parse(data);

            $("#name").val(bat1.name);
          
           $("#1f").modal('show');


          }
      });

    }

          function edit2(data)
    {

      $("#275").val(data);


      var formdata = new FormData();
      formdata.append('h',data);
      formdata.append('edit2','edit2');

        $.ajax({
          processData:false,
          contentType:false,
          data:formdata,
          type:"post",
          url:"admin_data.php",

          success:function(data)
          {


            var bat1 = JSON.parse(data);

            $("#2name").val(bat1.name);
          
           $("#2f").modal('show');


          }
      });

    }

          function edit3(data)
    {

      $("#375").val(data);


      var formdata = new FormData();
      formdata.append('h',data);
      formdata.append('edit3','edit3');

        $.ajax({
          processData:false,
          contentType:false,
          data:formdata,
          type:"post",
          url:"admin_data.php",

          success:function(data)
          {


            var bat3 = JSON.parse(data);

            $("#3name").val(bat3.name);
          
           $("#3f").modal('show');


          }
      });

    }

          function edit4(data)
    {

      $("#475").val(data);


      var formdata = new FormData();
      formdata.append('h',data);
      formdata.append('edit4','edit4');

        $.ajax({
          processData:false,
          contentType:false,
          data:formdata,
          type:"post",
          url:"admin_data.php",

          success:function(data)
          {


            var bat4 = JSON.parse(data);

            $("#4name").val(bat4.name);
          
           $("#4f").modal('show');


          }
      });

    }

    function fetch_data1()
       {

        var formdata = new FormData();
        formdata.append('show1','show1');
        

         $.ajax({
          processData:false,
          contentType:false,
          data:formdata,
          type:"post",
          url:"admin_data.php",
          success:function(data)
          {
           $("#batp").html(data);

          }
      });


       }

           function fetch_data2()
       {

        var formdata = new FormData();
        formdata.append('show2','show2');
        

         $.ajax({
          processData:false,
          contentType:false,
          data:formdata,
          type:"post",
          url:"admin_data.php",
          success:function(data)
          {
           $("#wkp").html(data);

          }
      });


       }

           function fetch_data3()
       {

        var formdata = new FormData();
        formdata.append('show3','show3');
        

         $.ajax({
          processData:false,
          contentType:false,
          data:formdata,
          type:"post",
          url:"admin_data.php",
          success:function(data)
          {
           $("#allp").html(data);

          }
      });


       }

           function fetch_data4()
       {

        var formdata = new FormData();
        formdata.append('show4','show4');
        

         $.ajax({
          processData:false,
          contentType:false,
          data:formdata,
          type:"post",
          url:"admin_data.php",
          success:function(data)
          {
           $("#bolp").html(data);

          }
      });


       }
    

   $(function()
     
   {
    

    fetch_data1();
    fetch_data2();
    fetch_data3();
    fetch_data4();



       
          
  });
