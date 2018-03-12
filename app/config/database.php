<?php

    function getDatabase($user,$password,$databseName)
    {
      $host = "localhost";
      $connection = mysqli_connect($host,$user,$password,$databseName); 
       if ($connection->connect_error)
        {
          die("Connection failed: " . $connection->connect_error);
        }
        else
        {
          return $connection;
        } 
     } 
 
?>