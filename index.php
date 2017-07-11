<?php // PHP 0
    session_start();
?>

<!DOCTYPE html>
<html lang="no">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herstadmusikk2017</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
</head>

<body>

            <?php // PHP 1
    

                if(isset($_SESSION['userstored'])){
                    
                    if($_SESSION['userstored'] == '%Terminate%'){
                        $user = 'unknown user';
//                        echo 'Session Destroyed!'; // Remove this later
                        session_destroy();
                    }else{
                        $user = $_SESSION['userstored'];
                    }
                    
                }else{
                    $user = 'unknown user';
                }

            ?>
    
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
                <a href="#" class="navbar-brand">Herstad Musikk 2017</a>
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
                    <?php // PHP 2
                    
                    if($user != 'unknown user'){
                        // show loggut
                        echo '<li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Loggut</a></li>';
                        
                        $_SESSION['userstored'] = '%Terminate%';
                        
                    }else{
                        // show logginn
                        echo '<li><a href="logginnherstad2017.html"><span class="glyphicon glyphicon-log-in"></span> Logginn</a></li>';
                    }
                    
                    
                    ?>
                    
                </ul>
                
            </div>
        </div>
      </nav>
    
    <main>

            <?php // PHP 3
                echo 'Velkommen til Herstadmusikk2017, '.$user.'!';
            ?>
        
        <!-- Her designer jeg et oppsett for kunnskapsdrypp Video, bilde, tekst, lyd -->
        
        <div class="drypp-container">

                <div class="videodrypp-00">
                    
                    <div class="info">
                        <h3>Overskrift</h3>
                        <p>Innhold</p>
                        <p>Fokuser på dette:</p>
                        <p>Premie for å vise dine kunnskaper!</p>
                        <p>Se filmen!</p>
                    </div>
                    
                    <div class="video">
                        <video width="400" controls>
                              <source src="/videos/video-00.mp4" type="video/mp4">
                                The video is not supported.
                        </video>
                    </div>
                    
                    <div class="test">
                        <p>Oppgave/Spørsmål</p>
                        <img src="images/Screenshot%20(5).png" width="200" height="117">
                        
                        <!-- radiobutton svar rett_galt-->
                        
                        <form class="rett_galt" action="#" method="post">
                                <input type="radio" name="varname" value="alt1" checked> Alt 1<br>
                                <input type="radio" name="varname" value="alt2"> Alt 2<br>
                                <input type="radio" name="varname" value="alt3"> Alt 3<br>


                        
                        <!-- tekst svar utfyllende -->

                            <p>
                                Utfyllende tekst
                            </p>
                                <input type="text" name="text" value="skriv her" style="background-color: hsla(120, 100%, 40%, 1.0);">

                                <br>
                                <br>
                        
                        <!-- rullgardin svar rett_galt -->
                                <p>
                                    Rullegardin
                                </p>
                                    
                                <select name="answers">
                                    <option value="alt">Alt</option>
                                    <option value="alt">Alt</option>
                                    <option value="alt">Alt</option>
                                    <option value="alt">Alt</option>
                                </select>

                                <br>
                                <br>
                            
                        <!-- avkryssningssvar flere alternativer -->
                            
                                <p>
                                    Flervalg
                                </p>
                                  <input type="checkbox" name="vehicle1" value="Bike"> I have a bike<br>
                                  <input type="checkbox" name="vehicle2" value="Car"> I have a car<br>
                                  <input type="checkbox" name="vehicle3" value="Boat" checked> I have a boat<br>
                            
                        <!-- submitt button -->

                                <input type="submit" value="Buttontext" style="background-color: blue";>
                        </form>
                        
                    </div>
                </div>
            
            <!-- Bildedrypp kan ligne på videodrypp -->
                <div class="bildedrypp-00">
                    <img src="images/Screenshot%20(5).png" width="200" height="117">
                </div>

            <!-- Bildedrypp kan ligne på videodrypp -->
                <div class="tekstdrypp-00">
                        <p>
                            Non elit expetendis, proident an lorem arbitror. Amet iis eu labore commodo, 
                            nescius quem aute litteris labore. Varias quamquam de voluptate, ea culpa 
                            aliquip incurreret, mandaremus amet sunt doctrina quae ut ad quis dolor ipsum 
                            voluptate, ad laborum id possumus, anim efflorescere incurreret minim officia 
                            iis id ad exercitation ex id eu elit mentitum. Possumus ita eram non fabulas 
                            consectetur si tempor, id culpa aute malis laboris quo si malis legam id 
                            fabulas, ex aut consectetur e ex nisi non varias iis anim fidelissimae mentitum 
                            fugiat incididunt qui arbitror aut offendit. Iis illum vidisse offendit, admodum 
                            dolore fugiat ad veniam. Quae mentitum consectetur.
                        </p>
                </div>
            
            
        </div>
        
    </main>
    
    <footer></footer>
  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="script/appindex.js"></script>
</body>
</html>
