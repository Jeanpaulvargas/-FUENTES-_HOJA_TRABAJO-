<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generador de Matriz</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .matriz td {
            width: 40px;
            height: 40px;
            text-align: center;
            vertical-align: middle;
            font-size: 18px;
            font-weight: bold;
            border: 1px solid #000;
        }

        .matriz .primo {
            background-color: #FFD700;
            color: #FFFFFF;
            box-shadow: 2px 2px 5px #888888;
        }
    </style>
</head>

<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <h2 class="text-center">Generador de Matriz</h2>
                <form method="get" action="">
                    <div class="form-group">
                        <label for="filas">Filas:</label>
                        <input type="number" id="filas" name="filas" class="form-control" value="<?php echo isset($_GET['filas']) ? $_GET['filas'] : ''; ?>" min="1">
                    </div>
                    <div class="form-group">
                        <label for="columnas">Columnas:</label>
                        <input type="number" id="columnas" name="columnas" class="form-control" value="<?php echo isset($_GET['columnas']) ? $_GET['columnas'] : ''; ?>" min="1">
                    </div>
                    <input type="submit" class="btn btn-primary" value="Generar Matriz">
                </form>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-12">
                <?php

                function esPrimo($num)
                {
                    if ($num <= 1) {
                        return false;
                    }
                    for ($i = 2; $i <= sqrt($num); $i++) {
                        if ($num % $i == 0) {
                            return false;
                        }
                    }
                    return true;
                }


                function imprimirMatriz($filas, $columnas)
                {
                    $contador = 1;
                    echo "<table class='matriz mx-auto'>";
                    for ($i = 1; $i <= $filas; $i++) {
                        echo "<tr>";
                        for ($j = 1; $j <= $columnas; $j++) {
                            echo "<td class='" . (esPrimo($contador) ? 'primo' : '') . "'>";
                            echo $contador;
                            echo "</td>";
                            $contador++;
                        }
                        echo "</tr>";
                    }
                    echo "</table>";
                }


                $filas = isset($_GET['filas']) ? (int)$_GET['filas'] : 5;
                $columnas = isset($_GET['columnas']) ? (int)$_GET['columnas'] : 5;


                imprimirMatriz($filas, $columnas);
                ?>
            </div>
        </div>
    </div>

</body>

</html>