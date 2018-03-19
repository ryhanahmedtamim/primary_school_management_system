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
                            ?> 
                            </div>


    </body>
    </html>