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



    <div > 
                           <?php

                             if($data == "true" )
                              {
                                ?>
                                <div id="snackbar"><?php
                                echo "Successully Added The Stuedent"; 
                                ?>
                                  
                                </div>
                                <?php
                               echo '<script>

                                 var x = document.getElementById("snackbar")
                                 x.className = "show";
                                  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 6000);
                                 </script>';
                              }
                              else if($data == "true2")
                              {
                                ?>
                                <div id="snackbar"><?php
                                echo "Successully Added The Teacher"; 
                                ?>
                                  
                                </div>
                                <?php
                               echo '<script>

                                 var x = document.getElementById("snackbar")
                                 x.className = "show";
                                  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 6000);
                                 </script>';
                              }
                            ?> 
                            </div>



<div class="container-fluid">
    <div class="row">



    <div class="col-md-5 col-md-offset-2" style="margin-top:50px;">
      <h1>My class :</h1>
        <?php 
        if(sizeof($data2)>0 )
        {
        
          for($i=0; $i<sizeof($data2); $i++)
          {                  
          
        ?>
           
            
              
              <h2>
              <?php
              echo "Subject Id :".$data2[$i]['sub_id'];
              echo "   Subject Name : ".$data2[$i]['sub_name'];                           
             ?>
           </h2>
             <?php 
              }
            }
            ?>
        </div>        
    </div>
</div>


    </body>
    </html>