<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "phples";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
$mysqli = new mysqli("$dbhost", "$dbuser", "$dbpass", "$dbname");
        
        if(mysqli_connect_errno())
        {
            die("Database connection failed: ".
            mysqli_connect_error() .
              " (" . mysqli_connect_errno() . ")"
          );
        }
        
        $query = "SELECT * FROM gebruikers";
        $result = mysqli_query($connection, $query);
        if (!$result) {
            die("Database query failed");
        }
        
        while ($obj = mysqli_fetch_object($result)) 
                {
            echo $obj->username;
        }
        
        mysqli_free_result($result);
        
        mysqli_close($connection);
        
      ?>
