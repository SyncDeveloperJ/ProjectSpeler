<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "ici";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
        
        if(mysqli_connect_errno())
        {
            die("Database connection failed: ".
            mysqli_connect_error() .
              " (" . mysqli_connect_errno() . ")"
          );
        }
        
       function test_input($data) { 
           $data = trim($data); 
           $data = stripslashes($data); 
           $data = htmlspecialchars($data); 
           return $data; }
             
        
        
        if ($_SERVER["REQUEST_METHOD"]== 'POST'){


               $Gebruikersnaam = test_input($_POST['Gebruikersnaam']) ;
               $Wachtwoord = test_input($_POST['Wachtwoord']);
               $Productnaam = test_input($_POST['Productnaam']) ;
               $Bevindingen = test_input($_POST['Bevindingen']) ;
               $query = "INSERT INTO ici (id, Gebruikersnaam, Wachtwoord, Productnaam, Bevindingen) VALUES (NULL, '$Gebruikersnaam', '$Wachtwoord', '$Productnaam', '$Bevindingen');";
               Echo "succesfully inputed the stuff returning to the index soon" ;

               mysqli_query($connection, $query);
        }
        
        ?>