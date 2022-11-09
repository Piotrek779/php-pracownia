<!DOCTYPE html>
<html>
    <head>
    <title>system plikow</title>
    </head>
    <body>
     <!--       formularz     -->
        <form action="" method="POST">
            <p>Wyraź swoją opinię</p>
            <p>(Maksymalnie 255 znakow)</p>
           <textarea name="opinia" cols="20" rows="10"></textarea>
            <input type="submit" value="wyslij">
            <p>Dotychczasowe opinie:</p>
        </form>
        <?php
    
$plik2 = "plik.txt";

if (!file_exists($plik2)) {
    $f = fopen($plik2, "w");
    fwrite($f,"...");
    fclose($f);
}

$plik2 = fopen("plik.txt", "r");
$stareDane = fread($plik2, filesize("plik.txt"));
fclose($plik2);

$noweDane = date("d-m-Y G:i:s")." ".$_POST['opinia']."\n"."<br>";
$noweDane .= $stareDane;

$fp = fopen("plik.txt", "w");
fputs($fp, $noweDane);
fclose($fp);

echo "<br>" .$noweDane. "<br>";

    //licznik

$plik = "licznik.txt";
    /* 

if (!file_exists($plik)) {
    $f = fopen($plik, "w");
    fwrite($f,"0");
    fclose($f);
}

$f = fopen($plik,"r");
$licznik = fread($f, filesize($plik));
fclose($f);

  $licznik++;
  $f = fopen($plik, "w");
  fwrite($f, $licznik);
  fclose($f); 

*/
  if(!isset($_COOKIE['licznik']))
  {
    $licznik=file_get_contents("licznik.txt");
    $licznik++;
    file_put_contents("licznik.txt",$licznik);
    setcookie("licznik",$licznik);
  }
  else if(isset($_COOKIE['licznik']))
  {
    $licznik=file_get_contents("licznik.txt");
    echo "Jesteś " .$licznik. " odwiedzajacym na tej stronie.";
  }

    ?>
    </body>
</html>
