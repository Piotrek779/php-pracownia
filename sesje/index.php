<?php

// sesja

session_start();
if(isset($_SESSION['zalogowany']))
{
    header("location:glowna.php");
}
else if(isset($_POST['login']) && isset($_POST['haslo']))
{
    if($_POST['login']=="admin" && $_POST['haslo']=="admin")
    {
        $_SESSION['zalogowany'] = $_POST['login'];
        header("location:glowna.php");
    } 
    else {
        echo "nieprawidlowe dane logowania!!!";
    }
}
?>

<!-- formularz -->
<form action="" method="POST">
podaj login: <input type="text" value="..." name="login"> 
podaj haslo: <input type="text" value="..." name="haslo">
<input type="submit" value="zaloguj się">
</form>