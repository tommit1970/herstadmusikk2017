<!DOCTYPE html>
<html lang="no">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogginnHerstadmusikk2017</title>
    <?php include "includes/bootstraptop.inc.php";?>
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
   
   <?php
    
        if(isset($_SESSION['userstored'])){

            $user = $_SESSION['userstored'];
            print_r($_SESSION);

        }else{

            $user = 'kunnskapshungrige';
        }
    
    include "includes/nav.inc.php";
    
    ?>
    <div class="mainframe">
        <div class="headers">
            <h1>Herstadmusikk 2017</h1>
            <h2>Innlogging</h2>
        </div>
        <div class="inputfields">
            <form action="logginncheck.php" method="post">
                <p>Oppgi brukernavn:
                </p>
                <input type="text" name="username" autofocus>
                <br>
                <p>Og ditt passord:</p>
                <input type="password" name="password">
                <br><br>
                <input type="submit" value="Logg inn">
            </form>
        </div>
    </div>
    
    <?php include "includes/bootstrapbottom.inc.php"; ?>
    <script src="script/applogginnherstad2017.js"></script>
</body>
</html>
