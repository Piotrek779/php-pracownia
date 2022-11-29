<!DOCTYPE html>
<html lang="PL-Pl">
    <head>
    <link rel="stylesheet" href="styl.css">
    <title>lista przyjaciół</title>
    </head>
    <body>
        <div id="baner">
            <h1>Portal społecznościowy - moje konto</h1>
        </div>
        <div id="glowny">
            <h2>moje zainsteresowania</h2>
            <ul>
                <li>muzyka</li>
                <li>film</li>
                <li>komputery</li>
            </ul>
            <h2>Moi znajomi</h2>
            <?php
            $id = mysqli_connect("localhost","root","","dane");
            $zapytanie1 = "SELECT imie, nazwisko, opis, zdjecie FROM osoby WHERE hobby_id = 1 OR hobby_id = 2 OR hobby_id = 6";
            $result = mysqli_query($id, $zapytanie1);
            while ($row = mysqli_fetch_row($result))
            {
                echo "<div class = zdjecie>";
                echo "<img src = zdjecia/$row[3] alt=przyjaciel>";
                echo "</div>";
                echo "<div class = opis>";
                echo "<h3>$row[0] $row[1]</h3>";
                echo "<p>Ostatni wpisz $row[2]</p>";
                echo "</div>";
                echo "<div class = linia>";
                echo "<HR>";
                echo "</div>";
            }
            mysqli_close($id);
            ?>
        </div>
        <div id="stopka_l">
            stronę wykonał Piotr Balcerski
        </div>
        <div id="stopka_p">
            <a href="mailto: ja@portal.pl">napisz do mnie</a>
        </div>
    </body>
</html>