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
                                echo "Successully Marks Submitted"; 
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


                <div class="div1">

                <div style="margin-left: 30px; font-size: 20px;">Mark Assign
                </div>
                <hr>
                <br>
                
                <form  action ="http://localhost/primary_school_management_system/public/head/amark" method="POST">
                		<div>
                        <label >Student Id</label>
                        <input type="text" id="text" name ="s_id" required autofocus/>
                        </div>
                        <div>
                        <label >Subject Id</label>
                        <input type="text" id="text" name ="sub_id" required autofocus/>
                        </div>
                        
                        <div>

                        <label >Term</label>
                        <input type="text" id="text" name ="term_id" required autofocus/>
                        </div>
                        <div>
                        <label >Year</label>
                        <input type="text" id="text" name ="year" required autofocus/>
                        </div>
                        <div>

                        <label >Marks</label>
                        <input type="text" id="text" name ="marks" required autofocus/>
                        </div>                       
                        
                   
                    <div>
                         <button type="submit" class="button-register button-radious-8 button-hover-blue"  >
                                        Submit
                                    </button>
                           </div>
                    
                </form>


            </div>
            </div>


    </body>
    </html>