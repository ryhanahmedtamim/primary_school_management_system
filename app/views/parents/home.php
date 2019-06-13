    <!DOCTYPE html>
    <html>
    <head>
    <title>Home</title>
     <link href="http://localhost/primary_school_management_system/css/style.css" rel="stylesheet" type="text/css" >
    
    </head>
    <body class="body-home" >                  
                
         <?php

         include ('layout/layout.php');
         ?>
                    

         <div class="container-fluid">
    <div class="row">



    <div class="col-md-5 col-md-offset-2" style="margin-top:50px;">
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
                                <th>Date Of Birth</th>      
                                <th>Class</th>  
                                <th>Status</th>
                                                               
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
                                <td><?php echo $data[$k]['date_of_birth']; 
                                
                                ?></td>

                                <td><?php echo $data[$k]['class']; 
                                
                                ?></td>

                                

                                

                                <td>
                                    <a class="button-radious-8 button-send  button-hover-blue" href="http://localhost/primary_school_management_system/public/parent/studentDetails/<?php echo $data[$k]['s_id']; ?>">Status</a>
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