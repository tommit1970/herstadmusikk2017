<?php

session_start();
?>

<!DOCTYPE html>
<html lang="no">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Congratulation Herstadmusikk2017</title>
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    
    <?php
    
    if(isset($_SESSION['userstored'])){
        $user = $_SESSION['userstored'];
    }else{
        $user = 'unknown user';
    }
        
    
    
    echo 'Velkommen til Herstadmusikk2017,'.$user;
    
    
    
    ?>
    <p class="congrats">You made it! Congratulations!</p>
    
    <script src="script/appcongrats.js"></script>
</body>
</html>
