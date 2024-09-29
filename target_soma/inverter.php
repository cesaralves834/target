<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Verificar fibonacci</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </head>

    <body data-bs-theme="dark">
        <div class="container">
            <h1 class="text-center">Inverter texto</h1>
            <br>
            <br>
            <?php
                @$txto = $_POST['inputTxt'];

                function convertText($txt) {
                    $tamanho = strlen($txt);
                    $x = $tamanho;
                    $textInvert;

                    while ($x >= 0) {
                        @$textInvert .= @$txt[@$x];
                        @$x--;
                    }
                    echo $textInvert;
                }

//                convertText($txto);
            ?>
            <form class="row g-3" method="POST">
                <div class="mb-3 row">
                    <label for="inputTxt" class="col-sm-3 col-form-label">Digite o texto para ser invertido:</label>
                    <div class="col-sm-6">
                        <textarea class="form-control" id="inputTxt" name="inputTxt"  rows="3"> <?php
                                if (!is_null($txto)) {
                                    echo $txto;
                                }
                            ?></textarea> <br> <br>
                    </div>
                    <button class="btn btn-outline-info">Converter</button>
                </div>
            </form>
            <div class="mb-3 row">
                <label for="inputNum" class="col-sm-3 col-form-label">Texto invertido:</label>
                <div class="col-sm-6">
                    <textarea class="form-control" id="inputTxt" name="inputTxt"  rows="3" readonly=""><?php convertText($txto); ?></textarea>
                    <br> <br>
                </div>
            </div>
        </div>
    </body>
</html>
