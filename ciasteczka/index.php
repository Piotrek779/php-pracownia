<?php

$dni = 365;

if(!isset($_COOKIE['nazwa']) && !isset($_POST['nazwa'])) 
{
    include("header.html");
    include("form.html");
    include("footer.html");
}
else if(isset($_POST['nazwa'])) 
{
    setcookie("nazwa", $_POST['nazwa'], time() + 60 * 60 * 24 * $dni);
    include("header.html");
    echo("<p> Dziękujemy za podanie danych. </p>");
    include("footer.html");
}
else 
{
    if(!isset($_COOKIE['hits']))
    {
        $hits=1;
    }
    else
    {
        $hits= intval($_COOKIE['hits']);
        $hits++;
    }

    setCookie("hits","$hits",time()+60*60*24*$dni);

    include("header.html");
    echo("Witamy, zostałeś rozpoznany jako {$_COOKIE['nazwa']}. Odwiedzasz strone {$_COOKIE['hits']} raz.");
    include("footer.html");
    
  //  setcookie("nazwa","",time()-10);
}
?>