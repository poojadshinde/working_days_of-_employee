<script>
     $("form").on("submit",function (e){
         var datastring = $(this).serialize();
         $.ajax({
             type:"POST",
             data:datastring,
             url:"php_validation.php",
             success:function(res)
             {
                $(".out").html(res)

             }

         });
         e.preventDefault();

     })

     //

     
     $("form").on("submit", function (e) {
    var dataString = $(this).serialize();
    
    $.ajax({
      type: "POST",
      url: "bin/process.php",
      data: dataString,
      success: function () {
        // Display message back to the user here
      }
    });

    e.preventDefault();
});
 


 </script>