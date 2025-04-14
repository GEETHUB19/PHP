<?php

    // Starting session
    session_start();
     
    // Storing Session Variables
    $_SESSION["firstname"] = "Geetika";
    
    
    //Accessing Session Variables
    echo "First name is " . $_SESSION["firstname"] . "<br>";
    echo"<br>This code is executed by Geetika!";
 
?>