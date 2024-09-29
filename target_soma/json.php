<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Verificar fibonacci</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </head>

    <body data-bs-theme="dark">
        <?php
            $arq = file_get_contents('./dados.json');
            $val_json;
            $a = json_decode($arq, true);
            $tamanho = count($a);
            $dias_f = 0;
            $total = 0;
            $maior = 0;
            $maior_d = 0;
            @$menor;
            @$menor_d;
            $diasAcimaMedia = 0;


            foreach ($a as $lista) {
                if ($lista['valor'] == 0) {
                    $dias_f++;
                } else {
                    if ($lista['valor'] > $maior) {
                        $maior_d = $lista['dia'];
                        $maior = $lista['valor'];
                    }
                    if (is_null(@$menor)) {
                        $menor_d = $lista['dia'];
                        $menor = $lista['valor'];
                    } else {
                        if (@$menor > $lista['valor']) {
                            @$menor_d = $lista['dia'];
                            @$menor = $lista['valor'];
                        }
                    }
                    $total += $lista['valor'];
                }
            }
            $media = ($total / ($tamanho - $dias_f));

            foreach ($a as $listas) {
                if ($listas['valor'] >= $media) {
                    $diasAcimaMedia++;
                }
            }


//            echo "o menor valor em venda e: " . $menor . " e o maior e: " . $maior . " e o total e: " . $total;
        ?>
        <h1 class="text-center">Valores extraidos do JSON</h1>
        <br>
        <br>
        <p class="text-center">O dia: <?= $menor_d; ?> teve o menor faturamento com o valor de R$ <?= number_format($menor, 2); ?></p>
        <p class="text-center">O dia: <?= $maior_d; ?> teve o maior faturamento com o valor de R$ <?= number_format($maior, 2); ?></p>
        <p class="text-center">foram: <?php
                echo @$diasAcimaMedia;
                if (@$diasAcimaMedia > 1) {
                    ?> dias <?php } else { ?>dia<?php } ?>  que teve o faturamento maior que a madia no valor de R$ <?= number_format($media, 2); ?></p>
    </body>
</html>
