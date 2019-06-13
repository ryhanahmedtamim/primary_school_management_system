    <!DOCTYPE HTML>

    <html>
        <head>
            <title>Register</title>
            <link href="http://localhost/primary_school_management_system/css/style.css" rel="stylesheet" type="text/css" >

     <script type="text/javascript">
             

       function validatePassword(){

        var password = document.getElementById("password")
              , confirm_password = document.getElementById("confirm_password");
        var len = 6;
            if(password.value < len)
            {
            password.setCustomValidity("Passwords must be greater than 6");
            }
            if(password.value != confirm_password.value)
            {
              confirm_password.setCustomValidity("Passwords Don't Match");
             } 
             else 
             {
                  confirm_password.setCustomValidity('');
            }
       }

         password.onchange = validatePassword;
        confirm_password.onkeyup = validatePassword;
      </script>
        </head>

        <body class="body-home">

         <?php

         include ('layout/layout.php');
         ?>
            <div class="body-home"> 
                            <div >
                           <?php

                             if($data == "YourRequestIsPending" || $data == "Thisusernameisnotabilable")
                              {
                                ?>
                                <div id="snackbar"><?php
                                if ($data =="YourRequestIsPending") {
                                  echo "Your Request Is Pending";
                                }
                                else
                                {
                                  echo "This username is not abilable";
                                }
                                ?></div>
                                <?php
                               echo '<script>

                                 var x = document.getElementById("snackbar")
                                 x.className = "show";
                                  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
                                 </script>';
                              }
                            ?> 
                            </div>

            <div class="div1">

                <div style="margin-left: 30px; font-size: 20px;">Student info
                </div>
                <hr>
                <br>
                
                <form  action ="http://localhost/primary_school_management_system/public/teacher/registerStudent" method="POST">
                        <div>
                        <label >First Name</label>
                        <input type="text" id="text" name ="firstName" required autofocus/>
                        </div>
                        
                        <div>

                        <label >Last Name</label>
                        <input type="text" id="text" name ="lastName" required autofocus/>
                        </div>
                        <div>
                        <label >Student Id</label>
                        <input type="text" id="text" name ="s_id" required autofocus/>
                        </div>

                        <div>

                        <label >Class</label>
                        <input type="text" id="text" name ="class" required autofocus/>
                        </div>


                         <div> <label >Date Of Birth</label>
                        <input type="date" class ="text" name ="dateOfBirth" required autofocus/></div>

                         <h2>Parents Info</h2>
                        <hr>
                        <div>
                        <label >Name</label>
                        <input type="text" id="text" name ="parentsName" required autofocus/>
                        </div>

                        <div><label >E-mail</label>
                        <input type="email" id="user" name ="email" required autofocus/></div>
                        
                        <div><label >Contact Number</label>
                        <input type="text" id="user" name ="phoneNumber" required autofocus/></div>
                        <h2>Address</h2>
                        <hr>
                        <div><label >Street Or Village</label>
                        <input type="text" id="user" name ="address" required autofocus/></div>
                        
                        <div><label >City</label>
                        <input type="text" id="user" name ="city" required autofocus/></div>

                        <!-- <div><label >User Type</label>
                         <select  name="userType" required autofocus>     
                              <option value=""></option>                      
                              <option value="staff">Staff</option>
                              <option value="client">Client</option>
                              
                        </select></div> -->

                         
                                            
                        <div>
                        <label for="password">Password</label>
                        <input type="password" id="password" name ="password" required autofocus/></div>

                        <div>
                        <label for="password">Confirm Password</label>
                        <input type="password" id="confirm_password" name ="confirm_password" required autofocus />
                        </div>
                         
                        
                   
                    
                         <button type="submit" class="button-register button-radious-8 button-hover-blue" onclick = "validatePassword()" >
                                        Register
                                    </button>
                    
                </form>


            </div>
            </div>
        </body>
    </html>
