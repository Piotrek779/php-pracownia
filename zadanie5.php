<!DOCTYPE html>
<html>
    <head>
    <title>system plikow</title>
    </head>
    <body>

        <form action="" method="POST">
            <p>Wyraź swoją opinię</p>
            <p>(Maksymalnie 255 znakow)</p>
           <textarea name="opinia" cols="20" rows="10"></textarea>
            <input type="submit" value="wyslij">
            <p>Dotychczasowe opinie:</p>
        </form>
        <?php
    
$fp = fopen("plik.txt", "r");

$stareDane = fread($fp, filesize("plik.txt"));

fclose($fp);

$noweDane  = $_POST["opinia"];
$noweDane .= $stareDane;

$fp = fopen("plik.txt", "w");

fputs($fp, $noweDane);

fclose($fp);

echo $noweDane;
        ?>
    </body>
</html>