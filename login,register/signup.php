<?php
    //INSERT INTO `userlog`(`srno`, `username`, `password`, `time`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]')
    if($_SERVER['REQUEST_METHOD']=="POST"){
        require 'req/dvconnect.php';
        $username=$_POST['username'];
        $password=$_POST['password'];
        echo"success";
        $exists=false;

        if(!$exists){
            $sql="INSERT INTO `users`.`userlog`( `username`, `password`) VALUES ('$username','$password')";
            $result=mysqli_query($con,$sql);
            header("location: login.php");
        }

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <?php
        require 'req/nav.php';
        
    ?>
   
    <div class="container mt-56 ">
        <!-- signup part -->
    <form class="w-full max-w-sm mx-auto px-10 bg-teal-400 rounded-lg" action="/login,register/signup.php" method=post>
    <div class="md:flex md:items-center mb-6 ">
        <div class="md:w-1/3 mt-10 ">
        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
            Username
        </label>
        </div>
        <div class="md:w-2/3 mt-10">
        <input name="username" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text" value="">
        </div>
    </div>
    <div class="md:flex md:items-center mb-6">
        <div class="md:w-1/3">
        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-password">
            Password
        </label>
        </div>
        <div class="md:w-2/3">
        <input name="password" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-password" type="password" placeholder="******************">
        </div>
    </div>
    
    <div class="md:flex md:items-center ">
        <div class="md:w-1/3"></div>
        <div class="md:w-2/3 mb-10">
        <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
            Sign Up
        </button>
        </div>
    </div>
    </form>
    </div>

</body>
</html>