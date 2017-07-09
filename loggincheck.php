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
    
    
    
    // Oppkobling skjer her
    
            $servername = "localhost"; 
            $username = "root";  // change to "id21409897_root" on herstadmusikk2017.tk / herstadmusikk2017.000webhostapp.com
            $password = "trojaner"; // scramble when I go github
            $database = "herstad2017";  // change to "id2140897_herstadmusikk2017" because of 000webhostMySQL

            // Create connection
            $conn = new mysqli($servername, $username, $password, $database);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                } 
                echo "Connected successfully<br><br><br>";
    
    
            
    
            $sql = "SELECT id,firstname,username,password,email FROM elever2005";
    
            $result = mysqli_query($conn, $sql);
    
            echo "MySQLresultatet er av typen: ".gettype($result)."<br>";
    
            print_r($result);
    
            if(!isset($result)){
                echo 'Nothing here!<br><br><br>';
            }else{
                echo 'Something here!<br>';
                echo 'Actually, we got '.$result->num_rows.' rows of information.<br><br><br><br>';
            }
    
        
            if (mysqli_num_rows($result) > 0) {
    // output data of each row
                while($row = mysqli_fetch_assoc($result)) { 
                    // returnerer en assosiativ array ["id" => 1, "firstname" => "mahdi", "username" => "mah"]
                    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]." - ";
                    
                    print_r($row)." - ";
                    
                    if($row['username'] == $un && $row['password'] == $p){
                        echo 'You\'re granted access to Herstadmusikk2017. Congrats!<br>';
                        $user = $row['username'];
                        break;
                    }else{
                        echo 'Sorry! Access denied!<br>';
                    }

                    
                    
                }

            } else {
                echo "0 results";
            }
            

            mysqli_close($conn);
    
            // Send back with message or Send inn
    



    ?>    
    
    <p>Hello <?php echo $user; ?>!</p>
    <script src="script/app.js"></script>
</body>
</html>
