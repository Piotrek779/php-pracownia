<?php
session_start();
if(!isset($_SESSION['zalogowany']))
{
    header("location: index.php");
}
?>