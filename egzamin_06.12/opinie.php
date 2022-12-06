<!DOCTYPE html>
<html lang="PL-Pl">
    <head>
    <title>Opinie klientów</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styl3.css">
    </head>
    <body>
        <section class="baner">
            <h1>Hurtownia spożywcza</h1>
        </section>

        <section class="glowny">
            <h2>opinie naszych klientów</h2>
            
            <?php
            $id = mysqli_connect("localhost","root","","egz2");
            $zapytanie = "SELECT imie, zdjecie, opinia FROM klienci, opinie
            WHERE klienci.id = opinie.klienci_id AND (typy_id=2 OR typy_id=3)";
            $wynik = mysqli_query($id,$zapytanie);
            while($row = mysqli_fetch_row($wynik)) 
            {
                echo "<div class = opinia>";
                echo "<img src = $row[1] alt = klient>";
                echo "<q> $row[2] </q>";
                echo "<h4> $row[0] </h4>";
                echo "</div>";
            }
            ?>
        </section>

        <section class="stopka1">
            <h3>współpracują z nami</h3>
            <a href="http://sklep.pl/">Sklep 1</a>
        </section>

        <section class="stopka2">
            <h3>Nasi top klienci</h3>
            <ol>
            <?php
            $zapytanie = "SELECT imie, nazwisko, punkty FROM klienci ORDER BY punkty DESC LIMIT 3";
            $wynik = mysqli_query($id,$zapytanie);
            while($row = mysqli_fetch_row($wynik)) 
            {
               echo "<li>";
               echo "$row[0] $row[1], $row[2]";
               echo "</li>";
            }
            mysqli_close($id);
            ?>
            </ol>
        </section>
        <section class="stopka3">
            <h3>skontaktuj się</h3>
            <p>telefon: 111222333</p>
    </section>
        <section class="stopka4">
            <p>autor: A0000000000</p>
        </section>
    </body>
</html>