<!DOCTYPE html>
<html>
<head>
	<title>Absent Students</title>
</head>
<body>
	<?php
		include 'layout/layout.php';
	?>

	 <div class="div1">

                <div style="margin-left: 30px; font-size: 20px;">
                </div>
                <hr>
                <br>
                
                <form  action ="http://localhost/primary_school_management_system/public/head/absentStudents" method="POST">                       

                		<div> <label >Class</label>
                        <input type="text" class ="text" name ="class" required autofocus/></div>

                         <div> <label >Beginning Date</label>
                        <input type="date" class ="text" name ="date1" required autofocus/></div>

                        <div> <label > End Date</label>
                        <input type="date" class ="text" name ="date2" required autofocus/></div> 

                        
                   
                    
                         <button type="submit" class="button-submit button-radious-8 button-hover-blue" >
                                        Submit
                                    </button>
                    
                </form>


            </div>
            </div>
</body>
</html>