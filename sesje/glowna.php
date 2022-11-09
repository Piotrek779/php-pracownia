<?php
session_start();
if(!isset($_SESSION['zalogowany']))
{
    header("location: index.php");
}
else
{
    echo "jesteś zalogowany jako {$_SESSION['zalogowany']}";
}
?>

<a href="logout.php">wyloguj się</a>