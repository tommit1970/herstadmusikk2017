      <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            
<!--            Logo    -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavBar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="index.php" class="navbar-brand">Herstad Musikk 2017</a>
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
                    <li><a href="musherstad2017.php">Musisere</a></li>
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
                    
                    if($user != 'kunnskapshungrige'){
                        // show loggut
                        echo '<li><a href="loggutherstad2017.php"><span class="glyphicon glyphicon-log-out"></span> Loggut</a></li>';
                    }else{
                        // show logginn
                        echo '<li><a href="logginnherstad2017.php">Logginn <span class="glyphicon glyphicon-log-in"></span></a></li>';
                    }
                    
                    
                    ?>
                    
                </ul>
                
            </div>
        </div>
      </nav>