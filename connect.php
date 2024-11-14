<?php
     $con = new mysqli('localhost','root','','learnphp');

     if(!$con){
        die(mysqli_error($con));
     }
    
?>