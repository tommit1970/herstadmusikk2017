<?php

session_start();
?>

<!DOCTYPE html>
<html lang="no">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Congratulation Herstadmusikk2017</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    
    <header></header>
    
      <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            
<!--            Logo    -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavBar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#" class="navbar-brand">Herstad Musikk</a>
            </div>
            
<!--            Menu items  -->
            <div class="collapse navbar-collapse" id="mainNavBar">
                <ul class="nav navbar-nav">
                    
<!--                    Main DropDown  -->
                    <li class="active dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Trinn <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">2.trinn</a></li>
                            <li><a href="#">4.trinn</a></li>
                            <li><a href="#">7.trinn</a></li>
                            <li><a href="#">10.trinn</a></li>
                        </ul>
                    </li>
                    
<!--                    Other menu items    -->
                    <li><a href="#">Musisere</a></li>
                    <li><a href="#">Komponere</a></li>
                    <li><a href="#">Lytte</a></li>
                    
<!--                   Other DropDown   -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Emner i musikk <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Gitar</a></li>
                            <li><a href="#">Notasjon</a></li>
                            <li><a href="#">Dans</a></li>
                        </ul>
                    </li>
                    
                </ul>
                
<!--                Menu items right-side -->
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
                
            </div>
        </div>
      </nav>
    
    <main>
          <?php
    
            if(isset($_SESSION['userstored'])){
                $user = $_SESSION['userstored'];
            }else{
                $user = 'unknown user';
            }

            echo 'Velkommen til Herstadmusikk2017, '.$user.'!';



            ?>
        <div>Intro spørsmål her</div>
        <div>Video her</div>
        <div>Prøve her</div>
        
    </main>
    
    <footer></footer>
  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="script/appcongrats.js"></script>
</body>
</html>
