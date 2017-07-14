<?php
    session_start();

?>
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="/style/style.css">
</head>

<body>
    
    <?php
    
        $user = 'kunnskapshungrige'; // I include-fila brukes $user
    
        include "includes/nav.inc.php";

//                    session_unset();
                    session_destroy();
//                    print_r($_SESSION);
    ?>
    
    <div class="freefromDOM-02">
        <p>
            Du har nå logget ut fra Herstad Musikk 2017!
        </p>
    </div>
    
    <!-- OBS! OBS! Burde dette skriptet være et annet!!!!!!!! -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="/script/appindex.js"></script> 
</body>
</html>
