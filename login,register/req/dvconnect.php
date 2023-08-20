<?php
    $server="localhost";
    $username="root";
    $password="";
    $database="users";
    $loggedin=false;
    
    $con=mysqli_connect($server,$username,$password,$database);
    if(!$con){
        echo "error";
    }
    
    if(isset($_SESSION['loggedin']) ){
        $loggedin=true;
    }
?>