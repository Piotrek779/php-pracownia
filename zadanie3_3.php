<DOCTYPE html>
<html>
    <head>
        <title>iloczyn skalarny</title>
    </head>
    <body>
    <?php
    $wektorA = [];
    $wektorB = [];
    $suma = 0;
    $ile = $_POST['ile'];

    for($i=0;$i<$ile;$i++)
    {
        array_push($wektorA,$_POST["poleA$i"])
        array_push($wektorB,$_POST["poleB$i"])

        $suma+=$wektorA[$i]*$wektorB[$i];
    }
    
    // wyswietlic wektory i sume
    ?>
    </body>
</html>