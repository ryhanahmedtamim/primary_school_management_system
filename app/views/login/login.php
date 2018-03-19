    <!DOCTYPE HTML>

    <html>
        <head>
            <title>Login</title>
            <link href="http://localhost/primary_school_management_system/css/style.css" rel="stylesheet" type="text/css" >
        </head>

        <body class="body-home">

         <ul class="ul1">
           <li class="li1">
           <a class="li-a" href="home">Home</a></li>
           <li class="li1"><a class = "li-a"  href="login">Login</a></li>
           
        </ul>
           <div class="body-home">

                <div > 
                           <?php

                             if($data == "Thisusernameorpasswordisnotmatch" || $data=="YourRequestIsPending")
                              {
                                ?>
                                <div id="snackbar"><?php 
                                if($data == "Thisusernameorpasswordisnotmatch")
                                  {
                                    echo "Username or password does not match";
                                  }
                                  elseif($data == "YourRequestIsPending")
                                    {
                                      echo "You request is pending";
                                      
                                    }?>
                                  
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

                <div style="margin-left: 30px;font-size: 20px;">Login 
                 
                <hr>
                <br>
                <form action ="login/login" method="POST">
                        
                        <div style="display: inline;">
                         <label for="user">Username</label>
                        <input type="email" id="user" name ="email" required autofocus/>

                     
                   
                      
                        </div>

                        <div >
                         <label for="password">Password</label>
                        <input type="password" id="password" name ="password" required autofocus />
                        </div>
                    
                         <button type="submit" class="button-submit  button-radious-8 button-hover-blue">
                                        Login
                                    </button>
                    
                </form>


            </div>
            </div>
        </body>
    </html>
