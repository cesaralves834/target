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
            @$num_informado = $_GET['inputNum'];
            $n1 = 0;
            $n2 = 1;
            $n3 = 1;
            $valida = false;

            for ($x = 0; $x < $num_informado; $x++) {
                if ($x == 0) {
//                    echo '0';
                    if ($num_informado == $n2) {
                        $valida = true;
                    }
                } else {
                    $n3 = $n1 + $n2;
                    $n1 = $n2;
//                    echo '<pre>';
                    $n2 = $n3;
                    if ($num_informado == $n2) {
                        $valida = true;
                    }
//                    echo '</pre>';
                }
            }
            if ($num_informado == 0) {
                $valida = true;
            }
//            var_dump($valida);
        ?>
        <div class="container"><br>
            <h1>Verificar se o numero pertence a sequencia de fibonacci</h1>
            <br>
            <br>
            <br>

            <form class="row g-3">
                <div class="mb-3 row">
                    <label for="inputNum" class="col-sm-3 col-form-label">Informe um numero para verificar:</label>
                    <div class="col-sm-6">
                        <input type="number"  class="form-control" id="inputNum" name="inputNum" min="0" <?php
                            if ($num_informado >= 0) {
                                echo 'value="' . $num_informado . '"';
                            }
                        ?>>
                    </div>
                    <div class="col-sm-2">
                        <button  type="submit" class="btn btn-primary mb-3">Verificar</button>
                    </div>
                </div>
            </form>

            <div class="mb-3"></div>
            <div class="mb-6">
                <?php if ($valida == true) { ?>
                        <div class="alert alert-success" role="alert">
                            O numero: <?= $num_informado; ?> pertence a sequencia de fibonacci!
                        </div>
                    <?php } elseif ($num_informado == '') { ?>

                    <?php } else { ?>
                        <div class="alert alert-danger" role="alert">
                            O numero: <?= $num_informado; ?> não pertence a sequencia de fibonacci!
                        </div>
                        <?php
                    }
                ?>
            </div>
            <div class="mb-3"></div>
        </div>

    </body>
</html>
