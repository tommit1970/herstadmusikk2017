<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herstadmusikk2017Logginn</title>
    <link rel="stylesheet" href="style/style.css">
</head>

<body>

    <?php
    
                // Default name
                $user = 'no name as Default';
    
               // Passord sjekk skjer her:
    
                $un = $_POST['username'];
                $p = $_POST['password'];
    
                $granted = false;
    
    
    
    // Oppkobling skjer her
    
    // Superhemmelig når jeg går github
    
            $servername = "localhost"; 
            $username = "root";  // change to "id2140897_root" on herstadmusikk2017.tk / herstadmusikk2017.000webhostapp.com
            $password = "trojaner"; // scramble when I go github
            $database = "herstadmusikk2017";  // change to "id2140897_herstadmusikk2017" because of 000webhostMySQL

            // Create connection - object-oriented style
            $conn = new mysqli($servername, $username, $password, $database);

                // Check connection - oo-style
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                } 
    
            // The Query
                
            $sql = "SELECT id,firstname,username,password FROM elever2005";
    
            $result = mysqli_query($conn, $sql); // procedural style
    
//            echo "MySQLresultatet er av typen: ".gettype($result)."<br>";
    
//            print_r($result);
    
            if(!isset($result)){
                echo 'Nothing in the database!<br><br><br>';
            }else{
               echo "Connected successfully to database!<br><br><br>";
//                echo 'Actually, we got '.$result->num_rows.' rows of information.<br><br><br><br>';
            }
    
            // Compare users log in data with database log in data, line by line
    
                if (mysqli_num_rows($result) > 0) {
                
            // Run through the whole query line by line
                
                while($row = mysqli_fetch_assoc($result)) { 
                    // returnerer en assosiativ array ["id" => 1, "firstname" => "mahdi", "username" => "mah"]

//                    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]." - ";

                    
//                    print_r($row)." - ";
                    
                    if($row['username'] == $un && $row['password'] == $p){
                        echo 'You\'re granted access to Herstadmusikk2017. Congrats!<br>';
                        $granted = true;
                        break;
                    }else{
                       
                    }

                    
                    
                }
                
                if(!$granted){
                    echo 'Sorry! Access denied! Check "Username" and "Password"!<br>';
                }

                
                }else{
                    echo "No items in database!";
                }
            

            mysqli_close($conn);
    
        
            if(!$granted){
                // Go back
                echo '<p><a href="index.html">Try again!</a></p>';
            }else{
                // Go on
                echo '<p><a href="congratulation.html">Continue!</a></p>';
            }
    

    ?>    
    
    <p>Hello <?php echo $row["firstname"]; ?>!</p>
    <script src="script/apploggincheck.js"></script>
</body>
</html>
