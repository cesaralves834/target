<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Percentual de faturamento</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </head>

    <body data-bs-theme="dark">
        <div class="container">
            <h1 class="text-center">PERCENTUAL DE FATURAMENTO DO ESTADO</h1>
            <br>
            <br>
            <?php
                //Formula do calculo  https://canaltech.com.br/educacao/como-calcular-porcentagem-248282/

                $sp = 67836.43;
                $rj = 36678.66;
                $mg = 29229.88;
                $es = 27165.48;
                $ot = 19849.53;

                function calcPerc($valor) {
                    $sp = 67836.43;
                    $rj = 36678.66;
                    $mg = 29229.88;
                    $es = 27165.48;
                    $ot = 19849.53;

                    $total = $sp + $rj + $mg + $es + $ot;

                    echo $res = number_format((($valor / $total) * 100), 2);
                }
            ?>

            <div class="mb-3 row">
                <div class="col-sm-3"></div>
                <label class="col-sm-3 col-form-label">O percentual de SP:</label>
                <div class="col-sm-4">
                    <input type="text"  class="form-control"readonly="" value="<?= calcPerc($sp); ?> %">
                </div>
            </div>
            <div class="mb-3 row">
                <div class="col-sm-3"></div>
                <label class="col-sm-3 col-form-label">O percentual do RJ:</label>
                <div class="col-sm-4">
                    <input type="text"  class="form-control"readonly="" value="<?= calcPerc($rj); ?> %">
                </div>
            </div>
            <div class="mb-3 row">
                <div class="col-sm-3"></div>
                <label class="col-sm-3 col-form-label">O percentual de MG:</label>
                <div class="col-sm-4">
                    <input type="text"  class="form-control"readonly="" value="<?= calcPerc($mg); ?> %">
                </div>
            </div>
            <div class="mb-3 row">
                <div class="col-sm-3"></div>
                <label class="col-sm-3 col-form-label">O percentual de ES:</label>
                <div class="col-sm-4">
                    <input type="text"  class="form-control"readonly="" value="<?= calcPerc($es); ?> %">
                </div>
            </div>
            <div class="mb-3 row">
                <div class="col-sm-3"></div>
                <label class="col-sm-3 col-form-label">O percentual de outros:</label>
                <div class="col-sm-4">
                    <input type="text"  class="form-control" readonly="" value="<?= calcPerc($ot); ?> %">
                </div>
            </div>
        </div>

    </body>
</html>
