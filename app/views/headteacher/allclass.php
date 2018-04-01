<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
</body>
<?php
	include 'layout/layout.php';
?>
<div class="container-fluid">
    <div class="row">



    <div class="col-md-4 col-md-offset-2" style="margin-top:50px;">
    		<?php 
    		$j=0;
    			for($i=1; $i<6; $i++)
    			{
    				//if($data[$i]['sub_id']%1000=)
    				
    				
    			
    		?>
           <h1>
           	<?php 
           	echo "Class ";
           	  echo $i;
           	  $n = 6;
           	  if($i==1 || $i==2)
           	  {
           	  	$n = 3;
           	  }
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
                                <th>Teache Name</th>   
                                                               
                            </tr>
                        </thead>                       
                            
                        
                        <tbody> 
                        <?php 
                        	for($k=0; $k<$n; $j++,$k++)
                        	{

                        	
                        ?> 
                        	<tr>
                        		<td><?php echo $data[$j]['sub_id']; 

                        		?></td>

                        		<td><?php echo $data[$j]['sub_name']; 
                        		
                        		?></td>
                        		<td><?php echo $data[$j]['f_name']." ".$data[$j]['l_name']; 
                        		
                        		?></td>


                        	</tr>

                        	<?php 
                        	}
                        	?>
                            
                           
                        </tbody>
                            

                        </table>
     	        </div>
            </div>
            <?php
        			}
            ?>
        </div>        
    </div>
</div>

</body>
</html>