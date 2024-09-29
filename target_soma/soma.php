<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $indice = 13;
            $soma = 0;
            $k = 0;
            while ($k < $indice) {
                $k = $k + 1;
                $soma = $soma + $k;
            }
            print($soma);
        ?>
    </body>
</html>
