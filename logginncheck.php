<?php
session_start();

?>

<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logginncheck Herstadmusikk2017</title>
    <?php include "includes/bootstraptop.inc.php"; ?>
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
   
   <div class="logginnphp">
       
    <?php
    
       // Default name
                $user = 'No firstname in database!';
    
       // Passord sjekk skjer her:
    
                $un = $_POST['username'];
                $p = $_POST['password'];
    
                $granted = false;
    
    
    
       // Oppkobling skjer her
    
            $servername = "localhost"; 
            $username = "root";  // change to "id2140897_root" on herstadmusikk2017.tk / herstadmusikk2017.000webhostapp.com
            $password = "trojaner"; // scramble when I go github
            $database = "herstad2017";  // change to "id2140897_herstad2017" because of 000webhostMySQL

        // Create connection - object-oriented style
            $conn = new mysqli($servername, $username, $password, $database);

        // Check connection - "object oriented"-style
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                } 
    
            // The Query
                
            $sql = "SELECT id,firstname,username,password FROM elever2005";
       
       // Trenger bare firstname, username, password
       // Her må jeg også sørge for at riktig database blir valgt elever2005, elever2006, osv.
    
            $result = mysqli_query($conn, $sql); // procedural style
    
       // echo "MySQLresultatet er av typen: ".gettype($result)."<br>";
    
            var_dump($result);
    
            if(!isset($result)){
                echo '<span class="freefromDOM-00">Nothing in the database!</span>';
            }else{
               echo '<span class="freefromDOM-00">Connected successfully to database!</span>';
            }
    
        // Compare users log in data with database log in data, line by line
    
                if (mysqli_num_rows($result) > 0) {
                
                    // Run through the whole query line by line
                
                while($row = mysqli_fetch_assoc($result)) { 
                // returnerer en assosiativ array ["id" => 1, "firstname" => "xxx", "username" => "xxx", "password" => "xxx"]

         
                    if($row['username'] == $un && $row['password'] == $p){
                        $granted = true;
                        $user = $row['firstname'];
                        $_SESSION['userstored'] = $user;
                        break;
                    }else{
                       
                    }
                }
                
                }else{
                    echo '<div class="freefromDOM-00">No items in database!</div>';
                }
            

            mysqli_close($conn);
    
        
            if(!$granted){
                // Message: Access denied
                echo '<div class="freefromDOM-02"><p>Sorry! Access denied! Check "Username" and "Password"!</p></div>';
            }else{
                // Message: Access granted
                echo '<div class="freefromDOM-02"><p>Hello '.$user.'! Access granted!</p></div>';
            }
    

    ?>    
    </div>
    
   <?php
    
        if(isset($_SESSION['userstored'])){

            $user = $_SESSION['userstored'];
            var_dump($_SESSION);

        }else{

            $user = 'kunnskapshungrige';
        }
    
        include "includes/nav.inc.php";
    
    ?>
    
    <?php include "includes/bootstrapbottom.inc.php"; ?>
    <script src="script/applogginncheck.js"></script>
</body>
</html>
