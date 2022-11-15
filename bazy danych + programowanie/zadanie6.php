<style>
table {
    border: 1px solid black;
}

table td {
    border: 1px solid black;
}

table.no-spacing {
    border-spacing: 0;
    border-collapse: collapse;
}
</style>


<?php

if(!$db_lnk = mysqli_connect("localhost","root","","baza")) 
{
    exit('wystąpił bląd podczas próby polłączenia');
}
else 
{
    echo 'połączenie zostało nawiązane';
}

if(isset($_GET['sortId']))
{
    $sortId = $_GET['sortId'];
}
else 
{
    $sortId = 1;
}

$query = "select * from osoba Order By $sortId";

if(!$result = mysqli_query($db_lnk,$query))
{
    mysqli_close($db_lnk);
    echo 'wystąpił błąd lol';
    exit;
}


?>

<table class="no-spacing" cellspacing="0">
    <tr>
        <td><a href="zadanie6.php?sortId=1">Id</a></td>
        <td><a href="zadanie6.php?sortId=2">Imie</a></td>
        <td><a href="zadanie6.php?sortId=3">Nazwisko</a></td>
        <td><a href="zadanie6.php?sortId=4">Rok urodzenia</a></td>
        <td><a href="zadanie6.php?sortId=5">Miejsce urodzenia</a></td>
    </tr>

    <?php

while($row = mysqli_fetch_row($result))
{
echo "<tr>";
echo "<td>$row[0]</td>";
echo "<td>$row[1]</td>";
echo "<td>$row[2]</td>";
echo "<td>$row[3]</td>";
echo "<td>$row[4]</td>";
echo "<td><a href=zadanie6.php?deleteId=$row[0]>usuń</a></td>";
echo "</tr>";
}

if(isset($_GET['deleteId']))
{
    $deleteId = $_GET['deleteId'];
    $query = "delete from osoba where id=$deleteId";
    if(!mysqli_query($db_lnk, $query))
    {
        echo "błąd zapytania delete";
    }
}
// edycja danych + formularz
// if(isset($_GET))


?>
</table>

<a href="dodaj.php">Dodaj nową osobę</a> <br>

<?php
if(mysqli_close($db_lnk))
{
    echo 'połączenie z serwerem zostało zamknięte';
}
?>