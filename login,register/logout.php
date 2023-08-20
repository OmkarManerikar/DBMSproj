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
        //session_start();
        if(isset($_SESSION['loggedin'])){
            require 'req/dvconnect.php';
            $loggedin=false;
            $_SESSION['loggedin']==false;
            session_destroy();
        }
        
    ?>
    wlecome to logout
</body>
</html>