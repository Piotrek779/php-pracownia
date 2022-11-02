<DOCTYPE html>
<html>
    <head>
        <title>totolotek</title>
    </head>
    <body>

    <form action="" method="post">
        <input type="text" name="l1">
        <input type="text" name="l2">
        <input type="text" name="l3">
        <input type="text" name="l4">
        <input type="text" name="l5">
        <input type="text" name="l6">
        <input type="submit" value="losowanie" name="losowanie">
    </form>

    <?php
        if(isset($_POST['losowanie']))
        {
            $lotto = [];
            $i = 1;
            while($i<=6)
            {
                $los = rand(1,49);
                if(!in_array($los,$lotto))
                {
                    array_push($lotto,$los);
                    $i++;
                }
            }
        
        echo "wylosowane liczby: <br> ";

        foreach($lotto as $liczba)
        {
            echo "<img src=lotto/p$liczba.png width=80 height=80>";
        }
        echo "<br>";
        echo "twoje liczby:";
        echo "<br>";

        $lotto2 = [];
        for($i=1;$i<=6;$i++)
        {
            array_push($lotto2, $_POST["l$i"]);
        }
        foreach($lotto2 as $liczba)
        {
            echo "<img src=lotto/p$liczba.png width=80 height=80>";
        }
        $lotto3 = array_intersect($lotto,$lotto2);

        echo "<br>";
        echo "twoje liczby:";
        echo "<br>";

        foreach($lotto3 as $liczba)
        {
            echo "<img src=lotto/p$liczba.png width=80 height=80>";
        }
    }
    ?>    

    </body>
</html>