<!DOCTYPE html>
<html>
    <head>
    <title>struktura systemu plikow</title>
    </head>
    <body>
        <?php
        $dir = "./ ";
        $arr = scandir("$dir");
        foreach($arr as $file) 
        {
            if($file != ' .' && $file != ' ..')
            {
                echo "$file <br> \n";
            }
        }
        ?>
    </body>
</html>