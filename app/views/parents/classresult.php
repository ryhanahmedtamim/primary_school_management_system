<!DOCTYPE html>
<html>
<head>
	<title>Class Result</title>
</head>
<body>
	<?php
		include ('layout/layout.php');
	?>

		<div class="container-fluid">
    <div class="row">



    <div class="col-md-4 col-md-offset-2" style="margin-top:50px;">
    		<h1>
    		Result   

           </h1>
           <hr>
            <div class="panel panel-default" >
                <div class="panel-body">                     
                    <table class=" table-bordered">
                        <thead>
                            <tr>
                                
                                <th>Position</th>
                                <th>Student Id</th>  
                                <th>Name</th>  
                                <th>Marks</th>
                                                               
                            </tr>
                        </thead>                       
                            
                        
                        <tbody> 
                        <?php 
                        	$total = 0;
                        	for($k=0; $k<sizeof($data); $k++)
                        	{

                        	
                        ?> 
                        	<tr>
                        		<td><?php echo ($k+1); 

                        		?></td>

                        		<td><?php echo $data[$k]['s_id']; 
                        		
                        		?></td>
                        		<td><?php echo $data[$k]['f_name']." ",$data[$k]['l_name']; 
                        		
                        		?></td>

                        		<td><?php echo $data[$k]['to_marks']; 
                        		
                        		?>
                        	</td>

                        	</tr>

                        	<?php 
                        	}
                        	?>
                        	                           
                           
                        </tbody>
                            

                        </table>
     	        </div>
            </div>
       
        </div>        
    </div>
</div>

</body>
</html>