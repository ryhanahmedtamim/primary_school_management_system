<!DOCTYPE html>
<html>
<head>
	<title>Student Status</title>
</head>
<body>
	<?php
		include 'layout/layout.php';
	?>

	<div class="container-fluid">
    <div class="row">



    <div class="col-md-4 col-md-offset-2" style="margin-top:50px;">
    		<h1>
    		<?php 
    			echo "Name : ".$data[0]['f_name']." ".$data[0]['l_name'];
    			echo "<br>";

    		?>    

           </h1>
           <hr>
            <div class="panel panel-default" >
                <div class="panel-body">                     
                    <table class=" table-bordered">
                        <thead>
                            <tr>
                                
                                <th>Subject Id</th>
                                <th>Subject Name</th>  
                                <th>Term</th>  
                                <th>Year</th>
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
                        		<td><?php echo $data[$k]['sub_id']; 

                        		?></td>

                        		<td><?php echo $data[$k]['sub_name']; 
                        		
                        		?></td>
                        		<td><?php echo $data[$k]['term_id']; 
                        		
                        		?></td>

                        		<td><?php echo $data[$k]['year']; 
                        		
                        		?></td>

                        		<td><?php 
                        		$total+=$data[$k]['marks'];
                        		echo $data[$k]['marks']; 
                        		
                        		?></td>

                        	</tr>

                        	<?php 
                        	}
                        	?>
                        	<tr>
                        		<td></td>
                        		<td></td>
                        		<td></td>
                        		<td>Total Marks</td>
                        		<td>
                        			<?php
                        				echo $total;
                        			?>
                        		</td>
                        	</tr>
                            
                           
                        </tbody>
                            

                        </table>
     	        </div>
            </div>
       
        </div>        
    </div>
</div>

</body>
</html>