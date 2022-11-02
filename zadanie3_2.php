<DOCTYPE html>
<html>
    <head>
        <title>iloczyn skalarny</title>
    </head>
    <body>

    <h2>podaj wartosci wektorow</h2>

    <form action="zadanie3_3.php" method="post"></form>

    <?php
        echo "wektor A:";
        $ile = $_POST['ile'];
        for($i=0;$i<$ile;$i++)
        {
            echo "<input name=poleA$i>";
        }

        echo "wektor B:";
        $ile = $_POST['ile'];
        for($i=0;$i<$ile;$i++)
        {
            echo "<input name=poleB$i>";
        }

        echo "<input type=hidden name=ile value=$ile>";
        echo "<input type=submit>";
        echo "</form>";
    ?>
    </body>
</html>