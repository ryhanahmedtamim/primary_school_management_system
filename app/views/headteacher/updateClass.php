<!DOCTYPE html>
<html>
<head>
	<title>Update Class</title>
</head>
<body>
	<?php
		include 'layout/layout.php';

		//for ($i=0; $i <sizeof($data) ; $i++) { 
			
		
	?>
		<div class="body-home"> 

            <div class="div1">

                <div>Update Class</div>
                <hr>
                <br>
                <form  action ="http://localhost/primary_school_management_system/public/head/updateClass" method="POST">
                        <div>

                        
                        <input type="hidden" id="text" name="sub_id" value = "<?php print_r($id); ?>" required autofocus/>
                        </div>
                       

                        
                        <div><label >Select Teacher</label>
                        <select  name="t_id" required autofocus>     
                              <option value=""></option>
                              <?php 
                                  foreach ($data as $user) {
                                  	
                                  
                              ?>                      
                              <option value="<?php echo $user['t_id'];  ?>">
                              	<?php echo $user['f_name']." ".$user['l_name']; ?>
                              </option>
                              <?php
                          }
                              ?>
                              
                              
                        </select></div>

                         <button type="submit" class="button-submit button-radious-8 button-hover-blue"  >
                                        Update
                                    </button>
                    
                </form>


            </div>
            </div>




</body>
</html>