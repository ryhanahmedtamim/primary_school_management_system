<!DOCTYPE html>
<html>
<head>
	<title>Result</title>
</head>
<body>
	<?php
		include ('layout/layout.php');
	?>

			<div class="body-home"> 

            <div class="div1">

                
                <form  action ="http://localhost/primary_school_management_system/public/teacher/getResult" method="POST">
                        <div><label >Select Class</label>
                        <select  name="class" required autofocus>     
                              <option value=""></option>
                                                   
                              <option value="1">
                              	1
                              </option>
                              <option value="2">
                              	2
                              </option>
                              <option value="3">
                              	2
                              </option>
                              <option value="4">
                              	4
                              </option>
                              <option value="5">
                              	5
                              </option>
                            
                              
                              
                        </select></div>

                         <button type="submit" class="button-submit button-radious-8 button-hover-blue"  >
                                        Get Result
                                    </button>
                    
                </form>


            </div>
            </div>
</body>
</html>