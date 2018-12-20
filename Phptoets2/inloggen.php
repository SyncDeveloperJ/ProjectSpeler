<?php
session_start();

$sGebruikerControle = 'admin';
$sWachtwoordControle = 'voorbeeld';

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{   
    if(isset($_POST['user'], $_POST['pass']))
    {
        $sGebruiker = trim($_POST['user']);
        $sWachtwoord = trim($_POST['pass']);
        
        $sWachtwoord = md5($sWachtwoord);
        
        $con = mysqli_connect("localhost", "root", "", "phples");
        
        $sql="SELECT username, password FROM gebruikers WHERE username = '".$sGebruiker."' AND password = '".$sWachtwoord."'";
        
        //connecten en controleren van waarden en weergave
        if($result = mysqli_query($con, $sql)){
        
        $aantal = mysqli_num_rows($result);
        
        mysqli_free_result($result);
        }
        
        if($aantal==1)
        {
            $_SESSION['logged_in'] = true;
            $_SESSION['gebruiker'] =$sGebruiker;
            
            header('Refresh: 3; url=form.php');
            echo 'Je bent succesvol ingelogd. Je wordt doorgestuurd.';
        }
        else
        {
            header('Refresh: 3; url=inlog.php');
            echo 'Deze combinatie van gebruikersnaam en wachtwoord is niet juist!';
        }
    }
    else
    {
        header('Refresh: 3; url=inlog.php');
        echo 'Een vereist veld bestaat niet!';
    }
}
else
{
    header('Location: inlog.php');
    exit();
}

?>
