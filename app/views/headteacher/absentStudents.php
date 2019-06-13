<!DOCTYPE html>
<html>
<head>
	<title>Absent Student</title>
</head>
<body>
<?php
	include 'layout/layout.php';
?>	
	<div class="container-fluid">
    <div class="row">



    <div class="col-md-6 col-md-offset-2" style="margin-top:50px;">
    		<h1>
    		Student Info     

           </h1>
           <hr>
            <div class="panel panel-default" >
                <div class="panel-body">                     
                    <table class=" table-bordered">
                        <thead>
                            <tr>
                                <th>Student Id</th>
                                <th>Student Name</th>
                                <th>Parant Name</th>  
                                <th>Contact No.</th> 
                                <th>E-mail</th>
                                <th>City</th>                                                               
                            </tr>
                        </thead>                       
                            
                        
                        <tbody> 
                        <?php 
                        	for($k=0; $k<sizeof($data); $k++)
                        	{

                        	
                        ?> 
                        	<tr>
                        		<td><?php echo $data[$k]['s_id']; 

                        		?></td>

                        		<td><?php echo $data[$k]['f_name']." ".$data[$k]['l_name']; 
                        		
                        		?></td>
                        		

                        		<td><?php echo $data[$k]['name']; 
                        		
                        		?></td>

                        		<td><?php echo $data[$k]['phone']; 
                        		
                        		?></td>

                        		<td><?php echo $data[$k]['email']; 
                        		
                        		?></td>

                        		<td><?php echo $data[$k]['city']; 
                        		
                        		?></td>

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