<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		include 'layout/layout.php';
	?>


<div class="container-fluid">
    <div class="row">



    <div class="col-md-5 col-md-offset-2" style="margin-top:50px;">
    		<?php 
    		$j=0;
    			for($i=0; $i<sizeof($data); $i++)
    			{
    				 				
    				
    			
    		?>
           
           	<?php 
           	if($j!=$data[$i]['t_id'])
           	{?>
           		<h1>
           	<?php
           	  echo "Teacher Name: ";
           	  echo $data[$i]['f_name']." ".$data[$i]['l_name']."  ";
           	  
           	 
           	  
           	  ?>

           	  </h1>
           	  <h1>class :</h1>
           	  <h2>
           	  <?php
           	  echo "Subject Id :".$data[$i]['sub_id'];
           	  echo "   Subject Name : ".$data[$i]['sub_name'];
           	  echo "\n";
           	  $j=$data[$i]['t_id'];
           	  ?>
           	</h2>
           	<?php 

           	}
           	else
           	{ ?>
           		<h2>
           	<?php 
           	  echo "Subject Id :".$data[$i]['sub_id'];
           	  echo "   Subject Name : ".$data[$i]['sub_name'];
           	  echo "\n";

           	?>
           	</h2>
           	<?php

           	}

           		
           	  
           	?>
          
           	
           
          
            <?php
        			}
            ?>
        </div>        
    </div>
</div>

</body>
</html>