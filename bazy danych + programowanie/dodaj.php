<form action="" method="post">
    imie <input name="imie"> <br>
    nazwisko <input name="nazwisko"> <br>
    rok urodzenia <input name="rok_ur"> <br>
    miejsce urodzenia <input name="miejsce_ur"> <br>
    <input type="submit" value="dodaj">
</form>

<?php
if(isset($_POST['imie']))
{
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $rok_ur = $_POST['rok_ur'];
    $miejsce_ur = $_POST['miejsce_ur'];  

    if(!$db_lnk = mysqli_connect("localhost","root","","baza")) 
    {
        exit('wystąpił bląd podczas próby polłączenia');
    }
    else 
        {
            echo 'połączenie zostało nawiązane';
        }

    $query = "Insert into osoba(imie, nazwisko, rok_urodzenia, miejsce_urodzenia)
    VALUES('$imie','$nazwisko',$rok_ur,'$miejsce_ur')";

    if(mysqli_query($db_lnk, $query))
    {
        header("location: zadanie6.php");
    }
    else 
    {
        exit("błąd insert");
    }

    if(mysqli_close($db_lnk))
    {
        echo 'połączenie z serwerem zostało zamknięte';
    }
}
?>