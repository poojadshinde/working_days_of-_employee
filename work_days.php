
   <?php
   // if(isset($_POST['value1'])){
	   // echo $_POST['value1'];
   // }

   ?>
 <!DOCTYPE html>  
 <html>  
      <head> 
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>  
           <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">  
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:900px;">  
                <h2 align="center">CALCULATE WORKING HRS OF EMPLOYEE</h2>  
                
                <div class="col-md-3">  
                     <input type="text" name="from_date" id="from_date" class="form-control" placeholder="From Date" />  
                </div>  
                <div class="col-md-3">  
                     <input type="text" name="to_date" id="to_date" class="form-control" placeholder="To Date" />  
                </div>  
                <div class="col-md-5">  
                     <input type="button" name="ok" id="ok" value="ok" class="btn btn-info" />  
                </div>  
                <div style="clear:both"></div>                 
                <br />  
				 <h3 align="center">ALL DETAILS</h3><br /> 
				<h3 align="center" id="sunday"></h3> 
				<h3 align="center" id="days"></h3> 
				<h3 align="center" id="hrs"></h3> 
                  
                
           </div>  
      </body>  
 </html> 
<script>  
      $(document).ready(function(){  
           $.datepicker.setDefaults({  
                dateFormat: 'yy-mm-dd'   
           });  
           $(function(){  
                $("#from_date").datepicker();  
                $("#to_date").datepicker();  
           });  
           $('#ok').click(function(){  
               var from_date = $('#from_date').val();  
                var to_date = $('#to_date').val(); 
			
                if(from_date != '' && to_date != '')  
                {  
				
                          

						$.ajax({
						type: "POST",
						url: "date_diff.php",
						data: {from_date:from_date,to_date:to_date},
						datatype:"json",
						success: function(response) {
						
						
						var obj=JSON.parse(response);
						//alert(obj.sunday);
						//$('#response').text('response :' + JSON.stringify(response));

						$('#sunday').html('Total Sundays:'+ obj.sunday);
						
						$('#days').html('Total Days:'+ obj.total_days);
						
						$('#hrs').html('Total Hrs:'+ obj.total_hrs);
						} 
                    });
					}
					  
                else  
                {  
                     alert("Please Select Date");  
                } 
           });  
      });  
 </script>
    
