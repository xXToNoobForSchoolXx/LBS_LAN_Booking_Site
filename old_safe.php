<?php
session_start();

$password['Stig'] = '$2y$10$nYF8cvXBFc6iqYXBxIX93OH3PMvfZ931DL0DOqLXR4gdCuQt.0jFi';

if(!empty($_GET['name']))
{
    $username = $_GET['name'];
}
else
{
    $username = "";
    echo "Du fyllde inte i något användarnamn!";
}

if(!empty($_GET['pwd']))
{
    $pwd = $_GET['pwd'];
}
else
{
    $pwd = "";
    echo "Du fyllde inte i något lösenord!";
}

if(!empty($password[$username]))
{
    if(password_verify($pwd, $password[$username]))
    {
        $_SESSION['inloggad'] = true;
        header("location:bokning1.php");//http://lbs.rf.gd/bokning.php
    }
    else
    {
        echo "Fel lösenord!<br>";
        echo '<a href="index.php">Tillbaka</a>';//http://lbs.rf.gd/index.php
    }
}
else
{
    echo "Det finns ingen användare som heter ".$username;
}

?>
